<!DOCTYPE html>
<html>
<head>
    <title>Generate Tickets</title>
    <link rel="stylesheet" href="stylesheets/mainstyle.css" />
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <label for="ticket_count">Enter the number of tickets:</label>
            <input class="numberInput" type="number" name="ticket_count" required>
            <input type="submit" name="generate" value="Generate Fields">
        </form>
    </div>

    <div class="form-container">
        <form action="generate_tickets.php" method="post">
            <div id="name_inputs">
                <?php
                if (isset($_POST['generate'])) {
                    $ticketCount = (int) $_POST['ticket_count'];

                    for ($i = 1; $i <= $ticketCount; $i++) {
                        echo '<input class="nameInput" type="text" name="attendee_name[]" placeholder="Attendee Name ' . $i . '" required>';
                        echo '<br>';
                    }
                }
                ?>
            </div>
            <input type="submit" value="Generate Tickets">
        </form>
    </div>
</body>
</html>
