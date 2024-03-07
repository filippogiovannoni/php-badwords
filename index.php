<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./server.php" method="get">
        <label for="paragraph">Type a paragraph</label>
        <input type="text" name="paragraph" id="paragraph">
        <label for="word">Type the word to censor</label>
        <input type="text" name="word" id="word">
        <button type="submit">Send</button>
    </form>
</body>

</html>