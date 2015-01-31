<?php include('emoji.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>emoji</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,minimal-ui" name="viewport">
        <link rel="stylesheet" href="css/emoji.css">
        <style>
            *{margin: 0;padding: 0;}
            body{height: 20px; line-height: 20px;}
            img{vertical-align: middle;}
        </style>
    </head>

    <body>
        <p>
            我输出一些表情符号，哈哈。<br>
            <?php echo Emoji::emoji_to_html('我喜欢😍 哈哈哈😄|😶|' . "\xe2\x9c\x8c\xef\xb8\x8f\xEE\x8C\x8B" . '}}', false);?>
            <?php echo Emoji::emoji_to_html('我喜欢😍 哈哈哈😄|😶|' . "\xe2\x9c\x8c\xef\xb8\x8f\xEE\x8C\x8B" . '}}', true);?>
        </p>
    </body>
</html>
