<?php
include $g['path_layout'].$d['layout']['dir'].'/_var/_var.php';

if (isset($_layoutAction))
{
	include $g['path_layout'].$d['layout']['dir'].'/_action/a.'.$_layoutAction.'.php';
	exit;
}

if (isset($_layoutSettings)) {
    if (!$my['admin']) getLink($g['s'] . '/?r=' . $r, '', '권한이 없습니다.', '');
    $g['main'] = $g['path_layout'] . $d['layout']['dir'] . '/_settings/main.php';
    $g['dir_module_mode'] = $g['path_layout'] . $d['layout']['dir'] . '/_settings/main';
    $g['url_module_mode'] = $g['s'] . '/layouts/' . $d['layout']['dir'] . '/_settings/main';
    $d['layout']['_twhite'] = false;
}


if (isset($_layoutPage))
{
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_layoutPage.'.php';
	if (strpos($_layoutPage,'jax/'))
	{
		include $g['main'];
		exit;
	}
	else {
		$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_layoutPage;
		$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_pages/'.$_layoutPage;
	}
}
?>