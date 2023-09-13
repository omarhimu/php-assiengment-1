<!DOCTYPE html>
<html>

<head>
    <title>Comparison Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        p {
            font-size: 18px;
            margin: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        form {
            margin: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            width: 60px;

        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .formcss1,
        .formcss2 {
            padding: 10px;
            margin: 10px;
            background-color: #eaeaea;
        }
    </style>
</head>

<body>
    <div class="formcss">
        <h2>Comparison Tool</h2>
        <form method="post">
            <div class="formcss1">
                <label for="num1">Enter First Number:</label>
                <input type="number" id="num1" name="num1" required>
                <br>
            </div>
            <div class="formcss2">
                <label for="num2">Enter Second Number:</label>
                <input type="number" id="num2" name="num2" required>
                <br>
            </div>
            <button type="submit">Compare Numbers</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = ($num1 > $num2) ? $num1 : $num2;

        echo "<p>The larger number is: $result</p>";
    }
    ?>
</body>

</html>