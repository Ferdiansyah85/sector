<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>transition</tittle>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 900px;
            margin: 10px auto;
            border: 5px solid black;
        }
        .kotak {
            width: 100px;
            height: 100px;
            background-color: rgba(255,100,5,0.5);
            text-align: center;
            line-height: 100px;
            transition: all 1s ease;
        }
        .kotak1 { transition: all 3s ease 2s; }
        .kotak2 { transition: all 3s ease-in; }
        .kotak3 { transition: all 3s ease-out; }
        .kotak4 { transition: all 3s ease-in-out; }
        .kotak5 { transition: all 3s linear; }
        .kotak6 { transition: all 3s cubic-bezier(1,-0.21, 0, 1.57); }
        .container:hover .kotak {
            transform: rotate(720deg);
            margin-left: 800px;
            background-color: red;
        }

    </style>
</head>

<body>
<div class="container">
    <div class="kotak kotak1">ease</div>
    <div class="kotak kotak2">ease-in</div>
    <div class="kotak kotak3">ease-out</div>
    <div class="kotak kotak4">ease-in-out</div>
    <div class="kotak kotak5">linear</div>
    <div class="kotak kotak6">cubic-bezier</div>
</div>
</body>
</html>