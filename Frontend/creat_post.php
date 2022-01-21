<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="../CSS/create_post.css">
    <script src="../Frontend/create_post.js"></script>
    <script src="../Frontend/CreatePostValidation.js"></script>


</head>

<body>

<?php
include("../Frontend/NavBar.php");
?>

<div class="content">
    <form method="post" action="../Backend/CreatePost.php" enctype="multipart/form-data">

        <div class="create_post">

            <h1>NEUEN BEITRAG HINZUFÜGEN</h1>

            <div class="upload">
                <div class="file-btn">
                    <p>
                        Klicke auf "Datei auswählen", <br> um einen Beitrag hochzuladen:
                    </p>
                    <div class="upload_picture">
                        <form method="post" action="../Backend/CreatePost.php" enctype="multipart/form-data">
                            <input type="file" id="myFile" name="filename" value="filename" >
                            <br>
                            <input value="Beitrag teilen!" type="submit"
                                   onclick="validateHashtagsForm(document.getElementById('hashtags').value);
                                    validateHashtagsLength(document.getElementById('hashtags').value);
                                    validateHeadline(document.getElementById('headline').value);
                                    validatePictureFileForm(document.getElementById('myFile').value);
                                    validateTextfile(document.getElementById('textfile').value);"
                            >
                        </form>
                    </div>
                </div>
            </div>

            <div class="options">
                <p>Bildtitel hinzufügen:</p>
                <p>Hashtags hinzufügen:</p>
                <p>Längengrad hinzufügen:</p>
                <p>Breitengrad hinzufügen:</p>
                <p>Erlebnis beschreiben:</p>
            </div>

            <div class="inputs">
                <input id="headline" name="heading" class="heading" type="text">
                <input id="hashtags" name="hashtags" class="hashtags" type="text">
                <input name="longitude" class="place" type="number" step="0.01">
                <input name="latitude" class="place" type="number" step="0.01">
                <textarea name="post_textfile"  id="textfile" class="textarea"></textarea>
            </div>

    </form>
</div>
</div>
</body>
</html>

