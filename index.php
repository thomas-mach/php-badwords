<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<style>
    label{
        display: block;
    }
</style>
<body>
    <main>
        <form action="./server.php" method="get">
            <p>
                <label for="message">message:</label>
                <textarea name="message" id="" cols="70" rows="5" id="message" placeholder="your message"></textarea>
            </p>
            <p>
                <label for="text">censorship word: </label>
                <input type="text" name="text"  id="text" placeholder="your word">
            </p>
            <button>send</button>
        </form>
    </main>
</body>
</html>