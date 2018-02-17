<?php>
$people = '{"data":[{"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},{"first_name":"jordon","last_name":"brill","age":85,"email": "jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"},]}';
$json_a=json_decode($string,true);
$email_address_List=implode(',',$json_a['email']);
foreach ($json_a as $key => $value){
  echo  $key . ':' . $value;
}

$array_sort=krsort($json_a['age']);
$array_sort['name']= $array_sort['first_name']+$array_sort['last_name'];
$final_string =json_encode($array_sort);
?>