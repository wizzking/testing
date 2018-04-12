var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
    LoadDataTeam(); 
});
function LoadDataTeam()
{
    $.post(base_url+'Wapik/LoadDataTeam',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
           $('#contenido_tabla').append('<tr id="fila_'+item.id+'">'+
        '<td>'+item.id+'</td>'+
        '<td>'+item.nombre+'</td>'+
        '<td>'+item.puesto+'</td>'+
        '<td>'+'<span class="label label-danger">'+'<a onclick="EliminarData('+item.id+')" style="cursor:pointer;">Eliminar</a>'+'</span>'+'</td>'+
        '</tr>');

        });
     });
}

function EliminarData(data) {
  $.post(base_url+'Remover/RemoverTeam',
      {
        'id' : data
      },
      function (data)
      {
        DropDataTable();
        LoadDataTeam();
        alert(data);
     });
}

  var DropDataTable = function() 
  { 
    $("#contenido_tabla tr").remove();
  }