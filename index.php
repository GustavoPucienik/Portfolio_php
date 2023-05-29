<?php 

    include_once("templates/header.php")

?>
<script defer src="js/proj.js"></script>
<div class="main-content">

    <div class="apre">
        <h1>Meu nome é Gustavo</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio atque itaque voluptatem labore minima optio et iusto laboriosam facere quos. Dolorum consequatur eius mollitia minus velit debitis nam excepturi minima?</p>

        <div class="proj">
            <h1>Projetos</h1>
            <div class="container">
  <button class="arrow-left control" aria-label="Previous image">◀</button>
  <button class="arrow-right control" aria-label="Next Image">▶</button>
        <div class="gallery-wrapper">
            <div class="gallery">
            <img src="https://source.unsplash.com/random/250x250/?beach" alt="Beach Image" class="item current-item">
            <img src="https://source.unsplash.com/random/250x250/?animal" alt="Animal Image" class="item current-item">
            <img src="https://source.unsplash.com/random/250x250/?street" alt="Street Image" class="item current-item">
            <img src="https://source.unsplash.com/random/250x250/?zoo" alt="Zoo Image" class="item current-item">
            <img src="https://source.unsplash.com/random/250x250/?model" alt="Model Image" class="item current-item">
            </div>
           </div>
         </div> <!-- container -->
       </div><!-- PROJ -->
    </div>

    <div class="skills">
    <h1>Minhas habilidades:</h1>
    <div class="habi">
        <i class="fa-brands fa-git-alt"></i>
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-html5"></i>
        <i class="fa-brands fa-css3-alt"></i>
        <i class="fa-brands fa-square-js"></i>
        <i class="fa-brands fa-php"></i>
        <i class="fa-brands fa-react"></i>
        <i class="fa-solid fa-database"></i>
    </div>
    </div>

</div>

<?php 

    include_once("templates/footer.php")

?>