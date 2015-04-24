<aside class="large-3 columns">
    <?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
    <h5>Recent Posts</h5>
    <ul class="side-nav">
        <?php
            $args = array( 'numberposts' => '5' );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
            }
        ?>
    </ul>

    <?php
    $number=5; // number of recent comments desired
    $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $number");
    if ( $comments ) {
        echo  '<h5>Recent Comments</h5>';
    }
    ?>
    <ul class="side-nav">
        <?php
        if ( $comments ) : foreach ( (array) $comments as $comment) :
            echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_author_link(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
        endforeach; endif;
        ?>
    </ul>
    <?php endif; ?>
</aside>