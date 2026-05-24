<!-- shorten.php -->

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

$url = trim($_POST["url"]);

$code = substr(md5(uniqid()),0,6);

mysqli_query(
$conn,
"INSERT INTO links(long_url,short_code)
VALUES('$url','$code')"
);

$short =
"https://zmatrixtool.x10.mx/ZOULINK/".$code;

?>

<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ZOULINK</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="glow top"></div>
<div class="glow bottom"></div>

<div class="card">

  <div class="top">

    <div class="logo">
      <div class="dot"></div>
      <h1>ZOULINK</h1>
    </div>

    <div class="status">
      LINK READY
    </div>

  </div>

  <div class="desc">
    Your short link has been generated.
  </div>

  <div class="result" id="shortLink">

    <a href="<?php echo $short ?>">
      <?php echo $short ?>
    </a>

  </div>

  <button
  onclick="copyLink()"
  id="copyBtn">

    Copy Link

  </button>

  <div class="footer">

    <span>Pink Cyberpunk UI</span>

    <span>ONLINE</span>

  </div>

</div>

<script src="script.js"></script>

</body>
</html>