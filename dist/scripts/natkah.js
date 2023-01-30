// Analytics 
// window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config','G-CLHYN8KHT0');
// Analytics

function mobileButton() {
  let nav = document.querySelector('.js-top-nav');
  if (nav.matches('.hidden')) {
    nav.classList.remove('hidden');
  } else {
    nav.classList.add('hidden');
  }
}

if (document.querySelectorAll('.category-description p').length < 2) {
  document.querySelectorAll('.category-description').forEach(function (el) {
    el.style.display = 'none';
  });
}

function sidebar() {
  let sidebar = document.getElementById("sidebar");
  let stop = (sidebar.offsetTop + 405);


  window.onscroll = function (e) {
    if (window.innerWidth > 991) {
      let scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
      if (scrollTop >= stop) {
        sidebar.className = 'fixed top-5 w-[15rem]';
      } else {
        sidebar.className = 'w-3/4';
      }
    }
  }
}

let sidebarControl = document.getElementById("sidebar");
if (sidebarControl !== null) {
  sidebar();
  window.addEventListener('change', sidebar);
}