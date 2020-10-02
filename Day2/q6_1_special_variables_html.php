<html>
<body>
        


<form action="q6_1_special_variables_html.php" method="GET">
Side 1 <input type="text" name="side1" ><br><br>
Side 2 <input type="text" name="side2" ><br><br>
Side 3 <input type="text" name="side3" ><br><br>
<input type="submit" value='check'><br><br>

</form>





</body>

</html>



<?php 

if (isset($_GET["side1"]) && isset($_GET["side2"]) && isset($_GET["side3"]))
{
        $side1 = $_GET["side1"];
        $side2 = $_GET["side2"];
        $side3 = $_GET["side3"];
};


if($side1 == 0 || $side2==0 || $side3 == 0){
        echo "provide side lengths of the triangle.";
}
elseif($side1 == $side2 && $side2 == $side3){
        echo "It is an equilateral triangle";
}
elseif ($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {

        echo "It is an isosceles triangle";
}
else{
        echo "It is a scalene triangle";
}

?>