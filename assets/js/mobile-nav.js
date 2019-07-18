function homeDrop() {
    document.getElementById("homeware").classList.toggle("show");
    document.getElementById("arrowHomeware").classList.toggle("rotate");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.homeware')) {

    var dropdowns = document.getElementsByClassName("home-drop");
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
  if (!event.target.matches('.arrowHomeware')) {

    var arrow = document.getElementsByClassName("arrow");
    var i;
    for (i = 0; i < arrow.length; i++) {
      var openArrow = arrow[i];
      if (openArrow.classList.contains('rotate')) {
        openArrow.classList.remove('rotate');
      }
    }
  }
}

function lifestyleDrop() {
    document.getElementById("lifestyle").classList.toggle("show");
    document.getElementById("arrowLifestyle").classList.toggle("rotate");

}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.lifestyle')) {

    var dropdowns = document.getElementsByClassName("lifestyle-drop");
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
  if (!event.target.matches('.arrowLifestyle')) {

    var arrow = document.getElementsByClassName("arrowLifestyle");
    var i;
    for (i = 0; i < arrow.length; i++) {
      var openArrow = arrow[i];
      if (openArrow.classList.contains('rotate')) {
        openArrow.classList.remove('rotate');
      }
    }
  }
}



function clothingDrop() {
    document.getElementById("clothing").classList.toggle("show");
    document.getElementById("arrowClothing").classList.toggle("rotate");

}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.clothing')) {

    var dropdowns = document.getElementsByClassName("clothing-drop");
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
  if (!event.target.matches('.arrowClothing')) {

    var arrow = document.getElementsByClassName("arrowClothing");
    var i;
    for (i = 0; i < arrow.length; i++) {
      var openArrow = arrow[i];
      if (openArrow.classList.contains('rotate')) {
        openArrow.classList.remove('rotate');
      }
    }
  }
}


function readsDrop() {
    document.getElementById("reads").classList.toggle("show");
    document.getElementById("arrowReads").classList.toggle("rotate");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {

  //
  if (!event.target.matches('.arrowReads')) {

    var arrow = document.getElementsByClassName("arrowReads");
    var i;
    for (i = 0; i < arrow.length; i++) {
      var openArrow = arrow[i];
      if (openArrow.classList.contains('rotate')) {
        openArrow.classList.remove('rotate');
      }
    }
  }
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.reads')) {

    var dropdowns = document.getElementsByClassName("reads-drop");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
