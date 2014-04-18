<button class="btn btn-primary btn-lg center-block" data-toggle="modal" data-target="#myModal">
  모달 방식 로그인 레이어 띄우기
</button>

<!-- 모달형 - 가로형 로그인 폼 입니다.  -->
<div class="modal fade rb-modal-login-2" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">로그인</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6 rb-social">

						<p class="lead hidden-xs">내 소셜계정으로 로그인하세요.</p>
						<p class="text-center">
							<a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook fa-lg"></i> &nbsp;페이스북으로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-twitter btn-block"><i class="fa fa-twitter fa-lg"></i> &nbsp;트위터로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-google-plus btn-block"><i class="fa fa-google-plus fa-lg"></i> &nbsp; 구글+로 로그인 </a>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6 rb-orbullet-divider rb-form">
						<div class="rb-orbullet">OR</div>
						<form role="form">
							<div class="form-group">
								<label class="sr-only" for="">아이디 또는 이메일을 입력해주세요</label>
								<div class="input-icon">
									<i class="fa fa-user"></i>
									<input type="email" class="form-control" id="" placeholder="아이디 또는 이메일을 입력해주세요">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="">Password</label>
								<div class="input-icon">
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="" placeholder="비밀번호를 입력해주세요.">
								</div>
							</div>
							<p>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 정보기억 
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> <abbr title="SSL:Secure Sockets Layer">보안접속</abbr>
								</label>
							</p>
						</form>
						<div class="well well-sm">
							<ul class="list-unstyled">
							  <li>비밀번호를 잊으셨나요 ? <a href="<?php echo $g['url_reset']?>&page=idpwsearch">도움이 필요하세요?</a></li>
							  <li>회원계정이 없으신가요 ? <a href="<?php echo RW('mod=signup')?>">가입하기</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">취소</button>
				<button type="button" class="btn btn-primary">로그인</button>
			</div>
		</div>
	</div>
</div>


<!-- 세로형 로그인 폼 입니다. 
연결할 소셜미디어가 1~2개 수준일때 적당한 형태 입니다. 
 -->
<div class="rb-modal-login-1">
	<div class="modal-dialog" style="z-index:100">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">로그인</h4>
			</div>
			<div class="modal-body">
				<p class="text-center">
					<a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook fa-lg"></i> &nbsp;페이스북으로 로그인 </a>
				</p>
				<p class="text-center">
					<a href="#" type="button" class="btn btn-twitter btn-block"><i class="fa fa-twitter fa-lg"></i> &nbsp;트위터로 로그인 </a>
				</p>
				<p class="text-center">
					<a href="#" type="button" class="btn btn-google-plus btn-block"><i class="fa fa-google-plus fa-lg"></i> &nbsp; 구글+로 로그인 </a>
				</p>
				<div class="rb-orbullet">OR</div>
				<div class="rb-orbullet-divider"></div>

				<form role="form">
					<div class="form-group">
						<label class="sr-only" for="">아이디 또는 이메일을 입력해주세요</label>
						<div class="input-icon">
							<i class="fa fa-user"></i>
							<input type="email" class="form-control" id="" placeholder="아이디 또는 이메일을 입력해주세요">
						</div>
					</div>
					<div class="form-group">
						<label class="sr-only" for="">Password</label>
						<div class="input-icon">
							<i class="fa fa-lock"></i>
							<input type="password" class="form-control" id="" placeholder="비밀번호를 입력해주세요.">
						</div>
					</div>
					<p>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1"> 정보기억 
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2"> <abbr title="SSL:Secure Sockets Layer">보안접속</abbr>
						</label>
					</p>
				</form>
				<div class="well well-sm">
					<ul class="list-unstyled">
					  <li>비밀번호를 잊으셨나요 ? <a href="<?php echo $g['url_reset']?>&page=idpwsearch">도움이 필요하세요?</a></li>
					  <li>회원계정이 없으신가요 ? <a href="<?php echo RW('mod=signup')?>">가입하기</a></li>
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">로그인</button>
			</div>
		</div>
	</div>
</div>


<!-- 가로형 로그인 폼 입니다.  -->
<div class="rb-modal-login-2">
	<div class="modal-dialog" style="z-index:100">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">로그인</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6 rb-social">

						<p class="lead hidden-xs">내 소셜계정으로 로그인하세요.</p>
						<p class="text-center">
							<a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook fa-lg"></i> &nbsp;페이스북으로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-twitter btn-block"><i class="fa fa-twitter fa-lg"></i> &nbsp;트위터로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-google-plus btn-block"><i class="fa fa-google-plus fa-lg"></i> &nbsp; 구글+로 로그인 </a>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6 rb-orbullet-divider rb-form">
						<div class="rb-orbullet">OR</div>
						<form role="form">
							<div class="form-group">
								<label class="sr-only" for="">아이디 또는 이메일을 입력해주세요</label>
								<div class="input-icon">
									<i class="fa fa-user"></i>
									<input type="email" class="form-control" id="" placeholder="아이디 또는 이메일을 입력해 주세요">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="">Password</label>
								<div class="input-icon">
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="" placeholder="비밀번호를 입력해주세요.">
								</div>
							</div>
							<p>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 정보기억 
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> <abbr title="SSL:Secure Sockets Layer">보안접속</abbr>
								</label>
							</p>
						</form>
						<div class="well well-sm">
							<ul class="list-unstyled">
							  <li>비밀번호를 잊으셨나요 ? <a href="<?php echo $g['url_reset']?>&page=idpwsearch">도움이 필요하세요?</a></li>
							  <li>회원계정이 없으신가요 ? <a href="<?php echo RW('mod=signup')?>">가입하기</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">취소</button>
				<button type="button" class="btn btn-primary">로그인</button>
			</div>
		</div>
	</div>
