
"use strict";

// --------------------------
// Start
// --------------------------

jQuery.ajaxSetup({
  cache: false,
});

let win = jQuery(window);

win.on("load", function(){
  addEvent();
});

win.on("resize", function(){
  // adjustBlockLink();
});

// --------------------------
// イベントを追加する
// --------------------------

function addEvent() {

  jQuery('body').on('mouseenter', '.--block-link', function() {
    jQuery(this).addClass('--mouseenter');
  });

  jQuery('body').on('mouseleave', '.--block-link', function() {
    jQuery(this).removeClass('--mouseenter');
  });

  jQuery('body').on('click', '.--block-link', function(event) {
    event.preventDefault();
    var href = jQuery(this).find("a").attr("href");
    if(href) { window.location.href = href; }
  });

  jQuery("#drawer-btn__open").on('click', function (e) {
    e.preventDefault();
    if (jQuery(this).hasClass("--active")) {
      closeDrawer(e);
    } else {
      jQuery(this).addClass("--active");
      openDrawer(e);
    }
  });

  jQuery("#drawer-btn__close").on('click', function (e) {
    e.preventDefault();
    closeDrawer(e);
  });


  jQuery("#mask").on('click', function (e) {
    e.preventDefault();
    closeDrawer(e);
  });

  jQuery("#fixed-buttons__back-top a").on('click', function (e) {
    e.preventDefault();
    jQuery("body,html").animate({scrollTop:0}, 500);
  });

  jQuery('a[href^="#"]:not([href^="#tab"])').click(function(e){
    e.preventDefault();
    var adjust = jQuery("#header").height();
    var speed = 400;
    var href= jQuery(this).attr("href");

    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - adjust;
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

  jQuery('.drawer .list__link').click(function(e){
    var href = jQuery(this).attr("href");
    if (location.pathname == "/") {
      return true;
    }
    if(0 <= href.indexOf(location.pathname)){
      var adjust = jQuery("#header").height();
      var speed = 400;
      var res = href.split('/');
      if (res[2] == "") {
        e.preventDefault();
        var position = 0;
        jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
        drawerUpdate();
        return false;
      } else {
        e.preventDefault();
        var target = res[2];
        var position = jQuery(target).offset().top - adjust;
        jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
        drawerUpdate();
        return false;
      }
    }
  });
}

function openDrawer(e){
  e.preventDefault();
  jQuery('#mask').addClass('--on');
  setTimeout(function () {
    jQuery('#mask').addClass("--show");
  }, 10);
  jQuery('#drawer').addClass('--on');
  setTimeout(function () {
    jQuery('#drawer').addClass("--show");
  }, 10);
  jQuery('#drawer-close').addClass('--on');
  setTimeout(function () {
    jQuery('#drawer-close').addClass("--show");
  }, 10);
}

function closeDrawer(e){
  jQuery('#drawer-btn__open').removeClass("--active");
  jQuery('#mask').removeClass('--show');
  setTimeout(function () {
    jQuery('#mask').removeClass("--on");
  }, 500);
  jQuery('#drawer').removeClass('--show');
  setTimeout(function () {
    jQuery('#drawer').removeClass("--on");
  }, 500);
  jQuery('#drawer-close').removeClass('--show');
  jQuery('#drawer-close').removeClass("--on");
}