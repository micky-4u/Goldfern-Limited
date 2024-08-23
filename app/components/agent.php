<?php
require("configs/db.php");
?>

<?php if (count($agents) > 0): ?>
    <?php foreach ($agents as $agent): ?><div class ="agent">
    <div>
        <img src="" alt="">
        <p><?php echo htmlspecialchars($agent['rate']);?></p>
    </div>
    <h3><?php echo ucwords(htmlspecialchars($agent['name']));?></h3>
    <p><?php echo htmlspecialchars($agent['sold_props']);?> Properties sold</p>
    <button>connect</button>

</div>

<?php endforeach; ?>
        <?php else: ?>
            <p>No properties found.</p>
        <?php endif; ?>