</div>

<!-- 가로형 로그인 폼 입니다. 입력필드 유용성 검사 예시  -->
<div class="rb-modal-login-2">
	<div class="modal-dialog" style="z-index:100">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">로그인</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6 rb-social">

						<p class="lead hidden-xs">내 소셜계정으로 로그인하세요.</p>
						<p class="text-center">
							<a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook fa-lg"></i> &nbsp;페이스북으로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-twitter btn-block"><i class="fa fa-twitter fa-lg"></i> &nbsp;트위터로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-google-plus btn-block"><i class="fa fa-google-plus fa-lg"></i> &nbsp; 구글+로 로그인 </a>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6 rb-orbullet-divider rb-form">
						<div class="rb-orbullet">OR</div>
						<form role="form">
							<div class="form-group">
								<label class="sr-only" for="">아이디 또는 이메일을 입력해주세요</label>
								<div class="input-icon">
									<i class="fa fa-user"></i>
									<input type="email" class="form-control" id="" placeholder="아이디 또는 이메일을 입력해주세요">
								</div>
							</div>
							<div class="form-group has-error has-feedback">
								<label class="sr-only" for="">Password</label>
								<div class="input-icon">
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="" placeholder="비밀번호를 입력해주세요.">
									<span class="help-block">비밀번호가 일치하지 않습니다.</span>
								</div>
							</div>

							<p>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 정보기억 
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> <abbr title="SSL:Secure Sockets Layer">보안접속</abbr>
								</label>
							</p>
						</form>
						<div class="well well-sm">
							<ul class="list-unstyled">
							  <li>비밀번호를 잊으셨나요 ? <a href="<?php echo $g['url_reset']?>&page=idpwsearch">도움이 필요하세요?</a></li>
							  <li>회원계정이 없으신가요 ? <a href="<?php echo RW('mod=signup')?>">가입하기</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">취소</button>
				<button type="button" class="btn btn-primary">로그인</button>
			</div>
		</div>
	</div>
</div>

<br><br><br>

<!-- 가로형 로그인 폼 입니다. - 로그인 정보 저장시 상태 입니다.   -->
<div class="rb-modal-login-2">
	<div class="modal-dialog" style="z-index:100">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">로그인</h4>
			</div>
			<div class="modal-body">

				<div class="alert alert-warning alert-dismissable">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>로그아웃 되었습니다.</strong> 나중에 쉽게 로그인할 수 있도록 이 기기에 계정을 저장하였습니다. 다시 로그인하려면 비밀번호를 입력하면 됩니다.
				</div>

				<div class="row">
					<div class="col-sm-6 col-sm-push-6 rb-social">

						<p class="lead hidden-xs">내 소셜계정으로 로그인하세요.</p>
						<p class="text-center">
							<a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook fa-lg"></i> &nbsp;페이스북으로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-twitter btn-block"><i class="fa fa-twitter fa-lg"></i> &nbsp;트위터로 로그인 </a>
						</p>
						<p class="text-center">
							<a href="#" type="button" class="btn btn-google-plus btn-block"><i class="fa fa-google-plus fa-lg"></i> &nbsp; 구글+로 로그인 </a>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6 rb-orbullet-divider rb-form">
						<div class="rb-orbullet">OR</div>
						<form role="form">
							<div class="form-group media">
								<div class="pull-left">
									<img src="/rb2/_var/avatar/no-avatar.png" width="50" class="img-rounded img-responsive">
								</div>
								<div class="media-body">
									<h4 class="media-heading">권기택 (redblock)</h4>
									email@example.com
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="">Password</label>
								<div class="input-icon">
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="" placeholder="비밀번호를 입력해주세요.">
								</div>
							</div>
							<p>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 정보기억 
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> <abbr title="SSL:Secure Sockets Layer">보안접속</abbr>
								</label>
							</p>
						</form>
						<div class="well well-sm">
							<ul class="list-unstyled">
							  <li>비밀번호를 잊으셨나요 ? <a href="<?php echo $g['url_reset']?>&page=idpwsearch">도움이 필요하세요?</a></li>
							  <li>회원계정이 없으신가요 ? <a href="<?php echo RW('mod=signup')?>">가입하기</a></li>
							  <li><a href="<?php echo RW('mod=signup')?>">기기에 저장된 로그인 정보 삭제 하기</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">취소</button>
				<button type="button" class="btn btn-primary">로그인</button>
			</div>
		</div>
	</div>
</div>