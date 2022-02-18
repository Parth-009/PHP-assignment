<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Weight Conversion</title>
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
            text-align:right;
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
        <h2>Mass and Weight Conversion</h2><br>
        <form  class=" " action="" method="POST" >
            <label>From:</label>
            <input  type="text" class="input"  name="fromval"  id="value" required></input>
            <select  id="option1"name="frommass">
                <option selected>Option</option>
                <option value="kg">kilogram</option>
                <option value="gm">Gram</option>
                <option value="mg">Miligram</option>
                <option value="tone">Tonne</option>
                <option value="microgm">Microgram</option>
                <option value="it">imperial ton</option>
                <option value="ut">US ton</option>
                <option value="stone">Stone</option>
                <option value="pound">Pound</option>
                <option value="ounce">Ounce</option>
            </select>
            <br><br>
            <label>To:</label>
            <input class="input" type="text" name="toval" id="result"></input>
            <select id="option2" name="tomass">
                <option selected>Option</option>
                <option value="kg">Kilogram</option>
                <option value="gm">Gram</option>
                <option value="mg">Miligram</option>
                <option value="tone">Tonne</option>
                <option value="microgm">Microgram</option>
                <option value="it">imperial ton</option>
                <option value="ut">US ton</option>
                <option value="stone">Stone</option>
                <option value="pound">Pound</option>
                <option value="ounce">Ounce</option>
            </select>
            <br> <br>
            <input type="submit" value="Submit" name="submit"><br><br>
        </form>
        <button onclick="location.href = '/measurement/menu.php';">Return to Menu</button>
    </div>
