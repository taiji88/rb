
<footer class="rb-footer" role="contentinfo">
    
    <p>
    	<a class="btn btn-default btn-sm" href="<?php echo RW(0)?>">홈</a>
    	<?php if($my['uid']):?>
    	<a class="btn btn-default btn-sm" href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout">로그아웃</a>
    	<?php else:?>
      	<a class="btn btn-default btn-sm" href="<?php echo RW('mod=login')?>">로그인</a>
    	<?php endif?>
    	<a class="btn btn-default btn-sm" href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=pcmode">데스크탑 버전</a>
    	<a class="btn btn-default btn-sm" href="#content">맨위로</a>
    </p>

	<ul class="list-inline">
		<li><a href="<?php echo RW('mod=private')?>">개인정보취급방침</a></li>
		<li><a href="<?php echo RW('mod=agreement')?>">이용약관</a></li>
	</ul>

	<p>© <?php echo $date['year']?></span> company</p>
<!--
	<div class="well">
	    <p>Code released under the <a href="#">MIT License</a>.</p>
	    <p>Based on <a href="#" rel="nofollow">Bootstrap</a>. Icons from <a href="#" rel="nofollow">Font Awesome</a>. Powered by <a href="#" rel="nofollow">kimsQ Rb 2.0</a>.</p>
    </div>
-->
</footer>
