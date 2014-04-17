<link rel="stylesheet" type="text/css" href="<?php echo $g['s']?>/_core/opensrc/bootstrap-select/1.5.0/bootstrap-select.css">
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/bootstrap-select/1.5.0/bootstrap-select.js"></script>


<style type="text/css">
.bootstrap-select.btn-group:not(.input-group-btn) {
	margin-bottom: 0;
}
</style>


<!-- 게시판 목록에서판 하단 nav가 출력됨 -->
<?php if ($m == "bbs" && $mod== 'list') :?>
<style type="text/css">
.rb-content-position {
	bottom: 50px;
}
</style>

	<?php if ($bid == "notice") :?>
	<!-- 게시판 테마일때 -->
	<nav class="navbar navbar-inverse navbar-fixed-bottom " role="navigation">
			<div class="navbar-btn rb-navbar-left">
				<select class="selectpicker show-tick show-menu-arrow dropup" data-width="100%" data-style="btn btn-default"data-size="auto">
					<optgroup label="filtering">
						<option data-icon="fa fa-save" data-subtext="파일첨부글" value=""></option>
						<option data-icon="fa fa-camera" data-subtext="사진첨부글" value=""></option>
						<option data-icon="lyphicon glyphicon-lock" data-subtext="비밀글" value=""></option>
					</optgroup>
					<optgroup label="sorting">
						<option data-icon="fa fa-calendar fa-lg" data-subtext="등록일" value="" selected></option>
						<option data-icon="fa fa-eye fa-lg" data-subtext="조회수" value=""></option>
						<option data-icon="fa fa-thumbs-o-up fa-lg" data-subtext="추천수" value=""></option>
						<option data-icon="fa fa-comment-o fa-lg" data-subtext="댓글수" value=""></option>
					</optgroup>
				</select>
			</div>
			<div class="navbar-btn rb-navbar-left">
				<select class="selectpicker show-tick show-menu-arrow dropup" data-width="100%" data-style="btn btn-default" data-size="auto" data-header="정렬">
					<option data-icon="fa fa-sort-amount-desc fa-lg" data-subtext="내림차순" value=""></option>
					<option data-icon="fa fa-sort-amount-asc fa-lg" data-subtext="올림차순" value=""></option>
				</select>
			</div>
			<button type="button" class="btn btn-default navbar-btn rb-navbar-left"  data-toggle="modal" data-target="#modal-forum-search"><i class="fa fa-search fa-lg"></i></button>

			<?php if($my['uid']):?><a href="/rb/b/notice/write" class="btn btn-default navbar-btn rb-navbar-left"><?php else:?><a href="#" class="btn btn-default navbar-btn rb-navbar-left" role="button" data-toggle="modal" data-target="#login"><?php endif?><i class="fa fa-plus fa-lg"></i></a>
			
			<div class="navbar-btn rb-navbar-left">
				<div class="btn-group dropup">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-cog fa-lg"></i> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu">
						<li role="presentation" class="dropdown-header">포럼 설정</li>
						<li><a href="#">게시판 관리</a></li>
						<li class="divider"></li>
						<li><a href="#">일반설정</a></li>
						<li><a href="#">테마설정</a></li>

					</ul>
				</div>
			</div>

			
	</nav>
	<?php else:?>
	<!-- 갤러러 테마 일때 -->
	<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="navbar-btn rb-navbar-left">
				<select class="selectpicker show-tick show-menu-arrow dropup" data-width="100%" data-style="btn btn-default" data-size="auto" data-header="정렬기준">
					<option data-icon="fa fa-calendar fa-lg" data-subtext="등록일" value="" selected></option>
					<option data-icon="fa fa-eye fa-lg" data-subtext="조회수" value=""></option>
					<option data-icon="fa fa-thumbs-o-up fa-lg" data-subtext="추천수" value=""></option>
					<option data-icon="fa fa-comment-o fa-lg" data-subtext="댓글수"  value=""></option>
				</select>
			</div>
			<div class="navbar-btn rb-navbar-left">
				<select class="selectpicker show-tick show-menu-arrow dropup" data-width="100%" data-style="btn btn-default" data-size="auto" data-header="정렬">
					<option data-icon="fa fa-sort-amount-desc fa-lg" data-subtext="내림차순" value=""></option>
					<option data-icon="fa fa-sort-amount-asc fa-lg" data-subtext="올림차순" value=""></option>
				</select>
			</div>
			<div class="navbar-btn rb-navbar-left">
				<select class="selectpicker show-tick show-menu-arrow dropup" data-width="100%" data-style="btn btn-default" data-size="auto" data-header="보기방식">
					<option data-icon="fa fa-th-large fa-lg" data-subtext="보통보기" value=""></option>
					<option data-icon="fa fa-th fa-lg" data-subtext="작게보기" value=""></option>
					<option data-icon="fa fa-th-list fa-lg" data-subtext="목록보기" value=""></option>
				</select>
			</div>
			<button type="button" class="btn btn-default navbar-btn rb-navbar-left"  data-toggle="modal" data-target="#modal-forum-search"><i class="fa fa-search fa-lg"></i></button>

			<div class="navbar-btn rb-navbar-left">
				<div class="btn-group dropup">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-cog fa-lg"></i> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu">
						<li role="presentation" class="dropdown-header">포럼 설정</li>
						<li><a href="#">게시판 관리</a></li>
						<li class="divider"></li>
						<li><a href="#">일반설정</a></li>
						<li><a href="#">테마설정</a></li>

					</ul>
				</div>
			</div>
	</nav>
	<?php endif?>

<?php endif?>

<script type="text/javascript">
// selectpicker 추가 https://github.com/silviomoreto/bootstrap-select
$('.selectpicker').selectpicker();
</script>


