<?php

@include 'config.php';

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<!--------------section home-------------------->
<section class="home" id="about">
        <div class="img-home">
            <img class="coffee2" src="uploaded_img/img-coffe2.jpg
            " alt="codelover">
        </div>
            <div class="arta-cafelei">
                <div class="titlu">
                    <h1>Arta cafelei</h1>
                </div>
                <div class="text-arta-cafelei">
                    <p>Prepararea cafelei este mai mult decat se vede initial.
                        Cafeaua perfecta se obtine cu produse de cea mai bine calitate, la care se adauga timpul, energia si
                        pasiunea pentru cafea. Boabele folosite sunt importate direct de catre noi de pe cele mai bune plantatii,
                        fiind prajite de catre noi cu specificatii precise. Produsul final este o cafea sofisticata, cu o aroma
                        bogata si indrazneata.</p>
                    <h2>Dimineata perfecta incepe cu un espresso !</h2>
                    <img class="img-coffee" src="uploaded_img/home-img-2.png" alt="codelover">
                </div>
            </div>
            <div class="img-home-2">
                <img src="uploaded_img/about-img.png" alt="">
            </div>
</section>

<section class="products">

  

   

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>




<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>