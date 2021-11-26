<!DOCTYPE html>
<html lang="en">
<head> <!--meter os scripts-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Ines Couto</title>
</head>

<body>
<div class="centered-content">
</div>

<?php
    include "carousel.php";
    ?>
    <h1>Inês Couto</h1>

<p data-toggle="modal" data-target="#exampleModalLong" class="subtitle">Home made Macrame</p>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Macramé</h5>
            </div>
            <div class="modal-body">
                O macramê (do árabe makrama "guardanapo" ou "toalha") é uma técnica de tecelagem manual que consiste no uso de nós originalmente usada para criar franjas e barrados em lençois, cortinas toalhas etc.
                É mais do que provável que tenha surgido com a evolução natural dos nós básicos para um trabalho mais elaborado e por ser uma técnica muito boa para diversas atividades.
                O macramê pode ser usado como fonte de renda para algumas pessoas e famílias.O macramê (do árabe makrama "guardanapo" ou "toalha") é uma técnica de tecelagem manual que consiste no uso de nós originalmente usada para criar franjas e barrados em lençois, cortinas toalhas etc.
                É mais do que provável que tenha surgido com a evolução natural dos nós básicos para um trabalho mais elaborado e por ser uma técnica muito boa para diversas atividades.
                O macramê pode ser usado como fonte de renda para algumas pessoas e famílias.O macramê (do árabe makrama "guardanapo" ou "toalha") é uma técnica de tecelagem manual que consiste no uso de nós originalmente usada para criar franjas e barrados em lençois, cortinas toalhas etc.
                É mais do que provável que tenha surgido com a evolução natural dos nós básicos para um trabalho mais elaborado e por ser uma técnica muito boa para diversas atividades.
                O macramê pode ser usado como fonte de renda para algumas pessoas e famílias.O macramê (do árabe makrama "guardanapo" ou "toalha") é uma técnica de tecelagem manual que consiste no uso de nós originalmente usada para criar franjas e barrados em lençois, cortinas toalhas etc.
                É mais do que provável que tenha surgido com a evolução natural dos nós básicos para um trabalho mais elaborado e por ser uma técnica muito boa para diversas atividades.
                O macramê pode ser usado como fonte de renda para algumas pessoas e famílias.O macramê (do árabe makrama "guardanapo" ou "toalha") é uma técnica de tecelagem manual que consiste no uso de nós originalmente usada para criar franjas e barrados em lençois, cortinas toalhas etc.
                É mais do que provável que tenha surgido com a evolução natural dos nós básicos para um trabalho mais elaborado e por ser uma técnica muito boa para diversas atividades.
                O macramê pode ser usado como fonte de renda para algumas pessoas e famílias.
            </div>
        </div>
    </div>
</div>

<center>

    <div class="container mx-auto">
        <div class="row mx-auto">

            <?php
                //variavel para imagens
                $products= [
                    "./Images/macrame.jpg",
                    "./Images/macrame2.jpg",
                    "./Images/macrame3.jpg",
                    "./Images/macrame4.jpg",
                    "./Images/card.jpg",
                    "./Images/card.jpg",
                ];
            ?>
<!--   loop para todas as imagens-->
            <?php foreach ($products as $image){ ?>
                <div class="col-md-4 col-lg-2 col-sm-1 col-xs-1 mx-center">
                    <div class="card" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-repeat: no-repeat">
                    <a href="<?php echo $image; ?>" class="glightbox" data-gallery="gallery1">
                        <div class="eye">
                            <img src="Images/icon-view.svg" alt="...">
                        </div>
                    </a>
                    </div>
                </div>
             <?php } ?>
        </div>
    </div>

</center>

<footer>
    <div class="d-grid gap-2 d-md-block">
        <a href="https://instagram.com" target="_blank">
            <button class="btn btn-outline-secondary btn-lg" type="button">Instagram</button>
        </a>
        <a href="https://linkedin.com" target="_blank">
            <button class="btn btn-outline-secondary btn-lg" type="button">Linkedin</button>
        </a>
        <a href="mailto: inescouto72@gmail.com">
            <button class="btn btn-outline-secondary btn-lg" type="button">Contact</button>
        </a>
    </div>
</footer>

<!--light box libray-->
<script type="text/javascript">
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>

</html>