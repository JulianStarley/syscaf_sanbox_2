@extends('layouts.app')

@section('title', 'Novo usuário')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
<!-- Inclua o CSS do Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
    list-style: none;
    background-color: #5897fb;
    padding-left: 1.5em;
    }
    .select2-container .select2-search--inline {
    float: left;
    background-color: white !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #000000 !important;
    }
    .select2-container--default .select2-selection--multiple {
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    min-width: 340px;
    min-height: 40px;
    }


</style>
<!-- Inclua o jQuery e o JavaScript do Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@section('content_body')
    <h2> Cadastro de novo Usuário</h2>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Pessoa - inclusão de dados</h3>
            </div>
            <form id="userForm">
                <div class="bs-stepper" id="stepper_1">
                    <div class="bs-stepper-header" role="tablist">
                        <div class="step" data-target="#dados-basicos">
                            <button type="button" class="step-trigger" role="tab" aria-controls="dados-basicos"
                                id="dados-basicos-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Dados Básicos</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#telefones">
                            <button type="button" class="step-trigger" role="tab"
                                aria-controls="telefones" id="telefones-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Telefones</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#tipo-pessoa">
                            <button type="button" class="step-trigger" role="tab"
                                aria-controls="tipo-pessoa" id="tipo-pessoa-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Tipo Pessoa</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#detalhes-pessoa">
                            <button type="button" class="step-trigger" role="tab" aria-controls="detalhes-pessoa"
                                id="detalhes-pessoa-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Detalhes Pessoa</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#resumo">
                            <button type="button" class="step-trigger" role="tab" aria-controls="resumo"
                                id="resumo-trigger">
                                <span class="bs-stepper-circle">5</span>
                                <span class="bs-stepper-label">Resumo</span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <div id="dados-basicos" class="content" role="tabpanel" aria-labelledby="dados-basicos-trigger">
                            <div class="form-group">
                                <label for="nome_usuario_1">Nome Completo</label>
                                <input type="text" class="form-control col-md-6" id="nome_usuario_1"
                                    placeholder="Adicione nome completo">
                            </div>
                            <div class="form-group">
                                <label for="cpf_usuario_1">CPF</label>
                                <input type="text" class="form-control col-md-4" id="cpf_usuario_1"
                                    placeholder="Insira apenas números" maxlength="11"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            </div>
                            <div class="form-group">
                                <label for="data_nascimento_1">Data Nascimento</label>
                                <input type="date" class="form-control col-md-4" id="data_nascimento_1"
                                    placeholder="Insira apenas números">
                            </div>
                            <div class="form-group">
                                <label for="nacionalidade_1">Nacionalidade</label>
                                <select class="form-control col-md-4" id="nacionalidade_1">
                                    <option value="" selected>Escolha uma opção</option>
                                    <option value="Brasileiro">Brasileiro</option>
                                    <option value="Estrangeiro">Estrangeiro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="naturalidade_1">Naturalidade</label>
                                <select class="form-control col-md-4" id="naturalidade_1">
                                    <option value="" selected>Escolha uma opção</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                </select>
                            </div>
                        </div>
                        <div id="telefones" class="content" role="tabpanel"
                            aria-labelledby="telefones-trigger">
                            <div id="telefone-container" class="mb-2">
                                <label for="telefone_usuario-2" class="form-label">Telefone</label>
                                <div class="form-group d-flex align-items-center">
                                    <input type="tel" class="form-control col-md-4 me-3" id="telefone_usuario-2" placeholder="Insira o número de telefone" style="margin-bottom: 0;">
                                    <button type="button" class="btn btn-secondary mx-1" id="add-telefone">+</button>
                                </div>
                            </div>
                        </div>
                        <div id="tipo-pessoa" class="content" role="tabpanel" aria-labelledby="tipo-pessoa-trigger">
                            <div class="form-group">
                                <label for="tipo_usuario">Tipo de Pessoa</label>
                                <select class="form-control col-md-4" id="tipo_usuario">
                                    <option selected>Escolha uma opção</option>
                                    <option value="Funcionario">Funcionário</option>
                                    <option value="Medico">Médico</option>
                                    <option value="Paciente">Paciente</option>
                                    <option value="Farmaceutico">Farmacêutico</option>
                                </select>
                            </div>
                            <div id="campos-adicionais" style="display: none;">
                                <div id="campo_funcionario" class="form-group" style="display: none;">
                                    <label for="funcao_usuario">Função</label>
                                    <input type="text" class="form-control col-md-4" id="funcao_usuario" placeholder="Insira a função">
                                </div>
                                <div id="campo_medico" class="form-group" style="display: none;">
                                    <label for="crm_usuario">CRM</label>
                                    <input type="text" class="form-control col-md-4" id="crm_usuario" placeholder="Insira o CRM">
                                </div>
                                <div id="campo_medico_especialidade" class="form-group" style="display: none;">
                                    <div>
                                        <label for="especialidade_usuario">Especialidade</label>
                                    </div>
                                    <select class="form-control js-example-basic-multiple col-md-8" role="combobox" id="especialidade_usuario" name="especialidades[]" multiple="multiple">
                                        <option></option>
                                        <option value="administracao-em-saude">ADMINISTRAÇÃO EM
                                            SAÚDE</option>
                                        <option value="acupuntura">ACUPUNTURA</option>
                                        <option value="administracao-hospitalar">ADMINISTRAÇÃO
                                            HOSPITALAR</option>
                                        <option value="alergia-e-imunologia">ALERGIA E IMUNOLOGIA
                                        </option>
                                        <option value="alergia-e-imunopatologia">ALERGIA E
                                            IMUNOPATOLOGIA</option>
                                        <option value="anatomia-patologica">ANATOMIA PATOLÓGICA
                                        </option>
                                        <option value="anestesiologia">ANESTESIOLOGIA</option>
                                        <option value="angiologia-e-cirurgia-vascular">ANGIOLOGIA E
                                            CIRURGIA VASCULAR</option>
                                        <option value="angiologia">ANGIOLOGIA</option>
                                        <option value="broncoesofagologia">BRONCOESOFAGOLOGIA
                                        </option>
                                        <option value="cancerologia">CANCEROLOGIA</option>
                                        <option value="cancerologia-cirurgica">CANCEROLOGIA
                                            CIRÚRGICA</option>
                                        <option value="cancerologia-pediatrica">CANCEROLOGIA
                                            PEDIÁTRICA</option>
                                        <option value="cardiologia">CARDIOLOGIA</option>
                                        <option value="cirurgia-cardiovascular">CIRURGIA
                                            CARDIOVASCULAR</option>
                                        <option value="cirurgia-da-mao">CIRURGIA DA MÃO</option>
                                        <option value="cirurgia-de-cabeca-e-pescoco">CIRURGIA DE
                                            CABEÇA E PESCOÇO</option>
                                        <option value="cirurgia-digestiva">CIRURGIA DIGESTIVA
                                        </option>
                                        <option value="cirurgia-do-aparelho-digestivo">CIRURGIA DO
                                            APARELHO DIGESTIVO</option>
                                        <option value="cirurgia-do-trauma">CIRURGIA DO TRAUMA
                                        </option>
                                        <option value="cirurgia-gastroenterologica">CIRURGIA
                                            GASTROENTEROLÓGICA</option>
                                        <option value="cirurgia-geral">CIRURGIA GERAL</option>
                                        <option value="cirurgia-oncologica">CIRURGIA ONCOLÓGICA
                                        </option>
                                        <option value="cirurgia-pediatrica">CIRURGIA PEDIÁTRICA
                                        </option>
                                        <option value="cirurgia-plastica">CIRURGIA PLÁSTICA
                                        </option>
                                        <option value="cirurgia-toracica">CIRURGIA TORÁCICA
                                        </option>
                                        <option value="cirurgia-toraxica">CIRURGIA TORÁXICA
                                        </option>
                                        <option value="cirurgia-vascular">CIRURGIA VASCULAR
                                        </option>
                                        <option value="cirurgia-vascular-periferica">CIRURGIA
                                            VASCULAR PERIFÉRICA</option>
                                        <option value="citopatologia">CITOPATOLOGIA</option>
                                        <option value="clinica-medica">CLÍNICA MÉDICA</option>
                                        <option value="coloproctologia">COLOPROCTOLOGIA</option>
                                        <option value="densitometria-ossea">DENSITOMETRIA ÓSSEA
                                        </option>
                                        <option value="dermatologia">DERMATOLOGIA</option>
                                        <option value="diagnostico-por-imagem">DIAGNÓSTICO POR
                                            IMAGEM</option>
                                        <option value="doencas-infecciosas-e-parasitarias">DOENÇAS
                                            INFECCIOSAS E PARASITÁRIAS</option>
                                        <option value="eletroencefalografia">ELETROENCEFALOGRAFIA
                                        </option>
                                        <option value="endocrinologia">ENDOCRINOLOGIA</option>
                                        <option value="endocrinologia-e-metabolomia">ENDOCRINOLOGIA
                                            E METABOLOGIA</option>
                                        <option value="endoscopia">ENDOSCOPIA</option>
                                        <option value="endoscopia-digestiva">ENDOSCOPIA DIGESTIVA
                                        </option>
                                        <option value="endoscopia-peroral">ENDOSCOPIA PERORAL
                                        </option>
                                        <option value="endoscopia-peroral-vias-aereas">ENDOSCOPIA
                                            PERORAL VIAS AÉREAS</option>
                                        <option value="fisiatria">FISIATRIA</option>
                                        <option value="foniatria">F ONIATRIA</option>
                                        <option value="gastroenterologia">GASTROENTEROLOGIA
                                        </option>
                                        <option value="genetica-medica">GENÉTICA MÉDICA</option>
                                        <option value="geriatria">GERIATRIA</option>
                                        <option value="ginecologia">GINECOLOGIA</option>
                                        <option value="hematologia">HEMATOLOGIA</option>
                                        <option value="homeopatia">HOMEOPATIA</option>
                                        <option value="infectologia">INFECTOLOGIA</option>
                                        <option value="medicina-de-familia-e-comunidade">MEDICINA
                                            DE
                                            FAMÍLIA E COMUNIDADE</option>
                                        <option value="medicina-esportiva">MEDICINA ESPORTIVA
                                        </option>
                                        <option value="medicina-fisica-e-reabilitacao">MEDICINA
                                            FÍSICA E REABILITAÇÃO</option>
                                        <option value="medicina-intensiva">MEDICINA INTENSIVA
                                        </option>
                                        <option value="medicina-paliativa">MEDICINA PALIATIVA
                                        </option>
                                        <option value="medicina-preventiva">MEDICINA PREVENTIVA
                                        </option>
                                        <option value="medicina-legal">MEDICINA LEGAL</option>
                                        <option value="nefrologia">NEFROLOGIA</option>
                                        <option value="neurologia">NEUROLOGIA</option>
                                        <option value="neurocirurgia">NEUROCIRURGIA</option>
                                        <option value="nutrologia">NUTROLOGIA</option>
                                        <option value="obstetricia">OBSTETRÍCIA</option>
                                        <option value="oftalmologia">OFTALMOLOGIA</option>
                                        <option value="oncologia">ONCOLOGIA</option>
                                        <option value="otorrinolaringologia">OTORRINOLARINGOLOGIA
                                        </option>
                                        <option value="pediatria">PEDIATRIA</option>
                                        <option value="pneumologia">PNEUMOLOGIA</option>
                                        <option value="psiquiatria">PSIQUIATRIA</option>
                                        <option value="psicologia">PSICOLOGIA</option>
                                        <option value="reumatologia">REUMATOLOGIA</option>
                                        <option value="saude-da-mulher">SAÚDE DA MULHER</option>
                                        <option value="saude-da-crianca-e-do-adolescente">SAÚDE DA
                                            CRIANÇA E DO ADOLESCENTE</option>
                                        <option value="saude-do-adulto">SAÚDE DO ADULTO</option>
                                        <option value="saude-do-idoso">SAÚDE DO IDOSO</option>
                                        <option value="terapia-ocupacional">TERAPIA OCUPACIONAL
                                        </option>
                                        <option value="urologia">UROLOGIA</option>
                                        </select>
                                </div>
                            </div>
                            <div id="campo_paciente" class="form-group" style="display: none;">
                                <label for="sus_usuario">Número do Cartão do SUS</label>
                                <input type="text" id="sus_usuario" class="form-control col-md-4" placeholder="Insira o número do cartão do SUS">
                            </div>
                            <div id="campo_farmaceutico" class="form-group" style="display: none;">
                                <label for="crf_usuario">CRF</label>
                                <input type="text" id="crf_usuario" class="form-control col-md-4" placeholder="Insira o CRF">
                            </div>
                        </div>

                        <div id="detalhes-pessoa" class="content" role="tabpanel" aria-labelledby="detalhes-pessoa-trigger">
                        <div class="form-group">
                            <label for="nome_social_4">Nome Social</label>
                            <input type="text" class="form-control col-md-6" id="nome_social_4" placeholder="Insira o Nome Social" disabled>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="toggle-nome-social">
                                <label for="toggle-nome-social" class="form-check-label">Habilitar Nome Social</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gen_usuario_4">Gênero</label>
                            <select class="form-control col-md-4" id="gen_usuario_4">
                                <option>Escolha uma opção</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Não informado">Prefiro não informar</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="est_civil_4">Estado Cívil</label>
                            <select class="form-control col-md-4" id="est_civil_4">
                                <option>Escolha uma opção</option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Separado(a)">Separado(a)</option>
                                <option value="União estável">União estável</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="endereco_usuario_4">Endereço</label>
                            <input type="text" class="form-control col-md-6"
                                id="endereco_usuario_4" placeholder="Insira o endereço">
                        </div>
                        <div class="form-group">
                            <label for="observacoes_usuario_4">Observações</label>
                            <textarea class="form-control col-md-6" id="observacoes_usuario_4" placeholder="observações para o usuário"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div id="resumo" class="content" role="tabpanel"
                        aria-labelledby="resumo-trigger">
                        <h2>Resumo</h2>
                        <p>Nome Completo: <span id="nome_usuario_resumo"></span></p>
                        <p>CPF: <span id="cpf_usuario_resumo"></span></p>
                        <p>Data Nascimento: <span id="data_nascimento_resumo"></span></p>
                        <p>Nacionalidade: <span id="nacionalidade_resumo"></span></p>
                        <p>Naturalidade: <span id="naturalidade_resumo"></span></p>
                        <p>Telefone: <span id="telefone_usuario_resumo"></span></p>
                        <p>Tipo de Pessoa: <span id="tipo_usuario_resumo"></span></p>
                        <p>Descrição da função: <span id="descricao_funcao_resumo"></span></p>
                        <p>CRM: <span id="crm_resumo"></span></p>
                        <p>Especialidade: <span id="especialidade_resumo"></span></p>
                        <p>Cartão SUS: <span id="cartao_sus_resumo"></span></p>
                        <p>CRF: <span id="crf_resumo"></span></p>
                        <p>Nome Social: <span id="nome_social_resumo"></span></p>
                        <p>Gênero: <span id="genero_resumo"></span></p>
                        <p>Estado Cívil: <span id="estado_civil_resumo"></span></p>
                        <p>Endereço: <span id="endereco_usuario_resumo"></span></p>
                        <p>Observações: <span id="observacoes_resumo"></span></p>
                    </div>
                    <div class="justify-content-space-between">
                        <button type="button" class="btn btn-primary" id="prevBtn">Voltar</button>
                        <button type="button" class="btn btn-primary" id="nextBtn">Próximo</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

