<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 14:41
 */

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="viewport">
    <div id="field" style="height: 700px; width: 700px; border: solid black" >
        <table style="border: solid white;height: 44em;width: 44em">
            <TR> <TD><br><br></TD><TD></TD>
                <TD></TD> <TD></TD> </TR>
            <TR valign=top> <TD><BR><br></TD> <TD></TD>
                <TD align=center></TD> <TD></TD> </TR>
            <TR valign=bottom> <TD><BR><br></TD> <TD></TD>
                <TD></TD> <TD valign=top></TD> </TR>
            <TR align=right> <TD><BR><br></TD> <TD align=top></TD>
                <TD></TD> <TD valign=bottom></TD> </TR>
        </table>
    <div id="kdeplacement" style="top:200px; left:200px;">
        <div id="option">
        <input type="submit" value="atk" id="attack">
        <input type="submit" value="def" id="defence">
        </div>

    </div>

</div>
</div>

</body>
</html>
<style>
    body {
background-image: url("../Images/background.jpg");
      background-position: right;
    }
    #field {
        background-image: url("../Images/trees-and-bushes.png");
        background-size: 200px;
    }
   table{
       display: table;
       border: solid white;
       position: absolute;

       height: 50px;
       width: 50px;
   }

    #viewport
    {
        position: relative;
        height: 500px;
        width: 500px;
        margin: auto;

    }
    td{
        border-style: double ;

    }

    #kdeplacement {
        background-image: url("../Images/armored_skeleton_slash.gif");
        width: 60px;
        height: 65px;
        position: absolute;
        top: 100px;
        left: 100px;
        right: 100px;
        bottom: 100px;
    }
#option{
    display: inline-flex;
}

</style>
<script>
    var x=0;
    var y=0;


    function deplacement(e) {



        switch (e.which) {



            case 38: //deplacement haut;

                document.getElementById('kdeplacement').style.top = (y--*10) +"px" ;
                if(y <1){
                    y=0;
                }
                break;


            case 40: // deplacement bas;
                document.getElementById('kdeplacement').style.top = (y++*10) +"px";
                if(y>60){
                    y=0;
                }
                break;

            case 37: //deplacement gauche;
                document.getElementById('kdeplacement').style.left = (x--*10) +"px";
                if(x <1){
                    x=0;
                }
                break;
            case 39 :   // deplacement droite ;
                document.getElementById('kdeplacement').style.left = (x++*10) +"px";
                if(x >60){
                    x=0;
                }
                break;

        }
    }
    document.body.addEventListener("keydown", deplacement);

    function attack(a) {
        document.getElementById('attack');
        if (a=='onclick'){
        alert('bone attack')
        }

    }
    document.body.addEventListener("onclick",attack);

    function experience (){
        document.getElementById('kdeplacement')

    }

    function popmob(){

    }
    function vie (v){
     if (v==0){
         alert('game over')}


    }


</script>
