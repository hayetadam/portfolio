<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Ultra" rel="stylesheet">
    <script src="https://use.fontawesome.com/0df17449bf.js"></script>

    <title>a-propoo</title>
    <style type="text/css">
   
body {
    padding:0;
    margin:0;
    font-family: 'Din', Arial, "Trebuchet MS";
}
 /*code pour le menu*/
#conteneur_header {
    width:100%;
    height:134px;
    z-index:9999;
    top:0;
    background: black;
}
#header {
    height: 134px;
    width:1000px;
    margin:0 auto;
    overflow: hidden;
}
#logo {
    margin-top: 20px;
    float: left;
}
ul#menu {
    list-style: none;
    float: right;
    margin-top: 60px;
}
ul#menu li {
    display: inline;
    margin-left: 80px;
}
ul#menu li a {
    color: white;
    text-transform: uppercase;
    font-size: 18px;
}
    /*mon nom*/
     .nom h1 {
            font-family: 'JuliusSansOne-Regular';
            font-size: 3.5em;
            color: #1E1E24;
            text-align: center;
            border: solid 4px rgba(255, 0, 0, .5);
        }
/* code css  pour mes competances*/
 
ul.css3rotate {
    height:400px;
    width: 100%;
    overflow: hidden;
    background: #B71C1C;
    margin-top: 15px;
    padding: 30px 18px;
}
 
ul.css3rotate li {
    float: left;
    margin: 0 10px;
    padding:5px;
    border: 1px solid #444;
    list-style: none;
    background: #B71C1C;
}
ul.css3rotate li a img  {
    float: left;
    width: 165px;
    margin: 0;
    -webkit-transition: -webkit-transform 0.2s ease-in-out;/* Utilisé pour la transition sur chrome et safari */
    -moz-transition: -moz-transform 0.2s ease-in-out;/* Utilisé pour la transition sur Firefox */
    transition: transform 0.2s ease-in-out;
}
ul.css3rotate li a:hover img {
    -webkit-transform: scale(1.4) rotate(-10deg);/* Agrandissement de la photo à l'échelle 1.4 et rotation de -10 degrés */
    -moz-transform: scale(1.4) rotate(-10deg);
    -o-transform: scale(1.4) rotate(-10deg);
    transform: scale(1.4) rotate(-10deg);
    -webkit-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5); /* L'ombre appliquée sur la photo au survol */
    -moz-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
}
/*rotation nom*/
#logo{
    width: 200px;
    height: 150px;
    border-radius: 1px solid black;
    transform-origin: 50% 50%;
} 
@-webkit-keyframes rotating {
    from{
        -webkit-transform: rotate(0deg);
    }
    to{
        -webkit-transform: rotate(360deg);
    }
}
.monLogo {
    -webkit-animation: rotating 2s linear ;
    animation-iterator_count: 1;

}
/*footer css*/
.footerCantact{
    display:flex;
    justify-content:space-between;
    color:white;
    font-size:50px; 
}

footer{
   background-color:black; 
   height:100px;
   margin-top: 40px;
}
footer p{
    font-size:17px;
}
footer i{
    width:50px;
    height:50px;
    
}

.php{
    display: flex;
    /*width:1100px;
    height:200px;*/
}
.php img{
    width:350px;
}
    </style>
</head>
<body class="container-fluid">
<header class="row">
<!-- code de menu -->
<!-- #conteneur-header a une width de 100%  -->
<div id="conteneur_header">
    <div id="header">
        <div id="logo" class="monLogo"><img src="image/logo.png"/>
        </div><!-- #logo -->
        <ul id="menu">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Projets</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div><!-- #header -->
</div><!-- #conteneur_header -->
</header>
<div class ="nom">
 <h1>BOUZIDI Hayet</h1>
 </div>
<h1 id="title"class="text-center" >Mes Projets</h1>
<div class ="php">
<?php
$portfolio = "./projet";
$files = scandir($portfolio);

foreach($files as $dossier) {
    if($dossier[0] !== ".") {
        if (is_dir($dossier)) { 
            echo '<ul id ="listeprojets" class="col-sm-3 col-sm-offset-2"> ';
            echo '<li><a href="'.$dossier.'">'.$dossier. '</a></li>';
            echo '<img src="'.$dossier.'/screenshot.png" alt="screen" class="img-responsive" >' ;
            echo '</ul>';
           
        }
    }
}
?> 

</div>
<!-- code html pour la rotation des photos -->

<h1 class="text-center" >Mes compétences</h1>
<ul class="css3rotate"> 
    <li><a href="#"><img src="image/html.png" /></a></li>
    <li><a href="#"><img src="image/html5-css3.jpg"/></a></li>
    <li><a href="#"><img src="image/js.png"/></a></li> 
    <li><a href="#"><img src="image/php.png"/></a></li>  
    <li><a href="#"><img src="image/bootstrap.png"/></a></li>
     <li><a href="#"><img src="image/mysql.png"/></a></li>
     <!--modif-->
     <li><a href="#"><img src="image/wordpress.jpg"/></a></li>
     <li><a href="#"><img src="image/ajax.jpg"/></a></li>
     <li><a href="#"><img src="image/git.png"/></a></li>
     <li><a href="#"><img src="image/node.png"/></a></li>
     <li><a href="#"><img src="image/typescript.png"/></a></li>
</ul>
<!--footer-->
<footer>
    <div class="footerCantact">
        <div class="github">
            <i class="fa fa-github" aria-hidden="true"></i>
            <p>hayetadam</p>
        </div>
        <div class="adresse">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>LYON</p>
        </div>
        <div class="telephone">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <p>07.68.51.38.27</p>
        </div>
        <div class="mail">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <p>habethayet@gmail.com</p>
        </div>
        <div class="link">
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            <p>Hayet.BOUZIDI</p>
        </div>
       
    </div>
</footer>
</body>
</html>