<?php
$sort	= $sort ? $sort : 'gid';
$orderby= $orderby ? $orderby : 'asc';
$recnum	= $recnum && $recnum < 91 ? $recnum : 30;

$RCD = getDbArray($table['s_module'],'','*',$sort,$orderby,$recnum,$p);
$NUM = getDbRows($table['s_module'],'');
$TPG = getTotalPage($NUM,$recnum);

if (!$id)
{
	$id = 'site';
}
$R = getDbData($table['s_module'],"id='".$id."'",'*');
?>

<?php if(!$_isDragScript):?>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/core.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/events.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/css.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/coordinates.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/drag.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/dragsort.js"></script>
<script type="text/javascript">
//<![CDATA[
var dragsort = ToolMan.dragsort();
//]]>
</script>
<?php endif?>
<div id="catebody">
	<div id="category">
		<form name="mform1" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="moduleorder_update" />
		<input type="hidden" name="fnum" value="2" />

		<div class="title">
			<select class="c1" onchange="goHref('<?php echo $g['adm_href']?>&amp;recnum='+this.value);">
			<?php for($i=15;$i<=100;$i=$i+15):?>
			<option value="<?php echo $i?>"<?php if($i==$recnum):?> selected="selected"<?php endif?>>D.<?php echo $i?></option>
			<?php endfor?>
			</select>
			<select class="c2" onchange="goHref('<?php echo $g['adm_href']?>&amp;recnum=<?php echo $recnum?>&amp;p='+this.value);">
			<?php for($i = 1; $i <= $TPG; $i++):?>
			<option value="<?php echo $i?>"<?php if($i==$p):?> selected="selected"<?php endif?>>P.<?php echo $i?></option>
			<?php endfor?>
			</select>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=market&amp;front=pack&amp;type=module" title="모듈추가"><img src="<?php echo $g['img_core']?>/_public/btn_add.gif" alt="추가" /></a>
			<img src="<?php echo $g['img_core']?>/_public/btn_save.gif" title="순서저장" alt="save" class="hand" onclick="document.mform1.submit();" />

		</div>
		
		<div class="tree">
			<ul id="moduleorder3">
			<?php while($BR = db_fetch_array($RCD)):?>
			<li class="move<?php if($BR['system']):?> system<?php endif?>" ondblclick="window.open('<?php echo $g['r']?>/?m=<?php echo $BR['id']?>');">
				<input type="checkbox" name="modulemembers2[]" value="<?php echo $BR['id']?>" checked="checked" />
				<a class="hand" onclick="showCheck('<?php echo $BR['id']?>','<?php echo $BR['hidden']?>');"><img src="<?php echo $g['img_core']?>/_public/ico_<?php echo $BR['hidden']?'hide':'show'?>.gif" class="eye2" alt="" title="모듈패널 디스플레이상태 변경" /></a>
				<span class="hand" onclick="mobileCheck('<?php echo $BR['id']?>','<?php echo $BR['mobile']?>');"><img src="<?php echo $g['img_core']?>/_public/ico_mobile.gif" alt=""<?php if(!$BR['mobile']):?> class="mobilehide"<?php endif?> /></span>
				<a href="<?php echo $g['adm_href']?>&amp;recnum=<?php echo $recnum?>&amp;p=<?php echo $p?>&amp;id=<?php echo $BR['id']?>"><span class="name<?php if($BR['id']==$R['id']):?> on<?php endif?>"><?php echo $BR['name']?></span><span class="id">(<?php echo $BR['id']?>)</span></a>
			</li>
			<?php endwhile?>
			</ul>
		</div>

		</form>
	</div>


	<div id="catinfo">



		<div class="title">

			<div class="xleft">
				테마&amp;플러그인 설치/제거
			</div>
			<div class="xright">
			</div>

		</div>

		<div class="notice">
			<div class="icon"><img src="<?php echo getThumbImg($g['path_module'].$R['id'].'/icon')?>" width="60" height="60" alt="" /></div>
			<div class="ment">
			<div><?php echo $R['name']?><span>(<?php echo $R['id']?>)</span></div>
			선택된 모듈에 대한 테마 정보입니다.<br />
			시스템 기본모듈은 삭제할 수 없습니다.<br />
			</div>
			<div class="clear"></div>
		</div>

