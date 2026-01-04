// linesAnimation.js
const linesContainer = document.querySelector(".lines");

if (linesContainer) {
  for (let i = 0; i < 30; i++) {
    const line = document.createElement("div");
    line.classList.add("line");
    line.style.left = Math.random() * 100 + "%";
    line.style.animationDuration = 1 + Math.random() * 3 + "s";
    linesContainer.appendChild(line);
  }
}
