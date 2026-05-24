<?php

$conn = mysqli_connect(
"localhost",
"zlbdrjve_ZOULINK",
"ZOULINK123",
"zlbdrjve_ZOULINK"
);

if(!$conn){
  die("Database Error");
}

$code =
mysqli_real_escape_string(
$conn,
$_GET['code']
);

$sql =
"SELECT * FROM links
WHERE short_code='$code'";

$result =
mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

  $row =
  mysqli_fetch_assoc($result);

  header(
  "Location: ".$row['long_url']
  );

  exit();

}else{

  echo "404 Link Not Found";
}
?>