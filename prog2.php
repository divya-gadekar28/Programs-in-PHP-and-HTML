/*Write a PHP program to define Interface shape which has two method as area() and volume(). Define a constant PI. 
Create a class Cylinder implement this interface and calculate area and Volume.*/

<html>
<body>
<h2>calculating area and volume</h2>
<form action='ass4_a1.php' method='get'>
enter radius<input type='text' name='rad'>
enter height<input type='text' name='hei'>
<input type='submit' name='show' value='submit'>
<input type='reset' name='reset' value='reset'>
</body>
</html>

<?php
$r=$_GET['rad'];
$h=$_GET['hei'];
define('pi','3.14');
interface shape{
funtion area($r,$h);
function volume($r,$h);
}
class cylinder implements shape{
function area($r,$h){
$area=2*pi*$r*($r+$h);
echo"area of cylinder:".$area;
}
function volume($r,$h){
#vol=pi*$r*$r*$h;
echo "volume of cylinder:".$vol;
}
}
$c=new cylinder;
$c->area($r,$h);
$c->volume($r,$h);
?>

