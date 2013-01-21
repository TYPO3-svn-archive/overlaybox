/** 
 * Author: Florian Mast <fm@cabag.ch>
 * Date: 17.12.2012
 * belongs to extension overlaybox 
 */

$.noConflict();
jQuery(document).ready(function($)  {

/* check if overlay exists */
	if($('#tx-overlaybox')) {
		
		/* check if overlay should be displayed */
		tx_overlaybox_checkIfShow = function() {
			/* check if cookie is set and don't show it */
			if(jaaulde.utils.cookies.get('tx_overlaybox_dontshow') == 1) {
				return false;
			}
			return true;
		}
		
		/* dont show it again */
		tx_overlaybox_dontShowItAgain = function () {
			jaaulde.utils.cookies.set(
				'tx_overlaybox_dontshow',
				'1',
				{
					/* set expiration date 1 month from now */
					'expiresAt':new Date((new Date().getTime() + (30 * 24 * 60 * 60 * 1000)))
				});
			$('#tx-overlaybox').hide();
		}
		
		/* show it later */ 
		tx_overlaybox_showItLater = function() {
			/* amount of seconds to wait set in html tag tx-overlaybox-showLaterTimeoutInSeconds */
						
			var textValTimeInSeconds = $('#tx-overlaybox-showLaterTimeoutInSeconds').text();
			var myIntTimeInSeconds = 0;
			myIntTimeInSeconds = parseInt(textValTimeInSeconds);
						
			//standart if noTime is set  1800s = 30 min
			var showLaterTimeoutInSeconds = 1800; 

			if (myIntTimeInSeconds > 0 ) {
				showLaterTimeoutInSeconds = myIntTimeInSeconds; 
			}
			
			if (showLaterTimeoutInSeconds > 0 ) {
			
				/* set cookie for a certain time */
				jaaulde.utils.cookies.set(
					'tx_overlaybox_dontshow',
					'1',
					{
						/* set expiration date 1 month from now */
						'expiresAt':new Date((new Date().getTime() + (showLaterTimeoutInSeconds * 1000)))
					});
			}

			$('#tx-overlaybox').hide();
		}
		
		/* show overlay */ 
		if(tx_overlaybox_checkIfShow()) {
			$('#tx-overlaybox').show();
		}
		
		/* assign actions */
		$('#tx-overlaybox-show').click(function(e) {tx_overlaybox_dontShowItAgain(); return true;});
		$('#tx-overlaybox-showlater').click(function(e) {tx_overlaybox_showItLater(); return false;});
		$('#tx-overlaybox .closeBox a').click(function(e) {tx_overlaybox_showItLater(); return false;});
		$('#tx-overlaybox-dontshow').click(function(e) {tx_overlaybox_dontShowItAgain(); return false;});
	}
});
