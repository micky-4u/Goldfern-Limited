<?php
    include("app/views/base.php");

    require("database/api/agents.php");
?>
<body>

    <!-- desktop version -->
    <div class="landing">
        <?php
            include 'app/components/header.php';
        ?>
        <div class="overlay"></div>


        <div class="content">
            <div>
                <h1>
                    Goldfern <span>Limited</span>
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

    <div class="goodnote">
        <p class ="title">Experience elegantly designed and uniquely crafted high-quality apartments.</p>
    </div>

    <div class="categories">
        <?php
            include("app/components/category.php");
        ?>
    </div>
    <div class = "title">
        <p >Connect With our top agents</p>
    </div>
    <div class="agents" id = "agents">
        <?php
            include("app/components/agent.php")
        ?>
    </div>

    <div class = "title">
        <p >Recent Projects</p>
    </div>
    <div class ="project-area">
            <?php
                include("app/components/projects.php")
            ?>
    </div>
    <div class = "title">
        <p >Reach out to us</p>
    </div>

    <?php include("app/components/message.php");?>
    <div class="footer">
        <?php
            include("app/components/footer.php");
        ?>
    </div src="script.js"></script>
</body>
</html>