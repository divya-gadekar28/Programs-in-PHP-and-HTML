/*. Write a menu driven program to perform the following operations on associative arrays:
a)	Merge the given arrays.
b)	Find the intersection of two arrays.
c)	Find the union of two arrays.
d)	Find set difference of two arrays.
*/

<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
1. Merge the given array<br>
2. intersection of two array<br>
3. union of two array.<br>
4. set difference of two array.<br>
<input type="number" name="choice"><br>
<input type="submit">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$ch=$_POST['choice'];
$a=array('a'=>100,'b'=>200,'c'=>300);
$b=array('c'=>300,'b'=>500,'f'=>600);
switch($ch):
case '1':
$c=array_merge($a,$b);
print_r($c);
break;
case'2':
$c=array_intersect($a,$b);
print_r($c);
break;
case '3':
$c=$a+$b;
print_r($c);
break;
case '4':
$c=array_diff($a,$b);
print_r($c);
break;
endswitch;
}
?>
