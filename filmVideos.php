<?php

// Connect to the MySQL database
$connect = mysqli_connect('localhost', 'root', '', 'project4');

// If the connection did not work, display an error message
if (!$connect)
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Films</title>
</head>
<body>

<h1>Films</h1>

<?php

// Create a query
$query = 'SELECT films_id,FilmNaam,link
            FROM films
            ORDER BY AnimeNaam';

// Execute the query
$result = mysqli_query($connect, $query);

// If there is no result, display an error message
if (!$result)
{
    echo 'Error Message: ' . mysqli_error($connect) . '<br>';
    exit;
}

// Display the number of records found
echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

// Loop through the records found
while ($record = mysqli_fetch_assoc($result))
{

    // Output the record using if statements and echo
    echo '<hr>';

}

?>

</body>
</html>
