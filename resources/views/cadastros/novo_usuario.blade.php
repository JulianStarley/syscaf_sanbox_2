@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
{{-- jquery adminlte --}}
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jquery-validation/additional-methods.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <div class="container">
       <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
        <span class="sr-only">20% Complete</span>
    </div>
</div>
        <div class="stepper">
            <ul class="nav nav-pills mb-3 mt-3 justify-content-between" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dados Básicos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-phone-tab" data-bs-toggle="pill" data-bs-target="#pills-phone" type="button" role="tab" aria-controls="pills-phone" aria-selected="false">Telefones</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-people-type-tab" data-bs-toggle="pill" data-bs-target="#pills-people-type" type="button" role="tab" aria-controls="pills-people-type" aria-selected="false">Tipo pessoa</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-additional-details-tab" data-bs-toggle="pill" data-bs-target="#pills-additional-details" type="button" role="tab" aria-controls="pills-additional-details" aria-selected="false">Detalhes adicionais</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-summary-tab" data-bs-toggle="pill" data-bs-target="#pills-summary" type="button" role="tab" aria-controls="pills-summary" aria-selected="false">Resumo</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active col-md-6" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Conteúdo do Passo 1
                  <form id="passo_1" class="needs-validation" name="passo_1" onsubmit="return validateForm()" novalidate>
                    <div class="form-group">
                        <label for="full-name">Nome Completo</label>
                        <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Entre com o nome completo sem abreviações" aria-describedby="inputFullName-error" aria-invalid="true" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF (11 dígitos)</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11"  required>
                    </div>
                    <div class="form-group">
                        <label for="birth-date">Data de Nascimento</label>
                        <input type="date" class="form-control" id="birth-date" name="birth-date"  required>
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nacionalidade</label>
                        <select id="nationality" class="form-control select2" name="nationality"  required>
                            <option value="">Selecione</option>
                            <option value="brasileira">Brasileira</option>
                            <option value="estrangeira">Estrangeira</option>
                            <!-- Adicione opções de nacionalidade -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="naturalness">Naturalidade</label>
                        <select id="naturalness" class="form-control select2" name="naturalness" required>
                            <option value="">Selecione</option>
                            <option value="bahia">BA</option>
                            <option value="rio de janeiro">RJ</option>
                            <option value="minas gerais">MG</option>
                            <!-- Adicione opções de naturalidade -->
                        </select>
                    </div>
                    <button class="btn btn-primary" onclick="nextStep()">Avançar</button>
                </div>


                <div class="tab-pane fade col-md-6" id="pills-phone" role="tabpanel" aria-labelledby="pills-phone-tab">Conteúdo do Passo 2

                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                        <label class="text-danger">Marcar como emergência</label>
                        <input type="checkbox" id="emergency">
                    </div>
                        <button class="btn btn-secondary" onclick="addPhone()">Adicionar Telefone</button>
                        <button class="btn btn-primary" onclick="nextStep()">Avançar</button>
                        <button class="btn btn-secondary" onclick="prevStep()">Retornar</button>
                    </div>


                <div class="tab-pane fade col-md-6" id="pills-people-type" role="tabpanel" aria-labelledby="pills-people-type-tab">Conteúdo do Passo 3

                    <div class="form-group">
                        <label for="person-type-select">Tipo de Pessoa</label>
                        <select id="person-type-select" class="form-control" onchange="showPersonTypeFields()" required>
                            <option value="">Selecione</option>
                            <option value="medico">Médico</option>
                            <option value="funcionario">Funcionário</option>
                            <option value="farmaceutico">Farmacêutico</option>
                            <option value="paciente">Paciente</option>
                        </select>
                    </div>
                    <div id="medico-fields" style="display:block;">
                        <div class="form-group">
                            <label for="crm">CRM</label>
                            <input type="text" class="form-control" id="crm">
                        </div>
                        <div class="form-group">
                            <label for="specialties">Especialidades</label>
                            <select id="specialties" class="form-control select2" multiple>
                                <option value="cardiologia">Cardiologia</option>
                                <option value="pediatria">Pediatria</option>
                                <!-- Adicione mais especialidades -->
                            </select>
                        </div>
                    </div>
                    <div id="funcionario-fields" style="display:block;">
                        <div class="form-group">
                            <label for="job-title">Função Exercida</label>
                            <input type="text" class="form-control" id="job-title">
                        </div>
                    </div>
                    <div id="farmaceutico-fields" style="display:block;">
                        <div class="form-group">
                            <label for="crf">CRF</label>
                            <input type="text" class="form-control" id="crf">
                        </div>
                    </div>
                    <div id="paciente-fields" style="display:block;">
                        <div class="form-group">
                            <label for="sus-card">Número do Cartão do SUS</label>
                            <input type="text" class="form-control" id="sus-card">
                        </div>
                    </div>
                        <button class="btn btn-primary" onclick="nextStep()">Avançar</button>
                        <button class="btn btn-secondary" onclick="prevStep()">Retornar</button>
                </div>

                <div class="tab-pane fade col-md-6" id="pills-additional-details" role="tabpanel" aria-labelledby="pills-additional-details-tab">Conteúdo do Passo 4
                    <div class="form-group">
                        <label for="social-name">Nome Social</label>
                        <input type="text" class="form-control" id="social-name" disabled>
                        <input type="checkbox" id="enable-social-name" onchange="toggleSocialName()"> Habilitar Nome Social
                    </div>
                    <div class="form-group">
                        <label for="gender">Gênero</label>
                        <select id="gender" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="prefiro-nao-informar">Prefiro não informar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="marital-status">Estado Civil</label>
                        <select id="marital-status" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="solteiro">Solteiro(a)</option>
                            <option value="casado">Casado(a)</option>
                            <option value="separado">Separado(a)</option>
                            <option value="uniao-estavel">União Estável</option>
                            <option value="divorciado">Divorciado(a)</option>
                            <option value="viuvo">Vi úvo(a)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" id="address" required>
                    </div>
                    <div class="form-group">
                        <label for="observations">Observações</label>
                        <textarea class="form-control" id="observations" rows="3"></textarea>
                    </div>
                        <button class="btn btn-primary" onclick="nextStep()">Avançar</button>
                        <button class="btn btn-secondary" onclick="prevStep()">Retornar</button>
                    </div>

                <div class="tab-pane fade" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab">Conteúdo do Passo 5
                    <div id="summary" class="content" role="tabpanel" aria-labelledby="summary-trigger">

                        <h3>Resumo</h3>
                        <table id="summary-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Campo</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Os dados preenchidos serão inseridos aqui via JavaScript -->
                            </tbody>
                        </table>
                        <button class="btn btn-success" onclick="saveData()">Salvar</button>
                        <button class="btn btn-secondary" onclick="prevStep()">Retornar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script>
