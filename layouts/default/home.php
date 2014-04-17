<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/header.php' ?>

<div class="jumbotron" id="overview">
  <div class="container">
    <h1><?php echo $_HMF['uid']?$_HMF['name']:$d['layout']['maintitle']?></h1>
    <p><?php echo $_HMF['uid']?($_HMF['addinfo']?$_HMF['addinfo']:'메뉴 등록정보의 부가필드 항목에 메세지를 입력해 주세요. '):$d['layout']['mainmsg']?></p>
    <p><a href="<?php echo $d['layout']['morelink']?>" class="btn btn-primary btn-lg" role="button">자세히보기 »</a></p>
  </div>
</div>

<div class="container" id="content">
    <?php include __KIMS_CONTENT__ ?>
</div>

<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/footer.php' ?>