<?php 
include $g['path_core'].'function/rss.func.php';
include $g['path_module'].'market/var/var.php';
$_serverinfo = explode('/',$d['market']['url']);
$_updatelist = getUrlData('http://'.$_serverinfo[2].'/__update/market/modules/'.$id.'/theme.txt',10);
$_updatelist = explode("\n",$_updatelist);
$_updatelength = count($_updatelist)-1;
$recnum	=  10;
$TPG = getTotalPage($_updatelength,$recnum);
?>
	



		<table border="1">
			<thead>
				<tr>
					<th>내 테마</th>
					<th>썸네일</th>
					<th>테마명(아이디)</th>
					<th>제작자</th>
					<th>마켓등록일</td>
					<th>설치일</th>
					<th>다운로드</th>
					<th>원격설치</th>
				</tr>
			</thead>
			<tbody>

				<?php $_ishistory=false?>
				<?php for($i = $_updatelength-(($p-1)*$recnum)-1; $i > $_updatelength-($p*$recnum)-1; $i--):?>
				<?php $_update=trim($_updatelist[$i]);if(!$_update)continue?>
				<?php $var1=explode(',',$_update)?>
				<?php $var2=explode(',',$_updatelist[$i-1])?>
				<?php $_updatefile=$g['path_module'].$id.'/update/'.$var1[0].'.'.$var1[5].'.txt'?>
				<?php if(is_file($_updatefile)):?>
				<?php $_supdate=explode(',',implode('',file($_updatefile)))?>

				<tr>
					<td><?php if(is_dir($g['path_module'].$id.'/theme/'.$var1[0])):?><span style="color:red;">Y</span><?php else:?>N<?php endif?></td>
					<td></td>
					<td><a href="http://<?php echo $_serverinfo[2]?>/market/<?php echo $var1[2]?>" target="_blank"><?php echo $var1[3]?>(<?php echo $var1[0]?>)</a></td>
					<td><?php echo $var1[4]?></td>
					<td><?php echo getDateFormat($var1[1],'Y.m.d')?></td>

					<td><?php echo getDateFormat($_supdate[0],'Y.m.d')?></td>
					<td>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=update_theme&amp;extension_path=./modules/<?php echo $id?>/&amp;type=download&amp;ufile=<?php echo $var1[0]?>.<?php echo $var1[5]?>" onclick="return hrefCheck(this,true,'정말로 다운로드 받으시겠습니까?');">다운로드</a>
					</td>
					<td>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=update_theme&amp;extension_path=./modules/<?php echo $id?>/&amp;type=delete&amp;ufile=<?php echo $var1[0]?>.<?php echo $var1[5]?>" title="테마 제거" onclick="return hrefCheck(this,true,'정말로 이 테마를 제거하시겠습니까?');">테마제거</a>
					</td>
				</tr>

				<?php else:?>

				<tr>
					<td><?php if(is_dir($g['path_module'].$id.'/theme/'.$var1[0])):?><span style="color:red;">Y</span><?php else:?>N<?php endif?></td>
					<td></td>
					<td><a href="http://<?php echo $_serverinfo[2]?>/market/<?php echo $var1[2]?>" target="_blank"><?php echo $var1[3]?>(<?php echo $var1[0]?>)</a></td>
					<td><?php echo $var1[4]?></td>
					<td><?php echo getDateFormat($var1[1],'Y.m.d')?></td>

					<td>미설치</td>
					<td>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=update_theme&amp;extension_path=./modules/<?php echo $id?>/&amp;type=download&amp;ufile=<?php echo $var1[0]?>.<?php echo $var1[5]?>" onclick="return hrefCheck(this,true,'정말로 다운로드 받으시겠습니까?');">다운로드</a>
					</td>
					<td>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=update_theme&amp;extension_path=./modules/<?php echo $id?>/&amp;type=install&amp;ufile=<?php echo $var1[0]?>.<?php echo $var1[5]?>" onclick="return hrefCheck(this,true,'정말로 설치 하시겠습니까?');">원격설치</a>
					</td>
				</tr>

				<?php endif?>
				<?php endfor?>
				<?php if(!$_updatelength):?>
				<tr>
				<td colspan="8">마켓에 등록된 관련테마나 플러그인이 없습니다.</td>
				</tr>
				<?php endif?>
			</tbody>
		</table>



		<div class="pagebox01">
		<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
		</div>	
		
	</div>
	<div class="clear"></div>
</div>




<script type="text/javascript">
//<![CDATA[
function showCheck(id,hidden)
{
	frames._action_frame_<?php echo $m?>.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&a=moduleshow_update&moduleid=' + id + '&hidden=' + hidden;
}
function mobileCheck(id,mobile)
{
	frames._action_frame_<?php echo $m?>.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&a=modulemobile_update&moduleid=' + id + '&mobile=' + mobile;
}
dragsort.makeListSortable(getId("moduleorder3"));
//]]>
</script>



