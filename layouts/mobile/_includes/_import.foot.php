<!-- Facebook and Path style side menus https://github.com/jakiestfu/Snap.js -->
<script src="<?php echo $g['s']?>/_core/opensrc/snap/1.9.3/snap.min.js"></script>

<!-- global  script for this layout  -->
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/assets/js/_main.js<?php echo $g['wcache']?>"></script>

<!-- foot 코드 -->
<?php echo $_HS['footercode'] ?>

<!-- foot 스위치 -->
<?php foreach($g['switch_3'] as $_switch) include $_switch ?>



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
