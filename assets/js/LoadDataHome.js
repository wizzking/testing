var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
  LoadDataGeneral();
  LoadDataCont();
  LoadDataHomeCont();
  LoadDataTeamHome();
  LoadDataInclude();
  LoadDataPlan();
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
            $('#Best_of_our_features').text(item.Best_of_our_features);

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


function LoadDataHomeCont() 
{
  $.post(base_url+'Wapik/LoadDataHomeCont',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#CargarHomeCont').append('<div class="col-xs-6">'
              +'<img src="../../assets/img/img/home/'+item.imagen+'" alt="icono">'
              +'<strong class="titles">'+item.nombre+'</strong>'
              +'<p>'+item.descripcion+'</p>'
            +'</div>');

        });
     });
}


function LoadDataTeamHome() 
{
  $.post(base_url+'Wapik/LoadDataTeamHome',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#MidDescripcion').text(item.descripcion);
            $('#MidNombre').text(item.nombre);
            $('#MidPuesto').text(item.puesto);
            $("#MidImagen").attr("src",'../../assets/img/img/aboutUs/'+item.foto+'');


        });
     });
}


function LoadDataInclude() 
{
  $.post(base_url+'Wapik/LoadDataInclude',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#CargarInclude').append('<div class="col-xs-4">'
              +'<img src="../../assets/img/img/home/check.png" alt="icon">'
              +'<span>'+item.name+'</span>'
            +'</div>');

        });
     });
}


function LoadDataPlan() 
{
  $.post(base_url+'Wapik/LoadDataPlan',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#CargarPlan').append('<div class="venta" >'
              +'<h4>'+item.nombre+'</h4>'
              +'<p class="precio">$'+item.precio+'</p>'
              +'<p class="titles" style="margin-top:-10px;">/'+item.date+'</p>'
              +'<p>'+item.descripcion+'</p>'
            +'</div>');

        });
     });
}
