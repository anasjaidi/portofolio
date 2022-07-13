var menu = document.getElementById('menu1');
var aside = document.getElementById('aside');
var nav = document.getElementById('nav');
var m = 0;


menu.addEventListener('click', function myFunction() {
    if (nav.style.display === "block") {
      nav.style.display = "none";
      aside.style.background = "#00ADB5";
    } else {
        nav.style.display = "block";
        aside.style.background = "transparent";
    }
  });
