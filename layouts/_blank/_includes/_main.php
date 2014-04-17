<!-- 메뉴 (add by taiji88 / 14/2/6) -->
<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
<?php $_i=0; while($_M1=db_fetch_array($_MENUS1)):?>
<?php if($_M1['isson']):?>
<?php if(in_array($_M1['id'],$_CA)):$g['nowFMemnu']=$_M1['uid']?><?php endif?>
<?php endif?>
<?php endwhile?>
<!-- //메뉴 -->


<?php
include  $g['path_layout'].$d['layout']['dir'].'/_var/_var.php';

if (isset($_layoutAction))
{
	include $g['path_layout'].$d['layout']['dir'].'/_action/a.'.$_layoutAction.'.php';
	exit;
}

if (isset($_themeConfig))
{
	if (!$my['admin']) getLink($g['s'].'/?r='.$r,'','권한이 없습니다.','');
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_admin/main.php';

	$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_admin/main';
	$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_admin/main';
	$d['layout']['_twhite'] = false;
}

if (isset($_themePage))
{
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_themePage.'.php';
	if (strpos($_themePage,'jax/'))
	{
		include $g['main'];
		exit;
	}
	else {
		$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_themePage;
		$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_pages/'.$_themePage;
	}
}
?>