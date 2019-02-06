<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 14:41
 */

?>
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="viewport">
    <div id="zone red"></div>
    <div id="kdeplacement" style="top:200px; left:200px;"></div>

</div>


</body>
</html>
<style>
    #viewport
    {
        position: relative;
        height: 500px;
        width: 500px;
        margin: auto;


    }

    #kdeplacement
    {
        background-image:url("../Images/armored_skeleton_slash.gif");
        width: 60px;
        height: 65px;
        position: absolute;
        top: 100px;
        left: 100px;
    }

    #buttons
    {
        text-align: center;
        margin-top: 25px;
    }

    }


</style>
<script>
    var x=0;
    var y=0;


    function deplacement(e) {



        switch (e.which) {



            case 38: //haut

                document.getElementById('kdeplacement').style.top = (y--*10) +"px" ;
                if(y <1){
                    y=0;
                }
                break;


            case 40: // bas
                document.getElementById('kdeplacement').style.top = (y++*10) +"px";
                if(y>439){
                    y=540;
                }
                break;

            case 37: //gauche
                document.getElementById('kdeplacement').style.left = (x--*10) +"px";
                if(x <1){
                    x=0;
                }
                break;
            case 39 :   // droite;
                document.getElementById('kdeplacement').style.left = (x++*10) +"px";
                if(x >1139){
                    x=540;
                }
                break;

        }
    }
    document.body.addEventListener("keydown", deplacement);


</script>
