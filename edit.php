<html>
<head>
<style>
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


<table style="width:100%" bgcolor="#6b8a69">
<col width="10">
  <col width="180">
  <tr class="serif">
    <th height="60" align="center" width="20%"><font size="6" color="white"/>Company Name</th>
  </tr>
</table>
</style>
</head>
<body>
<center>
<form action="edit2.php" method="GET">
<table>
<tr>
<td>Enter Your previous  Block Id:</td>
<td><input  type="text" name="bid" required></td>
</tr>
<tr>
<td>Enter Color         :</td>
<td><input  type="text" name="color" required></td>
</tr>
<tr>
<td>
   Enter Quantity:</td>
<td><input  type="text" name="quantity" required></td>
</tr>
</table>
<br>
<input type="submit"  name="save"  value="SAVE" style="width: 5%; height: 5%;">
</form>
</center>

</body>
</html>