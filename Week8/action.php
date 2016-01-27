<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <?php
        error_reporting(0);
        $selected_seats = $_POST['selected_seat'];
        $lucky_seat = "A4";
        $total_amount = 0;
        $ticket_price = 0;
        $message = "Congratulation for winning a 50% discount on this seat";
        //echo implode(", ", $selected_seat); //Debug the _POST

        if(empty($selected_seats)) {
            die("<p>Please select a seat!</p>" . "<br>" . "<a href='index.php'>Return</a>");
        } elseif (count($selected_seats) > 4) {
            echo "<p>Only 4 seats allowed at a time!</p>" . "<br>" . "<a href='index.php'>Return</a>";
        } else {
            echo "<p>Please review your order</p>" . "<br>" . "<p>You have selected " . count($selected_seats) . "seat(s)</p>";
            foreach ($selected_seats as $seat) {
                echo "<p>$seat" . " ";

                if($seat[0] == "A") {
                    $ticket_price = 3000;
                } elseif ($seat[0] == "B") {
                    $ticket_price = 2000;
                } elseif($seat[0] == "C") {
                    $ticket_price = 1000;
                }

                if($seat == $lucky_seat) {
                    $ticket_price /= 2;
                    echo " " . $ticket_price . " " . $message;
                } elseif ($seat !== $lucky_seat) {
                    echo $ticket_price . "</p>";
                }
                $total_amount += $ticket_price;
            }
            echo "<p>The total ammount is " . $total_amount . "</p>";
        }
    ?>
</body>
</html>