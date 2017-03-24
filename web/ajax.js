/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $.ajax({
        type: 'GET',
        async: false,
        dataType: 'json',
        url: "./status",
        success: function (data, textStatus, jqXHR) {

            $(".thumbnail").css({
                "background-color": "#bd0e0e",
                "color": "white"
            }).addClass("attente");
        }
    });
//    getCommand();
});
//$('form').click(function (e) {
//    e.preventDefault();
//    $.ajax({
//        type: 'POST',
//        async: true,
//        dataType: 'text',
//        data: {
//            nom: $('form').val()
//        },
//        url: "http://localhost/final/web/app_dev.php/command",
//        success: function (data, textStatus, jqXHR) {
//            var commandes = $.parseJSON(data);
//            alert($(commandes[0]).nom);
//        }
//
//
//    });
//});
$(".thumbnail").click(function (e) {
    var t = this;
    e.preventDefault();
    $.ajax({
        type: 'GET',
        async: true,
        dataType: 'json',
        url: "./status",
        success: function (data, textStatus, jqXHR) {
            $(t).css({
                "background-color": "#19c519",
                "color": "#333"
            });
        }
    });
});
$(".thumbnail").click(function (e) {
//    getCommand();
    updateCommand(this);
});

function updateCommand(elem) {
    var idStatus = null;
    if ($.contains($(elem).attr('class'),"attente")) {
        alert($(elem).attr('class'));
        idStatus = $(elem).attr('class') + 1;
        alert(idStatus);
    } else if ($(elem).attr('class') == "preparation") {
        idStatus = $(elem).attr('class') + 1;
    } 
    $.ajax({
        type: 'PUT',
        async: true,
        dataType: 'json',
        url: "./" + $(elem).attr('id') + "/update",
        data: {
            id: idStatus
        },
        success: function (data, textStatus, jqXHR) {

        }
    });
}

function getCommand() {
    $.ajax({
        type: 'GET',
        async: true,
        dataType: 'json',
        url: "./notDone",
        success: function (data, textStatus, jqXHR) {
            return data;
        }
    });
}
