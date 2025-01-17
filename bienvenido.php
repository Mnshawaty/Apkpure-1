<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>APKPURE</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="estilo.css">
<link rel="shortcut icon" href="images/icono.ico">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC936p1gAp7XlIpU2fOEOwt_ivvuij5rg&callback=initMap">
    </script>
    
 <script type="text/javascript">
function loadLocation () {
	//inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
	navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}

//Funcion de exito
function viewMap (position) {
	
	var lon = position.coords.longitude;	//guardamos la longitud
	var lat = position.coords.latitude;		//guardamos la latitud

	var link = "http://maps.google.com/?ll="+lat+","+lon+"&z=14";
	document.getElementById("long").innerHTML = "Longitud: "+lon;
	document.getElementById("latitud").innerHTML = "Latitud: "+lat;

	document.getElementById("link").href = link;

}



function ViewError (error) {
	alert(error.code);
}	



	</script>   
    
    
<script>
   	//arreglo de datos
	arr1=new Array(5);
	//asignar imagen a cada espacio
	arr1[0]="images/dell2.jpg";
	arr1[1]="images/lenovo5.jpg";
	arr1[2]="images/toshiba2.jpg";
	arr1[3]="images/acer2.jpg";
	arr1[4]="images/hp2.jpg";
	
	//arreglo de datos 
	arr2=new Array(5);
	//asignar imagen a cada espacio
	arr2[0]="images/categoria/acction.jpg";
	arr2[1]="images/categoria/carreras.jpg";
	arr2[2]="images/categoria/estrategia.jpg";
	arr2[3]="images/categoria/desportes.jpg";
	arr2[4]="images/categoria/casino.jpg";
	
	//declarar variables en JavaScript
	var contador=0;
	 //cada 1000 milisegundos representa un segundo
    var timer =1000;
	
	function banner(){
		//genera número de forma aleatoria del 0 - 5
		contador=Math.floor((Math.random() * 5) + 0);
		document.foto1.src=arr1[contador];
		//permite invocar una funcion cada un segundo
		setTimeout("banner()",timer);
	}
	
	function banner2(opc){
		switch(opc){
			case 0:
				  document.foto2.src=arr2[0];
				  break; //sale de la estructura
			case 1:
				  document.foto2.src=arr2[1];
				  break; //sale de la estructura
		     case 2:
				  document.foto2.src=arr2[2];
				  break; //sale de la estructura
			  case 3:
				  document.foto2.src=arr2[3];
				  break; //sale de la estructura
			   case 4:
				  document.foto2.src=arr2[4];
				  break; //sale de la estructura	
			default:
				 alert("Sin Stock");
				 limpiar();
				 break;
				
		}
		//invocar a la función proceso
		proceso(opc);
	}
	
	
	function proceso(baropc){
	 limpiar();
	 switch(baropc){
	  case 0:
   document.getElementById("barproceso1").style.width="15%";
	    break;				
	  case 1:
	    document.getElementById("barproceso2").style.width="25%";
	    break;					
	  case 2:  document.getElementById("barproceso3").style.width="5%";
	    break;			 
	   case 3:  document.getElementById("barproceso4").style.width="10%";
	    break;			 		 
	   case 4:  document.getElementById("barproceso5").style.width=" 45%";
	    break;			 		 			 
	 }
	}
   function limpiar(){
	 for(i=1;i<=5;i++){
    document.getElementById("barproceso"+i).style.width = "0%";  		  
	  }
	}
	
	function validar(){
		// USO DE LA API LOCALSTORAGE
		localStorage.setItem("xemail",document.getElementById("email").value);
		localStorage.setItem("xpwd",document.getElementById("pwd").value);
		localStorage.setItem("xpwd2",document.getElementById("pwd2").value);

		if((localStorage.getItem("xemail")=="luis@gmail.com") && (localStorage.getItem("xpwd")=="1234") && (localStorage.getItem("xpwd2")==localStorage.getItem("xpwd"))){
			alert("Gracias por Registrarse");
		}else{
			alert("Datos Incorrectos");
		}
}
	
	

</script>



<body onload="loadLocation();">





