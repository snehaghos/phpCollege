<!-- Write a PHP program to input marks of five subjects and calculate total, average, and grade using if–else. -->

<!DOCTYPE html>
<html>
<head>
    <title>Average of Five Subjects</title>
</head>
<body>
    <h2>Calculate Total, Average, and Grade</h2>
    <form method="post" action="">
        Subject 1 Marks: <input type="number" name="subject1" required><br>
        Subject 2 Marks: <input type="number" name="subject2" required><br>
        Subject 3 Marks: <input type="number" name="subject3" required><br>
        Subject 4 Marks: <input type="number" name="subject4" required><br>
        Subject 5 Marks: <input type="number" name="subject5" required><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];
        $subject4 = $_POST['subject4'];
        $subject5 = $_POST['subject5'];

        $total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
        $average = $total / 5;



        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<h3>Results:</h3>";
        echo "Total Marks: " . $total . "<br>";
        echo "Average Marks: " . $average . "<br>";
        echo "Grade = ". $grade;
    }
    ?>
