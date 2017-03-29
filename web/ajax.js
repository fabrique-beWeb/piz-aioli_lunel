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

        }
    });
});
$(".thumbnail").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'GET',
        async: true,
        dataType: 'json',
        url: "./status",
        success: function (data, textStatus, jqXHR) {
        }
    });
});
$(".commandAdmin").click(function (e) {
//    getCommand();
    var elem = $(this).parent();
    var info = null;
    updateCommand(elem, info);
});
$(".annuler").click(function (e) {
//    getCommand();
//    alert("annulet");
    var elem = $(this).parent();
    var info = "annuler";
    updateCommand(elem, info);
});

function updateCommand(elem, info) {
//    alert(info);
    $.ajax({
        type: 'PUT',
        async: true,
        dataType: 'json',
        url: "./" + $(elem).attr('id') + "/update",
        data: {
            info: info
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