@push('css')

@endpush
@push('js')

<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>
    $(document).ready(function () {
        var stepper = new Stepper($('.bs-stepper')[0]);
        var currentStep = 0; // Índice do passo atual
        const totalSteps = $('.bs-stepper-header .step').length;

        // Função para atualizar a visibilidade dos passos
        function updateStepVisibility() {
            $('.bs-stepper-content .content').removeClass('active'); // Remove a classe active de todos os passos
            $('.bs-stepper-content .content').eq(currentStep).addClass('active'); // Adiciona a classe active ao passo atual

            // Atualiza a visibilidade dos botões
            $('#prevBtn').toggle(currentStep > 0); // Mostra o botão "Voltar" se não estiver no primeiro passo
            $('#nextBtn').text(currentStep === totalSteps - 1 ? 'Finalizar' : 'Próximo'); // Altera o texto do botão "Próximo" para "Finalizar" no último passo
        }

        // Evento do botão "Próximo"
        $('#nextBtn').on('click', function () {
            if (currentStep < totalSteps - 1) {
                currentStep++;
                stepper.next(); // Avança para o próximo passo do stepper
                updateStepVisibility(); // Atualiza a visibilidade dos passos
            } else {
                // Aqui você pode adicionar a lógica para finalizar o formulário, como enviar os dados
                alert("Formulário enviado!"); // Exemplo de ação ao finalizar
            }
        });

        // Evento do botão "Voltar"
        $('#prevBtn').on('click', function () {
            if (currentStep > 0) {
                currentStep--;
                stepper.previous(); // Volta para o passo anterior do stepper
                updateStepVisibility(); // Atualiza a visibilidade dos passos
            }
        });

        // Inicializa a visibilidade dos passos
        updateStepVisibility();
    });
