const columns = document.querySelectorAll('.skills-column');
/*if (!columns.length) return;*/

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');

        const cards = entry.target.querySelectorAll('.skill-card');
        cards.forEach((card, index) => {
          card.style.transitionDelay = `${index * 0.1}s`;
        });

        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.3
  });

  columns.forEach(col => observer.observe(col));
