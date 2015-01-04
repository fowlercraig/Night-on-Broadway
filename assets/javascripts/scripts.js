// @codekit-prepend "load.smartajax.js"; 
// @codekit-prepend "../bower_components/velocity/velocity.js"; 
// @codekit-prepend "../bower_components/parallax/deploy/jquery.parallax.js";

SmartAjax_load('/assets/javascripts', function(){

SmartAjax.isDebug = false;
	SmartAjax.setOptions({
		cache: false,
		reload: false,
		containers:[{selector: '#content'}],

		before: function() {
			SmartAjax.proceed();
		},
		success: function() {
			$('#content-wrap').velocity({
			  opacity:0,
			  paddingTop: 10
			},200, SmartAjax.proceed);
		},
		done: function(){
			$('#content-wrap').velocity({
			  opacity: 1,
			  paddingTop: 0
			},100);
			thangs();
			twttr.widgets.load();
			$("html, body").animate({ scrollTop: "0" }, 200);
		}
	});

	SmartAjax.bind('a, a:not([href^="mailto:"])');
	SmartAjax.bindForms('form');
	
}, true);
