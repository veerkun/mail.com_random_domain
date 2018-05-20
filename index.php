<?php 
function rand_line_file ($txt_file_path) {
	if(!file_exists($txt_file_path)) return false;
	$lines = file($txt_file_path);
	if(!$lines) return false;
	return $lines[array_rand($lines)];
}
function rand_mail_com() {
	$dir = dirname(__FILE__) . "/mail.com_list.txt";
	return rand_line_file($dir);
}
$rand_domain = rand_mail_com();
?>
<input onClick="this.select();" value="<?php echo $rand_domain; ?>" />
<input onClick="this.select();" value="@<?php echo $rand_domain; ?>" />
<input type="button" value="Reload Page" onClick="window.location.reload()">