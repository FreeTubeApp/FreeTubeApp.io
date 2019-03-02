<?php
$currentUrl = $_SERVER['PHP_SELF'];

if (strpos($currentUrl, 'index.php') !== false) {
  $contactUrl = '#contact';
  $downloadUrl = '#download';
}
else {
  $contactUrl = '/#contact';
  $downloadUrl = '/#download';
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/solid.min.css">
  <link rel="stylesheet" href="style/brands.min.css">
  <link rel="stylesheet" href="style/fontawesome.min.css">

  <link rel="shortcut icon" href="images/iconColor.ico" type="image/x-icon" />
  <title>Freetube - The private YouTube client</title>
</head>

<body>
  <div class='header'>
    <img src='images/iconWhite.png' class='headerIcon' />
    <ul class='navigation'>
      <a href='/'><li><i class='fas fa-home'></i><span class='navigationText'>&nbsp;&nbsp;Home</span></li></a>
      <a href='<?php echo $downloadUrl; ?>'><li><i class='fas fa-download'></i><span class='navigationText'>&nbsp;&nbsp;Download</span></li></a>
      <a href="<?php echo $contactUrl; ?>"><li><i class='fas fa-comment'></i><span class='navigationText'>&nbsp;&nbsp;Contact</span></li></a>
      <a href='/about.php'><li><i class='fas fa-question'></i><span class='navigationText'>&nbsp;&nbsp;About</span></li></a>
      <a href='/privacy.php'><li><i class='fas fa-user-secret'></i><span class='navigationText'>&nbsp;&nbsp;Privacy</span></li></a>
      <a href='http://blog.freetubeapp.io'><li><i class='fas fa-rss'></i><span class='navigationText'>&nbsp;&nbsp;Blog</span></li></a>
      <a href='http://source.freetubeapp.io'><li><i class='fab fa-github'></i><span class='navigationText'>&nbsp;&nbsp;Source</span></li></a>
    </ul>
  </div>

  <div class='body'>
    <p class='center'><img src='images/logoType.svg' class='title'/></p>
    <h2 class='center'>The Private YouTube Client</h2>
    <br /><br />
