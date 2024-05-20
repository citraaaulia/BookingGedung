$(document).ready(function() {
    var $menuItems = $(".menu > ul > li");
    var $submenuItems = $menuItems.find("ul").find("li");
  
    // Click event for menu items
    $(".menu").on("click", "> ul > li > a", function(e) {
      var $clickedItem = $(this).parent();
  
      // Toggle active class on the clicked item
      $clickedItem.toggleClass("active");

      // Toggle sub-menu visibility
      $clickedItem.find("ul.sub-menu").slideToggle();

      // Remove active from already active
      $menuItems.not($clickedItem).removeClass("active").find("ul.sub-menu").slideUp();
              
      // Remove active class from sub-menu items
      $submenuItems.removeClass("active");

      e.preventDefault();
    });
  
    // Click event for menu button
    $(".menu-btn").click(function() {
      $(".sidebar").toggleClass("active");
    });
  });
  