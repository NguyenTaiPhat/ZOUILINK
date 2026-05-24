<!-- index.php -->

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
      SYSTEM ONLINE
    </div>

  </div>

  <div class="desc">
    Fast pink cyberpunk URL shortener.
  </div>

  <form action="shorten.php" method="POST">

    <div class="input-group">

      <input
      type="url"
      name="url"
      placeholder="https://example.com/very-long-link"
      required>

    </div>

    <button type="submit">
      Generate Short Link
    </button>

  </form>

  <div class="footer">

    <span>zmatrixtool.x10.mx</span>

    <span>v2.0</span>

  </div>

</div>

</body>
</html>