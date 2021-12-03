<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
<title>HOTELEX</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


</head>
<body id="top">
	<div class="container">

<header class="header">
			<h1>
                <a href="index.php">HOTELEX</a>    
            </h1>
			<div class="sign-buttons">

			
			<?php
if(isset($_SESSION['usuario'])){
echo "Bienvenido  ". $_SESSION ['usuario']."<br><br>" ;
echo "<a href = 'logouthotelex.php' >Salir</a>";
}

else{
	
	echo "<a href='./loginhotelex.php'>Ingresar</a>| <a href='./registerhotelex.php'>Registrarme</a> ";
}
?>
			</div>
</header>


<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 

  <header id="header" class="hoc clear"> 

    <div id="logo" class="one_quarter first">
      <h1><a href="/foxclore/index.php">HOTELEX</a></h1>
      
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Telefono:</strong> +54 1168141731</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>email de contacto:</strong> support@hotelex.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> lun. - Sab.:</strong> 08.00am - 20.00pm</span></div>
        </li>
      </ul>
    </div>
   
 
  </section>

  <div id="pageintro" class="hoc clear"> 

    <article>
      <p></p>

      <h3 class="heading"></h3>
      <p></p>
      <footer><a class="btn" href="#">HoteleX</a></footer>
    </article>

  </div>

</div>
<p> </p>

<div class="wrapper row3">
  <main class="hoc container clear"> 
 
    <section id="introblocks">
      <ul class="nospace group">
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://www.hiltonhotels.com/assets/img/hotels/LIMMFHH_Hilton_Lima_Miraflores/preview-full-1.jpg" width="300" height="200" alt=""></a>
            <figcaption>
              <h6 class="heading">Hotel Hilton</h6>
              <p>Cuenta con 652.378 habitaciones y 3.992 hoteles repartidos por 91 países de todo el planeta. Sus cadenas más conocidas son Hilton Hotels & Resorts y Hampton Inn.<p>
			  <a href="../foxclore/informacion.php">Volver</a>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://i0.wp.com/juanoflyer.com/wp-content/uploads/2016/08/fachada-noche-2015_13-alvear-141214_cmyk-945x731.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">Hotel Alvear Palace</h6>
              <p>Este hotel de lujo, que ocupa un edificio palaciego, se encuentra a 5 minutos a pie del Centro Cultural Recoleta, a 11 del Cementerio de la Recoleta y a 2 km de la ópera del Teatro Colón.
</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://www.tangol.com/Fotos/Hospedaje/hotel-nh-buenos-aires-city_2823_201702021051384.JPG" alt=""></a>
            <figcaption>
              <h6 class="heading">Hotel NH City, Buenos Aires</h6>
              <p>Este exclusivo hotel, que ocupa un edificio de estilo art déco de los años 30, se encuentra a 1 minuto a pie de la parada de autobús más cercana, a 5 de la Casa Rosada, el palacio
presidencial, y a 2 km del histórico Teatro Colón.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://soloporgusto.com/wp-content/uploads/2020/10/Buenos-Aires-Marriott-Hotel.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">Buenos Aires Marriott</h6>
              <p>Este hotel exclusivo con vistas a la famosa avenida 9 de Julio se encuentra a 3 minutos a pie del Teatro Colón y a 1 km de la Casa Rosada, el palacio presidencial.
</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/f8/48/a2/rey-carlos.jpg?w=900&h=-1&s=1" alt=""></a>
            <figcaption>
              <h6 class="heading">Hotel Rey</h6>
              <p>Este hotel básico se encuentra en zona residencial, a 5 minutos a pie de tiendas y restaurantes, a 15 del metro, y a 4 km de la histórica plaza de Mayo y la catedral metropolitana de Buenos
Aires, construida en el siglo XVII.</p>
     
          </figure>
        </li>
      </ul>
    </section>

    <div class="clear"></div>
  </main>
</div>
