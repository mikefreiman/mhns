function toggleNav(){nav.classList.add("nav--animatable"),nav.classList.contains("nav--visible")?nav.classList.remove("nav--visible"):nav.classList.add("nav--visible")}function OnTransitionEnd(){nav.classList.remove("nav--animatable")}var nav=document.querySelector(".nav__ul"),navIcon=document.querySelector(".nav__icon");nav.addEventListener("transitionend",OnTransitionEnd,!1),navIcon.addEventListener("click",toggleNav,!1),nav.addEventListener("click",toggleNav,!1);
