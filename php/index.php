<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title>PC Gamer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/jpg" href="../images/favicon.ico"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@700&display=swap"/>
    <link rel="stylesheet" href="../css/main.css"/>
</head>
<body>
    <div class="container">
        <nav class="navigation">
            <a href="../php/index.php">
                <?php
                    $imgName = "logo.png";
                    echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
                ?>
            </a>
            <ul class="nav-menu">
                <li><a href="">News</a></li>
                <li><a href="">Reviews</a></li>
                <li><a href="">Hardware</a></li>
                <li><a href="">Guides</a></li>
                <li><a href="">Community</a></li>
                <li><a href="">Release Dates</a></li>
                <li><a href="">Tech</a></li>
                <li><a href="">Guides</a></li>
            </ul>
        </nav>
    </div>
    <header class="showcase">
        <a href="../php/page1.php">
            <?php
                $imgName = "new_world_1.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h1>New World: 10 tips to get you started</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore provident
                sit impedit eligendi. Unde quidem ad quo voluptatem minima, non quasi
                ab quibusdam blanditiis! Quo eveniet harum molestias optio laboriosam?
            </p>
        </a>
        <a href="../php/page2.php">
            <?php
                $imgName = "videogames_1.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h1>Videogames need more Dungeon Masters, and not just in RPGs</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore provident
                sit impedit eligendi. Unde quidem ad quo voluptatem minima, non quasi
                ab quibusdam blanditiis! Quo eveniet harum molestias optio laboriosam?
            </p>
        </a>
    </header>
    <br/>
    <br/>
    <div class="news-cards">
        <a href="">
            <?php
                $imgName = "post_1.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h4>Please enjoy Discord while it's still good</h4>
        </a>
        <a href="">
            <?php
                $imgName = "post_2.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h4>Best power supply for PC gaming</h4>
        </a>
        <a href="">
            <?php
                $imgName = "post_3.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h4>New World levelling build: Weapon combinations to get you started</h4>
        </a>
        <a href="">
            <?php
                $imgName = "post_4.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h4>Marvel's Avengers needs to be put out of its misery</h4>
        </a>
        <a href="">
            <?php
                $imgName = "post_5.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h4>Razer Basilisk V3 gaming mouse reviewRazer Basilisk V3 gaming mouse review</h4>
        </a>
        <a href="">
            <?php
                $imgName = "post_6.webp";
                echo "<img src=\"../images/$imgName\" title=\"$imgName\"/ alt=\"$imgName\"/>";
            ?>
            <h4>Destiny 2: Ruins of Wrath Enigmatic and Trivial Mysteries</h4>
        </a>
    </div>
    <footer class="footer">
        <h2>PC Gamer</h2>
        <br/>
        <p>
            Copyright © 2021 PC Gamer.<br/> PC Gamer is not
            responsible for the content of external sites. Read about our approach to external linking.
        </p>
    </footer>
    <script src="../js/main.js"></script>
</body>
</html>