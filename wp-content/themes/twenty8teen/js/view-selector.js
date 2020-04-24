/**
 * Toggle the table view, and save the state in session storage.
  * @package Twenty8teen
 */
( function($) {
	function storageAvailable(type) {
    try {
      var storage = window[type],
        x = '__storage_test__';
      storage.setItem(x, x);
      storage.removeItem(x);
      return true;
    }
    catch(e) {
      return false;
    }
	}

	var localSave = storageAvailable('sessionStorage'),
		key = 'twenty8teen-view-selector',
		view = $('main').hasClass('table-view'),
		stored;
	if ( localSave ) {
    stored = sessionStorage.getItem(key);
		if ( stored !== null ) {  // If it has been saved, use it.
			stored = stored !== 'false';
			if( stored !== view ) {
				$('main').toggleClass('table-view');
			}
		}
	}
	$('.view-switch').on('click', function(){
		$('main').toggleClass('table-view');
		if ( localSave ) {
			var state = $('main').hasClass('table-view');
			sessionStorage.setItem(key, state);
			if ( state === view ) {  // Don't save if same as original.
				sessionStorage.removeItem(key);
			}
		}
	});
} )(jQuery);
