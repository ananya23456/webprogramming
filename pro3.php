<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h2>Palindrome String Checker</h2>
    <form action="pro3.php" method="post">
        <label for="string">Enter a string:</label>
        <input type="text" name="string" id="string" required>
        <input type="submit" value="Check">
    </form>
    <hr>
    
    <?php
        if(isset($_POST['string'])){
            $string=$_POST['string'];
            $string_arr=str_split($string);
            $reversed=[];

            for($i=count($string_arr)-1;$i>=0;$i--){
                array_push($reversed,$string_arr[$i]);
            }

            if ($string_arr==$reversed) {
                print("<p><strong>\"$string\"</strong> is a palindrome string</p>");
            }else{
                print("<p><strong>\"$string\"</strong> is not a palindrome string</p>");
            }
        }
    ?>
</body>
</html>