// Navbar
$('#openNav').on('click', function () {
    $('#myNav').css("width", "100%");
});
$('#openNav2').on('click', function () {
    $('#myNav').css("width", "100%");
});
$('#closeNav').on('click', function () {
    $('#myNav').css("width", "0%");
});
$('#formulario').on('submit', function (event) {
    event.preventDefault();
    var url = "templates/mail.php";
    $.ajax({                        
       type: "POST",                 
       url: url,                     
       data: $("#formulario").serialize(), 
       success: function(data)             
       {
         $('#resp').html(data);               
       }
   });

});
