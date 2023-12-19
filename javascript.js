let searchForm = document.querySelector('.search-form');
    let loginForm = document.querySelector('.login-form');
    let navbar = document.querySelector('.navbar');
    let registerForm = document.querySelector('.register-form');

    document.querySelector('.search').onclick = () =>{
      console.log('Search clicked');
      searchForm.classList.toggle('active');
      loginForm.classList.remove('active');
      navbar.classList.remove('active');
      registerForm.classList.remove('active');
  }

    document.querySelector('.login').onclick = () =>{
      console.log('Login clicked');
        loginForm.classList.toggle('active');
        searchForm.classList.remove('active');
        navbar.classList.remove('active');
        registerForm.classList.remove('active');
    }

    document.querySelector('.menu').onclick = () =>{
        navbar.classList.toggle('active');
        searchForm.classList.remove('active');
        loginForm.classList.remove('active');
        registerForm.classList.remove('active');
    }

    window.onscroll = () =>{
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

document.addEventListener("click", function (event) {
  if (event.target.id === "next_btn" || event.target.id === "back_btn") {
    const sliderControls = event.target.closest(".slider-controls");
     if (sliderControls) {
      const scrollContainer = sliderControls.querySelector(".box-slider-container");
      const boxSliderWidth = scrollContainer.querySelector(".box-slider").offsetWidth;
      const isNext = event.target.id === "next_btn";

      scrollContainer.style.scrollBehavior = "smooth";
      scrollContainer.scrollLeft += isNext ? boxSliderWidth : -boxSliderWidth;
    }
  }
});

const sliderContainers = document.querySelectorAll(".box-slider-container");
sliderContainers.forEach(function (scrollContainer) {
  scrollContainer.addEventListener("wheel", function (evt) {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto";
  });
});




