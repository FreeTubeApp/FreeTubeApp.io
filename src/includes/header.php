<?php
$currentUrl = $_SERVER['PHP_SELF'];

if (strpos($currentUrl, 'index.php') !== false) {
    $contactUrl = '#contact';
    $downloadUrl = '#download';
} else {
    $contactUrl = '/#contact';
    $downloadUrl = '/#download';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/solid.min.css">
  <link rel="stylesheet" href="style/brands.min.css">
  <link rel="stylesheet" href="style/fontawesome.min.css">
  <link rel="shortcut icon" href="images/iconColor.ico" type="image/x-icon" />

  <title>FreeTube - The private YouTube client</title>
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

<body class="bg-gray-200 font-sans">
  <header class="w-full sticky top-0 shadow-2xl bg-primary h-20">
    <div class="mx-auto container items-center flex justify-between px-6">
      <img src='images/iconWhite.png' class='h-12 inline-block'/>
      <ul class='list-none'>
        <a href='/'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fas fa-home'></i>
            <span class='px-2 hidden lg:inline'>Home</span>
          </li>
        </a>
        <a href='<?php echo $downloadUrl; ?>'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-32 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fas fa-download'></i>
            <span class='px-2 hidden lg:inline'>Download</span>
          </li>
        </a>
        <a href="<?php echo $contactUrl; ?>">
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fas fa-comment'></i>
            <span class='px-2 hidden lg:inline'>Contact</span>
          </li>
        </a>
        <a href='/about.php'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fas fa-question'></i>
            <span class='px-2 hidden lg:inline'>About</span>
          </li>
        </a>
        <a href='/privacy.php'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fas fa-user-secret'></i>
            <span class='px-2 hidden lg:inline'>Privacy</span>
          </li>
        </a>
        <a href='http://blog.freetubeapp.io'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fas fa-rss'></i>
            <span class='px-2 hidden lg:inline'>Blog</span>
          </li>
        </a>
        <a href='http://source.freetubeapp.io'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class='fab fa-github'></i>
            <span class='px-2 hidden lg:inline'>Source</span>
          </li>
        </a>
      </ul>
    </div>
  </header><!-- /header -->
