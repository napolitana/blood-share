<div class="border-blood" id="idContato">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h3>MENU</h3>
                <ul>
                    <li><a target="_blank" href="https://www.mg.gov.br/conteudo/agendamento-online/doar-sangue">Agende sua doação</a> </li>
                    <li><a target="_blank" href="http://www.hemominas.mg.gov.br/doacao-e-atendimento-ambulatorial/doacao-de-sangue/condicoes-e-restricoes">Condições e restrições</a></li>
                    <li><a class="scrollSuave" href="#idCadastro">Cadastre-se </a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h3>CONTATO</h3>
                <ul>
                    <li><i class="fab fa-whatsapp"></i>Whatsapp (criadores do projeto): (35) 0000-0000</li>
                    <li><i class="fas fa-phone-alt"></i>Hemominas: (35) 3211-4800</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>LOCALIZAÇÃO</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>Hemominas: R. Dr. José Lemos de Barros, 313 - Muarama, Passos - MG, 37900-030</li>
                    <li><i class="fas fa-map-marker-alt"></i>UEMG - Campus Passos - Bloco Principal: Av. Juca Stockler, 1130 </li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.595303792137!2d-46.61412378503854!3d-20.726652068926843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b6c235833968d9%3A0xbe6199d824bb9d42!2sHEMOMINAS+-+N%C3%BAcleo+Regional+de+Passos!5e0!3m2!1spt-BR!2sbr!4v1565037284785!5m2!1spt-BR!2sbr" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="js/components/9436f694f8.js" crossorigin="anonymous"></script>
<script src="js/components/vanilla-masker.min.js"></script>
<script src="js/components/jquery-3.4.1.min.js" ></script>
<script src="js/components/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/components/bootstrap.min.js"></script>
<script type="text/javascript" src="js/components/CPF.js"></script>
<script type="text/javascript" src="js/components/datatables.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="js/components/sweetalert2.min.js"></script>

<script type = "text/javascript" >
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    if (form.checkValidity()) {
                        event.preventDefault();
                        var dados = $('#cad-usuario').serialize();
                        console.log(dados);
                        $.ajax({
                            type: 'POST',
                            url: '_includes/salvar.php',
                            data: dados,
                            success: function(data) {
                                //console.log(data);
                                if (data.trim() == "ok") {
                                    Swal.fire(
                                        'Tudo certo!',
                                        'Cadastro realizado com sucesso!',
                                        'success'
                                    ),
                                    $('#cad-usuario input').val("");
                                    form.classList.remove('was-validated');
                                } else {
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'CPF já cadastrado, tente novamente com outro número de CPF.',
                                    }),
                                    $('#cad-usuario input').val("");
                                    form.classList.remove('was-validated');
                                }
                            }
                        });
                    }
                }, false);
            });
        }, false);
    })();

    $(document).ready(function() {
        var table = $('#tabela-doadores').DataTable({
            scrollY: '50vh',
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            "dom": '<if<t>lp>',
            language: {
                search: "Pesquisar",
                decimal: ",",
                thousands: ".",
                lengthMenu: "Mostrar _MENU_ registros por página",
                zeroRecords: "Nada foi encontrado, desculpe.",
                info: "Mostrando página _PAGE_ de _PAGES_",
                infoEmpty: "Nenhum registro disponível.",
                infoFiltered: "(filtrado de um total de _MAX_ total registros)",
            }
        });

        $('#tabela-doadores tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
        });
    });


</script>

</body>
</html>
