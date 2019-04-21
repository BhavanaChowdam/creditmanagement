<!DOCTYPE html>
<html>
<style type="text/css">
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-image: linear-gradient(rgba(0,0,0,5),rgba(0,0,0,0.3)),url("im.jpg");
 background-size: cover; 
}
form{
width: 600px;
position : absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
color:gold;
}
h2{
font-size: 25px;
 color: yellow;
}
table{
color: white;

}
th{
backgrond-color: #d96459;
font-size: 23px;
color: pink;
}
tr{
font-size: 20px;
color:black;
}

.btn{
width: 100px;
background:grey ;
border 2px GREEN;
color:black;
padding: 5px;
font-size:13px;
font-weight:bold;
cursor: pointer;
margin: 12px 0;
}
.but{
width: 100px;
background: grey;
border 2px GREEN;
color:black;
padding: 5px;
font-size: 13px;
font-weight:bold;
cursor: pointer;
margin: 12px 0;
}
}

</style>
</head>
<body><form>
<center>
<br><br><br><br><br>
<h2>LIST OF USERS</h2>
<table>
<tr>
<th>USER NAME</th>
<th>E-MAIL</th>
<th>CREDITS</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","users");
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$sl="SELECT * FROM details";
$result=$conn->query($sl);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc()){

echo "<tr><td>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["credit"] ."</td></tr>";
}
echo "</table>";
}
else{
echo "0 results";
}
$conn->close();
?>
</center>
</table>
<br>
<br>
<center>
<a href="transfer.html"><input type="button" class="btn" value="SELECT USER"></button></a>
<a href="web.html"><input type="button"  class="but" value="BACK"></button></a></center>
</form>
</body>
</html>
