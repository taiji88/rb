
<div id="pages_idpw">

	<div class="page-header">
		<h1><?php echo $d['member']['login_emailid']?'이메일':'아이디'?>찾기 / 비밀번호 재설정</h1>
	</div>

	<p class="text-muted">본인 인증을 통해 아이디 또는 이메일을 찾거나 비밀번호를 재설정 할 수 있습니다.</p>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs hidden-xs">
		<li class="active"><a href="#idpwsearch-1" data-toggle="tab"><i class="fa fa-search fa-lg"></i> 아이디 찾기</a></li>
		<li><a href="#idpwsearch-2" data-toggle="tab"><i class="fa fa-key fa-lg"></i> 비밀번호 재설정 (힌트 인증)</a></li>
		<li><a href="#idpwsearch-3" data-toggle="tab"><i class="fa fa-envelope fa-lg"></i> 비밀번호 재설정 (이메일 인증)</a></li>
	</ul>
	<ul class="nav nav-tabs visible-xs">
		<li class="active"><a href="#idpwsearch-1" data-toggle="tab">아이디찾기</a></li>
		<li><a href="#idpwsearch-2" data-toggle="tab"><i class="fa fa-key fa-lg"></i> 재설정</a></li>
		<li><a href="#idpwsearch-3" data-toggle="tab"><i class="fa fa-envelope fa-lg"></i> 재설정</a></li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">

		<!-- 아이디 찾기 -->
		<div class="tab-pane active" id="idpwsearch-1">

			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> 입력하신 정보로 일치하는 회원이 없습니다.
			</div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> 회원님의 아이디는 <strong>admin </strong>입니다. 
			</div>

			<div class="row">
				<div class="col-sm-3 text-center">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-search fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<?php if($d['member']['login_emailid']):?>
						이메일은 회원가입시 등록한 이름(실명)과 아이디를 입력하시면 정보를 확인하실 수 있습니다.
						<?php else:?>
						아이디는 회원가입시 등록한 이름(실명)과 이메일을 입력하시면 정보를 확인하실 수 있습니다.
						<?php endif?>
					</p>
				</div>
				<div class="col-sm-9">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">이름</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="회원가입시에 등록한 이름을 입력 해주세요.">
								<!-- <span class="help-block">회원가입시에 등록한 이름을 입력 해주세요.</span> -->
							</div>
						</div>
						<div class="form-group has-error">
							<label for="" class="col-sm-2 control-label">이메일</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="" placeholder="회원가입시 등록한 이메일을 입력 해주세요.">
								<span class="help-block">회원가입시 등록한 이메일을 입력 해주세요.</span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-9">
								<p>
									<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> 아이디 찾기</button>
									<a href="<?php echo RW('mod=login')?>" class="btn btn-default">로그인 페이지로 돌아가기</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- 비밀번호 재설정 (힌트인증) -->
		<div class="tab-pane" id="idpwsearch-2">

			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> 답변이 일치하지 않습니다.
			</div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> <strong>인증 되었습니다.</strong> 새 비밀번호를 입력해 주세요.
			</div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> <strong>비밀번호 재설정이 완료 되었습니다.</strong> <a href="<?php echo RW('mod=login')?>" class="alert-link">로그인</a> 페이지로 이동해 주세요 
			</div>

			<div class="row">
				<div class="col-sm-3 text-center">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-key fa-stack-1x fa-inverse"></i>
					</span>
					<p>비밀번호는 암호화되어 있으므로 본인인증 후 새로운 비밀번호로 재설정하셔야 합니다.</p>
				</div>
				<div class="col-sm-9">
					<!-- 1단계 -->
					<ol class="breadcrumb">
						<li class="active">아이디 입력</li>
						<li>힌트인증</a></li>
						<li>비밀번호 재설정</li>
					</ol>			
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">아이디</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="아이디 또는 이메일을 입력해 주세요">
								<!-- <span class="help-block">아이디를 입력해 주세요</span> -->
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary"><i class="fa fa-caret-right fa-lg"></i> 다음</button>
								<a href="<?php echo RW('mod=login')?>" class="btn btn-default">로그인 페이지로 돌아가기</a>
							</div>
						</div>
					</form>

					<!-- 2단계 -->
					<ol class="breadcrumb">
						<li>아이디 입력</li>
						<li class="active">힌트인증</a></li>
						<li>비밀번호 재설정</li>
					</ol>		

					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">질문</label>
							<div class="col-sm-8">
								<p class="form-control-static"><strong class="text-primary">킴스큐 설치시에 입력한 회원비밀번호는?</strong></p>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">답변</label>
							<div class="col-sm-8">
								<input type="text" class="form-control focusedinput" id="" placeholder="답변을 등록해 주세요.">
								<!-- <span class="help-block">답변을 등록해 주세요.</span> -->
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary"><i class="fa fa-caret-right fa-lg"></i> 다음</button>
								<a href="<?php echo RW('mod=login')?>" class="btn btn-default">로그인 페이지로 돌아가기</a>
							</div>
						</div>
					</form>	

					<!-- 3단계 -->
					<ol class="breadcrumb well">
						<li>아이디 입력</li>
						<li>힌트인증</a></li>
						<li class="active">비밀번호 재설정</li>
					</ol>		

					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">비밀번호</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" id="" placeholder="새 비밀번호를 입력해 주세요.">
								<!-- <span class="help-block">새 비밀번호를 입력해 주세요.</span> -->
							</div>
						</div>
						<div class="form-group has-error">
							<label for="" class="col-sm-2 control-label">비밀번호 확인</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" id="" placeholder="한번 더 비밀번호를 입력해 주세요.">
								<span class="help-block">비밀번호가 일치하지 않습니다.</span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> 저장하기</button>
								<a href="<?php echo RW('mod=login')?>" class="btn btn-default">로그인 페이지로 돌아가기</a>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>

		<!-- 비밀번호 재설정(이메일 인증) -->
		<div class="tab-pane" id="idpwsearch-3">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> <strong>죄송합니다. 대표 이메일이 등록되지 않았습니다.</strong>  관리자에게 문의해 주세요.
			</div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> <strong>본인인증 이메일이 발송되었습니다.</strong>  메일본문에 포함된 링크를 클릭해 주세요.
			</div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> <strong>인증 되었습니다.</strong> 새 비밀번호를 입력해 주세요.
			</div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle fa-lg"></i> <strong>비밀번호 재설정이 완료 되었습니다.</strong> <a href="<?php echo RW('mod=login')?>" class="alert-link">로그인</a> 페이지로 이동해 주세요 
			</div>


			<div class="row">
				<div class="col-sm-3 text-center">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
					</span>
					<p>비밀번호는 암호화되어 있으므로 본인인증 후 새로운 비밀번호로 재설정하셔야 합니다.</p>
				</div>
				<div class="col-sm-9">

					<!-- 1단계 -->
					<ol class="breadcrumb">
						<li class="active">계정 정보입력</li>
						<li>이메일 인증</a></li>
						<li>비밀번호 재설정</li>
					</ol>					

					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">이름</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="" placeholder="회원가입 시에 등록한 이름을 입력 해주세요.">
								<!-- <span class="help-block">회원가입 시에 등록한 이름을 입력 해주세요.</span> -->
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">이메일</label>
							<div class="col-sm-5">
								<input type="email" class="form-control" id="" placeholder="회원가입 시 등록한 이메일을 입력 해주세요.">
								<!-- <span class="help-block">회원가입 시 등록한 이메일을 입력 해주세요.</span> -->
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> 본인인증 메일발송</button>
								<a href="<?php echo RW('mod=login')?>" class="btn btn-default">로그인 페이지로 돌아가기</a>
							</div>
						</div>
					</form>

					<!-- 3단계 -->
					<ol class="breadcrumb">
						<li>계정 정보입력</li>
						<li>이메일 인증</a></li>
						<li class="active">비밀번호 재설정</li>
					</ol>					

					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">비밀번호</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" id="" placeholder="새 비밀번호를 입력해 주세요.">
								<!-- <span class="help-block">새 비밀번호를 입력해 주세요.</span> -->
							</div>
						</div>
						<div class="form-group has-error">
							<label for="" class="col-sm-2 control-label">비밀번호 확인</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" id="" placeholder="한번 더 비밀번호를 입력해 주세요.">
								<span class="help-block">비밀번호가 일치하지 않습니다.</span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> 저장하기</button>
								<a href="<?php echo RW('mod=login')?>" class="btn btn-default">로그인 페이지로 돌아가기</a>
							</div>
						</div>
					</form>		
					<hr>
					<div class="well">
						메일수신이 안되었을 경우, 스펨함을 확인해 보세요. <br>
						기타사항에 대해서는 <a href="mailto:admin@example.com">admin@example.com</a> 으로 문의 해주세요.
					</div>

				</div>
			</div>			

		</div>

	</div>

