document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const navbarDefault = document.getElementById('navbar-default');

  menuToggle.addEventListener('click', function() {
    navbarDefault.classList.toggle('hidden');
  });
});
