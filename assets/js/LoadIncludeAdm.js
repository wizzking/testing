var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
    LoadDataInclude(); 
});
function LoadDataInclude()
{
    $.post(base_url+'Wapik/LoadDataInclude',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
           $('#contenido_tabla').append('<tr id="fila_'+item.id+'">'+
        '<td>'+item.name+'</td>'+
        '<td>'+'<span class="label label-danger">'+'<a onclick="EliminarData('+item.id+')" style="cursor:pointer;">Eliminar</a>'+'</span>'+'</td>'+
        '</tr>');

        });
     });
}

function EliminarData(data) {
  $.post(base_url+'Remover/RemoverInclude',
      {
        'id' : data
      },
      function (data)
      {
        DropDataTable();
        LoadDataInclude();
        alert(data);
     });
}

  var DropDataTable = function() 
  { 
    $("#contenido_tabla tr").remove();
  }