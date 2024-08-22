<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta http-equiv="refresh" content="3">  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/article.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/core.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    <title>Document</title>
</head>
<body>

    <!-- desktop version -->
    <div class="landing">
        <?php
            include("app/components/header.php");
        ?>
        <div class="overlay">

        </div>

        <div class="content">
            <div>
                <h1>
                    Goldfern <span>Properties</span>
                </h1>
                <p>Fast Growing Real Estate Company <br>that builds high earned properties at affordable prices.</p>
                <hr>
            </div>
            <div>
            </div>
        </div>


        <div class ="viewImage">
            <img src="public/images/img2.jpg" alt="image view">
        </div>
    </div>
    <div class="prop-info">
            <div class="img-area">
                <img src="public/images/prop1/img14.jpg" alt="">
            </div>
            <div class="text-area">
                <h1>
                    The MaGrip House
                </h1>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
                <div>
                    <span class="material-symbols-outlined">
                        location_on
                    </span>

                    <p>Roman - Ridgh Accra</p>
                </div>
                <h4>
                    $50000.00 
                </h2>
                <button>
                    Visit
                </button>
            </div>
    </div>

    <div class="footer">
        <?php
            include("app/components/footer.php");
        ?>

        
    </div>
</body>
</html>