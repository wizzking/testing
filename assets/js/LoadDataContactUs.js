var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
  LoadDataGeneral();
  LoadDataCont();
  LoadDataTeam();
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

            $('#correoFooter').text('@: '+item.correo);
            $('#telefonoFooter').text('p: '+item.telefono);
            $('#direccionFooter').text('a: '+item.direccion);

            $('#correoMid').text(item.correo);
            $('#telefonoMid').text(item.telefono);
            $('#direccionMid').text(item.direccion);


            $('#Get_In_Touch_With_Us').text(item.Get_In_Touch_With_Us);
        });
     });
}


function LoadDataCont() 
{
  $.post(base_url+'Wapik/LoadDataCont',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#CargarCont').append('<div class="col-xs-4">'
            +'<img src="../../assets/img/img/home/'+item.foto+'" alt="icono">'
            +'<h4 class="titles">'+item.nombre+'</h4>'
            +'<p>'+item.descripcion+'</p>'
          +'</div>');

        });
     });
}


function LoadDataTeam() 
{
  $.post(base_url+'Wapik/LoadDataTeam',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#CargarTeam').append('<div class="col-xs-4">'
                +'<img src="../../assets/img/img/aboutUs/'+item.foto+'" alt="picture" class="imgAU">'
                +'<p class="titles">'+item.nombre+'</p>'
                +'<p>'+item.puesto+'</p>'
              +'</div>');


        });
     });
}
