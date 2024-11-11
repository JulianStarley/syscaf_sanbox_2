@extends('layouts.app')

@section('title', 'Novo usuário')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
<!-- Inclua o CSS do Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<style>
    /* Estilização adicional para os pillboxes */
    .select2-selection__choice {
        background-color: #007bff;
        /* Cor de fundo */
        color: black;
        /* Cor do texto */
    }
    .select2-container {
        width: 50% !important; /* Faz com que o select2 ocupe 100% do contêiner */
    }
    .select2-container--default .select2-selection--multiple {
        height: auto; /* Permite que a altura se ajuste automaticamente */
        min-height: 38px; /* Define uma altura mínima para o select */
        border: 1px solid #ced4da; /* Borda padrão */
        border-radius: 0.25rem; /* Bordas arredondadas */
    }
    .select2-container .select2-selection__rendered {
        padding: 0.5rem; /* Adiciona um padding ao texto do placeholder */
    }

</style>
<!-- Inclua o jQuery e o JavaScript do Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

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
                        <button type="button" class="step-trigger" role="tab" aria-controls="telefones"
                            id="telefones-trigger">
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">Telefones</span>
                        </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#tipo-pessoa">
                        <button type="button" class="step-trigger" role="tab" aria-controls="tipo-pessoa"
                            id="tipo-pessoa-trigger">
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
                            <label for="nome_usuario1">Nome Completo</label>
                            <input type="text" class="form-control col-md-6" id="nome_usuario1"
                                placeholder="Adicione nome completo">
                        </div>

                        <div class="form-group">
                            <label for="cpf_usuario1">CPF</label>
                            <input type="text" class="form-control col-md-4" id="cpf_usuario1" placeholder="Insira apenas números" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento1">Data Nascimento</label>
                            <input type="date" class="form-control col-md-4" id="data_nascimento1"
                                placeholder="Insira apenas números">
                        </div>
                        <div class="form-group">
                            <label for="nacionalidade1">Nacionalidade</label>
                            <input type="text" class="form-control col-md-4" id="nacionalidade1" placeholder="Insira apenas texto">
                        </div>
                        <div class="form-group">
                            <label for="naturalidade1">Naturalidade</label>
                            <input type="text" class="form-control col-md-4" id="naturalidade1" placeholder="Insira apenas texto">
                        </div>
                    </div>
                        <div id="telefones" class="content" role="tabpanel" aria-labelledby="telefones-trigger">
                            <div id="telefone-container" class="mb-2">
                                <label for="telefone_usuario1" class="form-label">Telefone</label>
                                <div class="form-group d-flex align-items-center">
                                    <input type="tel" class="form-control col-md-4 me-3" id="telefone_usuario1" placeholder="Insira o número de telefone" style="margin-bottom: 0;">
                                    <div class="btn-group mx-1">
                                    <button type="button" class="btn btn-secondary mx-1" id="add-telefone">+</button>
                                    <button type="button" class="btn btn-danger" id="remove-telefone">-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div id="tipo-pessoa" class="content" role="tabpanel" aria-labelledby="tipo-pessoa-trigger">
                <div class="form-group">
                    <label for="tipo_usuario1">Tipo de Pessoa</label>
                    <select class="form-control col-md-4" id="tipo_usuario1">
                        <option selected>Escolha uma opção</option>
                        <option value="Funcionário">Funcionário</option>
                        <option value="Médico">Médico</option>
                        <option value="Paciente">Paciente</option>
                        <option value="Farmacêutico">Farmacêutico</option>
                    </select>
                </div>
            <div id="campos-adicionais" style="display: none;">
                <div id="opcao_funcionario1" class="form-group" style="display: none;">
                    <label for="opcao_funcionario1">Função</label>
                    <input type="text" class="form-control col-md-4" id="opcao_funcionario1" placeholder="Insira a função">
                </div>
                <div id="opcao_medico1" class="form-group" style="display: none;">
                    <label for="opcao_medico1">CRM</label>
                    <input type="text" class="form-control col-md-4" id="opcao_medico1" placeholder="Insira o CRM">
                </div>
                <div class="form-group">
                    <div>
                    <label for="opcao_medico2">Especialidade</label>
                    </div>
                    <select class="form-control js-example-basic-multiple" role="combobox" id="opcao_medico2" multiple="multiple">
                        <option></option>
                        <option value="administracao-em-saude">ADMINISTRAÇÃO EM SAÚDE</option>
                        <option value="acupuntura">ACUPUNTURA</option>
                        <option value="administracao-hospitalar">ADMINISTRAÇÃO HOSPITALAR</option>
                        <option value="alergia-e-imunologia">ALERGIA E IMUNOLOGIA</option>
                        <option value="alergia-e-imunopatologia">ALERGIA E IMUNOPATOLOGIA</option>
                        <option value="anatomia-patologica">ANATOMIA PATOLÓGICA</option>
                        <option value="anestesiologia">ANESTESIOLOGIA</option>
                        <option value="angiologia-e-cirurgia-vascular">ANGIOLOGIA E CIRURGIA VASCULAR</option>
                        <option value="angiologia">ANGIOLOGIA</option>
                        <option value="broncoesofagologia">BRONCOESOFAGOLOGIA</option>
                        <option value="cancerologia">CANCEROLOGIA</option>
                        <option value="cancerologia-cirurgica">CANCEROLOGIA CIRÚRGICA</option>
                        <option value="cancerologia-pediatrica">CANCEROLOGIA PEDIÁTRICA</option>
                        <option value="cardiologia">CARDIOLOGIA</option>
                        <option value="cirurgia-cardiovascular">CIRURGIA CARDIOVASCULAR</option>
                        <option value="cirurgia-da-mao">CIRURGIA DA MÃO</option>
                        <option value="cirurgia-de-cabeca-e-pescoco">CIRURGIA DE CABEÇA E PESCOÇO</option>
                        <option value="cirurgia-digestiva">CIRURGIA DIGESTIVA</option>
                        <option value="cirurgia-do-aparelho-digestivo">CIRURGIA DO APARELHO DIGESTIVO</option>
                        <option value="cirurgia-do-trauma">CIRURGIA DO TRAUMA</option>
                        <option value="cirurgia-gastroenterologica">CIRURGIA GASTROENTEROLÓGICA</option>
                        <option value="cirurgia-geral">CIRURGIA GERAL</option>
                        <option value="cirurgia-oncologica">CIRURGIA ONCOLÓGICA</option>
                        <option value="cirurgia-pediatrica">CIRURGIA PEDIÁTRICA</option>
                        <option value="cirurgia-plastica">CIRURGIA PLÁSTICA</option>
                        <option value="cirurgia-toracica">CIRURGIA TORÁCICA</option>
                        <option value="cirurgia-toraxica">CIRURGIA TORÁXICA</option>
                        <option value="cirurgia-vascular">CIRURGIA VASCULAR</option>
                        <option value="cirurgia-vascular-periferica">CIRURGIA VASCULAR PERIFÉRICA</option>
                        <option value="citopatologia">CITOPATOLOGIA</option>
                        <option value="clinica-medica">CLÍNICA MÉDICA</option>
                        <option value="coloproctologia">COLOPROCTOLOGIA</option>
                        <option value="densitometria-ossea">DENSITOMETRIA ÓSSEA</option>
                        <option value="dermatologia">DERMATOLOGIA</option>
                        <option value="diagnostico-por-imagem">DIAGNÓSTICO POR IMAGEM</option>
                        <option value="doencas-infecciosas-e-parasitarias">DOENÇAS INFECCIOSAS E PARASITÁRIAS</option>
                        <option value="eletroencefalografia">ELETROENCEFALOGRAFIA</option>
                        <option value="endocrinologia">ENDOCRINOLOGIA</option>
                        <option value="endocrinologia-e-metabolomia">ENDOCRINOLOGIA E METABOLOGIA</option>
                        <option value="endoscopia">ENDOSCOPIA</option>
                        <option value="endoscopia-digestiva">ENDOSCOPIA DIGESTIVA</option>
                        <option value="endoscopia-peroral">ENDOSCOPIA PERORAL</option>
                        <option value="endoscopia-peroral-vias-aereas">ENDOSCOPIA PERORAL VIAS AÉREAS</option>
                        <option value="fisiatria">FISIATRIA</option>
                        <option value="foniatria">F ONIATRIA</option>
                        <option value="gastroenterologia">GASTROENTEROLOGIA</option>
                        <option value="genetica-medica">GENÉTICA MÉDICA</option>
                        <option value="geriatria">GERIATRIA</option>
                        <option value="ginecologia">GINECOLOGIA</option>
                        <option value="hematologia">HEMATOLOGIA</option>
                        <option value="homeopatia">HOMEOPATIA</option>
                        <option value="infectologia">INFECTOLOGIA</option>
                        <option value="medicina-de-familia-e-comunidade">MEDICINA DE FAMÍLIA E COMUNIDADE</option>
                        <option value="medicina-esportiva">MEDICINA ESPORTIVA</option>
                        <option value="medicina-fisica-e-reabilitacao">MEDICINA FÍSICA E REABILITAÇÃO</option>
                        <option value="medicina-intensiva">MEDICINA INTENSIVA</option>
                        <option value="medicina-paliativa">MEDICINA PALIATIVA</option>
                        <option value="medicina-preventiva">MEDICINA PREVENTIVA</option>
                        <option value="medicina-legal">MEDICINA LEGAL</option>
                        <option value="nefrologia">NEFROLOGIA</option>
                        <option value="neurologia">NEUROLOGIA</option>
                        <option value="neurocirurgia">NEUROCIRURGIA</option>
                        <option value="nutrologia">NUTROLOGIA</option>
                        <option value="obstetricia">OBSTETRÍCIA</option>
                        <option value="oftalmologia">OFTALMOLOGIA</option>
                        <option value="oncologia">ONCOLOGIA</option>
                        <option value="otorrinolaringologia">OTORRINOLARINGOLOGIA</option>
                        <option value="pediatria">PEDIATRIA</option>
                        <option value="pneumologia">PNEUMOLOGIA</option>
                        <option value="psiquiatria">PSIQUIATRIA</option>
                        <option value="psicologia">PSICOLOGIA</option>
                        <option value="reumatologia">REUMATOLOGIA</option>
                        <option value="saude-da-mulher">SAÚDE DA MULHER</option>
                        <option value="saude-da-crianca-e-do-adolescente">SAÚDE DA CRIANÇA E DO ADOLESCENTE</option>
                        <option value="saude-do-adulto">SAÚDE DO ADULTO</option>
                        <option value="saude-do-idoso">SAÚDE DO IDOSO</option>
                        <option value="terapia-ocupacional">TERAPIA OCUPACIONAL</option>
                        <option value="urologia">UROLOGIA</option>
                    </select>
                    <div class="input-group-append mt-2">
                        <button class="btn btn-danger" type="button" id="clear-especialidades">Limpar</button>
                    </div>
                </div>
                </div>
                <div id="opcao_paciente1" class="form-group" style="display: none;">
                    <label for="opcao_paciente1">Número do Cartão do SUS</label>
                    <input type="text" class="form-control col-md-4" id="opcao_paciente1" placeholder="Insira o número do cartão do SUS">
                </div>
                <div id="opcao_farmaceutico1" class="form-group" style="display: none;">
                    <label for="opcao_farmaceutico1">CRF</label>
                    <input type="text" class="form-control col-md-4" id="opcao_farmaceutico1" placeholder="Insira o CRF">
                </div>
            </div>
                </div>
                    <div id="detalhes-pessoa" class="content" role="tabpanel" aria-labelledby="detalhes-pessoa-trigger">
                        <div class="form-group">
                                <label for="nome_social">Nome Social</label>
                                <input type="text" class="form-control col-md-6" id="nome_social" placeholder="Insira o nome social" disabled>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="toggle-nome-social">
                                    <label class="form-check-label" for="toggle-nome-social">Habilitar Nome Social</label>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="gen_usuario1">Gênero</label>
                            <select class="form-control col-md-4" id="gen_usuario1">
                                <option>Escolha uma opção</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Não informado">Prefiro não informar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="est_civil1">Estado Cívil</label>
                            <select class="form-control col-md-4" id="est_civil1">
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
                            <label for="endereco_usuario1">Endereço</label>
                            <input type="text" class="form-control col-md-6" id="endereco_usuario1" placeholder="Insira o endereço">
                        </div>
                        <div class="form-group">
                            <label for="observacoes_usuario1">Observações</label>
                            <textarea class="form-control col-md-6" id="observacoes_usuario1" placeholder="observações para o usuário" rows="5"></textarea>
                        </div>
                    </div>
                    <div id="resumo" class="content" role="tabpanel" aria-labelledby="resumo-trigger">
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
                    <button type="button" class="btn btn-primary" id="voltar">Voltar</button>
                    <button type="button" class="btn btn-primary" id="proximo">Próximo</button>
                    </div>
                </div>
            </div>
    </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="validationModal" tabindex="-1" role="dialog" aria-labelledby="validationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="validationModalLabel">Campos Vazios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Os seguintes campos precisam ser preenchidos:</p>
                        <ul id="emptyFieldsList" style="color: red;"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

