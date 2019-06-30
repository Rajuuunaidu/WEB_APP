<html>
<head>
<style>
input {
  outline: 0;
  border-width: 0 0 2px;
  border-color: black
}
input:focus {
  border-color: green
}
.button {
  background-color: #FFFFFF; 
 
  color: black;
  padding: 11px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  
  margin: 4px 20px;
  cursor: pointer;
}
.button4 {border-radius: 10px;}
.button3 {border-radius: 10px;}
</style>

</head>
<body >

<form action="sainath2.php" method="POST">
<table style="width:100%" bgcolor="#6b8a69">
<col width="10">
  <col width="180">
  <tr class="serif">
    <th height="60" align="center" width="20%"><font size="6" color="white"/>Company Name</th>
  </tr>
</table>
<?php
if(isset($_GET['save']))
{
$bid=$_GET['bid'];
$color=$_GET['color'];
$qnt=$_GET['quantity'];
$servername = "localhost";
$username = "raju22";
$password = "rajunaidu548";
$dbname="mydatabase1";
$tab="internshala";

$conn =mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO internshala (block_id, color, quantity)
VALUES('$bid','$color','$qnt')";
if (mysqli_query($conn, $sql)) {
    header('Location:gret.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
</form>
<br>
<center>
<form action="" method="GET">
<table>
<tr>
<td>1.Enter Block Id:</td>
<td><input  type="text" name="bid" required></td>
</tr>
<tr>
<td>2.Enter Color         :</td>
<td><input  type="text" name="color" required></td>
</tr>
<tr>
<td>
   3.Enter Quantity:</td>
<td><input  type="text" name="quantity" required></td>
</tr>
</table>
<br>
<button name="save" style="width: 6%; height: 5%;">SAVE</button>
</form>
</center>

</body>
</html>