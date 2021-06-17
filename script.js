window.onload = function () {
    const animations = document.querySelectorAll(".animated");
    window.addEventListener('scroll', fadeIn);

    function fadeIn() {
        for (var i = 0; i < animations.length; i++) {
            var element = animations[i]
            var visible = element.getBoundingClientRect().top - window.innerHeight + 100;
            if (visible < 0) {
                element.classList.add("visible");
            } else {
                element.classList.remove("visible");
            }
        }
    }
    fadeIn();
};

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("nav").style.paddingTop = "0";
    document.getElementById("nav").style.paddingBottom = "9px";
    document.getElementById("nav").style.backgroundColor = "#F6F3EA";
    document.getElementById("logo").style.fontSize = "12px";
  } else {
    document.getElementById("nav").style.padding = "20px 10px";
    document.getElementById("nav").style.backgroundColor = "transparent";
    document.getElementById("logo").style.fontSize = "18px";
  }
}

