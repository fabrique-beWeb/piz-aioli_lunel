/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
//    $.ajax({
//        type: 'GET',
//        async: false,
//        dataType: 'json',
//        url: "./status",
//        success: function (data, textStatus, jqXHR) {
//
//            $(".thumbnail").css({
//                "background-color": "#bd0e0e",
//                "color":"white"
//            });
//        }
//    });
    getCommand();
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
//$(".thumbnail").click(function (e) {
//    var t = this;
//    e.preventDefault();
//    $.ajax({
//        type: 'GET',
//        async: true,
//        dataType: 'json',
//        url: "./status",
//        success: function (data, textStatus, jqXHR) {
//            $(t).css({
//                "background-color": "#19c519",
//                "color": "#333"
//            });
//        }
//    });
//});
$(".thumbnail").click(function (e) {
    getCommand();
});

function updateCommand() {
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
}

function getCommand() {
    var t = this;
    $.ajax({
        type: 'GET',
        async: true,
        dataType: 'json',
        url: "./notDone",
        success: function (data, textStatus, jqXHR) {
            $(t).css({
                "background-color": "#19c519",
                "color": "#333"
            });
        }
    });
}