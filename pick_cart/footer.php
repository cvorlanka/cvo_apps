
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="//api.html5media.info/1.1.8/html5media.min.js"></script>

    <script>
	$(document).ready(function(){ 
		var counter = 2;


	    $("#addButton").click(function () {
	     //alert('test');
	        $( "#last-form-fields" ).append( "<div class='form-group'><label for='orderno" + counter + "'>Order No " + counter + "</label><input type='text' class='form-control' id='orderno" + counter + "' placeholder='scan product now'></div>" );
	          counter++;;
	    });

        (function($, M) {
    // media query for minimum of 1024 pixel device width (iPad is 960 CSS pixels)
    if(M.mq('only all and (min-width: 961px)')) {
        $(function jqueryAutofocus() {
            // automatically focus the search field
            $('#orderno1').focus();
        });
    }
})(window.jQuery, window.Modernizr);

	});
</script>


  </body>
</html>
