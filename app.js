//event judul
const content = document.querySelector('.Event .content');

function checkScroll() {
    const triggerPoint = content.getBoundingClientRect().top - window.innerHeight + 100;
    if (triggerPoint < 0) {
        content.classList.add('active');
        window.removeEventListener('scroll', checkScroll);
    }
}

window.addEventListener('scroll', checkScroll);
checkScroll(); // Check on page load


//animasi judul
// Fungsi untuk memeriksa apakah elemen berada dalam pandangan
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );

}

// Fungsi untuk menangani scrolling
function handleScroll() {
    const heading1 = document.querySelector('.about .heading');
    const heading2 = document.querySelector('.retrospeksi .heading');

    if (isElementInViewport(heading1)) {
        heading1.style.opacity = '1';
        heading1.style.transform = 'translateY(0)';
    }

    if (isElementInViewport(heading2)) {
        heading2.style.opacity = '1';
        heading2.style.transform = 'translateY(0)';
    }
}

// Menambahkan event listener untuk event scroll
window.addEventListener('scroll', handleScroll);

// Panggil handleScroll saat halaman dimuat untuk memeriksa status awal
handleScroll();



//Menu
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

//faq
const faq = document.querySelectorAll (".faq .faqs");

faq.forEach (faq => {
    faq.addEventListener ("click", () => {
    faq.classList.toggle("active");

    
     });
});


//Past Memories
let scrollContainer = document.querySelector(".gallery");
let backBtn = document.getElementById("backBtn");
let nextBtn = document.getElementById("nextBtn");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto";
});

nextBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 900;
});

backBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= 900;
});

