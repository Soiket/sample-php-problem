<!DOCTYPE html>
<html>

<head>

    <title>CGPA Calculator</title>
    <style>
        body {
            text-align: center;
            padding: 200px;
        }
    </style>


</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter your marks: <input type="number" name="marks">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $marks = $_POST['marks'];

        switch ($marks) {
            case ($marks <= 39 && $marks >= 0):
                echo "Sorry you are fail. Better luck for next time";
                break;
            case ($marks <= 44 && $marks >= 40):
                echo "Passed ! You got GPA = D & Point is 2.00";
                break;
            case ($marks <= 49 && $marks >= 45):
                echo "Passed ! You got GPA = C & Point is 2.25";
                break;
            case ($marks <= 54 && $marks >= 50):
                echo "Passed ! You got GPA = C+ & Point is 2.50";
                break;
            case ($marks <= 59 && $marks >= 55):
                echo "Passed ! You got GPA = B- & Point is 2.75";
                break;
            case ($marks <= 64 && $marks >= 60):
                echo "Passed ! You got GPA = B & Point is 3.00";
                break;
            case ($marks <= 69 && $marks >= 65):
                echo "Passed ! You got GPA = B+ & Point is 3.25";
                break;
            case ($marks <= 74 && $marks >= 70):
                echo "Passed ! You got GPA = A- & Point is 3.50";
                break;
            case ($marks <= 79 && $marks >= 75):
                echo "Passed ! You got GPA = A & Point is 3.75";
                break;
            case ($marks <= 100 && $marks >= 80):
                echo "Passed <br> Cograts ! You got GPA = A+ & Point is 4.00";
                break;
            default:
                echo "Invalid Input";
        }
    }
    ?>


</body>

</html>