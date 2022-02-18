<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Conversion</title>
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
    <h2>Speed Conversion</h2><br>
    <form class="form-horizontal"  action="" method="POST" >
        <label>From:</label>
        <input  type="text" class="input"  name="fromval"  id="value" required></input>
        <select  id="option1"name="fromspeed">
            <option selected>Option</option>
            <option value="km">kilometer per hour</option>
            <option value="m">Meter per second</option>
            <option value="fs">Foot per second</option>
            <option value="mh">Miles pre hour</option>
            <option value="knot">Knot</option>
        </select>
        <br><br>
        <label>To:</label>
        <input class="input" type="text" name="toval" id="result"></input>
         <select id="option2" name="tospeed">
            <option selected>Option</option>
            <option value="km">kilometer per hour</option>
            <option value="m">Meter pre second</option>
            <option value="fs">Foot per second</option>
            <option value="mh">Miles pre hour</option>
            <option value="knot">Knot</option>
        </select>
        <br> <br>
        <input type="submit" value="Submit" name="submit"><br><br>
    </form>
        <button onclick="location.href = '/measurement/menu.php';">Return to Menu</button>
    </div>
    

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['fromspeed']))
        {
            $val=$_POST['fromval'];
            $fromspeed=$_POST['fromspeed'];
            $tospeed=$_POST['tospeed'];
            $result=NULL;
            if(($fromspeed=='km' and $tospeed=='km') ||($fromspeed=='m' and $tospeed=='m')||($fromspeed=='fs' and $tospeed=='fs')||($fromspeed=='mh' and $tospeed=='mh')||($fromspeed=='knot' and $tospeed=='knot'))
            {
                $result=$val; 
            }
            else if($fromspeed=='km' and $tospeed=='m')
            {
                $result=($val)*(5/18);
            }
            else if($fromspeed=='km' and $tospeed=='fs')
            {
                $result= $val/1.097; 
            }
            else if($fromspeed=='km' and $tospeed=='mh')
            {
                $result= $val/1.609;
            }
            else if($fromspeed=='km' and $tospeed=='knot')
            {
                $result= $val/1.852;
            }
            else if($fromspeed=='m' and $tospeed=='km')
            {
                $result=($val)*(18/5);
            }
            else if($fromspeed=='m' and $tospeed=='fs')
            {
                $result=($val)*3.281;
            }
            else if($fromspeed=='m' and $tospeed=='mh')
            {
                $result=($val)*2.237;
            }
            else if($fromspeed=='m' and $tospeed=='knot')
            {
                $result=($val)*1.944;
            }
            else if($fromspeed=='fs' and $tospeed=='km')
            {
                $result=($val)*1.097;
            } 
            else if($fromspeed=='fs' and $tospeed=='m')
            {
                $result=($val)/3.281;
            } 
            else if($fromspeed=='fs' and $tospeed=='mh')
            {
                $result=($val)/1.467;
            } 
            else if($fromspeed=='fs' and $tospeed=='knot')
            {
                $result=($val)/1.688;
            }
            else if($fromspeed=='mh' and $tospeed=='km')
            {
                $result=($val)*1.609;
            }
            else if($fromspeed=='mh' and $tospeed=='m')
            {
                $result=($val)/2.237;
            }
            else if($fromspeed=='mh' and $tospeed=='fs')
            {
                $result=($val)* 1.467;
            }
            else if($fromspeed=='mh' and $tospeed=='knot')
            {
                $result=($val)/1.151;
            }
            else if($fromspeed=='knot' and $tospeed=='km')
            {
                $result=($val)*1.852;
            }
            else if($fromspeed=='knot' and $tospeed=='m')
            {
                $result=($val)/1.944;
            }
            else if($fromspeed=='knot' and $tospeed=='fs')
            {
                $result=($val)*1.688;
            }
            else if($fromspeed=='knot' and $tospeed=='mh')
            {
                $result=($val)*1.151;
            }
            else {
        
               echo '<script>alert("Choose Right options")</script>';
            }
            
        ?>
         <script>
            var result='<?php echo $result; ?>';
            var value='<?php echo $val;?>';
            var option1='<?php echo $fromspeed;?>';
            var option2='<?php echo $tospeed;?>';
            console.log (result);
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