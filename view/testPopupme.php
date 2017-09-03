<?php
ini_set( 'display_errors', 1 );
require_once('../controller/constantList.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>まどろむ猫ミコニ!! | modal css test</title>
    <?php include('../controller/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="./css/popupme.css">
    <script src="./js/popupme.js"></script>
    <script>
    $(document).ready(function(){
        var html = '<h2>h2タイトルです</h2><ul><li>11111111111111</li><li>22222222222222</li><li>33333333333333</li><li>44444444444444</li><li>55555555555555</li></ul><p>以上終わり。</p>';

        $("#test_popupme").popupme({
            title: 'PopUpMeのテスト',
            text : html
        });
    });
    </script>

</head>
<body>
    <h1 class="h1-title">modal css test</h1>

    <p>
        <a href="" id="test_popupme">Click!!</a>
    </p>
    <div>
        <h2>本文！！！</h2>
        <p>
            本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
            本文です。本文です。本文です。本文です。本文です。本文です。本文です。<br>
        </p>
    </div>
</body>
</html>