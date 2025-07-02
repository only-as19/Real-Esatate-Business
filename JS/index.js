
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