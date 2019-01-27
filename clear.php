<?php
$dir="./cache/";  
  $handle=opendir($dir);  
  while(($file=readdir($handle))!="")  { 
  if((strstr($file,'netease_playlist')!="") || (strstr($file,'netease_lyric')!="")) {
  echo $file;
  unlink($dir.$file); 
  }
  }  
  closedir($handle); 
 
?>