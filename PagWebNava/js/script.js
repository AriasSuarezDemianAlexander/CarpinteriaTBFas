const toggleMenu = document.getElementById('toggleMenu');
const closeBtn = document.querySelector('.close-btn');

closeBtn.addEventListener('click', function() {
  toggleMenu.checked = false;
});
