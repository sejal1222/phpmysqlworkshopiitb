<form action="q3_file_upload.php" method="POST" enctype="multipart/form-data">
    <p>Upload your file</p>
    <input type="file" name="file"> <br>
    <input type="submit" name="submit" value="Upload">
</form>
<?php
if (@$_POST['submit']) {
    echo "File name:".$_FILES['file']['name'];
    echo "<br>Size of file:".$_FILES['file']['size']."Bytes";
    echo "<br>Type of file:".$_FILES['file']['type'];
}
?>