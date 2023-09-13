<!DOCTYPE html>
<html>

<head>
    <title>PHP Tasks</title>
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

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            padding: 0;
            list-style-type: none;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            padding: 15px 10px;

        }

        nav a:hover {
            background-color: #555;
            text-decoration: underline;
        }

        #content {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="?task=personal_info">Personal Info</a></li>
            <li><a href="?task=temperature_converter">Temperature Converter</a></li>
            <li><a href="?task=grade_calculator">Grade Calculator</a></li>
            <li><a href="?task=even_odd_checker">Even/Odd Checker</a></li>
            <li><a href="?task=weather_report">Weather Report</a></li>
            <li><a href="?task=comparison_tool">Comparison Tool</a></li>
            <li><a href="?task=simple_calculator">Simple Calculator</a></li>
        </ul>
    </nav>

    <div id="content">
        <?php
        if (isset($_GET['task'])) {
            $task = $_GET['task'];
            include("$index.php");
        } else {
            echo "<h2>Welcome to PHP Tasks</h2>";
        }
        ?>
    </div>
</body>

</html>
