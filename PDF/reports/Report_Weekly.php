<?php
require_once('tcpdf_include.php');
class MYPDF extends TCPDF {
    public function Footer() {


        $this->SetY(-15);
        $this->SetFont('helvetica', 'N', 9);

        $this->Cell(0, 6, date("Y/m/d H:i:s"), 0, false, 'C', 0, '', 0, false, 'T', 'M');
				$this->SetFont('helvetica', 'I', 9);
				 $this->Cell(0, 5, 'Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kevin');
$pdf->SetTitle('PDF');
$pdf->SetSubject('PDF');
$pdf->SetKeywords('PDF');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//set some language-dependent strings
// ---------------------------------------------------------
// set default font subsetting mode
$pdf->setFontSubsetting(true);
// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 11, '', true);
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
// Set some content to print
$tbl_header = '<table border="1" style="font-size:13px;text-align:center;">  <tr style="font-size:15px;text-align:center;font-weight:bold;">
    <th>Status</th>
    <th>Report Date</th>
		<th>Report time</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Message</th>
		</tr>';
$tbl_footer = '</table>';
$tbl ='';
$con=mysqli_connect("localhost","root","","mmda");
$line='<hr>';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT message,status,report_time,latitude,longitude,report_date FROM report where WEEK(report_date) = WEEK(CURDATE()) AND YEAR(report_date) = YEAR(CURDATE())AND  (report_date>=CURDATE())");
while($row = mysqli_fetch_array($result))
  {
  $status = $row["status"];
  $report_date = $row['report_date'];
	$report_time = $row['report_time'];
	$latitude = $row['latitude'];
	$longitude = $row['longitude'];
	$message = $row['message'];

$tbl .= '<tr><td>'.$status.'</td><td>'.$report_date.'</td><td>'.$report_time.'</td><td>'.$latitude.'</td><td>'.$longitude.'</td><td>'.$message.'</td></tr>';
}
// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('', 'I');
//============================================================+
// END OF FILE
//============================================================+
?>
