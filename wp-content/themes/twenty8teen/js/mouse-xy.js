/**
 * To make the CSS interactive, set Custom CSS properties for mouse position.
 * The position is relative to the element, and ranges from 0 to 1.
 * @package Twenty8teen
 */
( function() {
	var dummy = document.createElement('_').style;
	dummy.cssText = '--foo: red; background: var(--foo);';
	if (dummy.background) { // Unprefixed support for Custom CSS properties
		var root = document.documentElement;
		var timeout = null;

		var throttle = function (func, milliseconds) {
			return function() {
				if (!timeout) {
					timeout = setTimeout(function() { timeout = null; }, milliseconds);
					func.apply(this, arguments);
				}
			};
		};

		document.addEventListener('mousemove', throttle(function(evt) {
			var target = evt.target || evt.srcElement,
				x, y;
			if (typeof evt.offsetX === 'number') {
				x = (evt.offsetX < 0 ? 0 : evt.offsetX) / target.offsetWidth; // values from 0 to 1.
				y = (evt.offsetY < 0 ? 0 : evt.offsetY) / target.offsetHeight;
			}
			else {
				var rect = target.getBoundingClientRect(),
					comp = getComputedStyle(target),
					offsetX = evt.clientX - rect.left - parseInt(comp['border-left-width']),
					offsetY = evt.clientY - rect.top - parseInt(comp['border-top-width']);
				x = (offsetX < 0 ? 0 : offsetX) / rect.width;  // values from 0 to 1.
				y = (offsetY < 0 ? 0 : offsetY) / rect.height;
			}
			root.style.setProperty('--mouse-x', x);
			root.style.setProperty('--mouse-y', y);
		}, 85) );
	}
} )();
