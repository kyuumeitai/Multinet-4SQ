/*
 * jQuery serializeObject - v0.2 - 1/20/2010
 * http://benalman.com/projects/jquery-misc-plugins/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($,a){$.fn.serializeObject=function(){var b={};$.each(this.serializeArray(),function(d,e){var f=e.name,c=e.value;b[f]=b[f]===a?c:$.isArray(b[f])?b[f].concat(c):[b[f],c]});return b}})(jQuery);

/*
¿Dudas, consultas?
@kyuumeitai (Twitter)
aacuna@multinet.cl
alex@lunamedia.cl
*/
function m4sq_trace(msg) {
	try { window.console.log(msg) } catch (err) {}
}
 
jQuery(document).ready(function($){
	if($('#m4sq-data').length != 0){
		$.ajax({
			'type': 'POST',
			'url': m4sq_script.uri,
			'dataType': 'json',
			'data': {
				'action' : 'm4sq-getdata'
				},
			'success': function(response){
				if(response.contents.response.venue){
					var avenida = response.contents.response.venue,
					container;
					container = ich.m4sq(avenida);
					$('#m4sq-data').append(container);
				}
			}
		});
	};
});