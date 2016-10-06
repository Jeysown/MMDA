<div class="footer" >
  <footer class="footer1" >
    <div class="footer-text">
  <h1 style="    margin-top: 0px;
    margin-bottom: 0px;">BeAlert</h1>
    <div style="padding-top:10px;padding-bottom:10px;"><a href="index.php" style="color: #fff;"><h3 style="display:inline;">Reports</h3></a><h3 style="display:inline;padding-left:10px;">|</h3>
      <a href="temporary-report.php" style="color: #fff;"><h3 style="display:inline;">Temporary Reports</h3></a><h3 style="display:inline;padding-left:10px;">|</h3>
      <a href="prone-maps.php" style="color: #fff;padding-bottom:10px;"><h3 style="display:inline;padding-left:10px;">Prone Areas</h3></a>
      <br>
      <div style="margin-top:10px;">
      <i class="fa fa fa-phone-square" aria-hidden="true" style="font-size:20px;display:inline;"><h4 style="display:inline;"> &emsp;(632) 927-47-88</h4></i><br>
        <i class="fa fa fa-fax" aria-hidden="true" style="font-size:20px;display:inline;"><h4 style="display:inline;"> &emsp;(632) 920-03-74</h4></i><br>
      </div>
      </div>
  </footer>
    <footer class="footer2" >
      <div class="footer-text">
      <h4>BeAlert: Spreading out for the future</h4>
        <p> Copyright © 2016 Jeysown. All Rights Reserved</p>
        </div>
    </footer>
</div>
</body>
</html>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>

    <!-- checkall -->
    <script type="text/javascript">
    $("#tab1 #checkAll").click(function () {
      if ($("#tab1 #checkAll").is(':checked')) {
          $("#tab1 input[type=checkbox]").each(function () {
              $(this).prop("checked", true);
          });

      }
      else {
          $("#tab1 input[type=checkbox]").each(function () {
              $(this).prop("checked", false);
          });
      }
    });
    </script>
    <script type="text/javascript">
    $("#tab1 #checkone").click(function () {
      if ($("#tab1 #checkone").is(':checked')) {
          $("#tab1 #checkAll").each(function () {
              $(this).prop("checked", false);
          });

      }
      else {
          $("#tab1 #checkAll").each(function () {
              $(this).prop("checked", false);
          });
      }
    });
    </script>
    <!-- check all -->
    <script type="text/javascript">
    function backtotop() {
$("html, body").animate({ scrollTop: 0 }, "slow");

}
    </script>
    <script>
    	function changeMap(){
    		var sourceURL = window.location.href.split("?")[0];
    		sourceURL +='?&param='+document.getElementById("quake").value;
    		 window.location.href= sourceURL;
    	}
    	$( document ).ready(function() {
    	var sourceURL = window.location.href.split("?")[1];
    	var  type= sourceURL.split("=")[1];
    	if(sourceURL == 'undefined'){
    	$('#quake option[value="week"]').attr('selected','selected');
    	}
    	else{
       $('#quake option[value='+type+']').attr('selected','selected');
       }
    });
    </script>
