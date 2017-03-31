var panier = [];

function popup(id) {
    $('#popup').fadeIn();

    $('#lienadd').attr('onclick', 'addtocart(' + id + ');');
//    $('#lienadd').click(function () {
//        addtocart(id);
//    });
}

$().ready(function () {
    $('.close').click(function (event)
    {
        $('#popup').fadeOut();
    });


})

function closecart() {
    $('#mycart').fadeOut();
}







function addtocart(id) {
    alert(id);
    $.ajax({
        url: "/addtocart/" + id,
        dataType: 'json',
        complete: function (result) {
            var data = result.responseJSON;
            panier.push(data);
            alert(panier);
//cartnb=result.responseJSON.cartnb;
//    $('.cart').html("");
//$('.cart').append(cartnb);

        }});
    $('#popup').fadeOut();
}

//Vider + contenu panier en popup


function mycart() {

    $('#mycart').fadeIn();
    $('#listcart').empty();
    var table = document.createElement("table");
    var totaux = 0;
    $('#listcart').append(table);
    $(table).append(getHeader());
    $.each(panier, function () {
//       $('#listcart').append("<p>" + this.nom + " " + this.prix + "</p>");
        $('#listcart').append("<tr><td>" + this.nom + "</td><td>" + this.prix + "€</td></tr>");
        totaux += parseInt(this.prix);
    });
        $('#listcart').append("<tr><td>totaux</td><td>" + totaux+ "€</td></tr>");
//    $.ajax({
//        url: "/showpanier",
//        dataType: 'json',
//  complete : function(listcart){
//$('#listcart').html("");
//listcart=listcart.responseJSON;
//for(var i= 0; i < listcart.length; i++)
//{
//    $('#listcart').append("<p>" + listcart.nom + "</p>");
//}
//
//}
//    });

    var closecart = $('.closecart');
    closecart.click(function (event)
    {
        $('#mycart').fadeOut();
    });

}
function getHeader() {
//    creation des balises
    var line = document.createElement("tr");
//    var idBook = document.createElement("th");
    var pizza = document.createElement("th");
    var prix = document.createElement("th");
//    affectation des textes
//    $(idBook).text("id");
    $(pizza).text("pizza");
    $(prix).text("prix");
//    insertion des th dans la ligne
//    $(line).append(idBook);
    $(line).append(pizza);
    $(line).append(prix);

    return line;
}

function emptycart() {
    $.ajax({
        url: "/emptycart",
        dataType: 'json',
        complete: function (emptycart) {

            cartnb = emptycart.responseJSON.cartnb;
            $('.cart').html("");
            $('.cart').append(cartnb);

        }
    });

    $('#mycart').fadeOut();
}

function deletepizza(id) {

    $.ajax({
        url: "/backend/deletepizza/" + id,
        dataType: 'json',
        complete: function () {
            location.reload();

        }
    });

}

function sendcommand() {
    $('#sendpanier').fadeOut();
    $.ajax({
        url: "/sendcommand",
        dataType: 'json',
        data: {"commande": panier},
        complete: function () {

        }
    });
}
