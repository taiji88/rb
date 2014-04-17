<link rel="stylesheet" type="text/css" href="<?php echo $g['s']?>/_core/opensrc/bootstrap-select/1.5.0/bootstrap-select.css">
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/bootstrap-select/1.5.0/bootstrap-select.js"></script>


<!-- Modal :  로그인 -->
<div class="modal fade" id="login" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-sign-in fa-lg"></i> 로그인 </h4>
      </div>
      <div class="modal-body">

        <form name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return layoutLogCheck(this);" role="form" style="margin-bottom: 15px">
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
            <button type="submit" class="btn btn-primary btn-block btn-lg">로그인</button>
        </form>
        <button type="submit" class="btn btn-default btn-block">
            <i class="fa fa-facebook"></i>
            트위터 로그인
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
      <div class="modal-footer">
        <a href="#" class="btn btn-default btn-block" data-dismiss="modal" aria-hidden="true">닫기</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal :  쪽지 -->
<div class="modal rb-modal-profile fade" id="message" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-comments-o fa-lg"></i> 받은 메시지함 <span class="badge">42</span></h4>
      </div>
      <div class="modal-body">
      	<a href="#" class="btn btn-default btn-block">새 메시지 보내기</a>
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
                    <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c8.8.107.107/s100x100/60680_176470485840217_674228215_s.jpg" alt="권기택" class="media-object rb-avatar">
                </div>
                <div class="media-body">
                    <h5 class="media-heading">왕눈이</h5>
                    <i class="fa fa-reply"></i> 그럼, 월요일에 뵙겠습니다.
                    <div class="rb-time"><i class="fa fa-clock-o"></i> 1월 16일 오후 1: 21</div>
                </div>
            </a>
        </div>
      </div>
      <div class="modal-footer">
		<div class="btn-group btn-group-justified">
			<a href="#" class="btn btn-default">모두 보기</a>
			<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">닫기</a>
		</div>
      </div>
    </div>
  </div>
</div>



<!-- Modal : 알림 -->
<div class="modal rb-modal-profile fade" id="notification" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bell-o fa-lg"></i> 알림 <span class="badge">4</span></h4>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
			<div class="btn-group btn-group-justified">
				<a href="#" class="btn btn-default">모두 보기</a>
				<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">닫기</a>
			</div>
      </div>
    </div>
  </div>
</div>



<!-- Modal : 내용보기-->
<div aria-hidden="true" class="modal fade" id="modal-view" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg rb-full-screen">
    <div class="modal-content">
        <!-- 리모드 컨텐츠  _includes/view.php -->
    </div>
  </div>
</div>



<!-- Modal : 갤러리  The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-snap-ignore="true">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal 포럼게시물 검색 -->
<div class="modal fade" id="modal-forum-search" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-search fa-lg"></i> 게시물 검색 <small>자유게시판</small></h4>
      </div>
      <div class="modal-body">

            <form role="form">
                <div class="form-group">
                    <label class="sr-only" for="forum-search-category">검색범위</label>
                    <select class="selectpicker show-menu-arrow show-tick" id="forum-search-category" data-width="100%" data-style="btn btn-default dropdown-toggle" data-header="검색범위">
                        <option selected>제목</option>
                        <option>내용</option>
                        <option>제목+내용</option>
                        <option>댓글</option>
                        <option data-divider="true"></option>
                        <option>이름</option>
                        <option>닉네임</option>
                        <option>아이디</option>
                        <option>태그</option>
                        <option>댓글 작성자 아이디</option>
                    </select>
                    <label class="sr-only" for="forum-search-query">검색</label>
                    <input type="search" id="forum-search-query" class="form-control" placeholder="검색어를 입력 해주세요" autofocus required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">검색</button>
            </form>

      </div>
      <div class="modal-footer">
        <button type="buttom" class="btn btn-default btn-block" data-dismiss="modal" >닫기</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal-게시판 관리 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-bbs-admin-cofig" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-wrench fa-lg"></i> 게시판 관리</h4>
            </div>
            <div class="modal-body">
                ... 
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary" type="button">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-게시판 테마 관리 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-bbs-admin-theme" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-picture-o fa-lg"></i> 게시판 테마관리</h4>
            </div>
            <div class="modal-body">
                ... 
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary" type="button">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
// selectpicker 추가 https://github.com/silviomoreto/bootstrap-select
$('.selectpicker').selectpicker();
</script>
