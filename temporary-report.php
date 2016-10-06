<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accidents</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  </head>
  <body>
<?php include 'header.php'; ?>
    <?php include 'temporary-access.php'; ?>
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main" style="padding-right: 0px;padding-left: 0px;">

      <div class="map" id="map" style="margin-bottom:20px;">
      </div>

    </div>

      <div class="container">
        <div class="row">
          <table class="table" id="tab1">
                  <thead>
                      <tr class="filters">
                          <th>Status</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Latitude and Longtitude</th>
                          <th>Message</th>
                          <th>Approve</th>
                          <th>Disapprove</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $output='';

                            for ($i=0; $i < count($all) ; $i++) {
                              $output .="<tr>";
                              ?>
                        <?php
                            $output .= "<td>" .$all[$i][0]. "</td>";
                            $output .= "<td>" .$all[$i][1]. "</td>";
                            $output .= "<td>" .$all[$i][2]. "</td>";
                            $output .= "<td> <a href='javascript:map.panTo(new google.maps.LatLng(".$all[$i][3].",".$all[$i][4]."));map.setZoom(16);' onclick='backtotop();'>" .$all[$i][3].", and ".$all[$i][4]. "</td>";
                            $output .= "<td>" .$all[$i][5]. "</td>";
                            $output .= '  <td><input type="button" onclick="myFunction('.$all[$i][6].');" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalApproveReport" style="padding:8px 12px;" value="Approve"  /></td>';
                            $output .= '<td><input type="button" onclick="myFunction('.$all[$i][6].');" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalDisapproveReport" style="padding:8px 12px;" value="Disapprove"/></td>';
                          ?>
                            <?php
                                  $output .= "</tr>";
                        }
                          echo $output;
                        ?>
                  </tbody>
          </table>

        </div>
      </div>


    <!--  Modal Approve-->
    <div id="myModalApproveReport" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">
				<div class="modal-content">
						<div class="modal-header" style="color:#b3cccc";>
              <form class="" action="temporary-approve.php" method="post" id="approve">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Are you sure you want to approve the report?</h4>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="temp_id" id="approve_id">
							 <button type="submit" class="btn btn-primary" onclick="formSubmitApprove();">Yes</button>
							 <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
               </form>
						</div>
				</div>
		</div>
  </div>
<!--  Modal Approve-->
<!--  Modal Disapprove-->
<div id="myModalDisapproveReport" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header" style="color:#b3cccc";>
          <form class="" action="temporary-disapprove.php" method="post" id="disapprove">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Are you sure you want to disapprove the report?</h4>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="temp_id" id="disapprove_id">
           <button type="submit" class="btn btn-primary" onclick="formSubmitDispprove();">Yes</button>
           <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
         </form>
        </div>
    </div>
</div>
</div>
<!--  Modal Disapprove-->
<?php include 'footer.php'; ?>
<script type="text/javascript">

    var All=<?php echo json_encode( $all ) ?>;

 </script>

<script src="assets/js/temporary-report.js" charset="utf-8"></script>
<script type="text/javascript">
    function myFunction(id){
      $("#disapprove_id").val(id);
      $("#approve_id").val(id);
    }
    function formSubmitApprove()
{
     document.getElementById("approve").submit();
}
function formSubmitDisapprove()
{
 document.getElementById("disapprove").submit();
}
 </script>
