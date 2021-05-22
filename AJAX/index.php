<?php // APP QUESTIONS
    require_once __DIR__ . '/partials/database.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ajax PHP</title>
        <!-- FONTAWSOME -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous"
        />
        <!-- FONT  -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
            rel="stylesheet"
        />
        <!-- STYLE  -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
            <!-- HEADER -->
            <header class="header">
                <div class="container flex ai-center">
                    <img src="./img/logo.png" alt="spotify">
                </div>
            </header>
            <!-- MAIN CONTENT -->
            <main class="main">
                <div class="container flex">
                    <!-- CARDS -->
                    <?php foreach ($database as $album) { ?>
                        <div class="card text-center">
                            <div class="details">
                                <img src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>" />
                                <h3><?php echo $album['title']?></h3>
                                <div><?php echo $album['author']?></div>
                                <div><?php echo $album['year']?></div>
                                <div><?php echo $album['genre']?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </main>
    </body>
</html>
