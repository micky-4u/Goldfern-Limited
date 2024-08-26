<?php
    include("app/views/base.php");
?>
<body>
    <?php
        require("database/api/properties.php");
    ?>

    <!-- desktop version -->
    <div class="landing">
        <?php
            include("app/components/header.php");
        ?>
        <div class="overlay">

        </div>

        <div class="content-prop">
            <div>
                <h1>
                    Our <span>Properties</span>
                </h1>
                <p></p>
                <hr>
            </div>
            <div>
            </div>
        </div>


        <div class ="viewImage">
            <img src="public/images/prop1/img1.jpg" alt="image view">
        </div>
    </div>

    <?php if (count($property) > 0): ?>
        <?php foreach ($property as $prop): ?>
            <div class="prop-info">
                    <div class="img-area">
                        <img src=" <?php echo htmlspecialchars($prop['dir_path']); ?>/img1.jpg" alt="">
                        <a href="visit?id=<?php echo htmlspecialchars($prop['id']);?>">

                            <button>
                                Visit
                            </button>
                        </a>
                    </div>
                    <div class="text-area">
                        <h1 style ="margin:0 0 0 20px">
                            <?php echo ucwords(htmlspecialchars($prop['name'])); ?>
                        </h1>
                        <div class ="location">
                            <span class="material-symbols-outlined">
                                location_on   
                            </span>

                            <p><?php echo ucwords(htmlspecialchars($prop['location'])); ?> - Accra</p>
                        </div>
                        <div class = "room-spec">
                        <div>
                                <h2>
                                <?php echo htmlspecialchars($prop['beds']); ?>
                                </h2>
                                <p>
                                    beds
                                </p>
                            </div>
                            <div>
                                <h2>
                                <?php echo htmlspecialchars($prop['baths']); ?>
                                </h2>
                                <p>
                                    baths
                                </p>
                            </div>

                            <div>
                                <h2>
                                <?php echo htmlspecialchars($prop['sqrt']); ?>
                                </h2>
                                <p>
                                    sqrt
                                </p>
                            </div>

                        </div>
                        
                        <p style ="margin:20px">
                        Price from:
                        <span style ="font-weight:700;">$<?php echo ucwords(htmlspecialchars($prop['price'])); ?>.00</span>
                        </p>
                        <a href="visit?id=<?php echo htmlspecialchars($prop['id']);?>">

                            <button>
                                Visit
                            </button>
                        </a>
                    </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No properties found.</p>
        <?php endif; ?>
        <div class = "title">
        <p >Reach out to us</p>
    </div>

        <?php include("app/components/message.php");?>

    <div class="footer">
        <?php
            include("app/components/footer.php");
        ?>

        
    </div>
</body>
</html>