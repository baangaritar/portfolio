$(document).ready(function(){
      $(window).scroll(function() {
        if ($(document).scrollTop() > 500) {
          $(".navbar-default").removeClass("navbar-static-top");
          $(".navbar-default").addClass("navbar-fixed-top");
          $(".navbar-fixed-top").css("background-color", "#f8f8f8"); 
          $(".navbar-fixed-top").css("margin-top", "0");      
          $(".navbar-default").css("background-color", 'black')

        } else {
          $(".navbar-default").removeClass("navbar-fixed-top");
          $(".navbar-default").addClass("navbar-static-top");
          $(".navbar-static-top").css("background-color", "rgba(0, 0, 0, 0)"); 
          $(".navbar-static-top").css("margin-top", "1rem"); 
        }
      });
    });


