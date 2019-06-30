<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#table1 {
  border-collapse: collapse;
}
.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 6px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
border-radius: 6px;

  margin: 4px 2px;
  cursor: pointer;
}
input[type=text] {
  width: 200px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 16px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 20px 20px;
  background-repeat: no-repeat;
  padding: 6px 6px 6px 30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
tr.serif {
  font-family: Arial, Helvetica, sans-serif;
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
<body>
<form action="newblock.php" method="POST">
<table style="width:100%" bgcolor="#6b8a69">
<col width="10">
  <col width="180">
  <tr class="serif">
 
    <th  width="20%" height="60" align="center"><font size="6" color="white"/>Company Name</th>
  
    <th align="right"><button class="button button4" name="save"><b>Add  new block</b></button></th>
   
  </tr>
</table>
</form>
<table width="100%">
<tr>
<td width="80%"><font size="5"</font><b>DashBorad</b></h2></td>
<td align="right" width="20%">
<input type="text" name="search" placeholder="Search">
</td>
</tr>
</table>
<br>
<?php
$servername = "localhost";
$username = "raju22";
$password = "rajunaidu548";
$dbname="mydatabase1";
$tab="internshala";

$conn=mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM internshala";
$result = $conn->query($sql);
echo "<table border='1' width='100%' id='table1'>

<tr height='34'>
<th  bgcolor='#93a16c'  width='15%'>BLOCK ID</th>
<th  bgcolor='#93a16c' width='15%'>COLOR</th>
<th  bgcolor='#93a16c' width='15%'>QUANTITY</th>
<th  bgcolor='#93a16c'  width='100%'></th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";

  echo "<td>" . $row['block_id'] . "</td>";

  echo "<td>" . $row['color'] . "</td>";

  echo "<td>" . $row['quantity'] . "</td>";
 $var=$row['block_id'];
echo '<td>
<form action="edit.php" method="POST">
<input type="hidden" name="id1" value="<? php echo $var ?>"/>
<input type="submit" value="Edit"  class="btn" style="float: right;">
</form>
</td>';
  echo "</tr>";
    }
}
  
echo "</table>";
$conn->close();
?>

</body>

</html>

