<?php
var_dump($_GET)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h3>Paragraph</h3>
        <p><?php echo $_GET['paragraph'] ?></p>
        <span><?php echo 'characters' . ':' . ' ' .  strlen($_GET['paragraph']) ?></span>
    </section>

    <section>
        <h3>Paragraph with censored word</h3>
        <p><?php echo str_replace($_GET['word'], '***', $_GET['paragraph']); ?></p>
        <span><?php echo 'characters' . ':' . ' ' .  strlen(str_replace($_GET['word'], '***', $_GET['paragraph'])) ?></span>
    </section>
</body>

</html>