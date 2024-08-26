<?php
    include("app/views/base.php");
?>

<body>
    <?php  
                require("database/api/properties.php");

                $images = scandir(htmlspecialchars($property['dir_path']));

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
                <img src="<?php echo htmlspecialchars($property['dir_path']); ?>/img1.jpg" alt="">
                <div class ="app-content">
                    <h1>Apartment info</h1>
                    <div style = "color:#fff">
                            <div>
                                <h2>
                                <?php echo htmlspecialchars($property['beds']); ?>
                                </h2>
                                <p>
                                    beds
                                </p>
                            </div>
                            <div>
                                <h2>
                                <?php echo htmlspecialchars($property['baths']); ?>
                                </h2>
                                <p>
                                    baths
                                </p>
                            </div>

                            <div>
                                <h2>
                                <?php echo htmlspecialchars($property['sqrt']); ?>
                                </h2>
                                <p>
                                    sqrt
                                </p>
                            </div>
                            <div>
                                <h2>
                                $ <?php echo htmlspecialchars($property['price']); ?>.00
                                </h2>
                                
                            </div>

                        </div>
                </div>

            </div>
    </div>
    <div class ="app-content1">
                    <div class="div title">
                        <p>Apartment info</p>

                    </div>
                    <div>
                    <div>
                                <h2>
                                <?php echo htmlspecialchars($property['beds']); ?>
                                </h2>
                                <p>
                                    beds
                                </p>
                            </div>
                            <div>
                                <h2>
                                <?php echo htmlspecialchars($property['baths']); ?>
                                </h2>
                                <p>
                                    baths
                                </p>
                            </div>

                            <div>
                                <h2>
                                <?php echo htmlspecialchars($property['sqrt']); ?>
                                </h2>
                                <p>
                                    sqrt
                                </p>
                            </div>
                            <div>
                                <h2>
                                $ <?php echo htmlspecialchars($property['price']); ?>.00
                                </h2>
                                
                            </div>
                        </div>
                </div>
    <div class ="title">
        <p>Architectural Ingenuity</p>
    </div>
    <div class = "brief">
        <p>The property is designed to balance aesthetics, functionality, and sustainability. The concept focuses on open-plan living spaces, maximizing natural light, and integrating indoor and outdoor living.
        Modern, with clean lines, minimalistic features, and the use of natural materials like wood and stone. The design also incorporates energy-efficient elements, such as solar panels and insulated windows
        </p>
    </div>
    <div class ="title">
        <p>Gallery</p>
    </div>

    <div class ="app-sections">
        <?php  foreach ($images as $image): ?>

            <?php if ($image !== '.' && $image !== '..'):?>
        <div>
            <img src="<?php echo htmlspecialchars($property['dir_path']),"/", $image ;?>" alt="">
        </div>
        <?php endif ?>
    <?php endforeach?>

    </div>
    <div class ="title">
        <p>Find Location on Map</p>
    </div>
    <div id="map"></div>

    <div class="footer">
        <?php
            include("app/components/footer.php");
        ?>

        
    </div>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    <script src ="public/js/index.js"></script>

</body>
</html>