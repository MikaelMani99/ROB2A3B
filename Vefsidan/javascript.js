(function(){
addEventListener("keyup", function(e){
    e = e || window.event;
    insertInto("stop");
}, false);
addEventListener("keydown", function(e){
    e = e || window.event;
    if (e.keyCode == '37') {
      insertInto("left");
    }
    else if (e.keyCode == '39') {
      insertInto("right");
    }
    else if(e.keyCode == "38"){
      insertInto("forward");
    }
    else if(e.keyCode == "40"){
      insertInto("backward");
    }
    else if(e.keyCode == "32"){
      insertInto("stop");
    }
}, false);



function insertInto(direction) {
    // AJAX code to send data to php file.
        $.ajax({
            type: "POST",
            url: "insert-data.php",
            data: {direct:direction},
            dataType: "JSON",
            success: function(data) {
             $("#message").html(data);
            $("p").addClass("alert alert-success");
            },
            error: function(err) {
            alert(err);
            }
        });

}

})();
