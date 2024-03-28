<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="functions.js"></script>
    <title>My Portfolio</title>
</head>
<body>
    <header>
        <a href="#" class="logo">MyPortfolio</a>

        <nav class="navbar">
            <a href="#about">About</a>
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
        <button onclick="location.href='#about';">Get started</button>
        <img src="http://localhost/MyPortfolioV2/img/Island3D.png" alt="Island on 3D" id="iconMenu">
    </div>

    <div class="about" id="about">
        <h2>About me</h2>
        <p>I'm a first-year BTS SIO student in Vienne. I've been developing small bots,<br>websites, mobile applications and little games in a variety of languages for the<br>past 4 years. I love the creativity and freedom of programming, and I'd like to<br>continue in this way in my professional career.</p>
    </div>

    <div class="skills" id="skills">
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

    <div class="projects" id="projects">
        <h2>My Projects</h2>

        <div class="cards">
            <div class="card">
                <img src="http://localhost/MyPortfolioV2/img/Island3D.png" alt="portfolio">
                <div class="info">
                    <p>Portfolio</p>
                    <a href="https://github.com/DidiSmash/MyPortfolio" target="_blank">See More ›</a>
                </div>
            </div>

            <div class="card" style="background-color:#f9cb9c">
                <img src="http://localhost/MyPortfolioV2/img/TDGD-3DIcon.png" alt="portfolio">
                <div class="info">
                    <p>TDGD-3D</p>
                    <a href="https://github.com/DidiSmash/TDGD-3D" target="_blank">See More ›</a>
                </div>
            </div>

            <div class="card" style="background-color:#eaebe9">
                <img src="http://localhost/MyPortfolioV2/img/logo_entIcon.png" alt="portfolio">
                <div class="info">
                    <p>ENT Mobile</p>
                    <a href="https://github.com/DidiSmash/FakENTMobile" target="_blank">See More ›</a>
                </div>
            </div>
            
            <div class="card" style="background-color:#ace597">
                <img src="http://localhost/MyPortfolioV2/img/EcoElecIcon.png" alt="portfolio">
                <div class="info">
                    <p>EcoElec</p>
                    <a href="https://github.com/DidiSmash/EcoElec" target="_blank">See More ›</a>
                </div>
            </div>
        </div>

        <button onclick="location.href='http://localhost/MyPortfolioV2/projects.php';">All Projects</button>
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
            <a href="#about">About</a>
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
</html>