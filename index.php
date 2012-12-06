<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if(($detect->isMobile())||($detect->isTablet())){
if ($detect->isMobile()) {
    // Any mobile device.
echo "vous etez sur un telephone portable";
}
if($detect->isTablet()){
    // Any tablet device.
 echo "vous etez sur un sur une tablette";
}
   
   

}
 else echo "vous etez sur un ordinateur";

/*if($detect->isAndroidOS()){
    // Code to run for the Google's Android platform.
    echo "vous etez sur un portable";
};*/

?>