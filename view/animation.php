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

<div id="buttons">
    <input type="button" id="up"><label>Haut</label>
    <input type="button" id="left"><label>Gauche</label>
    <input type="button" id="right"><label>Droite</label>
    <input type="button" id="down"><label>bas</label>
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
    document.getElementById('up').addEventListener('click',function() {
        var t = parseInt(document.getElementById('kdeplacement').style.top);
        if (t>=5) {


            t = t - 10;
            document.getElementById('kdeplacement').style.top = t + 'px';
        }

    });
    document.getElementById('left').addEventListener('click',function(){
        var l= parseInt(document.getElementById('kdeplacement').style.left);
        if (l>=5);  {
            l = l - 10;
            document.getElementById('kdeplacement').style.left = l + 'px';
        }
    });
    document.getElementById('right').addEventListener('click',function(){
        var v = parseInt(document.getElementById('kdeplacement').style.left);
        if (v<=569){
            v= v+10;
            document.getElementById('kdeplacement').style.left=v+'px';
        }
    });
    document.getElementById('down').addEventListener('click',function() {
        var d=parseInt(document.getElementById('kdeplacement').style.top);
        if (d<=550) {
            d = d + 10;
            document.getElementById('kdeplacement').style.top = d + 'px';
        }

    });

</script>
