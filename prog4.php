/* Write a PHP script for the following: Design a form to accept the details of 5 different items, such as item code, item name, units sold, rate. 
Display the bill in the tabular format. 
Use only 4 text boxes. (Hint : Use of explode function.) */

<html>
<body>
<h3>Enter item details</h3>
<form method="POST">
<label>Enter details(code,name,units sold,rate):</label><br>
<textarea name="details" row=""5 cpls="50">
</textarea><br>
<input type="submit" value="Generate Bill">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
$details=$_POST['details'];
$items = explode("\n",$details);
echo"<h2> Bill Details</h2>";
echo"<table border='1'>";
echo"<tr><th>Item code</th>
 <th>Item Name</th>
 <th>Rate</th>
 <th>units</th>
 <th>Total</th>
 </tr>";
foreach($items as $item)
{
 list($code,$name,$units,$rate)=explode(",", $item);
 $total=$units*$rate;
 echo"<tr>
 <td>$code</td>
<td>$name</td>
<td>$units</td>
<td>$rate</td>
<td>$total</td>
 </tr>";
}
echo"</table>";
?>
</body>
</html>