<button type="button" class="btn btn-success" id="finalizar">Finalizar</button>

<!-- Modal de Confirmação -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirmar Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você deseja finalizar o cadastro com as informações inseridas?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="confirmarFinalizacao">Confirmar</button>
            </div>
        </div>
    </div>
</div>
<div id="errorMessages" style="color: red;"></div>
<div id="loadingIndicator" style="display: none;">Carregando...</div>
<div id="successMessage" style="color: green; display: none;"></div><div id="loadingIndicator" style="display: none;">Carregando...</div>
<div id="successMessage" style="color: green; display: none;"></div>

<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>
    document.getElementById('toggle-nome-social').addEventListener('change', function() {
        const nomeSocialInput = document.getElementById('nome_social');
        nomeSocialInput.disabled = !this.checked; // Habilita o campo se o toggle estiver ativo
    });

    const stepper = new Stepper(document.getElementById('stepper_1'));

    document.getElementById('proximo').addEventListener('click', () => {
        updateContent(); // Atualiza o conteúdo do resumo ao avançar
        stepper.next();
    });

    document.getElementById('voltar').addEventListener('click', (event) => {
        stepper.previous();
    });

</script>

<script>
 function updateContent() {
    const nome_usuario = document.getElementById('nome_usuario1').value;
    const cpf_usuario = document.getElementById('cpf_usuario1').value;
    const data_nascimento = document.getElementById('data_nascimento1').value;
    const nacionalidade = document.getElementById('nacionalidade1').value;
    const naturalidade = document.getElementById('naturalidade1').value;

    // Coletando os telefones
    const telefones = [];
    for (let i = 1; i <= telefoneCount; i++) {
        const telefone = document.getElementById(`telefone_usuario${i}`);
        if (telefone) {
            telefones.push(telefone.value);
        }
    }

    const tipo_usuario = document.getElementById('tipo_usuario1').value;
    const funcionario = document.getElementById('opcao_funcionario1').value;
    const medico = document.getElementById('opcao_medico1').value; // CRM

    //coleta de especialidades
    const especialidadeSelect = document.getElementById('opcao_medico2'); // Especialidade
    const especialidadesSelecionadas = Array.from(especialidadeSelect.selectedOptions).map(option => option.text);

    const paciente = document.getElementById('opcao_paciente1').value; // Cartão SUS
    const farmaceutico = document.getElementById('opcao_farmaceutico1').value; // CRF
    const nome_social = document.getElementById('nome_social').value;
    const genero = document.getElementById('gen_usuario1').value;
    const estado_civil = document.getElementById('est_civil1').value;
    const endereco_usuario = document.getElementById('endereco_usuario1').value;
    const observacoes = document.getElementById('observacoes_usuario1').value;

    // Função para atualizar e mostrar ou esconder elementos do resumo
    function updateResumo(fieldId, value) {
        const fieldElement = document.getElementById(fieldId);
        if (value) {
            fieldElement.textContent = value;
            fieldElement.parentElement.style.display = 'block'; // Mostra o campo no resumo
        } else {
            fieldElement.parentElement.style.display = 'none'; // Esconde o campo no resumo
        }
    }

    updateResumo('nome_usuario_resumo', nome_usuario);
    updateResumo('cpf_usuario_resumo', cpf_usuario);
    updateResumo('data_nascimento_resumo', data_nascimento);
    updateResumo('nacionalidade_resumo', nacionalidade);
    updateResumo('naturalidade_resumo', naturalidade);
    updateResumo('telefone_usuario_resumo', telefones.length > 0 ? telefones.join(', ') : '');
    updateResumo('tipo_usuario_resumo', tipo_usuario);

    // Exibir descrição da função, se aplicável
    updateResumo('descricao_funcao_resumo', (tipo_usuario === 'Funcionário') ? funcionario : '');

    // Exibir CRM se o tipo de usuário for Médico
    if (tipo_usuario === 'Médico') {
        updateResumo('crm_resumo', medico);
        updateResumo('especialidade_resumo', especialidadesSelecionadas.length > 0 ? especialidadesSelecionadas.join(', ') : ); // Exibir especialidade se o tipo for Médico
    } else {
        updateResumo('crm_resumo', ''); // Esconder se não for Médico
        updateResumo('especialidade_resumo', ''); // Esconder se não for Médico
    }

    // Exibir Cartão SUS se o tipo de usuário for Paciente
    if (tipo_usuario === 'Paciente') {
        updateResumo('cartao_sus_resumo', paciente);
    } else {
        updateResumo('cartao_sus_resumo', ''); // Esconder se não for Paciente
    }

    // Exibir CRF se o tipo de usuário for Farmacêutico
    if (tipo_usuario === 'Farmacêutico') {
        updateResumo('crf_resumo', farmaceutico);
    } else {
        updateResumo('crf_resumo', ''); // Esconder se não for Farmacêutico
    }

    updateResumo('nome_social_resumo', nome_social);
    updateResumo('genero_resumo', genero);
    updateResumo('estado_civil_resumo', estado_civil);
    updateResumo('endereco_usuario_resumo', endereco_usuario);
    updateResumo('observacoes_resumo', observacoes);
}

    let telefoneCount = 1;

    document.getElementById('add-telefone').addEventListener('click', () => {
    telefoneCount++;

    const telefoneContainer = document.getElementById('telefone-container');
    const newTelefoneGroup = document.createElement('div');
    newTelefoneGroup.className = 'form-group';
    newTelefoneGroup.innerHTML = `
        <label for="telefone_usuario${telefoneCount}" class="telefone-label">Telefone</label>
        <input type="tel" class="form-control col-md-4" id="telefone_usuario${telefoneCount}" placeholder="Insira o número de telefone">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="emergencia_${telefoneCount}">
            <label class="form-check-label" for="emergencia_${telefoneCount}">Emergência</label>
        </div>
    `;

    telefoneContainer.appendChild(newTelefoneGroup);

    // Adiciona evento para o checkbox e a label
    const checkbox = document.getElementById(`emergencia_${telefoneCount}`);
    const telefoneInput = document.getElementById(`telefone_usuario${telefoneCount}`);
    const telefoneLabel = newTelefoneGroup.querySelector('.telefone-label');
    const checkboxLabel = newTelefoneGroup.querySelector(`label[for="emergencia_${telefoneCount}"]`);

    // Função para alterar a cor
    function toggleColor(isChecked) {
        if (isChecked) {
            telefoneInput.style.color = 'red'; // Muda a cor do texto do telefone
            telefoneLabel.style.color = 'red'; // Muda a cor da label do telefone
            checkboxLabel.style.color = 'red'; // Muda a cor da label do checkbox
        } else {
            telefoneInput.style.color = ''; // Reseta a cor do texto do telefone
            telefoneLabel.style.color = ''; // Reseta a cor da label do telefone
            checkboxLabel.style.color = ''; // Reseta a cor da label do checkbox
        }
    }

    // Evento para o checkbox
    checkbox.addEventListener('change', function() {
        toggleColor(this.checked);
    });

    // Evento para a label do checkbox
    checkboxLabel.addEventListener('click', function() {
        toggleColor(checkbox.checked);
    });
});

    document.getElementById('remove-telefone').addEventListener('click', () => {
        if (telefoneCount > 1) {
            const telefoneContainer = document.getElementById('telefone-container');
            const lastTelefoneGroup = telefoneContainer.lastChild; // Pega o último grupo de telefone
            telefoneContainer.removeChild(lastTelefoneGroup); // Remove o último grupo
            telefoneCount--; // Decrementa o contador
        } else {
            alert('Pelo menos um telefone deve ser mantido.'); // Mensagem se tentar remover todos os campos
        }
    });

    document.getElementById('tipo_usuario1').addEventListener('change', function() {
    const selectedValue = this.value;

    const camposAdicionais = document.getElementById('campos-adicionais');
    const opcaoFuncionario = document.getElementById('opcao_funcionario1');
    const opcaoMedico = document.getElementById('opcao_medico1');
    const opcaoMedico1 = document.getElementById('opcao_medico2');
    const opcaoPaciente = document.getElementById('opcao_paciente1');
    const opcaoFarmaceutico = document.getElementById('opcao_farmaceutico1');

    // Esconde todos os campos adicionais inicialmente
    opcaoFuncionario.style.display = 'none';
    opcaoMedico.style.display = 'none';
    opcaoMedico1.style.display = 'none';
    opcaoPaciente.style.display = 'none';
    opcaoFarmaceutico.style.display = 'none';
    camposAdicionais.style.display = 'block'; // Mostra o container de campos adicionais

    if (selectedValue === 'Funcionário') {
        opcaoFuncionario.style.display = 'block';
    } else if (selectedValue === 'Médico') {
        opcaoMedico.style.display = 'block';
        opcaoMedico1.style.display = 'block';
    } else if (selectedValue === 'Paciente') {
        opcaoPaciente.style.display = 'block';
    } else if (selectedValue === 'Farmacêutico') {
        opcaoFarmaceutico.style.display = 'block';
    } else {
        camposAdicionais.style.display = 'none'; // Se nenhuma opção for selecionada, esconde os campos adicionais
    }
});
</script>
<script>
   document.getElementById('proximo').addEventListener('click', () => {
    const emptyFields = []; // Array para armazenar campos vazios

    // Verificar campos obrigatórios
    const nome_usuario = document.getElementById('nome_usuario1').value;
    const cpf_usuario = document.getElementById('cpf_usuario1').value;
    const data_nascimento = document.getElementById('data_nascimento1').value;
    const tipo_usuario = document.getElementById('tipo_usuario1').value;

    // Adicionar campos vazios ao array
    if (!nome_usuario) emptyFields.push("Nome Completo");
    if (!cpf_usuario) emptyFields.push("CPF");
    if (!data_nascimento) emptyFields.push("Data Nascimento");
    if (tipo_usuario === "Escolha uma opção") emptyFields.push("Tipo de Pessoa");

    // Exibir modal se houver campos vazios
    if (emptyFields.length > 0) {
        const emptyFieldsList = document.getElementById('emptyFieldsList');
        emptyFieldsList.innerHTML = ''; // Limpar lista anterior
        emptyFields.forEach(field => {
            const li = document.createElement('li');
            li.textContent = field;
            emptyFieldsList.appendChild(li);
        });
        $('#validationModal').modal('show'); // Mostrar modal
    } else {
        // Se todos os campos obrigatórios estiverem preenchidos, avança para o próximo passo
        updateContent(); // Atualiza o conteúdo do resumo
        stepper.next(); // Avança para o próximo passo
    }
});
</script>

