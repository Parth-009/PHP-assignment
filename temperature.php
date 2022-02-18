<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
        body{
            background:#ffe0da; 
        }
        .container{
            margin-top:10%;
            height:200px;
            justify-content:center;
            text-align:center;
        }
        .input{
            height:25px;
            width:140px;
            margin-right:
            
        }
        label{
            display:inline-block;
            text-align:center;
        }
</style>

<script>
        $(document).ready(function(){
            $("#value").keyup( function(){
                $("#result").val("");  
                        
            });
            $("#option1").change(function(){
                $("#result").val("");
            });
            $("#option2").change(function(){
                $("#result").val("");
            })
        });
</script>
</head>
<body>

<div class="container">
    <h2>Temperature Conversion</h2><br>
<form  class=" " action="" method="POST" >
        <label>From:</label>
        <input  type="text" class="input"  name="fromval"  id="value"required></input>
        <select  id="option1"name="fromtemp">
            <option selected>Option</option>
            <option value="cel">Celcious</option>
            <option value="fah">Fahrenheit</option>
            <option value="kel">Kelvin</option>
        </select>
    <br><br>
        <label>To:</label>
        <input class="input" type="text" name="toval" id="result"></input>
         <select id="option2" name="totemp">
            <option selected>Option</option>
            <option value="cel">Celcious</option>
            <option value="fah">Fahrenheit</option>
            <option value="kel">Kelvin</option>
        </select>
    <br> <br>
    <input type="submit" value="Submit" name="submit"><br><br>
    </form> 
    <button onclick="location.href = '/measurement/menu.php';">Return to Menu</button>
</div>
    

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['fromtemp']))
        {
            $val=$_POST['fromval'];
            $totemp=$_POST['totemp'];
            $fromtemp=$_POST['fromtemp'];
            $result=NULL;
            if(($fromtemp=='cel' and $totemp=='cel')||($fromtemp=='fah' and $totemp=='fah')||($fromtemp=='kel' and $totemp=='kel'))
            {
                $result=$val;
            }
            else if($fromtemp=='fah' and  $totemp=='cel')
            {
                $result=(($val)-32)*(5/9);
            }
            else if($fromtemp=='fah' and $totemp=='kel')
            {
                $result=((($val)-32)*(5/9))+273.15;
            }
            else if($fromtemp=='cel' and $totemp=='fah')
            {
                $result=(($val)*(9/5))+32;
            }
            else if($fromtemp=='cel' and $totemp=='kel')
            {
                $result= $val+273.15;
            }
            else if($fromtemp=='kel' and $totemp=='fah')
            {
                $result= (($val-273.15)*(9/5))+32;
            }
            else if($fromtemp=='kel' and $totemp=='cel')
            {
                $result= $val-273.15;
            }
            else {
                echo '<script>alert("Choose the correct option")</script>';
            }
            
        ?>
         <script>
            var result='<?php echo $result; ?>';
            var value='<?php echo $val;?>';
            var option1='<?php echo $fromtemp;?>';
            var option2='<?php echo $totemp;?>';
            console.log(result);
            document.getElementById("result").value=result;
            document.getElementById("value").value=value;
            document.getElementById("option1").value=option1;
            document.getElementById("option2").value=option2;
        </script>
        <?php
        }
    }
?>

</body>
</html>