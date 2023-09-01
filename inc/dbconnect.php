<?php
// time this page started
// taken from http://php.net/manual/en/function.microtime.php
function getmicrotime(){ 
   list($usec, $sec) = explode(" ",microtime()); 
     return ((float)$usec + (float)$sec); 
   } 

$time_start = getmicrotime();

// Connect to the database server
$dbcnx = @mysqli_connect('localhost', 'martin', 'INKwirey!2021U', 'leobinus_oss');
if (!$dbcnx) {
echo( "<p>Unable to connect to the database server at this time.</p>" );
exit();
}

// Select the oss database
//if (! @mysqli_select_db("leobinus_oss") ) {
//echo( "<p>Unable to locate the oss database at this time.</p>" );
//exit();
//}
?>
