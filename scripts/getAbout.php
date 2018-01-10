<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include('connect.php');

$sql = "SELECT about_desc FROM tbl_about";
$query = mysqli_query($link,$sql);

if($query->num_rows){
  $groupResult = "[";
  while($row = mysqli_fetch_assoc($query)){
    $jsonResult =  json_encode($row);
    $groupResult.= $jsonResult.",";
  }
  $groupResult = substr($groupResult,0,-1);
  $groupResult.="]";
  echo $groupResult;

}else{
  echo "[]";
}
mysqli_close($link);

?>
