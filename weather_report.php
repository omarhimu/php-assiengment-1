<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
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
    </style>
</head>

<body>
    <h2>Weather Report</h2>
    <form method="post">
        <label for="temperature">Enter Temperature (°C):</label>
        <input type="number" id="temperature" name="temperature" required>
        <button type="submit">Check Weather</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];

        if ($temperature <= 0) {
            echo "<p style='background-color: #6ab0e1;'>It's freezing!</p>";
        } elseif ($temperature > 0 && $temperature <= 15) {
            echo "<p style='background-color: #98c945;'>It's cool.</p>";
        } else {
            echo "<p style='background-color: #f68b3c;'>It's warm.</p>";
        }
    }
    ?>
</body>

</html>