<!DOCTYPE html>
<html lang="en">
<head>
    <title>VidLii Downloader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
<?php
echo '<meta http-equiv="refresh" content="0; url=https://cdn.vidlii.com/videos/' . htmlspecialchars($_GET["id"]) . '.mp4"/>';
//end my life
?>
<div class="container text-center" style="padding-top: 10em;">
    <div class="panel panel-default">
        <div class="panel-header">
            <h1>Your video is downloading...</h1>
        </div>
        <div class="panel-body">
            <form class="horizontal-form" action="video.php">
                <div class="form-group">
                <h3>If the video dosn't download, refresh the page or try again.</h3>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>