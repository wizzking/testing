var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
 $.post(base_url+'Wapik/LoadDataGeneral',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            
        	$('#txtTelefono').val(item.telefono);
            
            $('#txtCorreo').val(item.correo);
            
            $('#txtDireccion').val(item.direccion);

            $('#txtGet').val(item.Get_In_Touch_With_Us);

            $('#txtBest').val(item.Best_of_our_features);
            
            $('#txtMeet').val(item.Meet_Our_Team);

        });
     });
});




