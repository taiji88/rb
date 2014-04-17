<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    
	<form action="<?php echo $g['s']?>/" method="get" class="navbar-form" role="search">
	<input type="hidden" name="r" value="<?php echo $r?>">
	<input type="hidden" name="mod" value="search">
      <div class="form-group">
        <input type="text" class="form-control" id="snap-drawer-search" placeholder="검색" value="<?php echo $_keyword?>">
      </div>
    </form>


  <div class="drawer-inner">

    <?php if($my['uid']):?>
    <div class="navbar-form">
      <div class="btn-group btn-group-justified">
        <a class="btn btn-default navbar-btn" role="button" data-toggle="modal" data-target="#message"><i class="fa fa-comments-o fa-lg"></i> <span class="badge">3</span></a>
        <a class="btn btn-default navbar-btn" role="button" data-toggle="modal" data-target="#notification"><i class="fa fa-bell-o fa-lg"></i> <span class="badge">9</span></a>
      </div>    
    </div>
    <ul class="nav navbar-nav navbar-form">
      <li class="dropdown">
        <a href="#" class="" data-toggle="dropdown"><img src="/rb/_var/simbol/0.gif" width="35" alt="" class="img-circle"> <?php echo $my[$_HS['nametype']]?> <b class="caret"></b></a>
          <ul class="dropdown-menu">    
            <li><a href="#.">프로필</a></li>
            <li class="divider"></li>
            <li role="presentation" class="dropdown-header">설정</li>
            <li><a href="#."><span class="glyphicon glyphicon-lock"></span> 계정설정</a></li>
            <li><a href="#."><span class="glyphicon glyphicon-user"></span> 프로필 설정</a></li>
            <li><a href="#."><span class="fa fa-bell"></span> 알림 설정</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
          </ul>
      </li>
    </ul>

    <?php else:?>
    <div class="navbar-form">
      <a href="#" class="btn btn-default btn-block navbar-btn" role="button" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in fa-lg"></i> 로그인</a>
    </div>
    <?php endif?>


	  <ul class="nav navbar-nav navbar-form">
		<li><a href="<?php echo RW(0)?>" class="rb-sidebar-close"><i class="fa fa-home fa-lg"></i> 홈</a></li>
		<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
		<?php while($_M1=db_fetch_array($_MENUS1)):?>
		<?php if(!$_M1['isson']):?>
		<li<?php if(in_array($_M1['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a>
		<?php else:?>
		<li class="dropdown-toggle"><a href="#." class="dropdown-toggle" data-toggle="dropdown"><?php echo $_M1['name']?> <b class="caret"></b></a>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
		<li<?php if(!$_CA[1]&&in_array($_M1['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a></li>
		<li role="presentation" class="divider"></li>
		<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
		<?php while($_M2=db_fetch_array($_MENUS2)):?>
		<li<?php if(in_array($_M2['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"><?php echo $_M2['name']?></a></li>
		<?php endwhile?>
		</ul>
		<?php endif?>
		</li>
		<?php endwhile?>
		
		<!-- 데모용 임시 -->
		<li id="lastNav"><a href="#." class="dropdown-toggle" data-toggle="dropdown" style="color:red;">테마변경(데모용) <span class="caret"></span></a>
		<ul class="dropdown-menu dropdown-menu-right" id="collapsed">
		<?php $_themes = explode(',','default,armelia,cerulean,cosmo,cupid,custom,cyborg,flatly,journal,lumen,readable,simplex,slate,spacelab,superhero,united,yeti')?>
		<?php foreach($_themes as $_tm):?>
		<li<?php if($_SESSION['nowTheme']==$_tm):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=themeChange&changeTheme=<?php echo $_tm?>"><?php echo $_tm?></a>
		<?php endforeach?>
		</ul>
		</li>
		<!-- 데모용 임시 -->

	  </ul>

<!--

    <ul class="nav navbar-nav navbar-form">
      <li><a href="/rb/" class="rb-sidebar-close"><i class="fa fa-home fa-lg"></i> 홈</a></li>
      <li><a href="<?php echo RW('c=1/7')?>" class="rb-sidebar-close">회사소개</a></li>
      <li class="active"><a href="<?php echo RW('c=2/9/56')?>" class="rb-sidebar-close">제품소개</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">커뮤니티 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#" class="rb-sidebar-close"><span class="badge pull-right">42</span>커뮤니티</a></li>
          <li class="divider"></li>
          <li><a href="/rb/b/notice/" class="rb-sidebar-close">게시판</a></li>
          <li><a href="/rb/b/gallery/" class="rb-sidebar-close">갤러리</a></li>
          <li><a href="#" class="rb-sidebar-close">토론방</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">정보마당 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
-->

    <?php if($my['admin']):?>
    <a href="#" class="btn btn-danger btn-block navbar-btn rb-sidebar-close"><i class="fa fa-cog fa-lg"></i> 레이아웃 설정</a>
    <a href="#" class="btn btn-danger btn-block navbar-btn rb-sidebar-close"><i class="fa fa-user fa-lg"></i> 관리자모드 접속</a>
    <?php endif?>

    <button type="button" class="btn btn-default btn-block navbar-btn rb-sidebar-close"><i class="fa fa-times"></i> 닫기</button>
  </div>


  </div>
</nav> 
