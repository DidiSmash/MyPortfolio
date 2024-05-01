function toggleTheme() {
    let element = document.body; // change about par info pour {about/skills/experience pro (ou parcours)/cv}
    // icons                     // change skills par news pour la veille essayer de mettre un fil d'actu importante sur le domaine qui ce change avec le temp
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

function toggleInfo(info) {
  let element = document.body;
  // divs                     // change skills par news pour la veille essayer de mettre un fil d'actu importante sur le domaine qui ce change avec le temp
  let aboutMe = document.getElementById("AboutMe");
  let skills = document.getElementById("Skills");
  let roadMap = document.getElementById("RoadMap");
  let cv = document.getElementById("Cv");
  // change div
  if (info == 'aboutMe') {
    aboutMe.style.display = 'block'
    skills.style.display = 'none'
    roadMap.style.display = 'none'
    cv.style.display = 'none'
  }

  if (info == 'skills') {
    aboutMe.style.display = 'none'
    skills.style.display = 'block'
    roadMap.style.display = 'none'
    cv.style.display = 'none'
  }

  if (info == 'roadMap') {
    aboutMe.style.display = 'none'
    skills.style.display = 'none'
    roadMap.style.display = 'block'
    cv.style.display = 'none'
  }

  if (info == 'cv') {
    aboutMe.style.display = 'none'
    skills.style.display = 'none'
    roadMap.style.display = 'none'
    cv.style.display = 'block'
  }
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