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

// const removeAllActiveLinks = (sections) => {
//   sections.forEach(section => {
//     const link = document.querySelector('.link-' + section)

//       if (!link) return ;

//       link.classList.remove('active');
//   })
// }

// document.addEventListener('scroll', () => {
//   const sections = ["home", "about", "skills", "projects", "contact"]
//   const colors = ['#00ADB5', '#393E46', '#222831', '#393E46', '#222831']

//   sections.forEach(section => {
//     if (inviewport(section)) {
//       const link = document.querySelector('.link-' + section)
//       const sidepanel = document.getElementById('aside')

//       if (!link || !sidepanel) return ;

//       removeAllActiveLinks(sections)

//       link.classList.add('active')
//       sidepanel.style.backgroundColor = colors[sections.indexOf(section)]
//     }

//     if (section === 'skills') console.log('skills in viewport: ' + inviewport(section))
//   })
// })
const home = document.getElementById('home');
const about = document.getElementById('about');
const skills = document.getElementById('skills');
const projects = document.getElementById('projects');
const contact = document.getElementById('contact');
const lkhome = document.getElementById('link-home');
const lkabout = document.getElementById('link-about');
const lkskills = document.getElementById('link-skills');
const lkprojects = document.getElementById('link-projects');
const lkcontact = document.getElementById('link-contact');
lkhome.addEventListener('click', () => {
  ac = document.getElementsByClassName("ac")[0];
  ac.classList.add("nac")
  ac.classList.remove("ac");
  home.classList.add("ac");
  home.classList.remove("nac");
  aside.style.backgroundColor= "#00ADB5";
});
lkabout.addEventListener('click', () => {
  ac = document.getElementsByClassName("ac")[0];
  ac.classList.add("nac")
  ac.classList.remove("ac");
  about.classList.add("ac");
  about.classList.remove("nac");
  aside.style.backgroundColor= "#393E46";
});
lkskills.addEventListener('click', () => {
  ac = document.getElementsByClassName("ac")[0];
  ac.classList.add("nac")
  ac.classList.remove("ac");
  skills.classList.add("ac");
  skills.classList.remove("nac");
  aside.style.backgroundColor= "#222831";
});
lkprojects.addEventListener('click', () => {
  ac = document.getElementsByClassName("ac")[0];
  ac.classList.add("nac")
  ac.classList.remove("ac");
  projects.classList.add("ac");
  projects.classList.remove("nac");
  aside.style.backgroundColor= "#393E46";
});
lkcontact.addEventListener('click', () => {
  ac = document.getElementsByClassName("ac")[0];
  ac.classList.add("nac")
  ac.classList.remove("ac");
  contact.classList.add("ac");
  contact.classList.remove("nac");
  aside.style.backgroundColor= "#222831";
});