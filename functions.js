function toggleTheme() { // veille tecno | cv 
    let element = document.body;
    // icons
    let favIcon = document.getElementById("favIcon");
    let github = document.getElementById("github");
    let discord = document.getElementById("discord");
    let linkedin = document.getElementById("linkedin");
    let WelcomeMessage = document.getElementById("WcmMessage");
    let iconMenu = document.getElementById("iconMenu");
    let iconContact = document.getElementById("iconContact");
    // class
    element.classList.toggle("dark");
    // class incons
    if (favIcon.href != "http://localhost/MyPortfolioV2/img/UFO3D.ico"){
      favIcon.href = "http://localhost/MyPortfolioV2/img/UFO3D.ico";
    } else {
      favIcon.href = "http://localhost/MyPortfolioV2/img/Island3D.ico";
    }
    github.classList.toggle("darkGithub");
    discord.classList.toggle("darkDiscord");
    linkedin.classList.toggle("darkLinkedin");
    WelcomeMessage.classList.toggle("darkWelcomeMessage");
    iconMenu.classList.toggle("darkIconMenu");
    iconContact.classList.toggle("darkIconContact");
}

var swiper = new Swiper(".cards-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });