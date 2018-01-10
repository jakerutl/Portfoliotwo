<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);




include('connect.php');

$sql = "SELECT * FROM tbl_content ORDER BY cat_id asc";
$query = mysqli_query($link,$sql);
if($query->num_rows){
  $groupResult = "{";
  $previousCatId = "1";
  $groupResult .= '"cat_'.$previousCatId.'" : [';
  while($row = mysqli_fetch_assoc($query)){
    if($row['cat_id'] === $previousCatId){
      $jsonResult =  json_encode($row);
      $groupResult.= $jsonResult.",";
    }else{
      $groupResult = substr($groupResult,0,-1);

      $groupResult .= '], "cat_'.$row['cat_id'].'" : [';
      $jsonResult =  json_encode($row);
      $groupResult.= $jsonResult.",";
    }
    $previousCatId = $row['cat_id'];
  }
  $groupResult = substr($groupResult,0,-1);
  $groupResult .= ']';
  $groupResult.="}";
  echo $groupResult;

}else{
  echo "[]";
}

mysqli_close($link);

?>
