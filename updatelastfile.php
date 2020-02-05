<?php
ini_set('max_exceution_time', 30000);
function scan($loc, $lastdate){
	$files = array();
	$dir = scandir($loc);
	foreach($dir as $d){
		if($d != '.' && $d != '..'){
			if(is_dir($loc.'/'.$d)){
				$files = array_merge($files, scan($loc.'/'.$d, $lastdate));
			}else{
				if(filemtime($loc.'/'.$d) > strtotime($lastdate)){
					$files[] = $loc.'/'.$d;
				}
			}
		}
	}
	return $files;
}
$location='/var/www/html';
$lastdate='2019-02-04';
$storelocation = '/var/www/html/updatedfiles';
@unlink($storelocation);
die();
$afiles = scan($location, $lastdate);
if($afiles){
	foreach($afiles as $f){
		$data = file_get_contents($f);
		$fname = str_replace($location, '', $f);
		$dirname = dirname($storelocation.$fname);
		if(!file_exists($dirname)){
			mkdir($dirname, 0755, true);
		}
		//echo $storelocation.$fname;
		echo $storelocation.$fname;
		if(!file_exists(dirname($storelocation.$fname))){
			mkdir(dirname($storelocation.$fname), 0755, true);
		}
		//die();
		copy($f, $storelocation.$fname);
		
		//die();
	}
}
echo 'done';
echo '<pre>'.print_r(scan($location, $lastdate), 1).'</pre>';
