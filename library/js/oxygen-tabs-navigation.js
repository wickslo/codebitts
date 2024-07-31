jQuery(document).ready( function($) {
	get_active_hash();

	jQuery('.tab-change').click(function(){

		var tabEl = $(this).prop('hash');
		oxy_change_active_tab(tabEl);

	});

	function get_active_hash() {
		if(location.hash){

			var tabHash = $(location.hash);

			oxy_change_active_tab(tabHash);
		}
	}

	function oxy_change_active_tab(el) {

		if(el){
			var tab = jQuery(el);
			var tabClass = null;
			var tabContent = null;
			var tabIndex = null;

			/*Get the appropriate Tab Class*/
			var classList= $(tab).attr('class');
			var classArr = classList.split(/\s+/);

			$.each(classArr, function(index, value){
				if(value.indexOf('tabs') == 0) {

					var tabSplit = value.split('-');
					tabClass = value;
					tabContent  = 'tabs-contents-'+tabSplit[1]+'-tab';
				};
			});

			/*If Tab Class, perform changes*/
			if(tabClass){

				/*Change the active Tab */
				$('.'+tabClass).each(function(index,tabi){

					if($(tabi).attr('id') === $(tab).attr('id')) {
						$(tab).addClass(tabClass+'-active');
						tabIndex = index;
					} else {
						$(tabi).removeClass(tabClass+'-active');
					}

				})

				/*Change the active Tabs Content*/
				$('.'+tabContent).each(function(index,tabs){
					if(index == tabIndex){
						$(tabs).removeClass('oxy-tabs-contents-content-hidden');
					} else {
						$(tabs).addClass('oxy-tabs-contents-content-hidden');
					}
				})
			}

		}
	}

});
