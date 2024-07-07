<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>transition</tittle>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: rgba(255,100,5,0.5);
            animation: animasikotak 2s ease infinite alternate forwards running;
        }

        @keyframes animasikotak {
            0% {
                width: 200px;
            }

            50% {
                width: 500px;
                height: 200px;
            }

            100% {
                width: 500px;
                height: 500px;
            }
        } 
    </style>
</head>

<body>
<div class="kotak"></div>
</body>
</html>