<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel='icon' href='http://localhost/MyPortfolioV2/img/Island3D.ico' id='favIcon'>
    <?php include 'function.inc.php'; ?>
    <title>My Portfolio</title>
</head>
<body>
    <header>
        <a href="#" class="logo">MyPortfolio</a>

        <nav class="navbar">
            <a href="#info">Informations</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contacts</a>
        </nav>

        <div class="switcher">
            <input type="checkbox" id="check" onclick="toggleTheme()">
            <label for="check" class="button"></label>
        </div>
    </header>

    <div class="menu">
        <div class="welcomeMessage">
            <img src="https://readme-typing-svg.herokuapp.com?font=Fredoka&pause=1000&color=000000&random=false&width=435&lines=Hi+there+!+%F0%9F%91%8B;I'm+DidiSmash" id="WcmMessage" alt="Welcome Message" />
        </div>
        <h1>Fullstack Developer</h1>
        <h2>For the past 4 years, I've been developing small bots, websites, mobile<br>applications and little games in a wide range of languages.</h2>
        <button onclick="location.href='#info';">Get started</button>
        <img src="http://localhost/MyPortfolioV2/img/Island3D.png" alt="Island on 3D" id="iconMenu">
    </div>







    <div class="info" id="info">
        <h2>Informations</h2>
        <ul>
            <li class="navInfo">
                <button onclick='toggleInfo("aboutMe")'>About me</button>
                <button onclick='toggleInfo("skills")'>Skills</button>
                <button onclick='toggleInfo("roadMap")'>Road map</button>
                <button onclick='toggleInfo("cv")'>Cv</button>
            </li>
        </ul>
        <div class="containerInfo">
            <div class="divInfo" id='AboutMe'>
            <p>I'm a first-year BTS SIO student in Vienne. I've been developing small bots,<br>websites, mobile applications and little games in a variety of languages for the<br>past 4 years. I love the creativity and freedom of programming, and I'd like to<br>continue in this way in my professional career.</p>
            </div>
            <div class="divInfo" id='Skills'>
            <h2>My Skills</h2>
            <div class="icons">
                <img src="http://localhost/MyPortfolioV2/img/jsIcon.png" alt="icon javascript" id="js">
                <img src="http://localhost/MyPortfolioV2/img/htmlIcon.png" alt="icon html" id="html">
                <img src="http://localhost/MyPortfolioV2/img/cssIcon.png" alt="icon css" id="css">
                <img src="http://localhost/MyPortfolioV2/img/pythonIcon.png" alt="icon python" id="py">
                <img src="http://localhost/MyPortfolioV2/img/phpIcon.png" alt="icon php" id="php">
                <img src="http://localhost/MyPortfolioV2/img/cIcon.png" alt="icon c#" id="c">
                <img src="http://localhost/MyPortfolioV2/img/sqlIcon.png" alt="icon sql" id="sql">
                <img src="http://localhost/MyPortfolioV2/img/godotIcon.png" alt="icon godot" id="godot">
            </div>
            </div>
            <div class="divInfo" id='RoadMap'></div>
            <div class="divInfo" id='Cv'></div>
        </div>
    </div>
    
    <div class="projects" id="projects">
        <h2 class='title'>My Projects</h2>
        <div class="cards-container swiper">
            <div class="cards-content">
                <div class="cards swiper-wrapper">
                    <?php
                    $argv = array();
                    $argv['src'] = 'http://localhost/MyPortfolioV2/img/Island3D.png';  
                    $argv['bg'] = '#ABC1E5';
                    $argv['alt'] = 'Portfolio';
                    $argv['name'] = 'Portfolio';
                    $argv['desc'] = "Mon portfolio";
                    $argv['href'] = "https://github.com/DidiSmash/MyPortfolio";
                    createCard($argv);

                    $argv = array();
                    $argv['src'] = 'http://localhost/MyPortfolioV2/img/TDGD-3DIcon.png'; 
                    $argv['bg'] = '#f9cb9c';  
                    $argv['alt'] = 'TDGD-3D';
                    $argv['name'] = 'TDGD-3D';
                    $argv['desc'] = "Jeux 3D tower defense";
                    $argv['href'] = "https://github.com/DidiSmash/TDGD-3D";
                    createCard($argv);
                    
                    $argv = array();
                    $argv['src'] = 'http://localhost/MyPortfolioV2/img/logo_entIcon.png'; 
                    $argv['bg'] = '#eaebe9';  
                    $argv['alt'] = 'ENT Mobile';
                    $argv['name'] = 'ENT Mobile';
                    $argv['desc'] = "Application mobile ressemblant a l'ENT à but de prévention";
                    $argv['href'] = "https://github.com/DidiSmash/FakENTMobile";
                    createCard($argv);
                    
                    $argv = array();
                    $argv['src'] = 'http://localhost/MyPortfolioV2/img/EcoElecIcon.png'; 
                    $argv['bg'] = '#ace597';  
                    $argv['alt'] = 'EcoElec';
                    $argv['name'] = 'EcoElec';
                    $argv['desc'] = "Site de vente de produit reconditionné";
                    $argv['href'] = "https://github.com/DidiSmash/EcoElec";
                    createCard($argv);
                    ?>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>

        </div>
    </div>

    <div class="contact" id="contact">
        <div class="containers">
            <div class="formContact"> 
                <h2>Contact me</h2>
                <form onsubmit="SendMail()" class="formulaire" method="post" action="send-email.php">
                    <div class="divInfo field">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="divComment field">
                        <textarea name="message" rows="5" cols="50" class="message" placeholder="Message"></textarea>
                    </div>
    
                    <div class="divSubmit">
                        <button type="submit" value="Envoyer" class="submit">Send</button>
                    </div>
                </form>
            </div>
            <div class="rocket">
                <img src="http://localhost/MyPortfolioV2/img/Rocket3D.png" alt="Rocket 3D" id="iconContact">
            </div>
        </div>
    </div>
    <footer>
        <nav class="navbar">
            <a href="#info">Informations</a>
            <a href="#skills">Skills</a>
            <a href="#" class="logo">MyPortfolio</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contacts</a>
        </nav>
        <hr>
        <div class="media">
            <a href="#" target="_blank"><img src="http://localhost/MyPortfolioV2/img/discord.png" alt="Discord Logo" id="discord"></a>
            <a href="https://github.com/DidiSmash" target="_blank"><img src="http://localhost/MyPortfolioV2/img/github.png" alt="GitHub Logo" id="github"></a>
            <a href="#" target="_blank"><img src="http://localhost/MyPortfolioV2/img/linkedin.png" alt="Linkedin Logo" id="linkedin"></a>
        </div>
        <div class="credit">© All Rights Reserved | 2024 - DidiSmash</div>
    </footer>
</body>

<script src="swiper-bundle.min.js"></script>
<script src="functions.js"></script>
</html>