<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>
    <h1>View Data</h1>

    <?php
    // Read the contents of the file
    $data = file_get_contents("form_data.txt");

    // Check if the file exists and has content
    if ($data !== false && !empty($data)) {
        // Display the data on the page
        echo nl2br($data);
    } else {
        echo "No data available.";
    }
    ?>
</body>
</html>