<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand active" href="index.html"><strong>APKPURE</strong></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="GAMES.html" target="_parent">GAMES<span class="sr-only">(current)</span></a></li>
        <li><a href="APPS.html">APPS</a></li>
        <li><a href="TEMAS.html">TOPICS</a></li>
        <li><a href="CONTACTS.html">CONTACTS</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" method="post" action="buscar.php" name="form1">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre de aplicacion" name="txtaplicacion">
        </div>
        <button type="submit" class="btn btn-default" name="buscar"><strong>Buscar</strong></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><strong><img src="images/login.png" width="30px;" style="position:relative; margin-top: -5px; padding-left:5px; float: right"><?php echo $_SESSION["usuario"] ?></strong></a></li>
     
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
      <li data-target="#carousel1" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="images/b2.fw.png" alt="First slide image" class="center-block">      </div>
      <div class="item"><img src="images/b1.fw.png" alt="Second slide image" class="center-block">      </div>
      <div class="item"><img src="images/b3.fw.png" alt="Third slide image" class="center-block">      </div>
      
       <div class="item"><img src="images/b4.fw.png" alt="Third slide image" class="center-block">      </div>
      
  </div>
    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<div class="container">
<hr>
  </div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="media-object-default">
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object img-circle" src="images/android.svg" width="100" alt="placeholder image"> </a> </div>
            <div class="media-body">
              <h4 class="media-heading">ANDROID</h4>
es un sistema operativo basado en el núcleo Linux. Fue diseñado principalmente para dispositivos móviles con pantalla táctil.</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-circle" src="images/apple.svg" width="100" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">IOS 8</h4>
compatible con estos dispositivos de iPhone: 4s, 5, 5c, 5s, 6, 6 Plus, la quinta y sexta generación del iPod Touch, el iPad 2 en adelante y todas las generaciones.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 hidden-sm hidden-xs">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-circle" src="images/Windows.png" width="100"alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">WINDOWS PHONE</h4>
un sistema operativo móvil desarrollado por Microsoft, como sucesor de Windows Mobile.</div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
 <section class="hero" id="hero">
    <img name="foto1" src="">
  </section>
