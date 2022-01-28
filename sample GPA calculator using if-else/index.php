<!DOCTYPE html>
<html>
<head>
    
<title> Calculator</title>
<style>

body{
    text-align:center;
    padding: 200px;
}
</style>


</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter your marks: <input type="number" name="marks">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $marks = $_POST['marks'];
    
    if($marks <= 32 && $marks >= 0){
        echo "Sorry you are fail.<br> Better luck for next time";
    }
    elseif($marks <= 39 && $marks >= 33){
        echo "Passed ! You got GPA = D";
    }
    elseif($marks <= 49 && $marks >= 40){
        echo "Passed ! You got GPA = C";
    }
    elseif($marks <= 59 && $marks >= 50){
        echo "Passed ! You got GPA = B";
    }
    elseif($marks <= 69 && $marks >= 60){
        echo "Passed ! You got GPA = A-";
    }
    elseif($marks <= 79 && $marks >= 70){
        echo "Passed ! You got GPA = A";
    }
    elseif($marks <= 100 && $marks >= 80){
        echo "Passed ! Congrats !! <br> You got GPA = A+";
    }
    else{
        echo "Invalid Input";
    }
}
?>


</body>

</html>