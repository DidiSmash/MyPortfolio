function toggleTheme() {
    let element = document.body;
    // icons
    let github = document.getElementById("github");
    let discord = document.getElementById("discord");
    let linkedin = document.getElementById("linkedin");
    let WelcomeMessage = document.getElementById("WcmMessage");
    let iconMenu = document.getElementById("iconMenu");
    let iconContact = document.getElementById("iconContact");
    // class
    element.classList.toggle("dark");
    // class incons
    github.classList.toggle("darkGithub");
    discord.classList.toggle("darkDiscord");
    linkedin.classList.toggle("darkLinkedin");
    WelcomeMessage.classList.toggle("darkWelcomeMessage");
    iconMenu.classList.toggle("darkIconMenu");
    iconContact.classList.toggle("darkIconContact");
}