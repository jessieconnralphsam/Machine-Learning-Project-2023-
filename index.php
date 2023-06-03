
<?php
    //db connection
    require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaf Disease | Detection</title>
    <link rel="stylesheet" href="style.css?v=2">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title"><i class="fas fa-leaf"></i> Leaf Disease Detection</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, upload or scan <br> image below</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="file" accept="image/*">
                <!-- camera scan here-->
                <button id="send-btn">check</button>
            </div>
        </div>
    </div> 
</body>
</html>