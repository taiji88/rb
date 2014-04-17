<?php
$g['incdir'] = $g['incdir']?$g['incdir']:$g['path_layout'].$d['layout']['dir'].'/_includes/';
$g['wdgcod'] = $g['path_tmp'].'widget/c'.$_HM['uid'].'.p'.$_HP['uid'].'.cache';
$g['wcache'] = $d['admin']['cache_flag']?'?nFlag='.$date[$d['admin']['cache_flag']]:'';
$g['cssset'] = array
(
	$d['layout']['pwd']=>$g['s'].'/layouts/'.$d['layout']['str'],
	$g['dir_module'].'_main'=>$g['url_module'].'/_main',
	$g['dir_module_skin'].'_main'=>$g['url_module_skin'].'/_main',
	$g['dir_module_mode']=>$g['url_module_mode'],
	$g['dir_module_admin']=>$g['url_module_admin'],
);
?>

<?php if($m=='admin'):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['s']?>/_core/css/sys.css<?php echo $g['wcache']?>">
<?php endif?>

<?php if($g['adminbar']):?>
<!-- 어드민 바 -->
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['s']?>/_core/css/bar.css<?php echo $g['wcache']?>">
<?php endif?>

<script type="text/javascript">
//<![CDATA[
var mbrclick= false;
var rooturl = '<?php echo $g['url_root']?>';
var rootssl = '<?php echo $g['ssl_root']?>';
var raccount= '<?php echo $r?>';
var moduleid= '<?php echo $m?>';
var memberid= '<?php echo $my['id']?>';
var is_admin= '<?php echo $my['admin']?>';
var needlog = '<?php echo $lang['sys']['need_login']?>';
var neednum = '<?php echo $lang['sys']['need_num']?>';
var myagent	= navigator.appName.indexOf('Explorer') != -1 ? 'ie' : 'ns';
//]]>
</script>
<!-- 기본 스크립트 -->
<script type="text/javascript" charset="utf-8" src="<?php echo $g['s']?>/_core/js/sys.js<?php echo $g['wcache']?>"></script>



<?php foreach ($g['cssset'] as $_key => $_val):?>
<?php if (is_file($_key.'.css')):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $_val?>.css<?php echo $g['wcache']?>">
<?php endif?>

<?php if (is_file($_key.'.js')):?>
<script type="text/javascript" charset="utf-8" src="<?php echo $_val?>.js<?php echo $g['wcache']?>"></script>
<?php endif?>
<?php endforeach?>

<?php if(is_file($g['wdgcod'])) include $g['wdgcod']?>
