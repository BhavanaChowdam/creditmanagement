<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Refresh" content="2.5;
    url=user.php"/>
<style>
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-image: linear-gradient(rgba(0,0,0,5),rgba(0,0,0,0.3)),url("im.jpg");
 background-size: cover; 
}
.box{
width: 600px;
position : absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
color:lightpurple;
}
</style>
</head>
<body>
<div class="box">
 <center>
<?php
$conn = mysqli_connect("localhost","root","","users");
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$credit=$_POST['credit'];
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$record="SELECT credit from details WHERE username='$sender'";
$result=mysqli_query($conn,$record);
$row=mysqli_fetch_assoc($result);
$num=(int)implode('',$row);
if($credit>$num){
echo "INSUFFICIENT CREDIT BALANCE!!!!";
echo "<br>". $num;
}
elseif($sender==$receiver)
{
echo "ENTERDE SENDER AND RECEIVER ARE SAME.....TRY AGAIN!!";

}
elseif($credits==0){
echo "CREDITS ENTERED AS ZERO...TRY AGAIN!";
}
else{
$sl="INSERT INTO transfers(sender,receiver,credit) VALUES('$_POST[sender]','$_POST[receiver]','$_POST[credit]')";
mysqli_query($conn,"UPDATE details SET credit = credit - '$credit' WHERE username='$sender'");
mysqli_query($conn,"UPDATE details SET credit = credit + '$credit' WHERE username='$receiver'");
echo "TRANSFERRED SUCCESSFULLY!!!!";
}
?>
</div>
</body>
</html>