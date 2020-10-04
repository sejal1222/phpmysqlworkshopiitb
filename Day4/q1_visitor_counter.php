<?php
        $file = file_get_contents("./visitorcount.txt");

        $visitors = $file;

        

        $newvisitors = $visitors +1;
        echo "Total No. of visitors $newvisitors ";
        $filenew = fopen("./visitorcount.txt","w");
        fwrite($filenew,$newvisitors);

?>