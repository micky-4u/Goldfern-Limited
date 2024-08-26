<?php
    include("app/views/base.php");
?>
<body>

    <!-- desktop version -->
  
        <?php
            include("app/components/header.php");
        ?>

            <div class ="title">
                <p>Ghana</p>
            </div>

            <div style ="display: flex; flex-direction: column; justify-content:center; align-items:center gap: 10px;text-align:center">
            <span class="material-symbols-outlined">
                 location_on
            </span>

                    <p>Fertilizer Link - Teshie Accra</p>
                    <p>+233 543 456 4345</p>
                </div>
                <div class ="title">
                <p>US</p>
            </div>

            <div style ="display: flex; flex-direction: column; justify-content:center; align-items:center gap: 10px;text-align:center">
            <span class="material-symbols-outlined">
                 location_on
            </span>

                    <p>Washington DC</p>
                    <p>+1 543 456 4345</p>
                </div>
    <div class = "brief">
        <p>
            Just contact us of all home solutions 
        </p>
    </div>
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