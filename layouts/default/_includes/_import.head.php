<!DOCTYPE html>
<html lang="<?php echo $lang['sys']['lang']?>">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Seo -->
<meta name="robots" content="ALL">
<meta name="generator" content="kimsQ-RB <?php echo $d['admin']['version']?>"> 
<meta name="author" content="<?php echo $_SERVER['HTTP_HOST']?>"> 
<meta name="title" content="<?php echo strip_tags($g['meta_tit'])?>"> 
<meta name="subject" content="<?php echo strip_tags($g['meta_sbj'])?>"> 
<meta name="keywords" content="<?php echo strip_tags($g['meta_key'])?>"> 
<meta name="description" content="<?php echo strip_tags($g['meta_des'])?>">
<meta name="classification" content="<?php echo strip_tags($g['meta_cla'])?>">
<meta name="reply-to" content="<?php echo strip_tags($g['meta_rep'])?>">
<meta name="content-language" content="<?php echo strip_tags($g['meta_lan'])?>">
<meta name="build" content="<?php echo strip_tags($g['meta_bui'])?>">
<meta name="copyright" content="Copyrights © <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?> All Rights Reserved">

<title><?php echo $g['browtitle']?></title>

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $g['url_layout']?>/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="<?php echo $g['url_layout']?>/assets/ico/favicon.ico">

<!-- bootstrap css -->
<link href="<?php echo $g['s']?>/_core/opensrc/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">


<!--[if lt IE 9]><script src="<?php echo $g['url_layout']?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery -->
<script src="<?php echo $g['s']?>/_core/opensrc/jquery/1.10.2/jquery-1.10.2.min.js"></script> 

<!-- bootstrap -->
<script src="<?php echo $g['s']?>/_core/opensrc/bootstrap/3.1.1/js/bootstrap.min.js"></script> 

<!-- 시스템 폰트 -->
<link href="<?php echo $g['s']?>/_core/opensrc/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo $g['url_layout']?>/assets/fonts/kimsq/1.0.0/kimsq.css" rel="stylesheet">

<!-- theme 테마  -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/theme/<?php echo $_SESSION['nowTheme']?$_SESSION['nowTheme']:$d['layout']['theme']?>/bootstrap.css">

<!-- global styles for this layout 전역 스타일 -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/_global.css">
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/_main.css">

<!-- local styles for this layout 지역 스타일 -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/assets/css/default.css">

<!-- 사이트 헤드 코드 -->
<?php echo $_HS['headercode']?>


<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/cssjs.engine.php'?>

</head>
<body>
