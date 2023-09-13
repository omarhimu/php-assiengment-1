<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
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

        select {
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
    <h1>Temperature Converter</h1>
    <div class="container">
        <?php
        // Function to convert Celsius to Fahrenheit
        /**
         * Summary of celsiusToFahrenheit
         * @param mixed $celsius
         * @return float
         */
        function celsiusToFahrenheit($celsius)
        {
            return ($celsius * 9 / 5) + 32;
        }

        // Function to convert Fahrenheit to Celsius
        function fahrenheitToCelsius($fahrenheit)
        {
            return ($fahrenheit - 32) * 5 / 9;
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];

            if ($conversion == "celsiusToFahrenheit") {
                $result = celsiusToFahrenheit($temperature);
                echo "<p>$temperature &deg;C is equal to $result &deg;F.</p>";
            } elseif ($conversion == "fahrenheitToCelsius") {
                $result = fahrenheitToCelsius($temperature);
                echo "<p>$temperature &deg;F is equal to $result &deg;C.</p>";
            }
        }
        ?>

        <form method="POST" action="" id="tempForm">
            <label for="temperature">Enter Temperature:</label>
            <input type="text" id="temperature" name="temperature" required>
            <br>
            <label for="conversion">Conversion:</label>
            <select id="conversion" name="conversion" required>
                <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
            </select>
            <br>
            <input type="submit" value="Convert">
        </form>
    </div>
</body>

</html>