<br>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-12">
<div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 box">
          <div class="thumbnail"> <img src="images/APP/tekken tm.png" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3 style="text-align: center">TEKKEN™</h3>
              <p>TEKKEN, la franquicia de juegos de lucha más exitosa del mundo</p>
              <hr>
              <p class="text-center"><a href="APLICACION1.html" class="btn btn-info" role="button">Download APK</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 box">
          <div class="thumbnail"> <img src="images/APP/digimon world.png" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3 style="text-align: center">Digital World</h3>
              <p>Los digimons más llenos y más frescos se reúnen aquí... </p>
              <hr>
              <p class="text-center"><a href="APLICACION3.html" class="btn btn-info" role="button">Download APK</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 hidden-sm hidden-xs box">
          <div class="thumbnail"> <img src="images/APP/fifa2016.png" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3 style="text-align: center">FIFA 16 Soccer</h3>
              <p>¡Juega con una nueva, mejor y más rápida experiencia FIFA en el móvil!</p>
              <hr>
              <p class="text-center"><a href="APLICACION2.html" class="btn btn-info" role="button">Download APK</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 box">
          <div class="thumbnail"> <img src="images/final fantasy logo.png" width="75px;" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3 style="text-align: center">Final fantasy</h3>
              <p>When nine and nine meet nine, here we come! The first 3D ARPG</p>
              <hr>
              <p class="text-center"><a href="APLICACION4.html" class="btn btn-info" role="button">Download APK</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 box">
          <div class="thumbnail"> <img src="images/Mobile Legendslogo.png" width="75px;" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3 style="text-align: center">Mobile Legends</h3>
              <p>Únete a tus amigos y enfrentaos a oponentes humanos reales en </p>
              <hr>
              <p class="text-center"><a href="APLICACION5.html" class="btn btn-primary btn-info" role="button">Download APK</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs box">
          <div class="thumbnail"> <img src="img/cortado/Sin título-1.png" width="75px;" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3 style="text-align: center">Mutants Genetic Gladiators</h3>
              <p>Construye la ciudad de tus sueños</p>
              <hr>
              <p class="text-center"><a href="APLICACION6.html" class="btn btn-info" role="button">Download APK</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-md-offset-3 col-lg-offset-0">
      <div class="well">
        <h3 class="text-center">Create an Account</h3>
        <form class="form-horizontal" action="registrar.php" method="post">
      
       
          <div class="form-group">
            <label for="pricefrom" class="control-label">Email:</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon1">▀</div>
              <input type="email" class="form-control" id="email" aria-describedby="basic-addon1" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="priceto" class="control-label">Choose Password:</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon2">▀</div>
              <input type="password" class="form-control" id="pwd" aria-describedby="basic-addon1" name="pwd">
            </div>
          </div>
           <div class="form-group">
            <label for="priceto" class="control-label">Confirm Password:</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon3">▀</div>
              <input type="password" class="form-control" id="pwd2" aria-describedby="basic-addon1" name="pwd2">
            </div>
          </div>
       <!--   <p class="text-center"><a href="#" class="btn btn-danger" role="button" onClick="validar()">Register Now! </a></p> -->
                  <button  type="submit" class="btn btn-danger" name="registrar"><strong>Register Now! </strong></button>
        </form>
      </div>
      <hr>
      <h3 class="text-center">SIGUENOS EN</h3>
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="images/facebook-3.svg" height="64" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">APP PURE</h4>
            <p>LINK</p>
            <p>&nbsp;<a href="mailto:#">https://www.facebook.com/Ancasi96</a></p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="images/google__round_logo.png" height="64" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">APPPURE154</h4>
            <p>LINK</p>
            <p>&nbsp;<a href="mailto:#">https://plus.google.com/discover</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="progress1 col-lg-5">
  <h3>BARRA DE POPULARIDAD</h3>
  <br>
  <div class="tn-toolbarb" role="toolbar">
    <div class="btn-group" role="group"></div>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-primary" onClick="banner2(0)">Accion</button>

      <button type="button" class="btn btn-info" onClick="banner2(1) ">Carreras</button>
      <button type="button" class="btn btn-success" onClick="banner2(2)">Deportes</button>
      <button type="button" class="btn btn-warning" onClick="banner2(3)">Estrategia</button>
      <button type="button" class="btn btn-danger" onClick="banner2(4)">Casino</button>
    </div>
  </div>
  <br>
  <br>
  <div class="progress col-lg-11">
    <div id="barproceso1" class="progress-bar" role="progressbar" aria-valuenow="40"
	   aria-valuemin="0" aria-valuemax="100" 
       style="">15%</div>
    <div id="barproceso2" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
	   aria-valuemin="0" aria-valuemax="100" 
       style="">25%</div>
    <div id="barproceso3" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
	   aria-valuemin="0" aria-valuemax="100" 
       style="">5%</div>
    <div id="barproceso4" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40"
	   aria-valuemin="0" aria-valuemax="100" 
       style="">10%</div>
    <div id="barproceso5" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
	   aria-valuemin="0" aria-valuemax="100" 
       style="">45%</div>
  </div>
</div>


<div class="banner" >
<img name="foto2" src="images/categoria/inicio.png" width="560px;" height="180px" style="border: 1px solid #BFBBBB; border-radius: 10px;">
</div>



