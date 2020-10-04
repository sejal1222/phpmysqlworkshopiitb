<html>
<body>
    <form action="q2_string_functions.php" method="POST">
        <label for="name">Enter any string</label>
        <input type="text" name="name">
        <br>
        <input type="submit">
    </form>
</body>
</html>

<?php
$string = $_POST["name"];
if($string){

echo "<h2>String Functions</h2>";
echo "Entered string is: ".$string;
echo "<br>";
echo "1.No of characters in this string are: ".strlen($string);
echo "<br>";
$arr=explode(" ",$string);
echo "2.String to Array: ";
print_r($arr);
echo "<br>";
echo "3.Reversed string: ".strrev($string)."<br>";
echo "4.String in lower case: ".strtolower($string)."<br>";
echo "5.String all in lower case: ".strtoupper($string)."<br>";
$substring = substr($string,0);
echo "6.String after replacing with substring: ".str_replace($substring,"abcd",$string);

}
?>
