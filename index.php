<?php include "init.php"; ?>
<?="<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body><h1>";?>

<?php
$circle = new Circle(2.5);
echo "Circle perimeter: ". $circle->perimeter() . "<br/>";
echo "Circle area: ". $circle->area(). "<br/>";
$triangle = new Triangle(4, 5, 6, 2);

$triangle = new Triangle(5,4,4,3);
echo "Triangle perimeter: ". $triangle->perimeter(). "<br/>";
echo "Triangle area: ". $triangle->area(). "<br/>";
?>


<?="</h1></body>
</html>";?>
