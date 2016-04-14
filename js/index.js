$(function() {
$("#open-form").click(function(){ 
  $(".contact").addClass("open-form"),
  $("#contact-overlay").addClass("show");
});
});
$(function() {
$("#open-form2").click(function(){ 
  $(".contact").addClass("open-form"),
  $("#contact-overlay").addClass("show");
});
});

$(function() {
$("#open-search").click(function(){ 
  $("#search-form").addClass("open-search-form"),
  $("#search-overlay").addClass("show");
});
});

$(function() {
$("#open-search2").click(function(){ 
  $("#search-form").addClass("open-search-form"),
  $("#search-overlay").addClass("show");
});
});

$(function() {
$("#open-search-button").click(function(){ 
  $("#search-form").addClass("open-search-form"),
  $("#search-overlay").addClass("show");
});
});


$(function() {
$("#open-form-button").click(function(){ 
  $(".contact").addClass("open-form"),
  $("#contact-overlay").addClass("show");
});
});

$(function() {
$(".close").click(function(){ 
  $(".contact").removeClass("open-form"),
  $("#contact-overlay").removeClass("show"),
  $(".login").removeClass("open-login"),
  $("#login-overlay").removeClass("show");
  $(".search-form").removeClass("open-search-form"),
  $("#search-overlay").removeClass("show");
});
});

$(function() {
$("#search-overlay").click(function(){ 
  $(".search-form").removeClass("open-search-form"),
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


$(function() {
$(".add-class1").click(function(){ 
  $("#input2").removeClass("hide"),
  $("#add-class1").addClass("hide");
  $("#add-class2").removeClass("hide");
});
});
$(function() {
$(".add-class2").click(function(){ 
  $("#input3").removeClass("hide"),
  $("#add-class2").addClass("hide");
  $("#add-class3").removeClass("hide");
});
});
$(function() {
$(".add-class3").click(function(){ 
  $("#input4").removeClass("hide"),
  $("#add-class3").addClass("hide");
  $("#add-class4").removeClass("hide");
});
});
$(function() {
$(".add-class4").click(function(){ 
  $("#input5").removeClass("hide"),
  $("#add-class4").addClass("hide");
  $("#add-class5").removeClass("hide");
});
});

$(function() {
$(".remove-class2").click(function(){ 
  $("#input2").addClass("hide"),
  $("#add-class2").addClass("hide");
  $("#add-class1").removeClass("hide");
  document.getElementById("subject2").value = "";
  document.getElementById("course2").value = "";
});
});
$(function() {
$(".remove-class3").click(function(){ 
  $("#input3").addClass("hide"),
  $("#add-class3").addClass("hide");
  $("#add-class2").removeClass("hide");
  document.getElementById("subject3").value = "";
  document.getElementById("course3").value = "";
});
});
$(function() {
$(".remove-class4").click(function(){ 
  $("#input4").addClass("hide"),
  $("#add-class4").addClass("hide");
  $("#add-class3").removeClass("hide");
  document.getElementById("subject4").value = "";
  document.getElementById("course4").value = "";
});
});
$(function() {
$(".remove-class5").click(function(){
  $("#input5").addClass("hide"),
  $("#add-class5").addClass("hide");
  $("#add-class4").removeClass("hide");
  document.getElementById("subject5").value = "";
  document.getElementById("course5").value = "";
});
});