</div>




<script type="text/javascript">
//<![CDATA[
function tabShow(n)
{
	var i;

	for (i = 1; i < 4; i++)
	{
		getId('tagree'+i).style.borderBottom = '#dfdfdf solid 1px';
		getId('tagree'+i).style.background = '#efefef';
		getId('tagree'+i).style.color = '#666666';
		getId('bagree'+i).style.display = 'none';
	}
	getId('tagree'+n).style.borderBottom = '#ffffff solid 1px';
	getId('tagree'+n).style.background = '#ffffff';
	getId('tagree'+n).style.color = '#000000';
	getId('bagree'+n).style.display = 'block';

	if (n == 1)
	{
		document.procForm1.name.focus();
	}
	else if (n == 2) {
		if (getId('id_auth').value == '1')
		{
			document.procForm2.new_id.focus();
		}
		if (getId('id_auth').value == '2')
		{
			document.procForm2.new_pw_a.focus();
		}
	}
	else {
		document.procForm3.name.focus();
	}
}
function idCheck(f)
{
	if (f.name.value == '')
	{
		alert('이름을 입력해 주세요.   ');
		f.name.focus();
		return false;
	}
	if (f.email.value == '')
	{
		alert('<?php echo $d['member']['login_emailid']?'아이디를':'이메일을'?> 입력해 주세요.   ');
		f.email.focus();
		return false;
	}
}
function pwCheck(f)
{
	if (f.new_id.value == '')
	{
		alert('<?php echo $d['member']['login_emailid']?'이메일을':'아이디를'?> 입력해 주세요.   ');
		f.new_id.focus();
		return false;
	}
	if (f.id_auth.value == '2')
	{
		if (f.new_pw_a.value == '')
		{
			alert('답변을 입력해 주세요.   ');
			f.new_pw_a.focus();
			return false;
		}
	}
	if (f.id_auth.value == '3')
	{
		if (f.new_pw1.value == '')
		{
			alert('새 패스워드를 입력해 주세요.');
			f.new_pw1.focus();
			return false;
		}
		if (f.new_pw2.value == '')
		{
			alert('새 패스워드를 한번더 입력해 주세요.');
			f.new_pw2.focus();
			return false;
		}
		if (f.new_pw1.value != f.new_pw2.value)
		{
			alert('새 패스워드가 일치하지 않습니다.');
			f.new_pw1.focus();
			return false;
		}

		alert('입력하신 패스워드로 재설정 되었습니다.');
	}
}

window.onload = function()
{
	<?php if($ftype == 'pw'):?>
	tabShow(2);
	<?php elseif($ftype == 'auth'):?>
	tabShow(3);
	<?php else:?>
	document.procForm1.name.focus();
	<?php endif?>
}
//]]>
</script>