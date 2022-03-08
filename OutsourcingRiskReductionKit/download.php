<?php 

	
/*
$name = 'pdf/Business-Card.pdf';
$content = file_get_contents($name);

header('Content-Type: application/pdf');
header('Content-Length: '.strlen( $content ));
header('Content-disposition: inline; filename="' . $name . '"');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');
header('Expires: Sat, 26 Jul 2015 05:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

echo $content;

die;
*/
if(isset($_REQUEST["d"])):
$filename="";
/*switch($_REQUEST["d"])
{
case "346":
$filename = "Business-Card.pdf";
break;
default:
break;
}*/
$filename = $_REQUEST["d"];
$path = "pdf/".$filename;

header('Content-Transfer-Encoding: binary');  // For Gecko browsers mainly
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($path)) . ' GMT');
header('Accept-Ranges: bytes');  // For download resume
header('Content-Length: ' . filesize($path));  // File size
header('Content-Encoding: none');
header('Content-Type: application/pdf');  // Change this mime type if the file is not PDF
header('Content-Disposition: attachment; filename=' . $filename);  // Make the browser display the Save As dialog
readfile($path);
endif;
?>
<script type="text/javascript">
window.close();
</script>