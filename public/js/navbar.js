document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const navbarDefault = document.getElementById('navbar-default');

  menuToggle.addEventListener('click', function() {
    navbarDefault.classList.toggle('hidden');
  });
});

// Event Listener untuk Tombol Profil Desktop
document.getElementById('profile-button').addEventListener('click', function () {
  const sidebar = document.getElementById('sidebar');
  if (sidebar.classList.contains('hidden')) {
    sidebar.classList.remove('hidden');
    sidebar.classList.add('show');
  } else {
    sidebar.classList.remove('show');
    sidebar.classList.add('hidden');
  }
});

// Event Listener untuk Tombol Profil Mobile
document.getElementById('profile-button-mobile')?.addEventListener('click', function () {
  const sidebar = document.getElementById('sidebar');
  if (sidebar.classList.contains('hidden')) {
    sidebar.classList.remove('hidden');
    sidebar.classList.add('show');
  } else {
    sidebar.classList.remove('show');
    sidebar.classList.add('hidden');
  }
});

// Event Listener untuk Tombol Tutup Sidebar
document.getElementById('close-sidebar').addEventListener('click', function () {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.remove('show');
  sidebar.classList.add('hidden');
});
