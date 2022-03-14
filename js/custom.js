$(document).ready(function () {
  if (/iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    //alert('phone browsers');
    $(".header-right-section").removeClass("");
    $(".header-right-section").addClass("quote-request");
    $(".quote-request").click(function () {
      window.location.href =
        "https://dedicateddevelopers.com/request-a-quote.php";
    });
  } else {
  }

  function toggleSidebar() {
    $(".top-bar-wrap").toggleClass("show-nav");
    $(".hamburger").toggleClass("close-ico-v");
    $("main").toggleClass("move-to-left");
    $(".sidebar-item").toggleClass("active");
  }
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      $(".top-bar").addClass("flexi-nav");
    } else {
      $(".top-bar").removeClass("flexi-nav");
    }
  });
  $(".hamburger").on("click tap", function () {
    toggleSidebar();
  });

  // Neil Script
  function hide_sub_navs() {
    $(".top_level div.child-mob-menu").hide().removeClass("shown");
  }

  $(function () {
    hide_sub_navs();
    $(".top_level").click(function (event) {
      event.stopPropagation();
      var clicked = this;
      var sub_menu = $(clicked).find(".child-mob-menu");
      if (sub_menu.hasClass("shown")) {
        sub_menu.hide().removeClass("shown");
        sub_menu.hide().parent().removeClass("active-item");
      } else {
        sub_menu.show().addClass("shown");
        sub_menu.show().parent().addClass("active-item");
        $(".top_level").each(function () {
          var next_li = this;
          if (next_li != clicked) {
            $(next_li).find(".child-mob-menu").hide().removeClass("shown");
            $(next_li)
              .find(".child-mob-menu")
              .hide()
              .parent()
              .removeClass("active-item");
          }
        });
      }
    });
    $(window).click(hide_sub_navs);
  });
  //

  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      toggleSidebar();
    }
  });
  $("#slideshow > div:gt(0)").hide();
  setInterval(function () {
    $("#slideshow > div:first")
      .fadeOut(1000)
      .next()
      .fadeIn(1000)
      .end()
      .appendTo("#slideshow");
  }, 4000);
  $("#slideshow2 > div:gt(0)").hide();
  setInterval(function () {
    $("#slideshow2 > div:first")
      .fadeOut(500)
      .next()
      .fadeIn(500)
      .end()
      .appendTo("#slideshow2");
  }, 2000);
  $(".testimonial-1").mouseover(function () {
    $(".testimonial-1-block").show();
  });
  $(".testimonial-2").mouseover(function () {
    $(".testimonial-2-block").show();
  });
  $(".testimonial-3").mouseover(function () {
    $(".testimonial-3-block").show();
  });
  $(".testimonial-4").mouseover(function () {
    $(".testimonial-4-block").show();
  });
  $(".testimonial-5").mouseover(function () {
    $(".testimonial-5-block").show();
  });
  $(".testimonial-6").mouseover(function () {
    $(".testimonial-6-block").show();
  });
  $(".testimonial-7").mouseover(function () {
    $(".testimonial-7-block").show();
  });
  $(".testimonial-8").mouseover(function () {
    $(".testimonial-8-block").show();
  });
  $(".testimonial-9").mouseover(function () {
    $(".testimonial-9-block").show();
  });
  $(".testimonial-10").mouseover(function () {
    $(".testimonial-10-block").show();
  });
  $(".testimonial-11").mouseover(function () {
    $(".testimonial-11-block").show();
  });
  $(".testimonial-12").mouseover(function () {
    $(".testimonial-12-block").show();
  });
  $(".testimonial-13").mouseover(function () {
    $(".testimonial-13-block").show();
  });
  $(".testimonial-14").mouseover(function () {
    $(".testimonial-14-block").show();
  });
  $(".testimonial-15").mouseover(function () {
    $(".testimonial-15-block").show();
  });
  $(".testimonial-16").mouseover(function () {
    $(".testimonial-16-block").show();
  });
  $(".testimonial-map").mouseout(function () {
    $(".testimonial-block").hide();
  });
  $(".testimonial-1").click(function () {
    $(".testimonial-1-block").show();
  });
  $(".testimonial-2").click(function () {
    $(".testimonial-2-block").show();
  });
  $(".testimonial-3").click(function () {
    $(".testimonial-3-block").show();
  });
  $(".testimonial-4").click(function () {
    $(".testimonial-4-block").show();
  });
  $(".testimonial-5").click(function () {
    $(".testimonial-5-block").show();
  });
  $(".testimonial-6").click(function () {
    $(".testimonial-6-block").show();
  });
  $(".testimonial-7").click(function () {
    $(".testimonial-7-block").show();
  });
  $(".testimonial-8").click(function () {
    $(".testimonial-8-block").show();
  });
  $(".testimonial-9").click(function () {
    $(".testimonial-9-block").show();
  });
  $(".testimonial-10").click(function () {
    $(".testimonial-10-block").show();
  });
  $(".testimonial-11").click(function () {
    $(".testimonial-11-block").show();
  });
  $(".testimonial-12").click(function () {
    $(".testimonial-12-block").show();
  });
  $(".testimonial-13").click(function () {
    $(".testimonial-13-block").show();
  });
  $(".testimonial-14").click(function () {
    $(".testimonial-14-block").show();
  });
  $(".testimonial-15").click(function () {
    $(".testimonial-15-block").show();
  });
  $(".testimonial-16").click(function () {
    $(".testimonial-16-block").show();
  });
  $(".testimonial-map").click(function () {
    $(".testimonial-block").hide();
  });
  (function (window, document) {
    var t = setInterval(function () {
      if ("complete" === document.readyState) {
        clearInterval(t);
        $(".developement-row,.tech-wrap-v,.industries-row-v").each(function () {
          var highestBox = 0;
          $(
            ".two-columns,.boxes_con,.industries-block-v,.industry-content-wrap,.industry-content-img",
            this
          ).each(function () {
            if ($(this).height() > highestBox) {
              highestBox = $(this).height();
            }
          });
          $(
            ".two-columns,.boxes_con,.industries-block-v,.industry-content-wrap,.industry-content-img",
            this
          ).height(highestBox);
        });
      }
    }, 100);
  })(window, document);

  setTimeout(function () {
    $("#ccc-notify").html(
      '<div class="ccc-notify-text"><h3>Your choice regarding cookies on this site</h3><p>We use cookies to optimise site functionality and give you the best possible experience.</p></div><div class="ccc-notify-buttons"><button class="ccc-notify-button ccc-button-solid" onclick="CookieControl.notifyAccept()">Accept</button><button class="ccc-notify-button" onclick="CookieControl.open()">Cookie Preferences</button><span id="ccc-notify-dismiss" onclick="CookieControl.notifyDismiss()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></span></div>'
    );
    $("#ccc-notify").attr("visible", "visible");
    $("#ccc").css({
      "z-index": "56",
    });
  }, 3000);

  $(".team-col").click(function () {
    $(".team-col").removeClass("popshow");
    $(this).addClass("popshow");
  });
  $(".close-pop").click(function () {
    $(".team-col").removeClass("popshow");
    return false;
  });

  $("#close-video").click(function () {
    jQuery("#opened-video").hide();
    jQuery("iframe").attr("src", "");
    jQuery("iframe").attr("src", jQuery("iframe").attr("src"));
    jQuery("#close-video").hide();
  });

  jQuery("#showVideo1").click(function () {
    jQuery("#opened-video")
      .fadeIn()
      .html(
        '<div class="center-make"><div class="center-inner-video"><div class="responsive-iframe"><iframe id="video-iframe" src="https://player.vimeo.com/video/468762813?autoplay=1" width="1080" height="608" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></div>'
      );

    jQuery("#close-video").show();
  });
  jQuery("#showVideo2").click(function () {
    jQuery("#opened-video")
      .fadeIn()
      .html(
        '<div class="center-make"><div class="center-inner-video"><div class="responsive-iframe"><iframe id="video-iframe" src="https://player.vimeo.com/video/468762892?autoplay=1" width="1080" height="608" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></div>'
      );
    jQuery("#close-video").show();
  });

  jQuery("#showVideo3").click(function () {
    jQuery("#opened-video")
      .fadeIn()
      .html(
        '<div class="center-make"><div class="center-inner-video"><div class="responsive-iframe"><iframe id="video-iframe" src="https://player.vimeo.com/video/468762736?autoplay=1" width="1080" height="608" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></div>'
      );
    jQuery("#close-video").show();
  });
  jQuery("#showVideo4").click(function () {
    jQuery("#opened-video")
      .fadeIn()
      .html(
        '<div class="center-make"><div class="center-inner-video"><div class="responsive-iframe"><iframe id="video-iframe" src="https://player.vimeo.com/video/471069781?autoplay=1" width="1080" height="608" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></div>'
      );
    jQuery("#close-video").show();
  });

  jQuery("#showVideo6").click(function () {
    jQuery("#opened-video")
      .fadeIn()
      .html(
        '<div class="center-make"><div class="center-inner-video"><div class="responsive-iframe"><iframe id="video-iframe" src="https://player.vimeo.com/video/493775346?autoplay=1" width="1080" height="608" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></div>'
      );
    jQuery("#close-video").show();
  });

  jQuery("#showVideo7").click(function () {
    jQuery("#opened-video")
      .fadeIn()
      .html(
        '<div class="center-make"><div class="center-inner-video"><div class="responsive-iframe"><iframe id="video-iframe" src="https://player.vimeo.com/video/471069695?autoplay=1" width="1080" height="608" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></div>'
      );
    jQuery("#close-video").show();
  });
});

var elements = document.querySelectorAll("input,select,textarea");
var invalidListener = function () {
  this.scrollIntoView(false);
};
for (var i = elements.length; i--; )
  elements[i].addEventListener("invalid", invalidListener);

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() < 100) {
    jQuery("#e17hfiol264o1635963022034").fadeOut();
  } else {
    jQuery("#e17hfiol264o1635963022034").fadeIn();
  }
});
