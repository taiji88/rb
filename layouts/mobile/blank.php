<style type="text/css">
body { 
    padding-top: 50px; 
}

.rb-dialog {
    margin-bottom: 0
}

</style>
<a class="sr-only" href="#content">본문으로</a>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo RW(0)?>" class="navbar-brand navbar-toggle rb-navbar-item"><i class="fa fa-home"></i> 홈</a>  
      <a class="navbar-brand" href="<?php echo RW(0)?>"><i class="fa fa-cog"></i> 레이아웃 설정</a> <!-- 페이지 제목은 동적으로 변경 -->
    </div>
  </div>
</nav>

<div class="container" id="content">
    <?php include __KIMS_CONTENT__ ?>
</div>


<div class="alert alert-success alert-dismissable navbar-fixed-bottom rb-dialog">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <i class="fa fa-check fa-lg"></i> <strong>설정</strong>이 변경되었습니다.
</div>


<!-- modal -->
<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/modals.php' ?>



