<?php
$dir   = './img/orig/';
$scannedFiles = scandir($dir);
$files = [];
foreach ($scannedFiles as $file) {
    if (!in_array(trim($file), ['.', '..'])) {					
			$files[] = explode('.', $file, -1);
    }
}
echo json_encode($files);
?>