<script>/*
const stepper = new Stepper(document.getElementById('stepper_1'));

function validateCurrentStep() {
    const stepIndex = stepper._currentIndex; // Obtém o índice do passo atual
    const emptyFields = [];

    if (stepIndex === 0) { // Dados Básicos
        const nome = document.getElementById('nome_usuario1').value;
        const cpf = document.getElementById('cpf_usuario1').value;
        const dataNascimento = document.getElementById('data_nascimento1').value;
        const nacionalidade = document.getElementById('nacionalidade1').value;
        const naturalidade = document.getElementById('naturalidade1').value;

        if (!nome) emptyFields.push('Nome Completo');
        if (!cpf) emptyFields.push('CPF');
        if (!dataNascimento) emptyFields.push('Data de Nascimento');
        if (!nacionalidade) emptyFields.push('Nacionalidade');
        if (!naturalidade) emptyFields.push('Naturalidade');
    } else if (stepIndex === 1) { // Telefones

        const telefone = document.getElementById('telefone_usuario1').value;
        if (!telefone) emptyFields.push('Telefone');
    } else if (stepIndex === 2) { // Tipo Pessoa

        const tipoUsuario = document.getElementById('tipo_usuario1').value;
        if (tipoUsuario === "Funcionário") {
            const funcao = document.getElementById('opcao_funcionario1').value;
            if (!funcao) emptyFields.push('Função');
        } else if (tipoUsuario === "Médico") {
            const crm = document.getElementById('opcao_medico1').value;
            if (!crm) emptyFields.push('CRM');
        } else if (tipoUsuario === "Paciente") {
            const cartaoSUS = document.getElementById('opcao_paciente1').value;
            if (!cartaoSUS) emptyFields.push('Número do Cartão do SUS');
        } else if (tipoUsuario === "Farmacêutico") {
            const crf = document.getElementById('opcao_farmaceutico1').value;
            if (!crf) emptyFields.push('CRF');
        }
    } else if (stepIndex === 3) { // Detalhes Pessoa
        const nomeSocial = document.getElementById('nome_social').value;
        const genero = document.getElementById('gen_usuario1').value;
        const estadoCivil = document.getElementById('est_civil1').value;
        const endereco = document.getElementById('endereco_usuario1').value;

        if (!nomeSocial) emptyFields.push('Nome Social');
        if (!genero) emptyFields.push('Gênero');
        if (!estadoCivil) emptyFields.push('Estado Civil');
        if (!endereco) emptyFields.push('Endereço');
    }

    return emptyFields;
}

function showValidationModal(emptyFields) {
    const emptyFieldsList = document.getElementById('emptyFieldsList');
    emptyFieldsList.innerHTML = ''; // Limpa a lista anterior
    emptyFields.forEach(field => {
        const li = document.createElement('li');
        li.textContent = field;
        emptyFieldsList.appendChild(li);
    });
    $('#validationModal').modal('show'); // Exibe o modal
}

    function nextStep() {
        const emptyFields = validateCurrentStep();
        if (emptyFields.length > 0) {
            showValidationModal(emptyFields);
            } else {
                stepper.next();
                updateContent();
    }
}
document.getElementById('proximo').addEventListener('click', nextStep);

document.getElementById('voltar').addEventListener('click', (event) => {
stepper.previous();
});*/
</script>

