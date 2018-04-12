$(document).on("ready", main);

function main(){
  $("#msg-error").hide();
  //mostrarDatos("");
  $("#form-create-usuario").submit(function(event){
    event.preventDefault();

    var formData = new FormData($("#form-create-usuario")[0]);
    $.ajax({
      url:$(this).attr('action'),
      type:$(this).attr('method'),
      data: formData,
            cache: false,
            contentType: false,
            processData: false,
      success:function(resp){
        alert(resp);
      }

    });

  });
}
