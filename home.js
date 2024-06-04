const menuIcon = document.querySelector('.top-list:before');

menuIcon.addEventListener('click', () => {
  const menu = document.querySelector('.top-list');
  menu.classList.toggle('active');
});