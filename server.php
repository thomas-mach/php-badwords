<?php
$text = $_GET["text"];
$message = $_GET["message"];
$censorship = str_replace($text, "***", $message );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<style>
    *{
        margin: 0;
    }
    .container{
        margin: 100px auto;
        width: 600px;
        border: 1px solid black;
    }
    p{
        color: green;

    }
</style>

<body>
    <main>
        <div class="container">
            <div>MESSAGE:</div>
            <p><?php echo $message ?></p><br>
            <div>MESSAGE LENGTH: <?php echo strlen($message)?></div><br>
            <hr>
            <div>CENSORSHIP MESSAGE:</div>
            <p><?php echo $censorship ?></p><br>
            <div>CENSORSHIP MESSAGE LENGTH: <?php echo strlen($censorship)?></div><br>
            </div>
    </main>
</body>
</html>