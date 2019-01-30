<?php
$filename=$_GET['u'];  
    $title=substr($filename,strrpos($filename,'/')+1);  
    $file  =  fopen($filename, "rb");  
    Header( "Content-type:  application/octet-stream ");  
    Header( "Accept-Ranges:  bytes ");  
    Header( "Content-Disposition:  attachment;  filename= $title");  
    $contents = "";  
    while (!feof($file)) {  
        $contents .= fread($file, 8196);  
    }  
    echo $contents;  
    fclose($file); 
	?>