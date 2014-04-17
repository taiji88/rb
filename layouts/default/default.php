<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/header.php' ?>

<div class="jumbotron" id="overview">
  <div class="container">
    <h1><?php echo $_HMF['uid']?$_HMF['name']:$d['layout']['maintitle']?></h1>
    <p><?php echo $_HMF['uid']?($_HMF['addinfo']?$_HMF['addinfo']:'메뉴 등록정보의 부가필드 항목에 메세지를 입력해 주세요. '):$d['layout']['mainmsg']?></p>
  </div>
</div>

<div class="container">
    <div class="row" id="content">
        <div class="col-md-9 col-md-push-3" role="main" id="content-main">
            <div class="breadcrumb">
				<?php echo $g['location']?>
            </div>
            <div class="page-header">
                <h1><?php echo $_HM['name']?$_HM['name']:$_HP['name']?></h1>
            </div>
            <?php include __KIMS_CONTENT__ ?>
        </div>
        <div class="col-md-3 col-md-pull-9" role="navigation" id="content-sub">
            <?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/sidebar.php' ?>
        </div>
    </div>
</div>

<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/footer.php' ?>
