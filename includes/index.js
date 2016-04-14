$(function() {
$("#open-form").click(function(){ 
  $(".contact").addClass("open-form"),
  $("#contact-overlay").addClass("show");
});
});

$(function() {
$("#open-search").click(function(){ 
  $(".search-form").addClass("open-search"),
  $("#search-overlay").addClass("show");
});
});


$(function() {
$("#open-login").click(function(){ 
  $(".login").addClass("open-login"),
  $("#login-overlay").addClass("show");
});
});

$(function() {
$("#open-form-button").click(function(){ 
  $(".contact").addClass("open-form"),
  $("#contact-overlay").addClass("show");
});
});

$(function() {
$("#open-search-button").click(function(){ 
  $(".search-form").addClass("open-search"),
  $("#search-overlay").addClass("show");
});
});

$(function() {
$(".close").click(function(){ 
  $(".contact").removeClass("open-form"),
  $("#contact-overlay").removeClass("show"),
  $(".login").removeClass("open-login"),
  $("#login-overlay").removeClass("show");
  $(".search-form").removeClass("open-search"),
  $("#search-overlay").removeClass("show");
});
});

$(function() {
$("#search-overlay").click(function(){ 
  $(".search-form").removeClass("open-search"),
  $("#search-overlay").removeClass("show");
});
});

$(function() {
$("#contact-overlay").click(function(){ 
  $("#contact-form").removeClass("open-form"),
  $("#contact-overlay").removeClass("show");
});
});

$(function() {
$("#login-overlay").click(function(){ 
  $("#login-form").removeClass("open-login"),
  $("#login-overlay").removeClass("show");
});
});

$(function() {
$(".contact-message").click(function(){ 
  $(".contact-message").addClass("hide"),
  $(".overlay").removeClass("show");
});
});

$(function() {
$("#close-message").click(function(){ 
  $(".contact-message").addClass("hide"),
  $(".overlay").removeClass("show");
});
});

$(function() {
$("#show-cal").click(function(){ 
  $("#calendar").removeClass("hide")
});
});

$(window).scroll(function () {
    if ($(document).scrollTop() <50) {
        $('.navbar-brand img').removeClass('logo-smaller');
        $('.navbar-brand img').attr('src', 'img/logo.png');
    } else {
        $('.navbar-brand img').addClass('logo-smaller');
        $('.navbar-brand img').attr('src', 'img/logo_sm.png');
    }
}); 

$(window).scroll(function () { 
   if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
	  $("footer#contact").removeClass("invisible"),
	  $("footer#contact").addClass("visible");
   }
});
$(window).scroll(function () { 
   if ($(window).scrollTop() <= $(document).height() - $(window).height() - 10) {
	  $("footer#contact").addClass("invisible"),
	  $("footer#contact").removeClass("visible");
   }
});


