document.addEventListener('DOMContentLoaded', function() {
    
    let searchForm = document.querySelector('.search-form');
    let loginForm = document.querySelector('.login-form');
    let navbar = document.querySelector('.navbar');
    let registerForm = document.querySelector('.register-form');
  
    document.querySelector('.search').onclick = () => {
      searchForm.classList.toggle('active');
      loginForm.classList.remove('active');
      navbar.classList.remove('active');
      registerForm.classList.remove('active');
    }
  
    document.querySelector('.login').onclick = () => {
      console.log('Login clicked');
      loginForm.classList.toggle('active');
      searchForm.classList.remove('active');
      navbar.classList.remove('active');
      registerForm.classList.remove('active');
    }
  
    document.querySelector('.menu').onclick = () => {
      navbar.classList.toggle('active');
      searchForm.classList.remove('active');
      loginForm.classList.remove('active');
      registerForm.classList.remove('active');
    }
  
    window.onscroll = () => {
      searchForm.classList.remove('active');
      loginForm.classList.remove('active');
      navbar.classList.remove('active');
      registerForm.classList.remove('active');
    }
  
    function toggleForm() {
        loginForm.classList.toggle('active');
        registerForm.classList.toggle('active');
    }

    function switchToLogin() {
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
    }
  
    const images = document.querySelectorAll('.Berita img');

    images.forEach(image => {
        image.addEventListener('mouseover', function() {
            this.style.transition = 'transform 0.5s';
            this.style.transform = 'scale(1.1)'; // Gambar akan membesar 1.1 kali lipat
        });

        image.addEventListener('mouseout', function() {
            this.style.transition = 'transform 0.5s';
            this.style.transform = 'scale(1)'; // Kembali ke ukuran normal
        });
    });
  });
