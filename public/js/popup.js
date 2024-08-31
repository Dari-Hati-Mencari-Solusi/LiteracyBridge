// Ambil elemen dengan ID show-popup dan close-popup
const showPopup = document.getElementById('show-popup');
const closePopup = document.getElementById('close-popup');
const popup = document.getElementById('popup');
const showPopup2 = document.getElementById('show-popup2');
const closePopup2 = document.getElementById('close-popup2');
const popup2 = document.getElementById('popup2');

// Tampilkan popup saat link 'Lihat 12 balasan' diklik
showPopup.addEventListener('click', function (e) {
  e.preventDefault();
  popup.classList.remove('hidden');
});

// Sembunyikan popup saat tombol 'Cancel' diklik
closePopup.addEventListener('click', function () {
  popup.classList.add('hidden');
});

// Tampilkan popup saat link 'Lihat 12 balasan' diklik
showPopup2.addEventListener('click', function (e) {
  e.preventDefault();
  popup2.classList.remove('hidden');
});

// Sembunyikan popup saat tombol 'Cancel' diklik
closePopup2.addEventListener('click', function () {
  popup2.classList.add('hidden');
});
