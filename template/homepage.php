<?php
    $file = __DIR__.'/log.log';

    $fileContent = file_get_contents($file);
    if(!$fileContent) {
        $counter = 0;
    } else {
        $counter = unserialize($fileContent);
    }

    $counter++;

    file_put_contents($file, serialize($counter));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hello world</p>
    <p>This page was visited <?php echo $counter; ?> times.</p>
</body>
</html>