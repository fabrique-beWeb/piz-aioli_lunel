$("#ajoutPizza").click(function (e) {
    e.preventDefault();
    var form = new sereali($(".formAddPizza"));
    alert(form);
    $.ajax({
        type: 'POST',
        async: false,
//        dataType: 'json',
        url: "./new",
        processData: false,
        contentType: false,
        data: form,
//                {
//            "base" : $("#basePizza").val(),
//            "nom" : $("#nomPizza").val(),
//            "ingredient" : $("#ingredientsPizza").val(),
//            "img" : $("#imgPizza").val(),
//            "prix" : $("#prixPizza").val()
//        },
        success: function (data, textStatus, jqXHR) {
            alert(data);
        }
    });
});