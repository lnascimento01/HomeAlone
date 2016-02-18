$(document).ready(function() {    
  //variables
  var nav = $(".page__nav");
  var nav_item = $(".page__nav ul li")
  var sn = $(".page__nav ul ul");
  var pc = $(".page__content");
  var nav_sub = $(".nav_sub");
  
  //get the navigations width and set the "left" for the "dropdown"
  sn.css("left", nav.width());
  
  //set the padding-top equal to parrent of submenu
  nav_sub.each(function() {
    $(this).css("padding-top", $(this).parent().offset().top);
  });
    
  //Bind the different events for the items
  nav_item.bind("mouseover", open_sub);
  nav_item.bind("mouseout", close_sub);
  
  //Open the submenu
  function open_sub() {
    $(this).find("ul").css("min-width", "200px");
  }
  
  //Close the submenu
  function close_sub() {
    $(this).find("ul").css("min-width", "0");
  }

//----------------------------------
  //Ignore this
  $('pre code').each(function(i, e) {
      hljs.highlightBlock(e);
  }); 
});