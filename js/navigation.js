"use strict";

let currentSection = null;

document.querySelector(".about-cta")
  .addEventListener("click", () => openSection("projects"));

function openSection(sectionId) {
    const sections = document.querySelectorAll(".section");
    const sidenav = document.getElementById("mySidenav");
    const header = document.getElementById("headerContent");

    sections.forEach(sec => {
        sec.classList.remove("active");
    });

    const selected = document.getElementById(sectionId);

    if (selected) {
        selected.classList.add("active");
        currentSection = sectionId;
        sidenav.classList.add("opened");
        header.style.opacity = "0";
    }
    
}

function goHome() {
    const sections = document.querySelectorAll(".section");
    const sidenav = document.getElementById("mySidenav");
    const header = document.getElementById("headerContent");

    sections.forEach(sec => {
        sec.classList.remove("active");
    });

    currentSection = null;
    sidenav.classList.remove("opened");
    header.style.opacity = "1";
}

// Habilita melhor resposta ao toque em alguns navegadores mobile
document.addEventListener("touchstart", function () {}, true);
