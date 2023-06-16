<?php

// Connect to the MySQL database
$connect = mysqli_connect('<DB_HOST>', '<DB_USER>', '<DB_PASSWORD>', '<DB_DATABASE>');

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
        <title>PHP, MySQL, and YouTube Videos</title>
    </head>
    <body>

        <h1>PHP, MySQL, and YouTube Videos</h1>

        <?php

        // Create a query
        $query = 'SELECT Anime_id, AnimeNaam,link
            FROM anime
            ORDER BY AnimeNaam';

        // Execute the query
        $result = mysqli_query($connect, $query);

        // If there is no result, display an error message
        if (!$result)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }

        // Display the number of recirds found
        echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

        // Loop through the records found
        while ($record = mysqli_fetch_assoc($result))
        {

            // Output the record using if statements and echo
            echo '<hr>';

            echo '<h2>'.$record['AnimeNaam'].'</h2>';

            $url = 'https://www.youtube.com/watch?v='.$record['link'];

            echo '<a href="'.$url.'">'.$url.'</a>';

            echo '<br><br>';

            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['link'].'?modestbranding=1" 
                rameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>';

        }

        ?>        

    </body>
</html>
