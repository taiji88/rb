<!-- navbar -->
<header class="navbar navbar-default rb-header navbar-static-top" role="navigation" id="top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?php echo RW(0)?>"><?php echo $d['layout']['hometitle']?></a>
	</div>
	<div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc limit 0,'.$d['layout']['menunum'],'*')?>
		<?php while($_M1=db_fetch_array($_MENUS1)):?>
		<?php if(!$_M1['isson']):?>
		<li<?php if(in_array($_M1['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a>
		<?php else:?>
		<li class="dropdown"><a href="#." class="dropdown-toggle" data-toggle="dropdown"><?php echo $_M1['name']?> <b class="caret"></b></a>
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
		<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc limit '.$d['layout']['menunum'].',100','*')?>
		<?php if(db_num_rows($_MENUS1)):?>
		<li id="lastNav"><a href="#." class="dropdown-toggle" data-toggle="dropdown">더보기 <span class="caret"></span></a>
		<ul class="dropdown-menu dropdown-menu-right" id="collapsed">
		<?php while($_M1=db_fetch_array($_MENUS1)):?>
		<li<?php if(in_array($_M1['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a>
		<?php endwhile?>
		</ul>
		</li>
		<?php endif?>
	
		
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

		<ul class="nav navbar-nav navbar-right">
			<!-- 검색 -->
			 <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="검색"><i class="fa fa-search fa-lg"></i></a>
				<div class="dropdown-menu rb-toggle-layer">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?php echo $g['s']?>/" method="get" class="navbar-form" role="search">
							<input type="hidden" name="r" value="<?php echo $r?>">
							<input type="hidden" name="mod" value="search">
								<div class="input-group">
									<input class="form-control" id="srch-term" name="srch-term" placeholder="Search" type="text" value="<?php echo $_keyword?>">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<!--<div class="panel-footer"><a href="#">자세히</a></div>-->
					</div>
				</div>
			</li>
			<!-- //검색 -->




			<?php if($my['id']):?>
			<!-- 메시지 임시-->
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="메시지"><i class="fa fa-comments fa-lg"></i>  <span class="badge">3</span> <b class="caret"></b></a>
				<div class="dropdown-menu rb-toggle-layer rb-message-layer">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h3 class="pull-left panel-title">받은 메시지함 (3)</h3>
							<div class="pull-right"><a href="#">새 메시지 보내기</a></div>
						</div>
						<div class="list-group">
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object">
								</div>
								<div class="media-body">
									<h5 class="media-heading">홍길동</h5>
									안녕하세요 반갑습니다.
									<div class="rb-time"><i class="fa fa-clock-o"></i> 10분 전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<h5 class="media-heading">너구리</h5>
									<i class="fa fa-reply"></i> 지하철이 막혀서 조금 늦을것 같습니다.
									<div class="rb-time"><i class="fa fa-clock-o"></i> 11시간전</div>
								</div>
							</a>
							<!-- 아직 읽지않은 메시지 -->
							<a href="#" class="list-group-item media list-group-item-warning"> 
								<div class="pull-left" href="#">
									<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c8.8.107.107/s100x100/60680_176470485840217_674228215_s.jpg"  alt="권기택" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<h5 class="media-heading">왕눈이</h5>
									<i class="fa fa-reply"></i> 그럼, 월요일에 뵙겠습니다.
									<div class="rb-time"><i class="fa fa-clock-o"></i> 1월 16일 오후 1: 21</div>
								</div>
							</a>

						</div>
						<div class="panel-footer"><a href="#">모두 보기</a></div>
					</div> 
				</div>
			</li>
			<!-- //메시지  -->

			<!-- 알림 임시 -->
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge">9</span> <b class="caret"></b> </a>
				<div class="dropdown-menu rb-toggle-layer rb-notifications-layer">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h3 class="pull-left panel-title">알림</h3>
							<div class="pull-right"><a href="#">설정</a></div>
						</div>
						<div class="list-group">
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object">
								</div>
								<div class="media-body">
									<strong>벽돌</strong>님이 회원님의 상태에 댓글을 남겼습니다.
									<div class="rb-time"><i class="fa fa-comment-o"></i> 10분 전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>너구리</strong>님이 회원님의 상태를 좋아합니다.
									<div class="rb-time"><i class="fa fa-thumbs-o-up"></i> 11시간전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>왕눈이</strong>님이 <strong>자유게시판</strong>에 게시물을 올렸습니다. : "처음부분에 수정사항이 있어서 다시 올립니다."
									<div class="rb-time"><i class="fa fa-pencil"></i> 1월 16일 오후 1: 21</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>벽돌</strong>님이 회원님의 상태에 댓글을 남겼습니다.
									<div class="rb-time"><i class="fa fa-comment-o"></i> 10분 전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>너구리</strong>님이 회원님의 상태를 좋아합니다.
									<div class="rb-time"><i class="fa fa-thumbs-o-up"></i> 11시간전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>시그널</strong>님이 <strong>자유게시판</strong>에 게시물을 올렸습니다. : "처음의 목차가 잘못 작성된 부분이 있어서 다시 올립니다."
									<div class="rb-time"><i class="fa fa-pencil"></i> 1월 16일 오후 1: 21</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>벽돌</strong>님이 회원님의 상태에 댓글을 남겼습니다.
									<div class="rb-time"><i class="fa fa-comment-o"></i> 10분 전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>너구리</strong>님이 회원님의 상태를 좋아합니다.
									<div class="rb-time"><i class="fa fa-thumbs-o-up"></i> 11시간전</div>
								</div>
							</a>
							<a href="#" class="list-group-item media">
								<div class="pull-left" href="#">
									<img src="http://placehold.it/50x50" alt="홍길동 프로필 사진" class="media-object rb-avatar">
								</div>
								<div class="media-body">
									<strong>왕눈이</strong>님이 <strong>자유게시판</strong>에 게시물을 올렸습니다. : "처음의 목차가 잘못 작성된 부분이 있어서 다시 올립니다."
									<div class="rb-time"><i class="fa fa-pencil"></i> 1월 16일 오후 1: 21</div>
								</div>
							</a>
						</div>
						<div class="panel-footer"><a href="#">모두 보기</a></div>
					</div> 
				</div>
			</li>
			<!-- //알림 -->



			<!-- 개인정보 관리 -->
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $my[$_HS['nametype']]?> <b class="caret"></b></a>
			  <ul class="dropdown-menu">    
				<li class="dropdown-header"> 프로필</li>
				<li><a href="#"><img width="25" height="25" src="<?php echo $g['s']?>/_var/simbol/<?php echo $my['photo']?$my['photo']:'0.gif'?>"> <?php echo $my[$_HS['nametype']]?></a></li>
				<li class="divider"></li>
				<li role="presentation" class="dropdown-header">설정</li>
				<li><a href="#"><span class="glyphicon glyphicon-lock"></span> 계정설정</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> 프로필 설정</a></li>
				<li><a href="#"><span class="fa fa-bell"></span> 알림 설정</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
			  </ul>
			</li>
			<!-- /개인정보 관리 -->
			<?php else:?>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">로그인
					<b class="caret"></b>
				</a>
				<div class="dropdown-menu rb-login-layer">
					<form name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return layoutLogCheck(this);" role="form">
						<input type="hidden" name="r" value="<?php echo $r?>" />
						<input type="hidden" name="a" value="login" />
						<div class="form-group">
							<label class="sr-only" for="username">아이디 또는 이메일</label>
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
								<input type="text" value="kims<?php //echo getArrayCookie($_COOKIE['svshop'],'|',0)?>" id="username" name="id" placeholder="아이디 또는 이메일" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only" for="password">Password</label>
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
								<input type="password" id="password" name="pw" value="kims<?php //echo getArrayCookie($_COOKIE['svshop'],'|',1)?>" placeholder="비밀번호" class="form-control">
							</div>
						</div>
						<div class="checkbox">
							<label><input name="idpwsave" type="checkbox"<?php if($_COOKIE['svshop']):?> checked="checked"<?php endif?>> 아디디/패스워드 기억하기</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block">로그인</button>
					</form>
					<button type="submit" class="btn btn-default btn-block">
						<i class="fa fa-facebook"></i>
						페이스북 로그인
					</button>
					<button type="submit" class="btn btn-default btn-block">
						<i class="fa fa-twitter"></i>
						트위터 로그인
					</button>
					<button type="submit" class="btn btn-default btn-block">
						<i class="fa fa-google-plus"></i>
						구글 로그인
					</button>
				</div>
			</li>
			<li><a href="#">회원가입</a></li>
			<?php endif?>
		</ul>


	</div><!--/.nav-collapse -->
  </div>
</header>



