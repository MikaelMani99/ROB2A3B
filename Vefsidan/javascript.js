(function(){

let left = document.getElementById("left");
let right = document.getElementById("right");
let up = document.getElementById("up");
let down = document.getElementById("down");
addEventListener("keydown", function(e){
    e = e || window.event;
    if (e.keyCode == '37') {
      left.setAttribute("src", "green-arrow.svg");
    }
    else if (e.keyCode == '39') {
      right.setAttribute("src", "green-arrow.svg");
    }
    else if(e.keyCode == "38"){
      up.setAttribute("src", "green-arrow.svg");
    }
    else if(e.keyCode == "40"){
      down.setAttribute("src", "green-arrow.svg");
    }
}, false);
addEventListener("keyup", function(e){
    e = e || window.event;
    if (e.keyCode == '37') {
      left.setAttribute("src", "arrow.svg");
    }
    else if (e.keyCode == '39') {
      right.setAttribute("src", "arrow.svg");
    }
    else if(e.keyCode == "38"){
      up.setAttribute("src", "arrow.svg");
    }
    else if(e.keyCode == "40"){
      down.setAttribute("src", "arrow.svg");
    }
}, false);
})();
