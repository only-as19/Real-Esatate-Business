
    const hamburger = document.getElementById('hamburger-icon');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });

  
 const links = document.querySelectorAll('#nav-menu a');

  links.forEach(link => {
    link.addEventListener('click', () => {
      links.forEach(l => l.classList.remove('active')); // remove from all
      link.classList.add('active'); // add to clicked
    });
  });

  const buttons = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.card');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      // Set active class
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const type = btn.getAttribute('data-type');

      cards.forEach(card => {
        const cardType = card.getAttribute('data-type');
        if (type === 'all') {
          card.classList.remove('hidden');
        } else {
          if (cardType === type) {
            card.classList.remove('hidden');
          } else {
            card.classList.add('hidden');
          }
        }
      });
    });
  });