<?php
//fichier index
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if(($detect->isiOS())||($detect->isAndroidOS())){
    // Code to run for the Apple's iOS platform.
    echo "vous etez sur un telephone portable";
}
 else echo "vous etez sur un ordinateur";

/*if($detect->isAndroidOS()){
    // Code to run for the Google's Android platform.
    echo "vous etez sur un portable";
};*/
 
?>