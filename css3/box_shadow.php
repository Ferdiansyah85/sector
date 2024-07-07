<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>box shadow</tittle>
    <style>
        div {
            width: 300px;
            height: 300px;
            background-color: #39b54a;
            margin: 50px auto;
            box-shadow: 0px 30px 10px -20px rgba(0,0,0,0.7);
            transition: .3s;
        }
        div:hover {
            box-shadow: 0px 80px 10px -20px rgba(0,0,0,0.7);
            margin-top: 40px;
        }
    </style>
</head>

<body>

<div></div>
</body>
</html>