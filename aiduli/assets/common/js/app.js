requirejs.config({
    //By default load any module IDs from js/lib
    baseUrl: '/',
    paths: {
    	'district' : '../assets/common/js/app/district',
    	'daterangepicker' : '../assets/common/lib/daterangepicker/daterangepicker',
    	css: "../assets/common/lib/css.min",
    	loadcss: "../assets/common/lib/loadcss.min",
		clibboard: "../assets/common/lib/clibboard.min",
		bootstrap: "../assets/common/lib/bootstrap.min",
		loadjs: "../assets/common/lib/loadjs",
	    moment: "../assets/common/lib/moment",
	    datetimepicker: "../assets/common/lib/datetimepicker/jquery.datetimepicker",
    },
    shim:{
    	'district' : {
			exports : '$'
		},
		 bootstrap: {
	            exports: "$"
	     },
		daterangepicker: {
			deps: ["moment", "loadcss!../assets/common/lib/daterangepicker/daterangepicker.css"]
		},
		datetimepicker: {
	            deps: ["loadcss!../../assets/common/lib/datetimepicker/jquery.datetimepicker.css"]
	        },
    }
});
define('jquery', [], function() {
	return jQuery;
});