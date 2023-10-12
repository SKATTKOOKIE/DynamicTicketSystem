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
        <!-- This is a HTML form that submits data to "generate_tickets.php" using the POST method. -->
        <form action="generate_tickets.php" method="post">
            <!-- A container for input fields that will be dynamically generated based on user input. -->
            <div id="name_inputs">
                <?php
                    // Check if the 'generate' button has been pressed (form submitted).
                    if (isset($_POST['generate'])) 
                    {
                        // Retrieve the number of tickets to generate from the form input.
                        $ticketCount = (int) $_POST['ticket_count'];

                        // Loop to generate input fields for attendee names based on the number of tickets.
                        for ($i = 1; $i <= $ticketCount; $i++) 
                        {
                            // Create an input field for attendee name with a unique placeholder.
                            echo '<input class="nameInput" type="text" name="attendee_name[]" placeholder="Attendee Name ' . $i . '" required>';
                            // Insert a line break for better spacing between input fields.
                            echo '<br>';
                        }
                    }
                ?>
            </div>
            <!-- A submit button to trigger the form submission. -->
            <input type="submit" value="Generate Tickets">
        </form>
    </div>
</body>
</html>
