var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
    LoadDataPlan(); 
});
function LoadDataPlan()
{
    $.post(base_url+'Wapik/LoadDataPlan',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
           $('#contenido_tabla').append('<tr id="fila_'+item.id+'">'+
        '<td>'+item.nombre+'</td>'+
        '<td>$'+item.precio+'</td>'+
        '<td>'+item.date+'</td>'+
        '<td>'+'<span class="label label-danger">'+'<a onclick="EliminarData('+item.id+')" style="cursor:pointer;">Eliminar</a>'+'</span>'+'</td>'+
        '</tr>');

        });
     });
}

function EliminarData(data) {
  $.post(base_url+'Remover/RemoverPlan',
      {
        'id' : data
      },
      function (data)
      {
        DropDataTable();
        LoadDataPlan();
        alert(data);
     });
}

  var DropDataTable = function() 
  { 
    $("#contenido_tabla tr").remove();
  }