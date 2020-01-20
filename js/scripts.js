// Scroll suave
$('.scrollSuave').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
  targetOffset = $(id).offset().top;

  $('html, body').animate({
    scrollTop: targetOffset - 100
  }, 500);
});


function mascaraInteiro() {
  if (event.keyCode < 48 || event.keyCode > 57) {
    event.returnValue = false;
    return false;
  }
  return true;
}

function MascaraCPF(cpf) {
  if (mascaraInteiro(cpf) === false) {
    event.returnValue = false;
  }
  return formataCampo(cpf, '000.000.000-00', event);
}

function formataCampo(campo, Mascara, evento) {
  var boleanoMascara;

  var Digitato = evento.keyCode;
  exp = /\-|\.|\/|\(|\)| /g;
  campoSoNumeros = campo.value.toString().replace(exp, "");

  var posicaoCampo = 0;
  var NovoValorCampo = "";
  var TamanhoMascara = campoSoNumeros.length;

  if (Digitato !== 8) { // backspace
    for (i = 0; i <= TamanhoMascara; i++) {
      boleanoMascara = ((Mascara.charAt(i) === "-") || (Mascara.charAt(i) === ".")
      || (Mascara.charAt(i) === "/"));
      boleanoMascara = boleanoMascara || ((Mascara.charAt(i) === "(")
      || (Mascara.charAt(i) === ")") || (Mascara.charAt(i) === " "));
      if (boleanoMascara) {
        NovoValorCampo += Mascara.charAt(i);
        TamanhoMascara++;
      } else {
        NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
        posicaoCampo++;
      }
    }
    campo.value = NovoValorCampo;
    return true;
  } else {
    return true;
  }
}

// Máscara para o campo de telefone/celular
function inputHandler(masks, max, event) {
  var c = event.target;
  var v = c.value.replace(/\D/g, '');
  var m = c.value.length > max ? 1 : 0;
  VMasker(c).unMask();
  VMasker(c).maskPattern(masks[m]);
  c.value = VMasker.toPattern(v, masks[m]);
}

var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
var tel = document.querySelector('input[attrname=telephone1]');
VMasker(tel).maskPattern(telMask[0]);
tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

function SelecionarTudo(){
  var rows = document.getElementsByTagName('tr');
  for (var i = 0; i < rows.length; i++) {
    if (rows[i].classList.contains("selected")){
      rows[i].classList.remove("selected");
    }else{
      rows[i].classList.add("selected");
    }
  }
}

function Enviar(){
  var table = document.querySelectorAll('tbody .selected');
  var email = new Array();
  for (var i=0; i<table.length; i++){
    var rows = table[i].getElementsByTagName('td')[3];
    email[i] = rows.innerText;
  }
  
  $.ajax({
    type: 'POST',
    url: '_includes_adm/envioEmail.php',
    data: {
      data_email: email
    },
    beforeSend: function () {
      swal.fire({
        text: 'Carregando',
        imageUrl: 'img/Flickr-1s-200px.gif',
        showConfirmButton: false,
        imageWidth: 100
        // onBeforeOpen: () => {
        //   Swal.showLoading()
        //   timerInterval = setInterval(() => {
        //     Swal.getContent().querySelector('strong')
        //       .textContent = Swal.getTimerLeft()
        //   }, 100)
        // },
      })
    },
    success: function(data) {
      $("#divCorpo").html("");
      if (data.trim() == "ok") {
        Swal.fire(
          'Tudo certo!',
          'Os emails foram enviados com sucesso!',
          'success'
          )
        } else {
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Os emails não foram enviados.',
          })
        }
      }
    });

  }

  document.getElementById('_cpf').onblur = function (event){
    if ( CPF.validate(document.getElementById('_cpf').value) === false ) {
      document.getElementById("avisoCPF").style.display = "block";
      document.getElementById("_cpf").value = "";
    }
    else{
      document.getElementById("avisoCPF").style.display = "none";
    }
  };

  function campoEmail(campo){
    if(campo.value.indexOf('@') == -1 || campo.value.indexOf('.') == -1){
      document.getElementById("avisoEMAIL").style.display = "block";
      document.getElementById("validationEmail").value = "";
    }else{
      document.getElementById("avisoEMAIL").style.display = "none";
    }
  }
