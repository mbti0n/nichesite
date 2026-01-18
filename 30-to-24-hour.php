<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan's 30-Hour to 24-Hour Time Converter - NicheSite</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
    <h1><a id="homeLink" href="index.php">NicheSite</a></h1>
    <div>
        <h1>Japan's 30-Hour Clock Converter</h1>

        <p><a id="linkHover" href="24-to-30-hour.php">24-hour → 30-hour format</a><strong> / 30-hour → 24-hour format</strong></p>
        <p><strong>Time to convert</strong> (30-hour, 06-29)</p>

        <form method="post" action="30-to-24-hour.php">
            <input type="number" min="6" max="29" name="hour" placeholder="hr"><strong> : </strong>
            <input type="number" min="-1" max="59" name="minute" placeholder="min"><br><br>

            <input id="customButton" type="submit" value="Submit">

        </form>

        
        <?php 
        date_default_timezone_set("America/New_York");

        if (!isset($_POST['hour']) || $_POST['hour'] === "" || !isset($_POST['minute']) || $_POST['minute'] === "") {
            $hour = date("H");
            $minute = date("i");
        } else {
            $hour = $_POST['hour'];
            $minute = $_POST['minute'];
        }

        echo "<hr>";

        echo "<p><strong>Time in Japan's 30-hour time format is: " . sprintf("%02d", $hour) . ":" . sprintf("%02d", $minute) . "</strong></p>";


        if ($hour > 23 && $hour < 30) {
            echo "<p><strong>Time in standard time format is:</strong></p><h2 id=\"timeResult\">" . sprintf("%02d", $hour - 24) . ":". sprintf("%02d", $minute) . "</h2>";
        } else {
            echo "<p><strong>Time in standard time format is:</strong></p><h2 id=\"timeResult\">" . sprintf("%02d", $hour) . ":" . sprintf("%02d", $minute) . "</h2>";
        }
        ?></h2>
    </div>

    <div id="extraDiv">
        <h2>How It Works</h2>
        <p>The 30-hour format in Japan is commonly used in transportation schedules, TV guides, and night event listings. This helps avoid confusion for late-night events.</p>
        <p>Instead of resetting to 12:00 AM or 00:00 after midnight, the clock continues past 24:00 until 29:59, which corresponds to 5:59 AM (05:59). For example, 1:00 AM (01:00) in standard 24-hour time format is 25:00 in Japan's 30-hour time format, 4:30 AM (04:30) becomes 28:30, and so on. Once the clock reaches 6:00 AM (06:00), it returns to the normal 24-hour format.
    </div>

    <hr>
    <footer>
        <p>NicheSite is made by MBtion with love. 2026-<?php echo date("Y");?></p>
    </footer>
</body>
</html>