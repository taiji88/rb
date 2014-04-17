<!DOCTYPE html>
<html lang="<?php echo $lang['sys']['lang']?>">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title><?php echo $g['browtitle']?></title>

<!--[if lt IE 9]><script src="<?php echo $g['url_layout']?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $g['url_layout']?>/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="<?php echo $g['url_layout']?>/assets/ico/favicon.ico">

<!-- bootstrap css -->
<!-- 테블릿에서 .navbar가 uncollapsed 되는것을 막기위해 변경점을  1200px이상으로 변경함 -->
<link rel="stylesheet" type="text/css" href="<?php echo $g['s']?>/layouts/<?php echo $d['layout']['dir']?>/assets/bootstrap-customize/3.1.1/css/bootstrap.min.css">

<!-- 시스템 폰트 -->
<link href="<?php echo $g['s']?>/_core/opensrc/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<!-- Facebook and Path style side menus https://github.com/jakiestfu/Snap.js -->
<link rel="stylesheet" type="text/css" href="<?php echo $g['s']?>/_core/opensrc/snap/1.9.3/snap.css">

<!-- theme 테마  -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/theme/<?php echo $_SESSION['nowTheme']?$_SESSION['nowTheme']:$d['layout']['theme']?>/bootstrap.css" />

<!-- global styles for this layout 전역 스타일 -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/_global.php" />
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/_main.css" />

<!-- local styles for this layout 지역 스타일 -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/default.css" />

<!-- 헤드 코드 -->
<?php echo $_HS['headercode']?>

<!-- jQuery -->
<script src="<?php echo $g['s']?>/_core/opensrc/jquery/1.10.2/jquery-1.10.2.min.js"></script> 

<!-- bootstrap -->
<script src="<?php echo $g['s']?>/layouts/<?php echo $d['layout']['dir']?>/assets/bootstrap-customize/3.1.1/js/bootstrap.min.js"></script> 

<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/cssjs.engine.php'?>

</head>
<body>
