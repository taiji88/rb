

<!-- global  script for this layout  -->
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/assets/js/_main.js<?php echo $g['wcache']?>"></script>

<!-- Local script for this layout  -->
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/assets/js/default.js<?php echo $g['wcache']?>"></script>

<!-- 사이트 풋터 코드 -->
<?php echo $_HS['footercode'] ?>

<!-- 푸터 스위치 -->
<?php foreach($g['switch_3'] as $_switch) include $_switch ?>



<?php if($g['mobile']&&$_SESSION['pcmode']=='Y'&&$iframe!='Y'):?>
<div id="pctomobile"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=mobilemode"><?php echo sprintf($lang['sys']['viewpcmode'],$m=='admin'?$lang['top']['adminmode']:$lang['top']['homepage'])?></a></div>
<?php endif?>

<div id="_box_layer_"></div>
<div id="_action_layer_"></div>
<div id="_hidden_layer_"></div>
<div id="_overLayer_" class="hide"></div>
<iframe name="_action_frame_<?php echo $m?>" width="0" height="0" frameborder="0" scrolling="no"></iframe>
<script type="text/javascript">
//<![CDATA[
document.body.onclick = closeMemberLayer;
document.onkeydown = closeImgLayer;
//]]>
</script>
<?php foreach($g['switch_3'] as $_switch) include $_switch?>
</body>
</html>