$(document).ready(function() {
    $(".blog").on("keydown", function(event) {
      if (event.keyCode === 37) {
        $(this).animate({ scrollLeft: "-=300px" }, 300);
      } else if (event.keyCode === 39) {
        $(this).animate({ scrollLeft: "+=300px" }, 300);
      }
    });
  });
  