<?php

$conn = mysqli_connect(
"localhost",
"zlbdrjve_ZOULINK",
"ZOULINK123",
"zlbdrjve_ZOULINK"
);

if($conn){
  echo "DB CONNECTED";
}else{
  echo "FAILED";
}
?>