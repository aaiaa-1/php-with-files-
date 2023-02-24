<?php

$a = $_POST['id'];



$filetoken = fopen("token.txt","r") or die('Ouverture du fichier token impossible !');
while(!feof($filetoken)){
 $info = fgets($filetoken);
 $array= explode("|",$info);
//  print_r($array);
  
 
  $nameuser = $array[1].".".$array[2];
   





  $file_path = "product/".$nameuser.".txt";

$line_number = $a;

// Read file into an array
$file_array = file($file_path);

for($i = 0 ; $i<count($file_array);$i++){
    $element = $file_array[$i];
     $array = explode('|',$element);
     echo '<pre>';
     
      print_r($array);

     echo'</pre>';


     if($array[0]==$a){
      $line_number=$i;
      echo $i;
      unset($file_array[$line_number]);
      file_put_contents($file_path, implode("", $file_array));
     }
}




// Remove the line at the specified index




// Write the remaining lines back to the file


break;

}

fclose($filetoken);

header("Location: http://localhost/folder/php-main/php/produitPage.php"); 


?>

