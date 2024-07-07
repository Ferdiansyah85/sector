<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Opacity</tittle>
    <style>
        p {
            font-size: 30px;
            text-align: center;
        }
        

        /*
        scale(angka), scaleX(angka), scaleY(angka)
        rotate(deg), rotateX(deg), rotateY(deg)
        skew(deg), skewX(deg), skewY(deg)
        translate(px), translateX(px), translateY(px) 
        */

        .satu {
            width: 200px;
            height: 200px;
            background-color: rgba(255,100,5,0.5);
            margin: 50px auto;
            transition: 1s;
        }
        .satu:hover {
            transform: scale(1.5);
        }

    </style>
</head>

<body>

<div class="satu"></div>
<p>lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ip

</p>
</body>
</html>