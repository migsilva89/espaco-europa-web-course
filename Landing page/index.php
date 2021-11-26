<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <title>Ines Couto</title>
</head>

<body>
<header>
    <?php
    include "carousel.php";
    ?>
    <h1>Ines Couto</h1>
    <p class="subtitle">Home made Macrame</p>
</header>


<ul>
    <li>
        <?php
        //variavel para imagens
        $products= [
            "./Images/macrame.jpg",
            "./Images/macrame2.jpg",
            "./Images/macrame3.jpg",
            "./Images/macrame4.jpg",
            "./Images/card.jpg",
        ];

        ?>
<!--   loop para todas as imagens-->
        <?php foreach ($products as $image){ ?>
            <div class="card" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-repeat: no-repeat">
                <a href="<?php echo $image; ?>" class="glightbox" data-gallery="gallery1">
                    <div class="eye">
                        <img src="Images/icon-view.svg" alt="...">
                    </div>
                </a>
            </div>
         <?php } ?>


    </li>
</ul>





<!--<footer class="icons-btn">-->
<!--   <a> <ion-icon href-->
<!--</footer>="https://instagram.com" name="logo-instagram"></ion-icon> </a>-->
<!--    <a> <ion-icon name="logo-linkedin"></ion-icon> </a>-->


<!--ICONS LIBRARY-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script type="text/javascript">
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>

</html>