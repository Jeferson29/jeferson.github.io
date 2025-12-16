// Efeito de digitação
const phrases = [
    "Bem-vindo ao Meu Portfolio",
    "Desenvolvedor Full Stack",
    "Front-end & Back-end",
    "Criando soluções modernas"
];

let phraseIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    const typedText = document.getElementById("typedText");
    const currentPhrase = phrases[phraseIndex];

    typedText.textContent = currentPhrase.substring(0, charIndex);

    if (!isDeleting) {
        if (charIndex < currentPhrase.length) {
            charIndex++;
            setTimeout(typeEffect, 90);
        } else {
            isDeleting = true;
            setTimeout(typeEffect, 1500);
        }
    } else {
        if (charIndex > 0) {
            charIndex--;
            setTimeout(typeEffect, 60);
        } else {
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
            setTimeout(typeEffect, 200);
        }
    }
}

window.onload = typeEffect;