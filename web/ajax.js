/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('form').click(function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        async: true,
        dataType: 'text',
        data:{
            nom : $('form').val()
        },
        url:"http://localhost/final/web/app_dev.php/command",
        success: function (data, textStatus, jqXHR) {
            var commandes = $.parseJSON(data);
            alert($(commandes[0]).nom);
        }
       
        
    });
});

