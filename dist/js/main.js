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

const removeAllActiveLinks = (sections) => {
  sections.forEach(section => {
    const link = document.querySelector('.link-' + section)

      if (!link) return ;

      link.classList.remove('active');
  })
}

document.addEventListener('scroll', () => {
  const sections = ["home", "about", "skills", "projects", "contact"]
  const colors = ['#00ADB5', '#393E46', '#222831', '#393E46', '#222831']

  sections.forEach(section => {
    if (inviewport(section)) {
      const link = document.querySelector('.link-' + section)
      const sidepanel = document.getElementById('aside')

      if (!link || !sidepanel) return ;

      removeAllActiveLinks(sections)

      link.classList.add('active')
      sidepanel.style.backgroundColor = colors[sections.indexOf(section)]
    }

    if (section === 'skills') console.log('skills in viewport: ' + inviewport(section))
  })
})

addEventListener('scroll', (event) => {
  // document.getElementById("about").scrollIntoView({behavior: 'smooth'});
  console.log("work...")
});
