<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            width: 50%;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Grade Calculator</h1>
    <div class="container">
        <?php
        // Function to calculate the corresponding letter grade
        function calculateGrade($average)
        {
            if ($average >= 90) {
                return 'A';
            } elseif ($average >= 80) {
                return 'B';
            } elseif ($average >= 70) {
                return 'C';
            } elseif ($average >= 60) {
                return 'D';
            } else {
                return 'F';
            }
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = floatval($_POST["score1"]);
            $score2 = floatval($_POST["score2"]);
            $score3 = floatval($_POST["score3"]);

            $average = ($score1 + $score2 + $score3) / 3;
            $grade = calculateGrade($average);

            echo "<p>Average Score: $average</p>";
            echo "<p>Letter Grade: $grade</p>";
        }
        ?>

        <form method="POST" action="">
            <label for="score1">Test Score 1:</label>
            <input type="text" id="score1" name="score1" required>
            <br>
            <label for="score2">Test Score 2:</label>
            <input type="text" id="score2" name="score2" required>
            <br>
            <label for="score3">Test Score 3:</label>
            <input type="text" id="score3" name="score3" required>
            <br>
            <input type="submit" value="Calculate Grade">
        </form>
    </div>
</body>

</html>