<?php
require_once ('./php/classCreateDB.php');
require_once ('./php/components.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Shop Cart</title>

    <style>
        :root {
            --color: lightblue;
            --background-gradient: radial-gradient(white 30%, lightblue 70%);
            --color-stars: yellowgreen;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        img {
            max-width: 100%;
            height: auto;
            background: var(--color);
            background: var(--background-gradient);
        }

        .fa-star,
        .fa-star-half {
            color: var(--color-stars);
            padding: 3% 0;
        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- Custom CSS -->
<!--    <link rel="stylesheet" type="text/css" href="style.css" />
--></head>
<body>

<header class="container">
    <div class="row text-center py-5">
        <?php
        component(
                "Dell Alienware 17 r4",
                "2,149.99",
                "./image/pro1.png",
                "Is a natural evolution from its iconic geometric beauty");
        component(
            "Airpods Pro",
            "249",
            "./image/pro2.png",
            "Unique headphones with great sounds");
        component(
            "Shoei Neotec II Respect",
            "1,863.00",
            "./image/product3.png",
            "Reliable motorcycle helmet for better safety");
        component(
            "iPhone 13 PRO",
            "1,517.96",
            "./image/product4.png",
            "Apple's new smartphone. With 128 gb memory");
        ?>
    </div>
</header>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>