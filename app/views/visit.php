<?php
    include("app/views/base.php");
?>

<body>
    <?php  
                require("database/api/properties.php");

    ?>
    <!-- desktop version -->
    <div style ="position:relative; height:50px;">
        <?php
            include("app/components/header.php");
        ?>
    </div>

    <div class="visit-content">
            <div>
                <h1>
                    <?php echo ucwords(htmlspecialchars($property['name'])); ?>
                </h1>
                <div>
                    <span class="material-symbols-outlined">
                        location_on
                    </span>

                    <p><?php echo ucfirst(htmlspecialchars($property['location'])); ?></p>
                </div>

                <p>Fast Growing Real Estate Company <br>that builds high earned properties at affordable prices.</p>
                <hr>
            </div>

    </div>
    <div class ="slider-div">
            <div class="slide fade">
                <img src="<?php echo htmlspecialchars($property['dir_path']); ?>/img2.jpg" alt="">
                <div class ="app-content">
                    <h1>3 Bedroom Apartments</h1>
                </div>
            </div>
    </div>
    <div class ="app-sections">
        <div>
            <img src="public/images/prop3/img2.jpg" alt="">
        </div>

    </div>

    <div class="footer">
        <?php
            include("app/components/footer.php");
        ?>

        
    </div>
</body>
</html>