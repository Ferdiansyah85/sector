<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Vendor prefix dan filter</tittle>
    <style>
        /* Filter
        blur(px)
        contrast(angka | %)
        saturate(angka | %)
        grayscale(angka | %)
        sepia(angka | %)
        hue-rotate(deg)
        invert(angka | %)
        opacity(angka | %)
        drop-shadow(sama seperti box-shadow)


        vendor prefixes

    -webkit- (chrome,safari,opera terbaru)
    -moz- (firefox)
    -ms- (internet explorer)
    -o- (opera versi lama59)






        */
        body {
            text-align: center;
        }
        img {
            width: 300px;
            height: 300px;
            -webkit-filter: sepia(50%) blur(10px);
            filter: sepia(50%) blur(10px);
            transition: 1s;
        }

        img:hover {
            filter: sepia(0%) blur(0px);
        }
    </style>
</head>

<body>


<img src="apa.jpeg" alt="css3">
</body>
</html>