<?php header("Content-type: text/css; charset: UTF-8"); ?>

/**
 * 나만의 스타일 정의 
 *
 * 기존의 스타일을 수정하고 추가할 수 있습니다.
 * 전역 스타일을 삭제하지 마십시오. 에러가 발생할 수 있습니다.
 * ----------------------------------------------------------------------------
 */
 
/*전역 스타일 불러오기 */
@import url('_global.css');


/* 레이아웃 스타일   */
#header {
   background: url("<?php echo $CDNURL; ?>/images/header-bg.png") no-repeat;
}
a {
  color: <?php echo $linkColor; ?>;
}
...
ul#main-nav li a {
  color: <?php echo $linkColor; ?>;
}
[출처] CSS에 PHP 변수 적용하기|작성자 서성혁


/*테마 스타일  */