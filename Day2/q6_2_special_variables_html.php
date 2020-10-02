<html>
  <body>
    <form action="q6_2_special_variables_html.php" method="POST">
      Name of Student <input type="text" name="name" /><br /><br />
      Marks in each subject: <br /><br />
      Subject 1: <input type="number" name="s1" /><br /><br />
      Subject 2: <input type="number" name="s2" /><br /><br />
      Subject 3: <input type="number" name="s3" /><br /><br />
      Subject 4: <input type="number" name="s4" /><br /><br />
      Subject 5: <input type="number" name="s5" /><br /><br />

      <input type="submit" value="submit" /><br /><br />
    </form>
    <?php 
        if(isset($_POST['s1'], $_POST['s2'], $_POST['s3'], $_POST['s4'], $_POST['s5'], $_POST['name'])) {
                $s1 = (int)$_POST['s1'];
                $s2 = (int)$_POST['s2'];
                $s3 = (int)$_POST['s3'];
                $s4 = (int)$_POST['s4'];
                $s5 = (int)$_POST['s5'];
                
        if($s1 == 0 || $s2 == 0 || $s3 == 0 || $s4==0 || $s5 ==0 || $name == ''){
          echo "please fill all fields.";
        }
        else{
        $total = $s1 + $s2 + $s3 + $s4 + $s5;
        $avg = ($total/500);
        $per = $avg*100;

        echo "Total marks obtained: $total <br>";
        echo "Total marks: 500 <br>";
        echo "Percentage: $per <br>"; 
      }
        } 
        else {
          echo "Fill all fields";
        }
?>
  </body>
</html>