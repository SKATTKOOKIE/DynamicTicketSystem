<!DOCTYPE html>
<html>
<head>
    <title>Generated Tickets</title>
    <link rel="stylesheet" href="stylesheets/mainstyle.css" />
</head>
<body>
    <h2>Generated Tickets:</h2>
    <?php
        // Check if attendee names have been submitted via the POST method
        if (isset($_POST['attendee_name'])) 
        {
            // Retrieve the submitted attendee names
            $attendee_names = $_POST['attendee_name'];

            // Iterate through the submitted attendee names and generate unique IDs
            foreach ($attendee_names as $key => $name) 
            {
                // Generate a unique ID with a specified length using the generateUniqueId function
                $unique_id = generateUniqueId(10);

                // Display a ticket with the unique ID and the sanitized attendee name
                echo '<div class="ticket">';
                echo '<p>Ticket ID: ' . $unique_id . '</p>';
                echo '<p>Attendee Name: ' . htmlspecialchars($name) . '</p>';
                echo '</div>';
            }
        } 
        else 
        {
            // Display a message if no data has been submitted
            echo "No data submitted.";
        }

        // Define a function to generate a unique ID with the specified length
        function generateUniqueId($length)
        {
            // Define the characters to be used in the unique ID
            $characters = '0123456789';
            $unique_id = '';
            $max = strlen($characters) - 1;

            // Generate a unique ID by selecting random characters
            for ($i = 0; $i < $length; $i++) 
            {
                $unique_id .= $characters[mt_rand(0, $max)];
            }

            // Return the generated unique ID
            return $unique_id;
        }
    ?>
</body>
</html>
