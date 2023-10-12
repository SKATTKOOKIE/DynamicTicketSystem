<!DOCTYPE html>
<html>
<head>
    <title>Generated Tickets</title>
    <link rel="stylesheet" href="stylesheets/mainstyle.css" />
</head>
<body>
    <h2>Generated Tickets:</h2>
    <?php
    if (isset($_POST['attendee_name'])) {
        $attendee_names = $_POST['attendee_name'];

        foreach ($attendee_names as $key => $name) {
            $unique_id = generateUniqueId(10);
            echo '<div class="ticket">';
            echo '<p>Ticket ID: ' . $unique_id . '</p>';
            echo '<p>Attendee Name: ' . htmlspecialchars($name) . '</p>';
            echo '</div>';
        }
    } else {
        echo "No data submitted.";
    }

    function generateUniqueId($length)
    {
        $characters = '0123456789';
        $unique_id = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $unique_id .= $characters[mt_rand(0, $max)];
        }

        return $unique_id;
    }
    ?>
</body>
</html>
