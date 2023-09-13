<!DOCTYPE html>
<html>

<head>
    <title>Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            padding: 20px;
            width: 80%;
        }

        p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $name = "Md Omar Sharif";
    $age = 25;
    $country = "Bangladesh";
    $introduction = "Hi there! My name is Md Omar Sharif, and I am a recent graduate with a degree in Electrical and Electronics Engineering. When I am not busy with my professional work, I love to play cricket and watch movies. In my spare time, I also enjoy learning coding and developing my skills in web development.

    During my time in university, I discovered my passion for web development and began building my skills in this field. I completed several courses on WordPress and web development from Instructory and Shikbe Shobai, which allowed me to gain a strong foundation in this area.
    
    I then started working on local projects and began freelancing on platforms such as Upwork and Fiverr. Currently, I am working as a web designer at WebEverr and continue to develop my skills in this exciting field. I am dedicated to improving my abilities and hope to become one of the best in the industry within the next two years.
    
    In addition to my professional work, I have also started a web agency called Wpfiners, where I provide WordPress-related solutions. My goal is to grow this business and make it a leading name in the industry.";

    echo "<h1>Personal Information</h1>";
    echo "<div class='container'>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Introduction:</strong> $introduction</p>";
    echo "</div>";
    ?>
</body>

</html>