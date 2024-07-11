<?php
require 'includes/header.php';

$currentRelease = 'Release 0.21.1 Beta';

$fullTagName = 'v0.21.1-beta';

$versionNumber = '0.21.1';

$baseUrl = "https://github.com/FreeTubeApp/FreeTube/releases/download/";

$downloadAppImage = $baseUrl.$fullTagName."/FreeTube_".$versionNumber."_amd64.AppImage";
$downloadDebx64 = $baseUrl.$fullTagName."/freetube_".$versionNumber."_amd64.deb";
$downloadDebArm64 = $baseUrl.$fullTagName."/freetube_".$versionNumber."_arm64.deb";
$downloadDebArm32 = $baseUrl.$fullTagName."/freetube_".$versionNumber."_armv7l.deb";
$downloadRpmArm64 = $baseUrl.$fullTagName."/freetube_".$versionNumber."_arm64.rpm";
$downloadRpmx64 = $baseUrl.$fullTagName."/freetube_".$versionNumber."_amd64.rpm";
$downloadMacDmg = $baseUrl.$fullTagName."/freetube-".$versionNumber."-mac-x64.dmg";
$downloadMacZip = $baseUrl.$fullTagName."/freetube-".$versionNumber."-mac-x64.zip";
$downloadMac7z = $baseUrl.$fullTagName."/freetube-".$versionNumber."-mac-x64.7z";
$downloadWin7z = $baseUrl.$fullTagName."/freetube-".$versionNumber."-win-x64-portable.7z";
$downloadWinZip = $baseUrl.$fullTagName."/freetube-".$versionNumber."-win-x64-portable.zip";
$downloadWinExe = $baseUrl.$fullTagName."/freetube-".$versionNumber."-setup-x64.exe";
$downloadWinArm7z = $baseUrl.$fullTagName."/freetube-".$versionNumber."-win-arm64-portable.7z";
$downloadWinArmZip = $baseUrl.$fullTagName."/freetube-".$versionNumber."-win-arm64-portable.zip";
$downloadWinArmExe = $baseUrl.$fullTagName."/freetube-".$versionNumber."-setup-arm64.exe";
$downloadLinuxZipx64 = $baseUrl.$fullTagName."/freetube-".$versionNumber."-linux-portable-x64.zip";
$downloadLinux7zx64 = $baseUrl.$fullTagName."/freetube-".$versionNumber."-linux-portable-x64.7z";
$downloadLinuxZipArm64 = $baseUrl.$fullTagName."/freetube-".$versionNumber."-linux-portable-arm64.zip";
$downloadLinux7zArm64 = $baseUrl.$fullTagName."/freetube-".$versionNumber."-linux-portable-arm64.7z";
$downloadLinuxZipArm32 = $baseUrl.$fullTagName."/freetube-".$versionNumber."-linux-portable-armv7l.zip";
$downloadLinux7zArm32 = $baseUrl.$fullTagName."/freetube-".$versionNumber."-linux-portable-armv7l.7z";
?>

  <main class="mt-24">
    <header class="flex items-center flex-col">
      <img src="images/logoType.svg" class="h-40" alt="FreeTube Logo" />
      <h1 class="text-center text-4xl font-semibold">The Private YouTube Client</h1>
    </header>

    <section class="flex justify-center mt-24">
      <img src="images/FreeTube1.png" class="shadow-2xl" width="80%" alt="FreeTube's Latest Subscriptions using the grid view" />
    </section>

    <section class="w-full mt-24 bg-secondary text-gray-200">
      <div class="container mx-auto py-16 px-5">
        <h1 class="text-4xl">What is FreeTube?</h1>
        <p class="pt-5 leading-8 text-gray-200 tracking-wide">FreeTube is a YouTube client for Windows (10 and later), Mac (macOS 10.15 and later), and Linux built around using YouTube more privately.  You can enjoy your favorite content and creators without your habits being tracked.  All of your user data is stored locally and never sent or published to the internet.  FreeTube grabs data by scraping the information it needs (with either local methods or by optionally utilizing the Invidious API). With many features similar to YouTube, FreeTube has become one of the best methods to watch YouTube privately on desktop.</p>
      </div>
    </section>

    <section class="flex justify-center mt-24">
      <img src="images/FreeTube2.png" class="shadow-2xl" width="80%" alt="Playing a video using FreeTube" />
    </section>

    <section class="w-full mt-24 bg-primary text-gray-200">
      <div class="container mx-auto py-16 px-5">
        <h1 class="text-3xl">Current Features</h1>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-users text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Subscriptions</h3>
              <p class="text-md text-gray-200">Subscribe to channels without an account</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-database text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Local Data</h3>
              <p class="text-md text-gray-200">All Subscriptions and History are stored locally</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-ban text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">No Ads</h3>
              <p class="text-md text-gray-200">Enjoy an ad free experience as you watch</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-user-secret text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Private</h3>
              <p class="text-md text-gray-200">Your viewing habits are not tracked by us or YouTube</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-paint-brush text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Familiar Design</h3>
              <p class="text-md text-gray-200">A design similar to YouTube makes it easy to transition to FreeTube</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fab fa-osi text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Open Source</h3>
              <p class="text-md text-gray-200">FreeTube is Free and Open Source Software under the AGPLv3 License</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-file-import text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Import Subscriptions</h3>
              <p class="text-md text-gray-200">Import your subscriptions from YouTube to see your feed instantly</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-desktop text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Multi Platform</h3>
              <p class="text-md text-gray-200">Runs on Windows, Mac, and several Linux distributions</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-primary-accent p-6 w-24 flex justify-center">
              <i class="fas fa-language text-4xl"></i>
            </div>
            <div class="ml-10 mr-2">
              <h3 class="text-2xl text-gray-100">Multilingual</h3>
              <p class="text-md text-gray-200">Translated into many <a href="https://hosted.weblate.org/engage/free-tube/" class="text-gray-100">languages</a></p>
            </div>
          </div>
        </div>
        <p class="mt-12 text-right text-gray-100 text-2xl">...and many more to come!</p>
      </div>
    </section>

    <section class="flex justify-center mt-24">
      <img src="images/FreeTube4.png" class="shadow-2xl" width="80%" alt="Latest Subscriptions user interface" />
    </section>

    <a name="download"></a>
    <section class="w-full mt-24 bg-secondary">
      <div class="container mx-auto py-16 px-5">
        <div class="content-title">
          <h1 class="text-3xl text-gray-100 flex items-baseline">
            Download FreeTube
            <span class="ml-5 text-xl py-1 px-3 bg-red-900 rounded-full text-red-300"><?php echo $currentRelease ?> </span>
          </h1>
          <p class="mt-5 text-gray-200">FreeTube is free to download thanks to its open source nature.</p>
        </div>

        <div class="mt-10 text-gray-200 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-windows text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Windows</h3>
              <a href="<?php echo $downloadWinExe; ?>">
                <span class="download">.exe (x64)</span>
              </a>
              <a href="<?php echo $downloadWinZip; ?>">
                <span class="download">.zip (x64)</span>
              </a>
              <a href="<?php echo $downloadWin7z; ?>">
                <span class="download">.7z (x64)</span>
              </a>
              <a href="<?php echo $downloadWinArmExe; ?>">
                <span class="download">.exe (arm64)</span>
              </a>
              <a href="<?php echo $downloadWinArmZip; ?>">
                <span class="download">.zip (arm64)</span>
              </a>
              <a href="<?php echo $downloadWinArm7z; ?>">
                <span class="download">.7z (arm64)</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-apple text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">macOS x64</h3>
              <a href="<?php echo $downloadMacDmg; ?>">
                <span class="download">.dmg</span>
              </a>
              <a href="<?php echo $downloadMacZip; ?>">
                <span class="download">.zip</span>
              </a>
              <a href="<?php echo $downloadMac7z; ?>">
                <span class="download">.7z</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-ubuntu text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Ubuntu / Debian</h3>
              <a href="<?php echo $downloadDebx64; ?>">
                <span class="download">.deb (x64)</span>
              </a>
              <a href="<?php echo $downloadDebArm64; ?>">
                <span class="download">.deb (arm64)</span>
              </a>
              <a href="<?php echo $downloadDebArm32; ?>">
                <span class="download">.deb (armv7l)</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-fedora text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Fedora / RedHat x64</h3>
              <a href="<?php echo $downloadRpmx64; ?>">
                <span class="download">.rpm (x64)</span>
              </a>
              <a href="<?php echo $downloadRpmArm64; ?>">
                <span class="download">.rpm (arm64)</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-dropbox text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Flatpak / AppImage</h3>
              <a href="https://flathub.org/apps/details/io.freetubeapp.FreeTube">
                <span class="download">Flathub</span>
              </a>
              <a href="<?php echo $downloadAppImage; ?>">
                <span class="download">AppImage</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-linux text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Other Linux Distributions</h3>
              <a href="<?php echo $downloadLinuxZipx64; ?>">
                <span class="download">.zip (x64)</span>
              </a>
              <a href="<?php echo $downloadLinux7zx64; ?>">
                <span class="download">.7z (x64)</span>
              </a>
              <a href="<?php echo $downloadLinuxZipArm64; ?>">
                <span class="download">.zip (arm64)</span>
              </a>
              <a href="<?php echo $downloadLinux7zArm64; ?>">
                <span class="download">.7z (arm64)</span>
              </a>
              <a href="<?php echo $downloadLinuxZipArm32; ?>">
                <span class="download">.zip (armv7l)</span>
              </a>
              <a href="<?php echo $downloadLinux7zArm32; ?>">
                <span class="download">.7z (armv7l)</span>
              </a>
            </div>
          </div>
        </div>
        <p class="text-center mt-10 text-gray-200">Users are also welcome to download from <a href="http://source.freetubeapp.io" class="text-red-900">source</a> for all platforms</p>
      </div>
    </section>

    <a name="contact"></a>
    <section class="bg-gray-200 mt-24">
      <div class="container mx-auto px-5">
        <h1 class="text-3xl">Contact Information</h1>
        <p>Have an issue or suggestion?</p>
        <p>Please make a thread on our <a class="text-primary" href="https://github.com/FreeTubeApp/FreeTube/issues">GitHub</a> page so we can track it.</p>
        <p>You can also ask using one of these methods:</p>
        <div class="p-10 text-primary">
          <a href="mailto:freetubeapp@protonmail.com">
            <i class="fas fa-envelope text-xl"></i>
            <span class="ml-5">FreeTubeApp@protonmail.com</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://matrix.to/#/+freetube:matrix.org">
            <i class="fas fa-comments text-xl"></i>
            <span class="ml-5">FreeTube on Matrix</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://fosstodon.org/@FreeTube">
            <i class="fab fa-mastodon text-xl"></i>
            <span class="ml-6">FreeTube on Mastodon</span>
          </a>
        </div>
      </div>
      <div class="container mx-auto px-5">
        <h1 class="text-3xl">Useful Links</h1>
        <div class="text-primary p-10">
          <a href="https://github.com/FreeTubeApp/FreeTube">
            <i class="fab fa-github text-xl"></i>
            <span class="ml-5">GitHub</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://github.com/FreeTubeApp/FreeTube/releases">
            <i class="fas fa-clipboard-list text-xl"></i>
            <span class="ml-6">Release Changlog</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://hosted.weblate.org/engage/free-tube/">
            <i class="fas fa-language text-xl"></i>
            <span class="ml-4">Translate via Weblate</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://docs.freetubeapp.io/">
            <i class="fas fa-file-alt text-xl"></i>
            <span class="ml-7">Documentation</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://blog.freetubeapp.io/">
            <i class="fas fa-blog text-xl"></i>
            <span class="ml-6">Blog</span>
          </a>
        </div>
      </div>
      <div class="container mx-auto px-5">
        <h1 class="text-3xl">Donate</h1>
        <p>If you like FreeTube, consider supporting the project by donating to:</p>

        <div  class="text-primary p-10">
          <a href="bitcoin:1Lih7Ho5gnxb1CwPD4o59ss78pwo2T91eS">
            <i class="fab fa-bitcoin text-xl"></i>
            <span class="text-wrap">BTC: 1Lih7Ho5gnxb1CwPD4o59ss78pwo2T91eS</span>
          </a>
        </div>
      </div>
    </section>
  </main><!-- /main -->
<?php require 'includes/footer.php';?>
