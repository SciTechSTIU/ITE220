<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket Booking</title>
</head>
    <body>
        <?php
            echo "<form action=\"action.php\" method=\"post\">";
            $seats = array('A1', 'A2', 'A3', 'A4', 'A5', 'B1', 'B2', 'B3', 'B4', 'B5', 'C1', 'C2', 'C3', 'C4', 'C5');
            $counter = 1;

            foreach($seats as $seat) {
                echo "<input name=\"selected_seat[]\" type=\"checkbox\" value=\"$seat\">$seat";
                if($counter % 5 == 0) {
                    echo "<br>";
                }
                $counter++;
            }
            echo "<input type='submit' value='Buy Now!'>";
            echo "</form>";
        ?>
    </body>
</html>