<script>
    document.getElementById('proximo').addEventListener('click', () => {
    if (validateForm()) {
        updateContent(); // Atualiza o conteúdo do resumo ao avançar
        stepper.next();
    } else {
        $('#validationModal').modal('show'); // Exibe o modal de validação se houver campos vazios
    }
});

// Função de validação
function validateForm() {
    const emptyFields = []; // Array para armazenar campos vazios

    // Campos obrigatórios
    const nomeUsuario = document.getElementById('nome_usuario1').value;
    const cpfUsuario = document.getElementById('cpf_usuario1').value;
    const dataNascimento = document.getElementById('data_nascimento1').value;
    const nacionalidadeUsuario = document.getElementById('nacionalidade1').value;
    const naturalidadeUsuario = document.getElementById('naturalidade1').value;

    // Verifica se os campos obrigatórios estão preenchidos
    if (!nomeUsuario) {
        emptyFields.push('Nome Completo');
    }
    if (!cpfUsuario) {
        emptyFields.push('CPF');
    }
    if (!dataNascimento) {
        emptyFields.push('Data de Nascimento');
    }
    if (!nacionalidadeUsuario) {
        emptyFields.push('Nacionalidade');
    }
    if (!naturalidadeUsuario) {
        emptyFields.push('Naturalidade');
    }

    // Se houver campos vazios, atualiza a lista no modal e retorna false
    if (emptyFields.length > 0) {
        const emptyFieldsList = document.getElementById('emptyFieldsList');
        emptyFieldsList.innerHTML = ''; // Limpa a lista anterior
        emptyFields.forEach(field => {
            const listItem = document.createElement('li');
            listItem.textContent = field;
            emptyFieldsList.appendChild(listItem); // Adiciona cada campo vazio à lista
        });
        return false; // Retorna false se houver campos vazios
    }

    return true; // Retorna true se todos os campos obrigatórios estiverem preenchidos
}
</script>
<script>
    $(document).ready(function() {
        // Inicializa o Select2
        $('#opcao_medico2').select2({
            placeholder: "Selecione as especialidades",
            allowClear: true,
            minimumResultsForSearch: Infinity, // Esconde a caixa de pesquisa
            closeOnSelect: false,
            width: 'resolve'
        }).on('select2:select', function (e) {
            // Personaliza a aparência das opções selecionadas
            $('.select2-selection__choice').css({
                'background-color': '#b3bac2', // Cor de fundo dos pillboxes
                'color': 'black', // Cor do texto

            });
        });

        // Evento para limpar todas as
    document.getElementById('clear-especalidades').addEventListener('click', () => {
        const especialidadesSelect = document.getElementById('opcao-medico2');
        $(especialidadesSelect).val(null).trigger('change');
    });

</script>
<script>
    document.getElementById('finalizar').addEventListener('click', () => {
    $('#confirmModal').modal('show'); // Mostrar o modal de confirmação
});

// Lógica para confirmar a finalização
document.getElementById('confirmarFinalizacao').addEventListener('click', () => {
    // Aqui você pode implementar a lógica para salvar os dados
    // Por enquanto, vamos apenas exibir um alerta de sucesso
    alert('Cadastro finalizado com sucesso!');

    // Fechar o modal
    $('#confirmModal').modal('hide');

    // Opcional: Redirecionar ou limpar o formulário
    // window.location.href = 'pagina_de_sucesso.html'; // Redirecionar para uma página de sucesso
    // document.getElementById('userForm').reset(); // Limpar o formulário
});document.getElementById('finalizar').addEventListener('click', () => {
    $('#confirmModal').modal('show'); // Mostrar o modal de confirmação
});

// Lógica para confirmar a finalização
document.getElementById('confirmarFinalizacao').addEventListener('click', () => {
    // Aqui você pode implementar a lógica para salvar os dados
    // Por enquanto, vamos apenas exibir um alerta de sucesso
    alert('Cadastro finalizado com sucesso!');

    // Fechar o modal
    $('#confirmModal').modal('hide');

    // Opcional: Redirecionar ou limpar o formulário
    // window.location.href = 'pagina_de_sucesso.html'; // Redirecionar para uma página de sucesso
    // document.getElementById('userForm').reset(); // Limpar o formulário
});
</script>
<script>
    document.getElementById('confirmarFinalizacao').addEventListener('click', () => {
    // Coletar dados do formulário
    const nome_usuario = document.getElementById('nome_usuario1').value;
    const cpf_usuario = document.getElementById('cpf_usuario1').value;
    const data_nascimento = document.getElementById('data_nascimento1').value;
    const nacionalidade = document.getElementById('nacionalidade1').value;
    const telefone_usuario = document.getElementById('telefone_usuario1').value; // Adapte para coletar todos os telefones
    const tipo_usuario = document.getElementById('tipo_usuario1').value;
    // Adicione aqui a coleta dos outros campos conforme necessário

    // Criar um objeto com os dados
    const dadosUsuario = {
        nome: nome_usuario,
        cpf: cpf_usuario,
        data_nascimento: data_nascimento,
        nacionalidade: nacionalidade,
        telefone: telefone_usuario,
        tipo_usuario: tipo_usuario,
        // Adicione outros campos conforme necessário
    };

    // Enviar os dados para o servidor (exemplo usando fetch)
    fetch('/api/cadastro', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(dadosUsuario),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao enviar os dados.'); // Lança um erro se a resposta não for ok
        }
        return response.json(); // Converte a resposta em JSON se for bem-sucedido
    })
    .then(data => {
        // Supondo que o servidor retorne uma mensagem de sucesso
        alert('Cadastro finalizado com sucesso: ' + data.mensagem);
        $('#confirmModal').modal('hide'); // Fechar o modal
        // Opcional: Redirecionar ou limpar o formulário
        // window.location.href = 'pagina_de_sucesso.html'; // Redirecionar para uma página de sucesso
        // document.getElementById('userForm').reset(); // Limpar o formulário
    })
    .catch(error => {
        // Exibir mensagem de erro
        alert('Erro: ' + error.message);
    });
});
</script>
<script>
    function validarFormulario() {
    const errorMessages = [];
    const nome_usuario = document.getElementById('nome_usuario1').value;
    const cpf_usuario = document.getElementById('cpf_usuario1').value;
    const data_nascimento = document.getElementById('data_nascimento1').value;
    const telefone_usuario = document.getElementById('telefone_usuario1').value; // Adapte para coletar todos os telefones
    const tipo_usuario = document.getElementById('tipo_usuario1').value;

    // Validação dos campos obrigatórios
    if (!nome_usuario) {
        errorMessages.push("O campo 'Nome Completo' é obrigatório.");
    }
    if (!cpf_usuario || !/^\d{11}$/.test(cpf_usuario)) {
        errorMessages.push("O campo 'CPF' deve conter 11 dígitos.");
    }
    if (!data_nascimento) {
        errorMessages.push("O campo 'Data de Nascimento' é obrigatório.");
    }
    if (!telefone_usuario) {
        errorMessages.push("O campo 'Telefone' é obrigatório.");
    }
    if (tipo_usuario === "Escolha uma opção") {
        errorMessages.push("Você deve escolher um 'Tipo de Pessoa'.");
    }

    // Exibir mensagens de erro, se houver
    const errorMessageContainer = document.getElementById('errorMessages');
    errorMessageContainer.innerHTML = ''; // Limpar mensagens anteriores
    if (errorMessages.length > 0) {
        errorMessages.forEach(msg => {
            const li = document.createElement('li');
            li.textContent = msg;
            errorMessageContainer.appendChild(li);
        });
        return false; // Retornar falso se houver erros
    }

    return true; // Retornar verdadeiro se não houver erros
}

