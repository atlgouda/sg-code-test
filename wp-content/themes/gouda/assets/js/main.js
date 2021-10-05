(function() {
    "use strict";
    console.log("hi :)");

    const image = document.getElementsByClassName('hero__image-wrap'),
          colorButton = document.getElementsByClassName("header__color-button"),
          buttonWhite = document.getElementsByClassName("header__color-button--white"),
          buttonGold = document.getElementsByClassName("header__color-button--gold"),
          buttonBlue = document.getElementsByClassName("header__color-button--blue"),
          buttonBlack = document.getElementsByClassName("header__color-button--black"),
          dayBlock = document.getElementById("dayBlock"),
          timeBlock = document.getElementById("timeBlock"),
          bioItem = document.getElementsByClassName("bios__list-item"),
          bioBody = document.getElementsByClassName("bios__written-body-wrap"),
          openBio = document.getElementsByClassName("bios__open-bio"),
          closeBio = document.getElementsByClassName("bios__close-bio");

    AOS.init({
        duration: 500,
    })

    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true,
        zoomable: false
    });

    getWeekDay();
    bioToggle();

    function getWeekDay(date){
        let day = new Date();
        let hours = day.getHours();
        let minutes = (day.getMinutes()<10?'0':'') + day.getMinutes();
        let seconds = (day.getSeconds() < 10 ? '0' : '') + day.getSeconds()
        let ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12;
        const daysOfWeek = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        dayBlock.innerHTML = daysOfWeek[day.getDay()];
        timeBlock.innerHTML = hours + ":" + minutes + ":" + seconds + " " + ampm;
    }
    setInterval(getWeekDay, 1000);


    function bioToggle() {
        for (let i = 0; i < bioItem.length; i++) {
            openBio[i].onclick = function() {
                bioBody[i].classList.toggle("bios__written-body-wrap--open");
            }

            closeBio[i].onclick = function() {
                bioBody[i].classList.toggle("bios__written-body-wrap--open");
            }

            window.addEventListener("resize", function(){
                bioBody[i].classList.remove("bios__written-body-wrap--open");
            });
        }
    }

    jQuery(document).ready(function ($) {
    $('.image-unsized').removeAttr('width').removeAttr('height');
    });

})();
