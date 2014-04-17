<style type="text/css">
.rb-navbar-item-center {
	position: absolute;
	left: 60px;
	right: 60px;
	text-align: center;
}
</style>


<?php if($m == "bbs"):?>
	<nav class="navbar navbar-default navbar-static-top rb-forum-header" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">

			<?php if ($mod== 'write') :?>
			<a href="<?php echo RW('m=bbs&bid=notice')?>" class="btn btn-default navbar-btn rb-navbar-right">취소</a>
			<button type="submit" class="btn btn-primary navbar-btn rb-navbar-left">등록</button>
			<?php elseif ($mod == 'view') :?>
	        <button type="button" class="navbar-toggle rb-sidebar-right-deploy">
	            <span class="sr-only">Side navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
			<a href="<?php echo RW('m=bbs&bid=notice')?>" class="btn btn-default navbar-btn rb-navbar-left">목록</a>
			<?php else:?>
	        <button type="button" class="navbar-toggle rb-sidebar-right-deploy">
	            <span class="sr-only">Side navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>


			<a href="<?php echo RW(0)?>" class="btn btn-default navbar-btn rb-navbar-left"><i class="fa fa-home fa-lg"></i></a>

			<?php endif?>

	    <a class="navbar-brand rb-navbar-item-center" href="<?php echo RW('m=bbs&bid=notice')?>"><?php echo $B['name']?></a>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>
<?php else:?>
<header class="navbar navbar-default navbar-fixed-top" role="navigation" id="top">
	<div class="container">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="<?php echo RW(0)?>"><?php echo $d['layout']['title']?></a>
	        <button type="button" class="navbar-toggle rb-sidebar-right-deploy">
	            <span class="sr-only">Side navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	    </div>
    </div>
</header>
<?php endif?>