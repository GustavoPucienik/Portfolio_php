<?php 

    include_once("templates/header.php")

?>
<script defer src="js/proj.js"></script>
<div class="main-content">

    <div class="apre">
        <h1 class="colortext">Bio</h1>
        <p>Meu nome é Gustavo, tenho 21 anos, sou desenvolvedor e estudante de engenharia de software, possuo projetos no github e busco uma oportunidade profissional como desenvolver Jr</p>

        <div class="proj colortext">
            <h1>Projetos</h1>
            <div class="container">
  <button class="arrow-left control" aria-label="Previous image">◀</button>
  <button class="arrow-right control" aria-label="Next Image">▶</button>
        <div class="gallery-wrapper">
            <div class="gallery">
            <img target="_blank" src="https://source.unsplash.com/random/250x250/?animal" alt="Animal Image" class="item current-item" alt="Projeto filmes" class="item current-item">
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
    <h1 class="colortext">Minhas habilidades:</h1>
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