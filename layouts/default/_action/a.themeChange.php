<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_SESSION['nowTheme'] = $changeTheme;

getLink($_SERVER['HTTP_REFERER'],'','','');
?>