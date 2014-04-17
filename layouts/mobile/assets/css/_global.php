<?php header("Content-type: text/css; charset: UTF-8"); ?>
/*!
 * kimsQ Rb v2.0 기본형 모바일 레이아웃
 * layout Version: 1.0
 * Homepage: http://www.kimsq.co.kr
 * Copyright 2014 redblock inc
 * Licensed under MIT
 * Based on Bootstrap v3.1.1
*/

/*
 * 목차:
 *
 * 1 - Reset 초기화
 * 2 - Structure 구조
 * 3 - Header 헤더 
 * 4 - Content 컨텐츠
 * 5 - Sidebar 사이드바 
 * 6 - Footer 풋터
 * 7 - Modal 모달
 * 8 - etc 기타
 * ----------------------------------------------------------------------------
 */


/*
 * 1 - Reset 초기화
 * ----------------------------------------------------------------------------
 */

/*폰트설정*/
#rb-body,
#rb-body h1,
#rb-body h2,
#rb-body h3,
#rb-body h4,
#rb-body h5,
#rb-body h6,
#rb-body input,
#rb-body select,
#rb-body textarea  {
	font-family: 'Malgun Gothic','맑은 고딕',dotum,'돋움',sans-serif, FontAwesome;
}


/*
 * 2 - Structure 구조 
 *
 * ----------------------------------------------------------------------------
 */

/* container : 여백 사이즈 조정 bootstrap gutter-width */
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 10px;
  padding-right: 10px;
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 10px;
  padding-right: 10px;
}
/*container 내부 여백 초기화*/
.rb-padding-reset {
  margin: 0 -10px;
}
.container > .navbar-header, 
.container-fluid > .navbar-header, 
.container > .navbar-collapse, 
.container-fluid > .navbar-collapse {
  margin-right: -10px;
  margin-left: -10px;
}
.navbar-brand {
  padding-left: 10px;
  padding-right: 10px;
}
.navbar-toggle {
  margin-right: 10px;
}
.rb-navbar-left {
  float: left;
  margin-left: 5px;
}
.rb-navbar-right {
  float: right;
  margin-right: 10px;
}
/*grid : 여백 사이즈 조정 bootstrap gutter-width */
.row {
  margin-left: -10px;
  margin-right: -10px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 10px;
  padding-right: 10px;
}


/*header : 여백 사이즈 조정 bootstrap gutter-width */
.container > .navbar-header {
  margin-left: -10px;
  margin-right: -10px;
}
.container > .navbar-header .navbar-brand {
  padding-left: 10px;
  padding-right: 10px;
}
.container > .navbar-header .navbar-toggle {
  margin-right: 10px;
}

/*page-header : 여백 사이즈 조정 bootstrap gutter-width */
.container > .rb-page-header {
  margin-left: -10px;
  margin-right: -10px;
  padding-left: 10px;
  padding-right: 10px;
}

/*footer : 여백 사이즈 조정 bootstrap gutter-width*/
.container > .rb-footer {
  margin-left: -10px;
  margin-right: -10px;
  padding-left: 10px;
  padding-right: 10px;
}

/*sidebar : 여백 사이즈 조정 bootstrap gutter-width */
.snap-drawer .container {
	padding-left: 15px;
	padding-right: 15px;
}
.snap-drawer .navbar-form {
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 15px;
	padding-right: 15px;
}
.snap-drawer .navbar-nav {
  margin: 0 -15px;
}
.snap-drawer .nav > li > a {
	padding-left: 15px;
	padding-right: 15px;
}

/*컨텐츠 영역 위치 지정, fixed header 또는 footer 의 높이에 따라 변경필요 */
.rb-content-position {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.rb-content-position-top {
    top: 50px;
}
.rb-content-position-bottom {
    bottom: 50px;
}
.rb-content-position-topbottom {
    top: 50px;
    bottom: 50px;
}

/*
 * 3 - Header 헤더 
 * ----------------------------------------------------------------------------
 */
.container > .navbar-header .rb-navbar-item {
  padding: 5px 7px;
  height: auto;
}

/*
 * 4 - Content 컨텐츠
 * ----------------------------------------------------------------------------
 */

.snap-content {
	background-color: inherit;
}
.snap-content { 
	backface-visibility:hidden;
	-webkit-backface-visibility:hidden; /* Chrome and Safari */
	-moz-backface-visibility:hidden; /* Firefox */
	-ms-backface-visibility:hidden; /* Internet Explorer 10+ */
}
.rb-padding-side-none {
	padding-right: 0;
	padding-left: 0;
 }
.scrollable {
    overflow: auto;
    -webkit-transition-property: top, bottom;
    transition-property: top, bottom;
    -webkit-transition-duration: .2s, .2s;
    transition-duration: .2s, .2s;
    -webkit-transition-timing-function: linear, linear;
    transition-timing-function: linear, linear;
    -webkit-overflow-scrolling: touch;
}
/* Hack to force all relatively and absolutely positioned elements still render while scrolling
   Note: This is a bug for "-webkit-overflow-scrolling: touch" */
.rb-scrollable > * {
  -webkit-transform: translateZ(0px);
          transform: translateZ(0px);
}
#content {
  padding-top: 20px
}
/*page-header*/
#content .page-header {
  margin-top: -20px;
  margin-bottom: 20px;
}

