<?php
$liste=scandir(__DIR__);
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>

<body>
    <pre>
        <?php print_r($liste); ?>
    </pre>
</body>
</html>