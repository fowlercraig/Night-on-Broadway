function SmartAjax_load(e,t,n){var r=window.jQuery;if(e.substr(e.length-1,1)!="/")e+="/";if((document.documentMode||100)<9)return false;if(typeof n==="undefined")n=true;if(n&&typeof window.JSON==="undefined")document.write('<script src="'+e+'libs/historyjs/json2.js"></script>');document.write('<script src="'+e+'libs/historyjs/amplify.store.js"></script>');document.write('<script src="'+e+'libs/historyjs/history.adapter.jquery.js"></script>');document.write('<script src="'+e+'libs/historyjs/history.js"></script>');if(n)document.write('<script src="'+e+'libs/historyjs/history.html4.js"></script>');document.write('<script src="'+e+'smartajax.js"></script>');if(typeof t==="function")r(function(){if(window.History.enabled)t()})}