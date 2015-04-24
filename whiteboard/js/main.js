// onload function
function onLoad(f) {
	'use strict';
    if (onLoad.loaded)                  // If document is already loaded
        window.setTimeout(f, 0);        // Queue f to be run as soon as possible
    else if (window.addEventListener)   // Standard event registration method
        window.addEventListener("load", f, false);
    else if (window.attachEvent)        // IE8 and earlier use this instead
        window.attachEvent("onload", f);
}
// Start by setting a flag that indicates that the document is not loaded yet.
onLoad.loaded = false;
// And register a function to set the flag when the document does load.
onLoad(function() { onLoad.loaded = true; });

// preload images
onLoad (function preloadImages() {
	'use strict';
	if (document.images) {
		for (var i = 0; i < preloadImages.arguments.length; i++) {
			(new Image()).src = preloadImages.arguments[i];
		}
	}
});


// functions to toggle on nav buttons
function toggleHomeBtnOn() {
	'use strict';
	var home_flag = document.getElementById('home_flag');
	home_flag.style.top = '218px';
}

function toggleHomeBtnOff() {
	'use strict';
	var home_flag = document.getElementById('home_flag');
	home_flag.style.top = '183px';
}

function toggleArchivesBtnOn() {
	'use strict';
	var archives_flag = document.getElementById('archives_flag');
	archives_flag.style.top = '218px';
}

function togglePhotosBtnOn() {
	'use strict';
	var photos_flag = document.getElementById('photos_flag');
	photos_flag.style.top = '218px';
}

function toggleContactBtnOn() {
    'use strict';
    var contact_flag = document.getElementById('contact_flag');
    contact_flag.style.top = '218px';
}


// function to check URL
onLoad (function checkURL() {
	'use strict';

	var url = window.location.href,
	index = url.indexOf('http://pellegrinipage.com/'),
	photos = url.indexOf('gallery'),
    contact = url.indexOf('contact'),
    archivesRE = /\/01\/|\/02\/|\/03\/|\/04\/|\/05\/|\/06\/|\/07\/|\/08\/|\/09\/|\/10\/|\/11\/|\/12\/|\/page\//,
    archivesArray = archivesRE.exec(url);

    if (archivesArray === null) {
    	$('#nav_archives').hover(function() {
			$('#archives_flag').animate({ top: "+=35" }, 'fast')
		}, function() {
			$('#archives_flag').animate({ top: "-=35" }, 'fast')
		});
    } else {
    	toggleArchivesBtnOn();
    	index = -1;
    }

	if (photos === -1) {
		$('#nav_photos').hover(function() {
			$('#photos_flag').animate({ top: "+=35" }, 'fast')
		}, function() {
			$('#photos_flag').animate({ top: "-=35" }, 'fast')
		});
	} else {
		togglePhotosBtnOn();
		index = -1;
	}

    if (contact === -1) {
        $('#nav_contact').hover(function() {
            $('#contact_flag').animate({ top: "+=35"}, 'fast')
        }, function() {
           $('#contact_flag').animate({ top: "-=35"}, 'fast')
        });
    } else {
        toggleContactBtnOn();
        index = -1;
    }
	
	if (index === -1) {
		$('#nav_home').hover(function() {
			$('#home_flag').animate({ top: "+=35" }, 'fast')
		}, function() {
			$('#home_flag').animate({ top: "-=35" }, 'fast')
		});
	} else {
		toggleHomeBtnOn();
	}


	$('#nav_login').hover(function() {
		$('#login_flag').animate({ top: "+=35" }, 'fast')
	}, function() {
		$('#login_flag').animate({ top: "-=35" }, 'fast')
	});

});

// spawn archives modal function
$('#nav_archives').click(function() {
	$('body').css({ overflow: "hidden" });
	$('#archives_modal').css({ display: "block" });
	$('#archives_container').css({ display: "block" });
});

$('.mobile_archives_btn').click(function() {
	$('body').css({ overflow: "hidden" });
	$('#archives_modal').css({ display: "block" });
	$('#archives_container').css({ display: "block" });
});

$('#close_archives').click(function() {
	$('body').css({ overflow: "auto" });
	$('#archives_modal').css({ display: "none" });
	$('#archives_container').css({ display: "none" });
});

$('#archives_modal').click(function() {
    $('body').css({ overflow: "auto" });
    $('#archives_modal').css({ display: "none" });
    $('#archives_container').css({ display: "none" });
});

// spawn login modal function
$('#nav_login').click(function() {
    $('body').css({ overflow: "hidden" });
    $('#login_modal').css({ display: "block" });
    $('#login_container').css({ display: "block" });
});

$('.mobile_login_btn').click(function() {
    $('body').css({ overflow: "hidden" });
    $('#login_modal').css({ display: "block" });
    $('#login_container').css({ display: "block" });
});

$('#close_login').click(function() {
    $('body').css({ overflow: "auto" });
    $('#login_modal').css({ display: "none" });
    $('#login_container').css({ display: "none" });
});

$('#login_modal').click(function() {
    $('body').css({ overflow: "auto" });
    $('#login_modal').css({ display: "none" });
    $('#login_container').css({ display: "none" });
});


// remove bottom border from last article on page
$('#main_container article:last-of-type').ready(function() {
	$('#main_container article:last-of-type p.post_bottom').css({border: 'none'});
});


// begin copyright function
onLoad(function copyright() {
	'use strict';
	
	// declare variables
	var date = new Date(),
	year = date.getFullYear(),
	copyright_year = document.getElementById('copyright_year');
	
	if (year == 2011) {
		copyright_year.innerHTML = '2011';	
	} else {
		copyright_year.innerHTML = '2011 - ' + year;
	}
});