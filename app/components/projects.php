<?php 
    require("database/api/properties.php");
    $count = 0
    ?>

<?php foreach ($property as $prop): ?>
    <div class="project">
    <img src="<?php echo htmlspecialchars($prop['dir_path']) ?>/img1.jpg" alt="">
    <div class="arrow">
    <a href="visit?id= <?php echo htmlspecialchars($prop['id']) ?>">          
        <span class="material-symbols-outlined">
            arrow_right_alt
        </span>
    </a>
    </div>
    <div class="label">
        <p><?php echo htmlspecialchars($prop['beds']) ?> Bedroom Apartment</p>
        <div>
        <span class="material-symbols-outlined">
                        location_on
        </span>
        <p>
        <?php echo htmlspecialchars($prop['location']) ?>
        </p>


        </div>
    </div>
</div>
 <?php

 $count++;

 if ($count == 3){
    break;
 }

 ?>
<?php endforeach?>

