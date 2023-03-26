
<?php
// Get the form data
$name = $_POST['name'];
$date = $_POST['date'];

// Create an array with the form data
$data = array($name, $date);

// Open the CSV file for writing

// Write the form data to the CSV file

$fp = fopen('form_data.csv', 'a');


fputcsv($fp, $data);

// read existing data from the file











// Close the CSV file
fclose($fp);

// Display a message to the user
?>

<script>
setTimeout(() => {
    document.write("your attendance has been sucessfully recorded")
    Headers(location="html.php")
}, 1);

   </script>

