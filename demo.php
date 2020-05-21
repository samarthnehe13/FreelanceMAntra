<!DOCTYPE html> 
<html>
<body>
    <p id="fake">Hey this is a demo page!</p>

    <button type="button" onclick="document.getElementById('fake').style.color='red'">Click Me</button>
    <?php
    $myfile = fopen("C:\Users\DELL\Desktop\sam.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
</body>
</html>