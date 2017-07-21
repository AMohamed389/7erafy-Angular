<?php

$url = $_SERVER['REQUEST_URI'];
$str = explode("/",$url);

  $key = $str[4];


//API For tech available proffessions / services

if($str[3]=="bindProfessions")
{
  include ('class/include_dao.php');
  //this will follow the old/traditional query as dao don't support the custom queries

    $connection = new QueryExecutor();
    $connection->openConnection();
    $q =new Connection();

 $sql =
 "Select * from `serv` ";
 mysql_query("set character_set_server='utf8'");
 mysql_query("set names 'utf8'");
  $result = $q->executeQuery($sql);
$response = "";
echo "[";
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  if($response != "")
  {
	$response = $response.','.'{"job_id":"' . $row[0] . '","job_name":"' . $row[5] . '"}';
  }
  else
  {
	$response = '{"job_id":"' . $row[0] . '","job_name":"' . $row[5] . '"}';
  }
  //echo '{"job_id":"' . $row[0] . '","job_name":"' . $row[5] . '"},';
  
// echo json_encode($row,JSON_UNESCAPED_UNICODE );
// print_r($row);
// echo '{"city":"'.$row[3].'"},';
  }
//echo '{"job_id":"","job_name":""}';
echo $response;
echo "]";


}




elseif($str[3]=="bindZone")
{
  include ('class/include_dao.php');
  //this will follow the old/traditional query as dao don't support the custom queries

    $connection = new QueryExecutor();
    $connection->openConnection();
    $q =new Connection();

 $sql =
 "Select a.city_ar_name,a.city_name,a.id as `city_id` ,b.city_id,b.arabic_zone,b.id as `zone_id` from `cities`
 a right join `zones` b
 on a.id = b.city_id  ";
 mysql_query("set character_set_server='utf8'");
 mysql_query("set names 'utf8'");
  $result = $q->executeQuery($sql);

   $response = "";
echo "[";
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  if($response != "")
  {
	$response = $response.','.'{"city_ar_name":"' . $row[0] . '","city_name":"' . $row[1] . '","city_id":"' . $row[2] . '","zone_ar_name":"'.$row[4].'","zone_id":"'.$row[5].'"}';
  }
  else
  {
	$response = '{"city_ar_name":"' . $row[0] . '","city_name":"' . $row[1] . '","city_id":"' . $row[2] . '","zone_ar_name":"'.$row[4].'","zone_id":"'.$row[5].'"}';
  }
  //echo '{"city_ar_name":"' . $row[0] . '","city_name":"' . $row[1] . '","city_id":"' . $row[2] . '","zone_ar_name":"'.$row[4].'","zone_id":"'.$row[5].'"},';
// echo json_encode($row,JSON_UNESCAPED_UNICODE );
// print_r($row);
// echo '{"city":"'.$row[3].'"},';
  }
  echo $response;
//echo '{"city_ar_name":"","city_name":"","city_id":"","zone_ar_name":"","zone_id":""}';
echo "]";


}



//API for cities
// Author: Ahmed Shalaby


if($str[3]=="bindCity")
{
  include ('class/include_dao.php');
  //this will follow the old/traditional query as dao don't support the custom queries

    $connection = new QueryExecutor();
    $connection->openConnection();
    $q =new Connection();



 $sql =
 "
Select distinct (a.city_ar_name),a.city_name,a.id as `city_id`  from cities a ";
 mysql_query("set character_set_server='utf8'");
 mysql_query("set names 'utf8'");
  $result = $q->executeQuery($sql);

 $response = "";
  
echo "[";
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  if($response != "")
  {
	$response = $response.','.'{"city_ar_name":"' . $row[0] . '","city_name":"' . $row[1] . '","city_id":"' . $row[2] . '"}';
  }
  else
  {
	$response = '{"city_ar_name":"' . $row[0] . '","city_name":"' . $row[1] . '","city_id":"' . $row[2] . '"}';
  }
  //echo '{"city_ar_name":"' . $row[0] . '","city_name":"' . $row[1] . '","city_id":"' . $row[2] . '"},';
// echo json_encode($row,JSON_UNESCAPED_UNICODE );
// print_r($row);
// echo '{"city":"'.$row[3].'"},';
  }
  echo $response;
//echo '{"city_ar_name":"","city_name":"","city_id":""}';
echo "]";


}


 ?>
