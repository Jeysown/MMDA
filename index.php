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
<?php 	$url = $_SERVER['REQUEST_URI'];

	if(strpos($url, '?') == false){
		include 'report-access.php';
	}
	else{
		$arr1 = explode('?',$url);
		$arr2 = explode('=',$arr1[1]);

		if($arr2[1] == 'day'){
			include 'day_report.php';
		}
    else if($arr2[1] == 'all'){
			include 'report-access.php';
		}
		else if($arr2[1] == 'week'){
			include 'week_report.php';
		}
		else if($arr2[1] == 'month'){
			include 'month_report.php';
		}
		else if($arr2[1] == 'year'){
			include 'year_report.php';
		}
	}
?>
  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main" style="padding-right: 0px;padding-left: 0px;">

    <div class="map" id="map" style="margin-bottom:20px;">
    </div>

  </div>

      <div class="container">
        <div class="row">
          <table class="table" id="tab1" >
            <div class="col-sm-12" style="border:3px solid #3F51B5;padding:5px;background-color:#fff;">


            <div class="dropdown col-sm-9" >
        								 <select onchange="changeMap()" id="quake" class="selectpicker" name="quake" style="padding: 10px;width: 180px;margin-left:30px;">
                            <option value="all" id="all">All Reports</option>
        									 <option value="day" id="day">Daily</option>
        									 <option value="week" id="week">Weekly</option>
        									 <option value="month" id="month">Monthly</option>
        								     <option value="year" id="year">Yearly</option>
        								 </select>
        							 </div>
                    <div class="col-sm-3" style="padding-top:3px;">
                      <?php 	$url = $_SERVER['REQUEST_URI'];

                      	if(strpos($url, '?') == false){
                      	echo '<a href="pdf/reports/Reports.php" class="btn btn-primary">Convert All Report to PDF</a>';
                      	}
                      	else{
                      		$arr1 = explode('?',$url);
                      		$arr2 = explode('=',$arr1[1]);

                      		if($arr2[1] == 'day'){
                      	echo '<a href="pdf/reports/Report_daily.php" class="btn btn-primary">Convert Daily Report to PDF</a>';
                      	}
                          else if($arr2[1] == 'all'){
                      		echo '<a href="pdf/reports/Reports.php" class="btn btn-primary">Convert All Report to PDF</a>';
                      }
                      		else if($arr2[1] == 'week'){
                      		echo '<a href="pdf/reports/Report_weekly.php" class="btn btn-primary">Convert Weekly Report to PDF</a>';
                      		}
                      		else if($arr2[1] == 'month'){
                      		echo '<a href="pdf/reports/Report_monthly.php" class="btn btn-primary">Convert Monthly Report to PDF</a>';
                      		}
                      		else if($arr2[1] == 'year'){
                      			echo '<a href="pdf/reports/Report_yearly.php" class="btn btn-primary">Convert Yearly Report to PDF</a>';
                      	}
                      	}
                      ?>
                    </div>
                    </div>
                  <thead>
                      <tr class="filters">
                          <th>Status</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Latitude and Longtitude</th>
                          <th>Message</th>
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


<?php include 'footer.php'; ?>
<script type="text/javascript">

    var All=<?php echo json_encode( $all ) ?>;

 </script>

<script src="assets/js/maps-reports.js" charset="utf-8"></script>
