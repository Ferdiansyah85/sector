<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Opacity</tittle>
    <style>
        body {
            background-image: url(coba.png);
        }
        .satu {
            width: 300px;
            height: 300px;
            background-color: rgba(255,100,5,0.5);
            position: relative;
        }

        .dua {
            width: 100px;
            height: 100px;
            background-color: blue;
            position: absolute;
            right: -50px;
            bottom: -50px;
            opacity: 0.7;
        }

    </style>
</head>

<body>

<div class="satu">
    <div class="dua"></div>
</div>
</body>
</html>