// Modificar a lógica de finalização para incluir a validação
document.getElementById('confirmarFinalizacao').addEventListener('click', () => {
    if (!validarFormulario()) {
        return; // Não prosseguir se o formulário não for válido
    }

    // Coletar dados do formulário e enviar, como antes...
    // (A lógica de coleta e envio de dados vai aqui)
});
</script>
<script>
    document.getElementById('confirmarFinalizacao').addEventListener('click', () => {
    if (!validarFormulario()) {
        return; // Não prosseguir se o formulário não for válido
    }

    // Coletar dados do formulário
    const dadosUsuario = {
        nome: document.getElementById('nome_usuario1').value,
        cpf: document.getElementById('cpf_usuario1').value,
        data_nascimento: document.getElementById('data_nascimento1').value,
        nacionalidade: document.getElementById('nacionalidade1').value,
        telefone: document.getElementById('telefone_usuario1').value,
        tipo_usuario: document.getElementById('tipo_usuario1').value,
        // Adicione outros campos conforme necessário
    };

    // Mostrar indicador de carregamento
    const loadingIndicator = document.getElementById('loadingIndicator');
    loadingIndicator.style.display = 'block';

    // Enviar os dados para o servidor
    fetch('/api/cadastro', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(dadosUsuario),
    })
    .then(response => {
        loadingIndicator.style.display = 'none'; // Ocultar indicador de carregamento
        if (!response.ok) {
            throw new Error('Erro ao enviar os dados.'); // Lança um erro se a resposta não for ok
        }
        return response.json(); // Converte a resposta em JSON se for bem-sucedido
    })
    .then(data => {
        // Exibir mensagem de sucesso
        const successMessage = document.getElementById('successMessage');
        successMessage.textContent = 'Cadastro finalizado com sucesso: ' + data.mensagem;
        successMessage.style.display = 'block';

        $('#confirmModal').modal('hide'); // Fechar o modal

        // Limpar o formulário
        document.getElementById('userForm').reset();
    })
    .catch(error => {
        loadingIndicator.style.display = 'none'; // Ocultar indicador de carregamento
        alert('Erro: ' + error.message); // Exibir mensagem de erro
    });
});
</script>
@endsection
