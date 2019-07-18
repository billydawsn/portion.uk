$(document).ready(function() {
    // all custom jQuery will go here
    $("#toggle").click(function() {
      $(this).toggleClass("active");
      $("#overlay").toggleClass("open");
    });
});

function sortDrop() {
    document.getElementById("sort").classList.toggle("show");
    document.getElementById("arrowSort").classList.toggle("rotate");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.sort')) {

    var dropdowns = document.getElementsByClassName("sort-drop");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.arrowSort')) {

    var arrow = document.getElementsByClassName("arrowSort");
    var i;
    for (i = 0; i < arrow.length; i++) {
      var openArrow = arrow[i];
      if (openArrow.classList.contains('rotate')) {
        openArrow.classList.remove('rotate');
      }
    }
  }
}