// Obtendo os elementos do DOM
const nextButton = document.querySelector('.btn-primary');
const form = document.getElementById('passo_1');

// Função para verificar se o formulário é válido
function validateForm() {
    // Obtendo os campos do formulário
    const fullName = document.getElementById('full-name');
    const cpf = document.getElementById('cpf');
    const birthDate = document.getElementById('birth-date');
    const nationality = document.getElementById('nationality');
    const naturalness = document.getElementById('naturalness');

    // Verificando se os campos estão preenchidos
    if (fullName.value.trim() === '' || cpf.value.trim() === '' || birthDate.value.trim() === '' || nationality.value.trim() === '' || naturalness.value.trim() === '') {
        return false;
    }

    // Verificando se o CPF é válido
    if (!validateCPF(cpf.value)) {
        return false;
    }

    // Verificando se a data de nascimento é válida
    if (!validateBirthDate(birthDate.value)) {
        return false;
    }

    return true;
}

// Função para validar o CPF
function validateCPF(cpf) {
    // Removendo caracteres não numéricos
    cpf = cpf.replace(/[^\d]+/g, '');

    // Verificando se o CPF tem 11 dígitos
    if (cpf.length !== 11) {
        return false;
    }

    // Verificando se o CPF é válido
    let sum = 0;
    for (let i = 0; i < 9; i++) {
        sum += parseInt(cpf[i]) * (10 - i);
    }
    let remainder = sum % 11;
    if (remainder < 2) {
        remainder = 0;
    } else {
        remainder = 11 - remainder;
    }
    if (remainder !== parseInt(cpf[9])) {
        return false;
    }

    sum = 0;
    for (let i = 0; i < 10; i++) {
        sum += parseInt(cpf[i]) * (11 - i);
    }
    remainder = sum % 11;
    if (remainder < 2) {
        remainder = 0;
    } else {
        remainder = 11 - remainder;
    }
    if (remainder !== parseInt(cpf[10])) {
        return false;
    }

    return true;
}

