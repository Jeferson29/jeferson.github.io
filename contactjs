(function () {
  emailjs.init("Ze4nr7Nn0pLCUIoJ5");
})();

const form = document.getElementById("contactForm");
const statusMsg = form.querySelector(".form-status");
const submitBtn = document.getElementById("submitBtn");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const message = form.message.value.trim();

  // Validação simples
  if (!name || !email || !message) {
    statusMsg.textContent = "Preencha todos os campos obrigatórios.";
    statusMsg.className = "form-status error";
    return;
  }

  submitBtn.disabled = true;
  submitBtn.textContent = "Enviando...";

  emailjs.sendForm(
    "service_miss2cv",
    "template_1uonfk4",
    form
  )
  .then(() => {
    statusMsg.textContent = "Mensagem enviada com sucesso 🚀";
    statusMsg.className = "form-status success";
    form.reset();
  })
  .catch(() => {
    statusMsg.textContent = "Erro ao enviar. Tente novamente.";
    statusMsg.className = "form-status error";
  })
  .finally(() => {
    submitBtn.disabled = false;
    submitBtn.textContent = "Enviar";
  });
});
