<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Checker</title>
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

        input[type="number"] {
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
    <h1>Even or Odd Checker</h1>
    <div class="container">
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST["number"]);
            $result = ($number % 2 == 0) ? "even" : "odd";

            echo "<p>The number $number is $result.</p>";
        }
        ?>

        <form method="POST" action="">
            <label for="number">Enter a Number:</label>
            <input type="number" id="number" name="number" required>
            <br>
            <input type="submit" value="Check">
        </form>
    </div>
</body>

</html>