<div>&nbsp;</div>
<section>
  <div class="container">
    <div class="row">
    <h2 style="margin-left: 70px; font-weight: bold">APLICACIONES EN VENTA</h2>
   
      <div name="foto2" class="col-lg-6">
        
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"><a href="APLICACION7.html"><img src="images/apps/CoM Infinity.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"></a><br><br>
            <a class="link" href="APLICACION7.html"><strong>CoM Infinity</strong></a></div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s2.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>Fate/Grand Order</strong></p></div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s3.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>Temple Run 2</strong></p></div>
          </div>      
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s4.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>Score! Hero</strong></p></div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s5.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>Messenger</strong></p></div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s6.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>Instagram</strong></p></div>
</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s7.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>Snapchat</strong></p></div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s8.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>YouTube</strong></p></div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="images/categoria/selectos/s9.png" style="box-shadow: 2px 2px 5px #999" alt="Thumbnail Image 1"><br><br><p><strong>WhatsApp</strong></p></div>
</div>
        </div>
      </div>
      
     
      
      
      <br><br>
      
      <div class="col-lg-6">
        <h3>NEW GAMES </h3>
        <hr>
        <ul id="myTab1" class="nav nav-tabs">
          <li class="active"> <a href="#home1" data-toggle="tab"> Clash of Clans </a> </li>
          <li><a href="#pane2" data-toggle="tab">Pokemon Go</a></li>
          <li> <a href="#pane3" data-toggle="tab">Asphalt 8</a> </li>
        </ul>
        <div id="myTabContent1" class="tab-content">
          <div class="tab-pane fade in active" id="home1">
            <p class="text-center"><img src="images/Clash_Banner.png" width="400" height="150" alt=""></p>
            <p>Clash of Clans es un juego de estrategia en tiempo real y gestión en el que tendremos que construir un poblado para que puedan vivir los miembros de nuestro intrépido clan de bárbaros, para luego mandarlos a diferentes misiones en las que nuestros hombres podrán demostrar su valía destruyendo los campamentos enemigos.</p>
          </div>
          <div class="tab-pane fade" id="pane2">
            <p class="text-center"><img src="images/bannerPG.jpeg" width="400" height="120" alt=""></p>
            <p>Pokémon GO es el primer gran juego de la franquicia Pokémon en aterrizar en Android. Y lo hace de la mano de Niantic —desarrolladores de Ingress— con un título que combina la tradicional magia de los juegos de Nintendo, con las buenas ideas demostradas en su opera prima. El resultado: una aventura en la que tendremos que salir a la calle y movernos si realmente queremos convertirnos en entrenadores Pokémon.</p>
          </div>
          <div class="tab-pane fade" id="pane3">
            <p class="text-center"><img src="images/banner asphalt 8.jpg" width="400" height="150" alt=""></p>
            <p>Asphalt 8: Airborne es un juego de conducción en el que podremos ponernos al volante de algunos de los vehículos más rápidos del mundo y conducir por varios de los paisajes más reconocibles de la geografía global. Todo ello mientras surcamos el cielo con saltos imposibles a velocidades muy improbables.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="container well">
  <div class="row">
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right">
      </span>
  <h3>TOP ANDROID GAMES</h3>
  <hr>
  <p>Pokémon GO APK</p>
  <p> Dream League Soccer 2017 APK</p>
  <p> Clash Royale APK </p>
  <p>Clash of Clans APK </p>
  <p>Subway Surfers APK </p>
  <p>Mobile Legends: Bang bang APK </p>
  <p>FIFA 16 Soccer APK</p>
  <p> Yu-Gi-Oh! Duel Links APK </p>
  <p>FIFA Mobile Soccer APK </p>
  <p>CSR Racing 2 APK</p>
  
</div>
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4 hidden-sm hidden-xs"> <span class="text-right"> </span>
  <h3>Top Developers &amp; Partners</h3>
  <hr>
  <div class="media-object-default">
  <div class="media">
  <div class="media-body">
        <h4 class="media-heading">GAMELOFT</h4>
Gameloft es una empresa internacional dedicada a desarrollar y editar videojuegos para dispositivos móviles. Tiene su sede central en Francia, con oficinas alrededor de todo el mundo. Gameloft cotiza en la bolsa de París. </div>
      <div class="media-right"> <a href="#"> <img class="media-object" src="images/descarga.png" style="border-radius: 20px;" alt="placeholder image"></a></div>
</div>
<div class="media">
  <div class="media-body">
    <h4 class="media-heading">BANDAI</h4>
Bandai es una empresa japonesa dedicada a la creación de juguetes y Figuras de acción, en muchos de los casos posee los derechos exclusivos para la promoción de mercadería basada de series animadas; es ... </div>
  <div class="media-right"> <a href="#"> <img class="media-object" src="images/descarga (1).png" style="border-radius: 20px;" alt="placeholder image"></a></div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right"> </span>
  <h3>Nosotros</h3>
  <hr>
  <address>
APKPure.com es un sitio web que ofrece descargas de software de teléfonos inteligentes fundado en 2014 por APKPure Team, y se ha convertido en uno de los sitios web líderes en la industria de software de teléfonos inteligentes.<br>
  </address>
</div>
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right"> </span>
  <h3>Ubicanos:</h3>
  <hr>
  <address>
 Peru, Lima,
  </address>
  <address>
  cel, 91308-4075,
  </address>
  <address>
tel: (123) 456-7890<br>
  </address>
  <label id="long"></label> <br/>
<label id="latitud"></label> <br/>
<a href="https://www.google.com.pe/maps/place/ISIL+La+Molina/@-12.073214,-76.9506787,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c6e435a93c41:0xcdaaa71f277efd64!8m2!3d-12.073214!4d-76.94849?hl=es" id="link" target="_blank">ISIL La Molina, Avenida la Fontana, La Molina, Perú</a>
</div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2014-2017 APKPure. All rights reserved. | DMCA Disclaimer | Privacy Policy | Term of Use | Help translate APKPure<br>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>