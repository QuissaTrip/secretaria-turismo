$( document  ).ready(function() {
    var bg = "background-" + Math.floor((Math.random() * 3) + 1);
    $('body').css('background-image', 'url("./img/'+bg+'.png")');
});