<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Instituto Bíblico Eben-Ezer</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<header class="header" id="header">


    <div class="marca">


        <img
        src="assets/img/SantaSion.png"
        alt="Logo Iglesia Santa Sion"
        class="logo"
        >



        <div class="textos">


            <h1>
            Instituto Bíblico Eben-Ezer
            </h1>


            <p>
            Iglesia Dios de la Profecía La Santa Sion
            </p>


        </div>


    </div>


</header>








<div class="nav-container">


<nav class="navbar">


<button class="menu-toggle" id="menu-toggle">

☰

</button>





<div class="menu-links" id="menu-links">


<a href="#">
Inicio
</a>


<a href="#">
Nosotros
</a>


<a href="#">
Materias
</a>


<a href="#">
Docentes
</a>


<a href="#">
Contacto
</a>


</div>


</nav>


</div>









<main>


<div class="contenido">



<section class="bienvenida">


<h2>
Bienvenidos
</h2>



<p>

El Instituto Bíblico Eben-Ezer tiene como propósito
formar hombres y mujeres preparados en el conocimiento
de la Palabra de Dios, fortaleciendo la fe,
el servicio cristiano y el llamado ministerial.

</p>


</section>








<section class="cards">


<article class="card">

<h3>
📖 Misión
</h3>


<p>

Capacitar discípulos mediante la enseñanza bíblica
para servir a Dios y a su iglesia.

</p>

</article>







<article class="card">

<h3>
🌎 Visión
</h3>


<p>

Ser un instituto comprometido con la formación
espiritual, bíblica y ministerial.

</p>

</article>







<article class="card">

<h3>
🎓 Formación
</h3>


<p>

Estudios bíblicos, doctrina cristiana,
liderazgo y preparación ministerial.

</p>

</article>



</section>








<section class="cards">


<article class="card">


<h3>
📚 Materias
</h3>


<p>

Enseñanza bíblica, fundamentos de la fe,
teología y crecimiento espiritual.

</p>


</article>





<article class="card">


<h3>
👨‍🏫 Docentes
</h3>


<p>

Maestros preparados para enseñar la Palabra
de Dios.

</p>


</article>







<article class="card">


<h3>
⛪ Comunidad
</h3>


<p>

Un espacio de aprendizaje, comunión
y servicio cristiano.

</p>


</article>


</section>




</div>


</main>







<footer>


<p>

© Instituto Bíblico Eben-Ezer |
Iglesia Dios de la Profecía La Santa Sion

</p>


</footer>








<script>


const header =
document.getElementById("header");



window.addEventListener("scroll",()=>{


if(window.scrollY > 120){


header.classList.add("scrolled");


}else{


header.classList.remove("scrolled");


}



});






const boton =
document.getElementById("menu-toggle");


const menu =
document.getElementById("menu-links");



boton.addEventListener("click",()=>{


menu.classList.toggle("active");


});





document
.querySelectorAll(".menu-links a")
.forEach(link=>{


link.addEventListener("click",()=>{


menu.classList.remove("active");


});


});



</script>



</body>

</html>