	// Notes 
	// We need to wait until the parallax scripts have been loaded in
	// 
	// See CSS Below for setting a row's height and make sure it's background is transparent
	//
	// Do not use an image that is too big, otherwise
	// you will end up with SCROLL JANKING 
	// http://jankfree.org/
	//
	// It seems to jank no matter what when logged into WordPress (text in an incognito tab)

	document.addEventListener("DOMContentLoaded", function() {
		if (!jQuery().parallax) {
			return alert ('make sure the parallax scripts are enqueued in functions.php! (Not enqueued by default)')
		}
		
		jQuery(".parallax-window").parallax({
			// Options can be found here 
			// https://github.com/pixelcog/parallax.js#options
		});
	})