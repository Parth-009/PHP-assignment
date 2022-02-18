<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background: #ffe0da;
        }
        .container{
            margin-top:50px;
            margin-bottom:-5px;
        }
    </style>
</head>
<body>
        <div class="container">
        <div class="d-grid gap-3 col-4 mx-auto">
            <h3 style="text-align:center;"> Measurement Conversion</h3>
            <button class="btn btn-primary" type="button" onclick="location.href = 'temperature.php';" >Temperature</button>
            <button class="btn btn-primary" type="button" onclick="location.href = 'speed.php';">Speed</button>
            <button class="btn btn-primary" type="button" onclick="location.href = 'mass_weight.php';">Mass and Weight</button>
        </div>
        </div>


</body>
</html>