
window.onscroll = function() {
  if (screen.width >= 600) {
    growShrinkLogo()
  }else{
    growShrinkLogo_sm()
  }
};

function growShrinkLogo() {
  var Logo = document.getElementById("Logo")
  if (isScrolledAfterElement("#section1")) {
    Logo.style.width = '7rem';
    Logo.style.left = '48%';
    Logo.style.top = '0';
  } else {
    Logo.style.width = '20rem';
   	Logo.style.height = '20rem';
   	Logo.style.left = '43%';

  }
}

function isScrolledAfterElement(elem) {
    var $elem = $(elem);
    var $window = $(window);
    var docViewTop = $window.scrollTop();
    var elemTop = $elem.offset().top;
    return elemTop <= docViewTop;
  }

function growShrinkLogo_sm() {
  var Logo = document.getElementById("Logo")
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    Logo.style.width = '7rem';
    Logo.style.left = '40%';
    Logo.style.top = '0';
  } else {
    Logo.style.width = '10rem';
    Logo.style.height = '10rem';
    Logo.style.left = '32%';

  }
}