/*
 * 5 - Sidebar 사이드바 
 * ----------------------------------------------------------------------------
 */

.snap-drawer-left {
	box-shadow: inset -8px 0 6px -6px rgba(0,0,0,1);
}
.snap-drawer-right {
	box-shadow: inset 8px 0 6px -6px rgba(0,0,0,0.2);
}
.snap-drawer .container {
	width: 100% !important;
}

.snap-drawer .navbar {
  min-height: 100%;
  margin-bottom: 0;
  padding-bottom: 15px;
}
.snap-drawer .navbar-brand {
  float: none;
}
.snap-drawer .navbar-form {
  border-top: none;
  margin-top: 0;
  margin-bottom: 0;
}
.snap-drawer .navbar-nav.navbar-form {
  padding: 0;
  padding-left: 0;
  padding-right: 0
}

#snap-drawer-search {
	-webkit-box-shadow: inset 0 1px 2px -1px rgba(0, 0, 0, 0.5),0 1px 2px -1px rgba(255, 255, 255, 0.4);
	   -moz-box-shadow: inset 0 1px 2px -1px rgba(0, 0, 0, 0.5),0 1px 2px -1px rgba(255, 255, 255, 0.4);
	        box-shadow: inset 0 1px 2px -1px rgba(0, 0, 0, 0.5),0 1px 2px -1px rgba(255, 255, 255, 0.4);
}
#snap-drawer-search:focus {
	outline: none;
}
/* Styles for fading out the drawer content in the "Expanding" demo */
.drawer-inner {
	-webkit-transition: opacity 0.3s ease; 
	   -moz-transition: opacity 0.3s ease; 
	    -ms-transition: opacity 0.3s ease; 
	     -o-transition: opacity 0.3s ease; 
	        transition: opacity 0.3s ease; 
}
.snapjs-expand-left .drawer-inner,
.snapjs-expand-right .drawer-inner {
	opacity: 0;
}

/*
 * 6 - Footer 풋터
 * ----------------------------------------------------------------------------
 */

.rb-footer {
  padding-top: 30px;
  padding-bottom: 15px;
  margin-top: 30px;
  text-align: center;
  border-top: 1px solid #e5e5e5;
}
.rb-footer p {
  margin: 0 0 15px;
}

/* navbar-fixed-bottom */
.navbar-fixed-bottom .bootstrap-select.btn-group {
    margin-bottom: 0 !important;
}

.navbar-fixed-bottom .dropdown-menu > li > a {
    font-size: 22px;
}
/*bootstrap-select 패치*/
.bootstrap-select.btn-group .dropdown-menu li > a:hover small,
.bootstrap-select.btn-group .dropdown-menu li > a:focus small {
    color: #666 !important;
}



/*
 * 7 - Modal 모달
 * ----------------------------------------------------------------------------
 */

.rb-modal-profile .modal-body {
  padding: 0
}
.rb-modal-profile .modal-body .btn {
  border: 0 ;
  border-radius: 0;
}
.rb-modal-profile .media {
    margin-top: 0;
}
.rb-modal-profile .list-group {
  max-height: 350px;
  overflow: auto;
}
.rb-modal-profile .rb-avatar {
  width: 50px;
  height: 50px;
}
.rb-modal-profile .list-group {
  margin-bottom: 0;
  box-shadow: none;
  border-radius: 0;
  border: 0;
}
.rb-modal-profile .list-group-item:first-child {
  border-top-right-radius: 4px; 
  border-top-left-radius: 4px; 
  border-top: 0;
}
.rb-modal-profile .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.rb-modal-profile .modal-footer {
  margin-top: -1px;
  padding: 0;
}
.rb-modal-profile .modal-footer .btn {
  border: 0 ;
  border-radius: 0;
  padding: 12px;
}  


/*
 * 8 - etc 기타
 * ----------------------------------------------------------------------------
 */

/*Preloader*/
#preloader {
	position:fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color: #ffffff;
	z-index:999999; 
}
.spinner {
	margin: 150px auto 0;
	width: 70px;
	text-align: center;
	position:fixed;
	z-index:999999;
	width:250px;
	height:250px;
	position:absolute;
	left:50%; 
	top:50%; 
	background-size:32px 32px;
	background-repeat:no-repeat;
	background-position:center;
	margin:-125px 0 0 -125px; 
}
.spinner > div {
	width: 18px;
	height: 18px;
	background-color: #ccc;
	border-radius: 100%;
	display: inline-block;
	-webkit-animation: bouncedelay 1.4s infinite ease-in-out;
	animation: bouncedelay 1.4s infinite ease-in-out;
	/* Prevent first frame from flickering when animation starts */
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}
.spinner .bounce1 {
	-webkit-animation-delay: -0.32s;
	animation-delay: -0.32s;
}
.spinner .bounce2 {
	-webkit-animation-delay: -0.16s;
	animation-delay: -0.16s;
}
@-webkit-keyframes bouncedelay {
	0%, 80%, 100% { -webkit-transform: scale(0.0) }
	40% { -webkit-transform: scale(1.0) }
}
@keyframes bouncedelay {
  0%, 80%, 100% {
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 40% {
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}


