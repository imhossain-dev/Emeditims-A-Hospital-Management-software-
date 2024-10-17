<?php

$MorningTime ="09:00:00";
$afternoon = "15:00:00";
$NightTime = "21:00:00";
$conn = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");

$query="select * from `prescription`";
$query_run=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($query_run)){
foreach ($row as $pat){

if (time() == strtotime($MorningTime) && ($pat['time'] == "Morning" || $pat['time'] == "Morning and Night")) {


 $to = $pat['email'];
 $from = "emeditimes@gmail.com";
 $subject = "Medicine";
 
 $message = "Hello Sir, it's time to take your medicine.";

 
 $header = "From:$from";
 // $header .= "Cc:afgh@somedomain.com \r\n";
 // $header .= "MIME-Version: 1.0\r\n";
 // $header .= "Content-type: text/html\r\n";
 
 $retval = mail ($to,$subject,$message,$header);
 
 if( $retval == true ) {
    echo "Email Message sent successfully to $to...";
 }else {
    echo "Message could not be sent...";
 }

}
elseif (time() == strtotime($NightTime) && ($pat['time'] == "Night" || $pat['time'] == "Morning and Night")) {
$to = $pat['email'];
 $from = "emeditimes@gmail.com";
 $subject = "Medicine";
 
 $message = "Hello Sir, it's time to take your medicine.";

 
 $header = "From:$from";
 // $header .= "Cc:afgh@somedomain.com \r\n";
 // $header .= "MIME-Version: 1.0\r\n";
 // $header .= "Content-type: text/html\r\n";
 
 $retval = mail ($to,$subject,$message,$header);
 
 if( $retval == true ) {
    echo "Email Message sent successfully to $to...";
 }else {
    echo "Message could not be sent...";
 }
}
}
}

?>