</script>

<script> //adicionar novos telefones
    $(document).ready(function () {
    let telefoneCount = 1; // Contador de telefones

    // Função para adicionar um novo campo de telefone
    $('#add-telefone').on('click', function () {
        telefoneCount++; // Incrementa o contador
        const newTelefone = `
            <div class="form-group d-flex align-items-center mb-2" id="telefone_usuario${telefoneCount}">
                <input type="tel" class="form-control col-md-4 me-3" placeholder="Insira o número de telefone" style="margin-bottom: 0;">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger remove-telefone ml-1">-</button>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="emergencia_usuario${telefoneCount}">
                <label class="form-check-label" for="emergencia_usuario${telefoneCount}">Emergência</label>
            </div>
        `;
        $('#telefone-container').append(newTelefone); // Adiciona o novo campo ao container

        // Habilita o botão de remover telefone
        $('#remove-telefone').prop('disabled', false);
    });

    // Evento para remover um campo de telefone
    $(document).on('click', '.remove-telefone', function () {
        $(this).closest('.form-group').next('.form-check').remove(); // Remove o checkbox de emergência
        $(this).closest('.form-group').remove(); // Remove o campo de telefone
        if ($('#telefone-container .form-group').length === 1) {
            $('#remove-telefone').prop('disabled', true); // Desabilita o botão se apenas o campo original estiver presente
        }
    });

    // Evento para mudar a cor da label e do texto quando o checkbox "Emergência" é marcado
    $(document).on('change', 'input[type="checkbox"]', function () {
        const label = $(this).siblings('label');
        if (this.checked) {
            label.css('color', 'red'); // Muda a cor da label para vermelho
        } else {
            label.css('color', ''); // Reseta a cor da label
        }
    });
});
</script>
<script>
    $(document).ready(function () {
        // Função para mostrar/ocultar campos com base no tipo de pessoa selecionado
        $('#tipo_usuario').on('change', function () {
            const tipo = $(this).val();

            // Esconde todos os campos adicionais inicialmente
            $('#campo_funcionario, #campo_medico, #campo_medico_especialidade, #campo_paciente, #campo_farmaceutico').hide();

            // Mostra o container de campos adicionais
            $('#campos-adicionais').show();

            // Mostra os campos correspondentes com base na seleção
            switch (tipo) {
                case 'Funcionario':
                    $('#campo_funcionario').show(); // Mostra o campo de Função
                    break;
                case 'Medico':
                    $('#campo_medico').show(); // Mostra o campo de CRM
                    $('#campo_medico_especialidade').show(); // Mostra o campo de Especialidades
                    break;
                case 'Paciente':
                    $('#campo_paciente').show(); // Mostra o campo de Número do Cartão do SUS
                    break;
                case 'Farmaceutico':
                    $('#campo_farmaceutico').show(); // Mostra o campo de CRF
                    break;
                default:
                    $('#campos-adicionais').hide(); // Esconde os campos adicionais se não for um tipo válido
                    break;
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Inicializa o Select2 para o select de especialidades médicas
        $('#especialidade_usuario').select2({
            placeholder: "Escolha uma ou mais especialidades",
            allowClear: true,
            multiple:true,
            dropdownAutoWidth: true,
            closeOnSelect:false,
        });

        // Função para mostrar/ocultar campos com base no tipo de pessoa selecionado
        $('#tipo_usuario').on('change', function () {
            const tipo = $(this).val();

            // Esconde todos os campos adicionais inicialmente
            $('#campo_funcionario, #campo_medico, #campo_medico_especialidade, #campo_paciente, #campo_farmaceutico').hide();

            // Mostra o container de campos adicionais
            $('#campos-adicionais').show();

            // Mostra os campos correspondentes com base na seleção
            switch (tipo) {
                case 'Funcionario':
                    $('#campo_funcionario').show(); // Mostra o campo de Função
                    break;
                case 'Medico':
                    $('#campo_medico').show(); // Mostra o campo de CRM
                    $('#campo_medico_especialidade').show(); // Mostra o campo de Especialidades
                    break;
                case 'Paciente':
                    $('#campo_paciente').show(); // Mostra o campo de Número do Cartão do SUS
                    break;
                case 'Farmaceutico':
                    $('#campo_farmaceutico').show(); // Mostra o campo de CRF
                    break;
                default:
                    $('#campos-adicionais').hide(); // Esconde os campos adicionais se não for um tipo válido
                    break;
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
    // Evento para habilitar/desabilitar o campo "Nome Social"
    $('#toggle-nome-social').on('change', function () {
        if (this.checked) {
            $('#nome_social_4').prop('disabled', false); // Habilita o campo de Nome Social
        } else {
            $('#nome_social_4').prop('disabled', true); // Desabilita o campo de Nome Social
            $('#nome_social_4').val(''); // Limpa o campo se desabilitado
        }
    });
});
</script>

@endpush


@endsection
