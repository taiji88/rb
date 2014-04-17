<style type="text/css">
body {
	overflow: auto;
} 	
#settings section h3	{
	font-size: 13px;
	opacity: 0.7
}
#settings section .first	{
	margin-top: 0;
}
#settings .list-group-item {
	font-weight: bold;
}
#settings .list-group-item:before {
	content: "\f105";
	float: right;
	font-weight: bold;
	font-size: 18px;
	line-height: 120%;
	margin-left: 10px;
	margin-right: 0;
	opacity: 0.5
}
</style>

<div id="settings">

	<section>
		<h3 class="first">공통 출력 설정</h3>
		<div class="list-group">
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">출력함</span>로그인/회원가입 링크</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">출력함</span>통합검색 상자</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">출력함</span>상단메뉴</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">출력함</span>현재위치</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">사용안함</span>소셜로그인</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">default</span>테마</a>
		</div>
	</section>

	<section>
		<h3>세부 설정</h3>
		<div class="list-group">
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">홈페이지 제목</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">제목 폰트/크기/색상</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">텍스트</span>로고</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">푸터 Address 편집</a>
		</div>
	</section>

	<section>
		<h3>사이드 메뉴</h3>
		<div class="list-group">
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">보통</span>열림속도</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">ease</span>열림효과</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01"><span class="badge">없음</span>비활성</a>
		</div>
	</section>

	<section>
		<h3>광고 설정</h3>
		<div class="list-group">
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">광고의 형식</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">이미지/링크</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">Porta ac consectetur ac</a>
		  <a href="#" class="list-group-item" data-toggle="modal" data-target="#settings-01">Vestibulum at eros</a>
		</div>
	</section>

</div>



<!-- Modal -->
<div class="modal fade" id="settings-01" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">로그인/회원가입 링크</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">취소</button>
        <button type="button" class="btn btn-primary">저장하기</button>
      </div>
    </div>
  </div>
</div>


