<?php
require('includes/header.php');

$url = "https://api.github.com/repos/freetubeapp/freetube/releases";

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$releaseInfo = json_decode(curl_exec($curl));

curl_close($curl);

$currentRelease = $releaseInfo[0]->name;

$fullTagName = $releaseInfo[0]->tag_name;

$versionNumber = str_replace('-beta', '', $fullTagName);
$versionNumber = str_replace('v', '', $versionNumber);

$downloadAppImage = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube.".$versionNumber.".AppImage";
$downloadDebx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube_".$versionNumber."_amd64.deb";
$downloadDebArm = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube_".$versionNumber."_arm64.deb";
$downloadRpmArm = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber.".arm64.rpm";
$downloadRpmx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber.".x86_64.rpm";
$downloadMacZip = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber."-mac.zip";
$downloadWinZip = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber."-win.zip";
$downloadWinExe = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube.Setup.".$versionNumber.".exe";
$downloadLinuxTarx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber."-linux.tar.xz";
$downloadLinuxZipx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber."-linux.zip";
$downloadLinuxZipArm = "https://github.com/FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber."-linux-arm64.zip";
$downloadLinuxTarArm = "https://github.com//FreeTubeApp/FreeTube/releases/download/".$fullTagName."/FreeTube-".$versionNumber."-linux-arm64.tar.xz";
?>
    <p class='center'><img src='images/FreeTube1.png' class='bannerImage' /></p>
    <br /><br />
    <div class='card'>
      <h1 class='center'>What is FreeTube?</h1>
      <br />
      <p class='textBlurb'>FreeTube is a YouTube client for Windows, Mac, and Linux built around using YouTube more privately.  You can enjoy your favorite content and creators without your habits being tracked.  All of your user data is stored locally and never sent or published to the internet.  Being powered by the Invidious API, FreeTube has become one of the best methods to watch YouTube privately on desktop.</p>
    </div>
    <br /><br />
    <p class='center'><img src='images/FreeTube2.png' class='bannerImage' /></p>
    <br /><br />
    <div class='card'>
      <h1 class='center'>Current Features</h1>
      <br /><br />
      <div class='features'>
        <div class='feature'>
          <i class='fas fa-users'></i>
          <h3>Subscriptions</h3>
          <p>Subscribe to channels without an account</p>
        </div>
        <div class='feature'>
          <i class='fas fa-database'></i>
          <h3>Local Data</h3>
          <p>All Subscirptions, History and Favorites are stored locally</p>
        </div>
        <div class='feature'>
          <i class='fas fa-ban'></i>
          <h3>No Ads</h3>
          <p>Enjoy an ad free experience as you watch</p>
        </div>
        <div class='feature'>
          <i class='fas fa-user-secret'></i>
          <h3>Private</h3>
          <p>Your viewing habits are not tracked by us or YouTube</p>
        </div>
        <div class='feature'>
          <i class='fas fa-paint-brush'></i>
          <h3>Familiar Design</h3>
          <p>A design similar to YouTube makes it easy to transition to FreeTube</p>
        </div>
        <div class='feature'>
          <i class='fab fa-osi'></i>
          <h3>Open Source</h3>
          <p>FreeTube is Free and Open Source Software under the GPLv3</p>
        </div>
        <div class='feature'>
          <i class='fas fa-file-import'></i>
          <h3>Import Subscriptions</h3>
          <p>Import your subscriptions from YouTube to see your feed instantly</p>
        </div>
        <div class='feature'>
          <i class='fas fa-desktop'></i>
          <h3>Multi Platform</h3>
          <p>Runs on Windows, Mac, and several Linux distributions</p>
        </div>
        <p class='center'>...and many more to come!</p>
      </div>
    </div>
    <br /><br />
    <p class='center'><img src='images/FreeTube4.png' class='bannerImage' /></p>
    <a name='download'></a>
    <br /><br />
    <div class='card'>
      <h1 class='center'>Download FreeTube</h1>
      <h3 class='center'>Current: <?php echo $currentRelease ?> </h3>
      <br />
      <p class='textBlurb center'><?php echo $fullTagName; echo $versionNumber; ?>FreeTube is free to download thanks to its open source nature.</p>
      <br /><br />
      <div class='features'>
        <div class='feature download'>
          <i class='fab fa-windows'></i>
          <h3>Download for Windows x64</h3>
          <br />
          <a href='<?php echo $downloadWinExe; ?>'><div class='smallButton'>.exe</div></a>
          <a href='<?php echo $downloadWinZip; ?>'><div class='smallButton'>.zip</div></a>
        </div>
        <div class='feature download'>
          <i class='fab fa-apple'></i>
          <h3>Download for Mac OS<br />x64</h3>
          <br />
          <a href='<?php echo $downloadMacZip; ?>'><div class='largeButton'>.zip</div></a>
        </div>
        <div class='feature download'>
          <i class='fab fa-ubuntu'></i>
          <h3>Download for Ubuntu / Debian x64</h3>
          <br />
          <a href='<?php echo $downloadDebx86; ?>'><div class='smallButton'>.deb (x86)</div></a>
          <a href='<?php echo $downloadDebArm; ?>'><div class='smallButton'>.deb (arm)</div></a>
        </div>
        <div class='feature download'>
          <i class='fab fa-fedora'></i>
          <h3>Download for Fedora / Red Hat x64</h3>
          <br />
          <a href='<?php echo $downloadRpmx86; ?>'><div class='smallButton'>.rpm (x86)</div></a>
          <a href='<?php echo $downloadRpmArm; ?>'><div class='smallButton'>.rpm (arm)</div></a>
        </div>
        <div class='feature'>
          <i class='fab fa-linux'></i>
          <h3>Download for Other Linux Distributions</h3>
          <br />
          <a href='<?php echo $downloadLinuxZipx86; ?>'><div class='smallButton'>.zip (x86)</div></a>
          <a href='<?php echo $downloadLinuxZipArm; ?>'><div class='smallButton'>.zip (arm)</div></a>
          <br /><br />
          <a href='<?php echo $downloadLinuxTarx86; ?>'><div class='smallButton'>.tar (x86)</div></a>
          <a href='<?php echo $downloadLinuxTarArm; ?>'><div class='smallButton'>.tar (arm)</div></a>
          <br /><br />
          <a href='<?php echo $downloadAppImage; ?>'><div class='largeButton'>.appimage (x86)</div></a>
          <br /><br />
          <a href='https://flathub.org/apps/details/io.freetubeapp.FreeTube'><div class='largeButton'>Flathub</div></a>
          <br /><br />
          <a href='https://aur.archlinux.org/packages/freetube-bin/'><div class='largeButton'>Arch User Repository</div></a>
        </div>
      </div>
      <br /><br />
      <p class='center'>Users are also welcome to download from <a href='http://source.freetubeapp.io'>source</a> for all platforms</p>
    </div>
    <br /><br />
    <div class='card'>
      <a name='contact'></a>
      <h1 class='center'>Contact Information</h1>
      <br />
      <p class='textBlurb center'>Have an issue or suggestion?  Please make a thread on our <a href='https://github.com/FreeTubeApp/FreeTube/issues'>GitHub</a> page so we can track it.  You can also ask using one of these methods:</p>
      <br />
      <a href='mailto:freetubeapp@protonmail.com'><p class='textBlurb center'><i class='fas fa-envelope'></i>&nbsp;&nbsp;FreeTubeApp@protonmail.com</p></a>
      <br />
      <a href='https://riot.im/app/#/group/+freetube:matrix.org'><p class='textBlurb center'><i class='fas fa-comments'></i>&nbsp;&nbsp;FreeTube on Matrix</p></a>
      <br />
      <p class='textBlurb center'>If you like FreeTube, consider supporting the project by donating on <a href='https://liberapay.com/FreeTube'>Liberapay</a> or by donating to our Bitcoin address:</p>
      <br />
      <p class='textBlurb center'>BTC: 1Lih7Ho5gnxb1CwPD4o59ss78pwo2T91eS</p>
      <br />
    </div>
<?php require('includes/footer.php'); ?>
