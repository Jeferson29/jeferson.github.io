function setTheme(theme) {
  document.body.className = theme;
  localStorage.setItem("portfolio-theme", theme);
  setThemeColorByTheme(theme);
}

const savedTheme = localStorage.getItem("portfolio-theme") || "theme-cyber";
document.body.className = savedTheme;
setThemeColorByTheme(savedTheme);

const switcher = document.getElementById("themeSwitcher");
const toggle = document.getElementById("themeToggle");

toggle.addEventListener("click", () => {
  switcher.classList.toggle("active");
});

/* Fecha ao clicar fora */
document.addEventListener("click", (e) => {
  if (!switcher.contains(e.target)) {
    switcher.classList.remove("active");
  }
});

function setThemeColorByTheme(theme) {
  const meta = document.querySelector('meta[name="theme-color"]');

  if (theme === "theme-cyber") {
    meta.setAttribute("content", "#00F3FF");
  }

  if (theme === "theme-dracula") {
    meta.setAttribute("content", "#2b2438"); 
  }

  if (theme === "theme-matrix") {
    meta.setAttribute("content", "#003b1c");
  }
}
