<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>PHP Dischi</title>
    </head>
    <body>
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="SpotyBool Logo">
        </header>
        <main>
            <div class="container">
                <?php
                    require __DIR__ . "/../database.php";
                    foreach($database as $disk) {
                        echo "<div class='card'>";
                        echo "<img src='" . $disk['poster'] . "' alt='" . $disk['title'] . "'>";
                        echo "<h3 class='diskTitle'>" . $disk['title'] . "</h3>";
                        echo "<h5 class='diskAuthor'>" . $disk['author'] . "</h5>";
                        echo "<h5 class='diskYear'>" . $disk['year'] . "</h5>";
                        echo "</div>";
                    };
                ?>
            </div>
        </main>
    </body>
</html>