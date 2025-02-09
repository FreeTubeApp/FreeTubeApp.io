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
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="FreeTube is a feature-rich and user-friendly YouTube client with a focus on privacy.">

  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/solid.min.css">
  <link rel="stylesheet" href="style/brands.min.css">
  <link rel="stylesheet" href="style/fontawesome.min.css">
  <link rel="shortcut icon" href="images/iconColor.ico" type="image/x-icon" />

  <title>FreeTube - The Private YouTube Client</title>
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
  <header class="w-full sticky top-0 shadow-2xl bg-primary h-20 text-gray-200">
    <nav class="mx-auto container items-center flex justify-between px-6">
      <img alt="FreeTube mini logo" role="banner" src='images/iconWhite.png' class='h-12 inline-block'/>
      <ul class='list-none'>
        <a href='/'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-solid fa-house-chimney"></i>
            <span class='px-2 hidden lg:inline'>Home</span>
          </li>
        </a>
        <a href='<?php echo $downloadUrl; ?>'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-32 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-solid fa-download"></i>
            <span class='px-2 hidden lg:inline'>Download</span>
          </li>
        </a>
        <a href='http://blog.freetubeapp.io'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-solid fa-rss"></i>
            <span class='px-2 hidden lg:inline'>Blog</span>
          </li>
        </a>
        <a href='/about.php'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-solid fa-question"></i>
            <span class='px-2 hidden lg:inline'>About</span>
          </li>
        </a>
        <a href='/privacy.php'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-solid fa-user-secret"></i>
            <span class='px-2 hidden lg:inline'>Privacy</span>
          </li>
        </a>
        <a class="sourceLink" href='http://source.freetubeapp.io'>
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-brands fa-github"></i>
            <span class='px-2 hidden lg:inline'>Source</span>
          </li>
        </a>
        <a class="contactLink" href="<?php echo $contactUrl; ?>">
          <li class="inline-block hover:bg-secondary w-12 lg:w-24 h-20 leading-20 text-center transition-all easy-in-out duration-200">
            <i class="fa-solid fa-comment"></i>
            <span class='px-2 hidden lg:inline'>Contact</span>
          </li>
        </a>
      </ul>
    </div>
  </header><!-- /header -->