// Função para validar a data de nascimento
function validateBirthDate(birthDate) {
    // Verificando se a data de nascimento é válida
    const date = new Date(birthDate);
    if (isNaN(date.getTime())) {
        return false;
    }

    // Verificando se a data de nascimento é anterior à data atual
    const today = new Date();
    if (date >= today) {
        return false;
    }

    return true;
}

nextButton.addEventListener('click', () => {
    if (validateForm()) {
        // Se o formulário for válido, permite avançar para o próximo passo

    } else {
        // Se o formulário for inválido, exibe uma mensagem de erro
        alert('Por favor, preencha todos os campos obrigatórios.');
    }
});
// Função para salvar o progresso
function saveProgress(stepIndex) {
    if (typeof stepIndex === 'number'){
    localStorage.setItem('currentStep', stepIndex);
}
}

// Função para carregar o progresso
function loadProgress() {
    const savedStep = localStorage.getItem('currentStep');
    if (savedStep && !isNaN(savedStep)) {
        // Exibir o passo salvo
        currentStep = parseInt(savedStep);
        // ... código para exibir o passo
        const stepper = new Stepper(document.querySelector('.bs-stepper'));
        stepper.to(currentStep);
    }
}

// Carregar o progresso ao carregar a página
loadProgress();

    let currentStep = 0; // Índice do passo atual
    const steps = document.querySelectorAll('.tab-pane'); // Seleciona todos os passos

function nextStep() {
    // Verifica se o passo atual é válido antes de avançar
    if (currentStep < steps.length - 1 && validateForm()) {
        // Oculta o passo atual
        steps[currentStep].classList.remove('show', 'active');
        // Incrementa o índice do passo atual
        currentStep++;
            // Exibe o próximo passo
            steps[currentStep].classList.add('show', 'active');

    } else {
        alert('Por favor, preencha todos os campos obrigatórios.');
    }
}

function prevStep() {
    // Verifica se o passo atual é maior que 0 antes de retroceder
    if (currentStep > 0) {
        // Oculta o passo atual
        steps[currentStep].classList.remove('show', 'active');
        // Decrementa o índice do passo atual
        currentStep--;
        // Exibe o passo anterior
        steps[currentStep].classList.add('show', 'active');
    }
}
// Adiciona os eventos de clique aos botões
document.querySelectorAll('.btn-primary').forEach(button => {
    button.addEventListener('click', nextStep);
});

document.querySelectorAll('.btn-secondary').forEach(button => {
    button.addEventListener('click', prevStep);
});
</script>
<script>

document.querySelectorAll('#full-name, #cpf, #birth-date, #nationality, #naturalness').forEach(element => {
    let alertShown = false; // Variável de controle para mostrar o alerta apenas uma vez

    element.addEventListener('focusout', function() {
        if (this.value.trim() === "" && !alertShown) {
            const fieldName = this.id.replace('-', ' ').replace('-', ' ');
            alert(`O preenchimento do ${fieldName} é obrigatório`);
            alertShown = true; // Marca que o alerta já foi mostrado
        } else if (this.value.trim() !== "") {
            alertShown = false; // Reseta a variável se o campo for preenchido
        }
    });
});
</script>
@endpush
