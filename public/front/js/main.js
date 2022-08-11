$(document).ready(function () {
  $(".button button").click(function () {
    $(this).parent().toggleClass("active")
    if ($(".button").hasClass("active")) {
      $(".button").not($(this).parent()).removeClass("active")
    } else {
      $(".button").not($(this).parent()).addClass("active")
    }
    if ($(".aze").hasClass("active")) {
      $(".aze-text").css("display","block")
      $(".tr-text").css("display","none")

      $(".aze-images").css("display","block")
      $(".trk-images").css("display","none")

      $(".az").addClass("active"),
      $(".tr").removeClass("active")
    } else {
      $(".aze-text").css("display","none")
      $(".tr-text").css("display","block")
      $(".aze-images").css("display","none")
      $(".trk-images").css("display","block")
      $(".az").removeClass("active")
      $(".tr").addClass("active")
    }
  })
  if ($(".aze").hasClass("active")) {
    $(".trk-images").css("display","none")
  } else {
    $(".aze-images").css("display","none")
  }
  $(".menu-icon").click(function () {
    $(".header-top-hamburger").toggleClass("open")
    $("body").toggleClass("hamburger_menu")
  })
  $(".address").click(function () {
    $(".header-top-hamburger").toggleClass("open")
    $("body").toggleClass("hamburger_menu")
  })
  $(".contact").click(function () {
    $(".header-top-hamburger").toggleClass("open")
    $("body").toggleClass("hamburger_menu")
    $('html,body').animate({
      scrollTop: $("#contact").offset().top
    },
      'slow');
  })
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('header').addClass('sticky')
        $('.click-top').css("display","block")
    } else {
        $('header').removeClass('sticky')
        $('.click-top').css("display","none")
    }
  });
  $('.click-top').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
  if($(window).width() > 767)
  { 
    $(".az").mouseover(function () {
      $(".tr").css("width","230px")
      $(".az").css("width","399px")
    });
    $(".tr").mouseover(function () {
      $(".tr").css("width","399px")
      $(".az").css("width","230px")
    });
    $(".az").mouseleave(function () {
      if($(".az").hasClass("active")){
  
      }
      else {
        $(".tr").css("width","399px")
        $(".az").css("width","230px")
      }
    });
    $(".tr").mouseleave(function () {
      if($(".tr").hasClass("active")){
  
      }
      else {
        $(".tr").css("width","230px")
        $(".az").css("width","399px")
      }
    });
  }
  $(".tr").click(function () {
    if ($(".az").hasClass("active")) {
      $(".az").removeClass("active"),
      $(".tr").addClass("active")
      $(".aze").removeClass("active")
      $(".trk").addClass("active")
      $(".aze-text").css("display","none")
      $(".tr-text").css("display","block")
      $(".aze-images").css("display","none")
      $(".trk-images").css("display","block")
    }
    else {
      $(".tr").addClass("active")
      $(".aze").removeClass("active")
      $(".trk").addClass("active")
    }
  });
  $(".az").click(function () {
    if ($(".tr").hasClass("active")) {
      $(".tr").removeClass("active"),
      $(".az").addClass("active")
      $(".trk").removeClass("active")
      $(".aze").addClass("active")
      $(".aze-text").css("display","block")
      $(".tr-text").css("display","none")
      $(".aze-images").css("display","block")
      $(".trkimages-").css("display","none")
    }
    else {
      $(".az").addClass("active")
      $(".trk").removeClass("active")
      $(".aze").addClass("active")
    }
  });
  AOS.init();
  $("#home a").click(function () {
    $('html,body').animate({
      scrollTop: $("#about").offset().top
    },
      'slow');
  });
  // $( ".tr button" ).click(function() {
  //   if ($(".az").hasClass("active")) {
  //     $(".az").removeClass("active"),
  //     $(".tr").addClass("active")
  //   }
  //   else {
  //     $(".tr").toggleClass("active")
  //   }
  // });
  // $( ".az button" ).click(function() {
  //   if ($(".tr").hasClass("active")) {
  //     $(".tr").removeClass("active"),
  //     $(".az").addClass("active")
  //   }
  //   else {
  //     $(".az").toggleClass("active")
  //   }
  // });
  $(".open-dest").click(function () {
    window.open($(this).parent('a').attr('href'));
  })
  var lb = $('.lightbox');
  $('.thumbnail').click(function () {
    var source = $(this).attr('src');
    lb.fadeIn('1000');
    lb.find('img').attr('src', source);
    $('body').css('overflow-y', 'hidden');
  });
  $('.close').click(function () {
    lb.fadeOut('1000');
    $('body').css('overflow-y', 'auto');
  });
  $('[data-fancybox]').fancybox({
    loop: true,
  });
});