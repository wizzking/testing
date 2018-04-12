var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
  LoadDataGeneral();
});

function LoadDataGeneral() 
{
  $.post(base_url+'Wapik/LoadDataGeneral',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#telefonoHeader').text(item.telefono);
            //$('#DataDescription').text(item.descripcion);
        });
     });
}
