
<div class="page-header rb-page-header">
    <h1><?php echo $_HMF['uid']?$_HMF['name']:$d['layout']['maintitle']?></h1>
    <p><?php echo $_HMF['uid']?($_HMF['addinfo']?$_HMF['addinfo']:'메뉴 등록정보의 부가필드 항목에 메세지를 입력해 주세요. '):$d['layout']['mainmsg']?></p>
</div>

<?php if($_HM['depth'] > 1):?>
<?php $_HMS = getDbData($table['s_menu'],"id='".$_CA[1]."' and site=".$s,'*')?>
<div class="dropdown">
	<a data-toggle="dropdown" href="#" class="btn btn-default btn-block">하위 메뉴 <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo RW('c='.$_CA[0].'/'.$_CA[1])?>" target="<?php echo $_HMS['target']?>"><?php echo $_HMS['name']?></a></li>
	<li role="presentation" class="divider"></li>

	<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_HMS['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
	<?php while($_M3=db_fetch_array($_MENUS3)):?>
	<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo RW('c='.$_CA[0].'/'.$_CA[1].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>"><?php echo $_M3['name']?></a></li>
	<?php endwhile?>

	</ul>
</div>
<?php endif?>
