
var __ERROR_TRYCATCH = "An error occurred while reading the data.";
var __RUTA_CONTROLLER = "../Controller/";
var __RUTA_CONTROLLER = "../Controller/";
var _BALANCING_CONTROLLER = 'BalancingStringController.php';


function BalancingString(form) 
{
  try
  { 
  	if(validateInputData($('#'+form)))
    {
      var formData = $('#'+form).serialize();
      if(formData!="")
      {
        $.ajax({
          data: {btnValidate:true,data:formData},
          type:'POST',
          dataType: 'json',
          url: __RUTA_CONTROLLER+_BALANCING_CONTROLLER
        })
        .done(function(response){
            if(response['estatus']==true){
              alert(response['msj']);
            }else
            { 
              alert(response['msj']);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown){
          if ( console && console.log ) {console.log(textStatus); bootbox.alert(__ERROR_TRYCATCH);}
        });
      }else{
        bootbox.alert(__ERROR_TRYCATCH);
      }//Termina IF

    } else{
       return false;
    }/*Ends If Validation*/
  }catch(err)
  {
    if ( console && console.log ) {console.log(err.message);}
       alert(__ERROR_TRYCATCH +  " " + err.message);
    return false;
  }/*Termina try catch*/
}

function validateInputData(formObject)
{
  //var formulario = $('#'+formId);
  var UnbalancedString = formObject.find('input[name="txtUnbalancedString"]');


 if(UnbalancedString.val()==""){
    AddError(UnbalancedString,'PLEASE INSERT A MESSAGE ONLY ACCEPT () ');
    return false;
  }

  return true;

 }

 function AddError(inputObject,msg)
{
  if(inputObject.is('input') || inputObject.is('textarea') )
  {
    var div = inputObject.closest("div");
    var name = inputObject.attr("name");
    div.removeClass("has-success");
    $("#glypcn"+name).remove();
    div.addClass("has-error has-feedback");
    div.append('<span id="glypcn'+name+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
    inputObject.focus();
    alert(msg);

  }else if(inputObject.is('select')){
    inputObject.parent().addClass('has-error');
    inputObject.focus();
    alert(msg);
  }
}

//**REMEVE LOS ESTADOS DE ERROR**//
function QuitErrorStatus(inputObject)
{

  if ($(inputObject).parent().hasClass("has-error")) 
  {
    $(inputObject).parent().removeClass('has-error');
  }
  var name = inputObject.attr('name');
  $("#glypcn"+name).remove();
}