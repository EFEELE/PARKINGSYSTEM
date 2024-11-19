<?php 
get_header();
?>

<section id="banner-section">
    <div class="parent">
        <div class="div1">
            <div class="overlay o-1">
                <h2>21 Savage</h2>
                <a href="http://localhost/ParkingSystem/detalle_evento.php?artista=21+Savage"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div2">
            <div class="overlay o-2">
                <h2>Dua Lipa</h2>
                <a href="http://localhost/ParkingSystem/detalle_evento.php?artista=Dua+Lipa"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div3">
            <div class="overlay o-3">
                <h2>Eminem</h2>
                <a href="http://localhost/ParkingSystem/detalle_evento.php?artista=Eminem"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div4">
            <div class="overlay o-4">
                <h2>Twenty One Pilots</h2>
                <a href="http://localhost/ParkingSystem/detalle_evento.php?artista=Twenty+One+Pilots"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div5">
            <div class="overlay o-5">
                <h2>The Weeknd</h2>
                <a href="http://localhost/ParkingSystem/detalle_evento.php?artista=The+Weeknd"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div6">
            <div class="overlay o-6">
                <h2>Travis Scott</h2>
                <a href="#"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div7">
            <div class="overlay o-7">
                <h2>Ariana Grande</h2>
                <a href="http://localhost/ParkingSystem/detalle_evento.php?artista=Ariana+Grande"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
        <div class="div8">
            <div class="overlay o-8">
                <h2>Lorde</h2>
                <a href="#"><ion-icon name="add-circle-outline"></ion-icon> Más Info</a>
            </div>
        </div>
    </div>
</section>

<?php 
    include 'includes/venue.php';
?>

<section id="recomendados" class="events-columns">
    <h2>Recomendados</h2>
   <div class="container">
   <div class="row row-cols-4 g-3">

    </div>
   </div>
</section>



<section id="2024" class="events-columns">
    <h2>Este año 2024</h2>
   <div class="container">
   <div class="row row-cols-4 g-3">
  
    </div>
   </div>
</section>


<section id="2025" class="events-columns">
    <h2>En 2025...</h2>
   <div class="container">
   <div class="row row-cols-4 g-3">
  


    </div>
   </div>
</section>

<section id="slide">
    <div id="carouselExampleIndicators" class="carousel slide montseslide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                aria-label="Slide 6"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/wp-content/themes/parkingsystem/img/artists/hscc.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/wp-content/themes/parkingsystem/img/artists/aricc.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/wp-content/themes/parkingsystem/img/artists/Bcc.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/wp-content/themes/parkingsystem/img/artists/akcc.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/wp-content/themes/parkingsystem/img/artists/tay.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/wp-content/themes/parkingsystem/img/artists/21pilots2.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<?php 
get_footer();
?>