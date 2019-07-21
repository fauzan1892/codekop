
<?php
if(!empty($_GET['file']))
{
 function downloadFile(){
	 $filePath = 'image/'.$_GET['file'];

	 if(file_exists($filePath )) {
			 $fileName = basename($filePath);
			 $fileSize = filesize($filePath);

			 // Output headers.
			 header("Cache-Control: private");
			 header("Content-Type: application/stream");
			 header("Content-Length: ".$fileSize);
			 header("Content-Disposition: attachment; filename=".$fileName);
			 // Output file.
			 readfile ($filePath);
			 exit();
	 }
	 else {
			 die('The provided file path is not valid.');
	 }
 }
 downloadFile();
}

?>