<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['frommass']))
        {
            $val=$_POST['fromval'];
            $frommass=$_POST['frommass'];
            $tomass=$_POST['tomass'];
            $result=NULL;
            if(($frommass=='kg' and $tomass=='kg') ||($frommass=='gm' and $tomass=='gm') || ($frommass=='mg' and $tomass=='mg')||($frommass=='tone' and $tomass=='tone')||($frommass=='microgm' and $tomass=='microgm')
                ||($frommass=='it' and $tomass=='it')||($frommass=='ut' and $tomass=='ut')||($frommass=='stone' and $tomass=='stone')||($frommass=='pound' and $tomass=='pound')||($frommass=='ounce' and $tomass=='ounce'))
            {
                $result=$val;
            }
            else if($frommass=='kg' and $tomass=='gm')
            {
                $result=($val)*1000;
            }
            else if($frommass=='kg' and $tomass=='mg')
            {
                $result=($val)*1000000;
            }
            else if($frommass=='kg' and $tomass=='tone')
            {
                $result=($val)/1000;
            }
            else if($frommass=='kg' and $tomass=='microgm')
            {
                $result=($val)*1000000000;
            }
            else if($frommass=='kg' and $tomass=='it')
            {
                $result=($val)/1016;
            }
            else if($frommass=='kg' and $tomass=='ut')
            {
                $result=($val)/907;
            }
            else if($frommass=='kg' and $tomass=='stone')
            {
                $result=($val)/6.35;
            }
            else if($frommass=='kg' and $tomass=='pound')
            {
                $result=($val)*2.205;
            }
            else if($frommass=='kg' and $tomass=='ounce')
            {
                $result=($val)*35.274;
            }
            else if($frommass=='gm' and $tomass=='kg')
            {
                $result=($val)/1000;
            }
            else if($frommass=='gm' and $tomass=='mg')
            {
                $result=($val)*1000;
            }
            else if($frommass=='gm' and $tomass=='tone')
            {
                $result=($val)/1000000;
            }
            else if($frommass=='gm' and $tomass=='microgm')
            {
                $result=($val)*1000000;
            }
            else if($frommass=='gm' and $tomass=='it')
            {
                $result=($val)/1.016000000;
            }
            else if($frommass=='gm' and $tomass=='ut')
            {
                $result=($val)/907185;
            }
            else if($frommass=='gm' and $tomass=='stone')
            {
                $result=($val)/6350;
            }
            else if($frommass=='gm' and $tomass=='pound')
            {
                $result=($val)/454;
            }
            else if($frommass=='gm' and $tomass=='ounce')
            {
                $result=($val)/28.35;
            }
            
            else if($frommass=='mg' and $tomass=='kg')
            {
                $result=($val)/1000000;
            }
            else if($frommass=='mg' and $tomass=='gm')
            {
                $result=($val)/1000;
            }
            else if($frommass=='mg' and $tomass=='tone')
            {
                $result=($val)/1000000000;
            }
            else if($frommass=='mg' and $tomass=='microgm')
            {
                $result=($val)*1000;
            }
            else if($frommass=='mg' and $tomass=='it')
            {
                $result=($val)/1.106000000000;
            }
            else if($frommass=='mg' and $tomass=='ut')
            {
                $result=($val)/9.07200000000;
            }
            else if($frommass=='mg' and $tomass=='stone')
            {
                $result=($val)/6.35000000;
            }
            else if($frommass=='mg' and $tomass=='pound')
            {
                $result=($val)/453592;
            }
            else if($frommass=='mg' and $tomass=='ounce')
            {
                $result=($val)/28350;
            }

            else if($frommass=='tone' and $tomass=='kg')
            {
                $result=($val)*1000;
            }
            else if($frommass=='tone' and $tomass=='gm')
            {
                $result=($val)*1000000;
            }
            else if($frommass=='tone' and $tomass=='mg')
            {
                $result=($val)*1000000000;
            }
            else if($frommass=='tone' and $tomass=='microgm')
            {
                $result=($val)*1000000000000;
            }
            else if($frommass=='tone' and $tomass=='it')
            {
                $result=($val)/1.016;
            }
            else if($frommass=='tone' and $tomass=='ut')
            {
                $result=($val)*1.102;
            }
            else if($frommass=='tone' and $tomass=='stone')
            {
                $result=($val)*157;
            }
            else if($frommass=='tone' and $tomass=='pound')
            {
                $result=($val)*2205;
            }
            else if($frommass=='tone' and $tomass=='ounce')
            {
                $result=($val)*35274;
            }

            #Convert Microgm to other options.
            else if($frommass=='microgm' and $tomass=='kg')
            {
                $result=($val)/1000000000;
            }
            else if($frommass=='microgm' and $tomass=='gm')
            {
                $result=($val)*1000000;
            }
            else if($frommass=='microgm' and $tomass=='mg')
            {
                $result=($val)/1000;
            }
            else if($frommass=='microgm' and $tomass=='tone')
            {
                $result=($val)/1000000000000;
            }
            else if($frommass=='microgm' and $tomass=='it')
            {
                $result=($val)/1.016000000000000;
            }
            else if($frommass=='microgm' and $tomass=='ut')
            {
                $result=($val)/9.07200000000000;
            }
            else if($frommass=='microgm' and $tomass=='stone')
            {
                $result=($val)/6.35000000000;
            }
            else if($frommass=='microgm' and $tomass=='pound')
            {
                $result=($val)/4.53600000000;
            }
            else if($frommass=='microgm' and $tomass=='ounce')
            {
                $result=($val)/2.8350000000;
            }


            #Convert imperialton to other options.
            else if($frommass=='it' and $tomass=='kg')
            {
                $result=($val)*1016;
            }
            else if($frommass=='it' and $tomass=='gm')
            {
                $result=($val)*1.016000000;
            }
            else if($frommass=='it' and $tomass=='mg')
            {
                $result=($val)*1.016000000000;
            }
            else if($frommass=='it' and $tomass=='tone')
            {
                $result=($val)*1.016;
            }
            else if($frommass=='it' and $tomass=='microgm')
            {
                $result=($val)*1.016000000000000;
            }
            else if($frommass=='it' and $tomass=='ut')
            {
                $result=($val)*1.12;
            }
            else if($frommass=='it' and $tomass=='stone')
            {
                $result=($val)*160;
            }
            else if($frommass=='it' and $tomass=='pound')
            {
                $result=($val)*2240;
            }
            else if($frommass=='it' and $tomass=='ounce')
            {
                $result=($val)*35840;
            }

            #Convert USton to other options.
            else if($frommass=='ut' and $tomass=='kg')
            {
                $result=($val)*907;
            }
            else if($frommass=='ut' and $tomass=='gm')
            {
                $result=($val)*907185;
            }
            else if($frommass=='ut' and $tomass=='mg')
            {
                $result=($val)*9.07200000000;
            }
            else if($frommass=='ut' and $tomass=='tone')
            {
                $result=($val)/1.102;
            }
            else if($frommass=='ut' and $tomass=='microgm')
            {
                $result=($val)*9.07200000000000;
            }
            else if($frommass=='ut' and $tomass=='it')
            {
                $result=($val)/1.12;
            }
            else if($frommass=='ut' and $tomass=='stone')
            {
                $result=($val)*143;
            }
            else if($frommass=='ut' and $tomass=='pound')
            {
                $result=($val)*2000;
            }
            else if($frommass=='ut' and $tomass=='ounce')
            {
                $result=($val)*32000;
            }
            
            #Convert Stone to other options.
            else if($frommass=='stone' and $tomass=='kg')
            {
                $result=($val)*6.35;
            }
            else if($frommass=='stone' and $tomass=='gm')
            {
                $result=($val)*6350;
            }
            else if($frommass=='stone' and $tomass=='mg')
            {
                $result=($val)*6.35000000;
            }
            else if($frommass=='stone' and $tomass=='tone')
            {
                $result=($val)/157;
            }
            else if($frommass=='stone' and $tomass=='microgm')
            {
                $result=($val)*6.35000000000;
            }
            else if($frommass=='stone' and $tomass=='it')
            {
                $result=($val)/160;
            }
            else if($frommass=='stone' and $tomass=='ut')
            {
                $result=($val)/143;
            }
            else if($frommass=='stone' and $tomass=='pound')
            {
                $result=($val)*14;
            }
            else if($frommass=='stone' and $tomass=='ounce')
            {
                $result=($val)*224;
            }

             #Convert Pound to other options.
             else if($frommass=='pound' and $tomass=='kg')
             {
                 $result=($val)/2.205;
             }
             else if($frommass=='pound' and $tomass=='gm')
             {
                 $result=($val)*454;
             }
             else if($frommass=='pound' and $tomass=='mg')
             {
                 $result=($val)*453592;
             }
             else if($frommass=='pound' and $tomass=='tone')
             {
                 $result=($val)/2205;
             }
             else if($frommass=='pound' and $tomass=='microgm')
             {
                 $result=($val)*4.53600000000;
             }
             else if($frommass=='pound' and $tomass=='it')
             {
                 $result=($val)/2240;
             }
             else if($frommass=='pound' and $tomass=='ut')
             {
                 $result=($val)/2000;
             }
             else if($frommass=='pound' and $tomass=='stone')
             {
                 $result=($val)/14;
             }
             else if($frommass=='pound' and $tomass=='ounce')
             {
                 $result=($val)*16;
             }

            #Convert Ounce to other options.
            else if($frommass=='ounce' and $tomass=='kg')
            {
                $result=($val)/35.274;
            }
            else if($frommass=='ounce' and $tomass=='gm')
            {
                $result=($val)*28.35;
            }
            else if($frommass=='ounce' and $tomass=='mg')
            {
                $result=($val)*28350;
            }
            else if($frommass=='ounce' and $tomass=='tone')
            {
                $result=($val)/35274;
            }
            else if($frommass=='ounce' and $tomass=='microgm')
            {
                $result=($val)*2.8350000000;
            }
            else if($frommass=='ounce' and $tomass=='it')
            {
                $result=($val)/35840;
            }
            else if($frommass=='ounce' and $tomass=='ut')
            {
                $result=($val)/32000;
            }
            else if($frommass=='ounce' and $tomass=='stone')
            {
                $result=($val)/224;
            }
            else if($frommass=='ounce' and $tomass=='pound')
            {
                $result=($val)/16;
            }
        ?>
         <script>
            var result='<?php echo $result; ?>';
            var value='<?php echo $val;?>';
            var option1='<?php echo $frommass;?>';
            var option2='<?php echo $tomass;?>';
            //console.log (result);
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