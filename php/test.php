<?php



 $datalist=array();

 
 
$files = glob('../images/*', GLOB_BRACE);

// Loop through the array of files
foreach ($files as $file) {
  // Print the file name
  $imgobj=array("Url"=>$file,"Text"=>$file);


   

  $list["UrL"]=$file;
    
     array_push($datalist,  $imgobj);


}

$json =json_encode($datalist);
echo ( $json ) ;
            
?>