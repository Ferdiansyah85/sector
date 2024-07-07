<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>box shadow inset dan multiple</tittle>
    <style>
        .satu {
            width: 300px;
            height: 300px;
            background-color: #39b54a;
            margin: 50px auto;
            box-shadow: inset 0px 0px 5px 5px rgba(0,0,0,0.7);
        }

        .dua {
            width: 300px;
            height: 300px;
            background-color: red;
            box-shadow: 5px 5px 5px rgba(255,255,0,0.7),
            -5px -5px 5px rgba(0,0,255,0.7),
            -5px -5px 15px black;
            border-radius: 23%;
        }
    </style> 
</head>

<body>

<div class="satu"></div>
<div class="dua"></div>

</body>
</html>