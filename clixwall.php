<?php
$api = ""; // Your Clixwall website API Code here
session_start();
include_once('lib/lib.php');
include_once('lib/configuration.php');
include_once('lib/lib_security.php');
include_once("banned_chk.php");
$ddir = THDIR . $do->get_file_url();
include($ddir);
if (file_exists(HEADER)) {
    include_once(HEADER);
}
if ($loggedin) {
?>
    <iframe src="http://www.clixwall.com/wall?api=<?php echo $api; ?>&user=<?php echo $ir['username']; ?>&email=<?php echo $ir['email']; ?>&country=<?php echo $ir['country']; ?>&name=<?php echo $ir['username']; ?>&avatar=<?php echo $ir['avatar']; ?>&gender=<?php echo $ir['gender']; ?>&dob=<?php echo $ir['dobirth']; ?>" width="100%" height="800px" style="border:0; padding:0; scrolling=" auto" margin:0;" frameborder="0" /><a href="http://www.clixwall.com/wall?api=<?php echo $api; ?>&user=<?php echo $ir['username']; ?> " target="_blank">iFrames are required to see this page. Please click here!</a></iframe>
<?php
} else {
    $do->login_return();
}
if (file_exists(FOOTER)) {
    include_once(FOOTER);
}
?>
