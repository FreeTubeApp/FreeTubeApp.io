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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/solid.min.css">
  <link rel="stylesheet" href="style/brands.min.css">
  <link rel="stylesheet" href="style/fontawesome.min.css">

  <link rel="shortcut icon" href="images/iconColor.ico" type="image/x-icon" />
  <title>Freetube - The private YouTube client</title>
  <!-- Matomo -->
  <script type="text/javascript">
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
      (function() {
        var u="//analytics.freetubeapp.io/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
  </script>
  <!-- End Matomo Code -->
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
