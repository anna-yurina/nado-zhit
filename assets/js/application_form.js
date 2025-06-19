function addForm() {
    let containerForms = getContainerForms('container-forms');
    changeTitleForm(containerForms);
    changeInputEmailWithLabel(containerForms);
    changeInputEmailPasswordLabel(containerForms);
}

function deleteForm(){
    let containerForms = getContainerForms();
    let lastForm = getLastForm(containerForms);
    if (lastForm.id !== 'form-1'){
        lastForm.remove();
    }
}

function getContainerForms(nameContainer){
    return document.getElementById(nameContainer);
}

function changeTitleForm(containerForms) {
    let nextForm = getNextForm(containerForms);
    let formNumber = getIdForm(containerForms);
    nextForm.id = 'form-' + (formNumber);
    let idLastChild = getIdLastChild(containerForms);
    document.getElementById(idLastChild).after(nextForm);
    nextForm.querySelector('h2').innerHTML = 'Форма ' + (formNumber);
}

function getIdForm(containerForms) {
    let nextForm = getNextForm(containerForms);
    return Number(nextForm.id.split('-').pop()) + 1;
}

function getNextForm(containerForms) {
    let idLastChild = getIdLastChild(containerForms);
    return document.getElementById(idLastChild).cloneNode(true);
}

function getIdLastChild(containerForms) {
    let lastForm = getLastForm(containerForms);
    return lastForm.id;
}

function changeInputEmailWithLabel(containerForms) {
    let lastForm = getLastForm(containerForms);
    let idEmail = lastForm.querySelectorAll('input')[0];
    let formNumber = getIdForm(containerForms);
    idEmail.id = 'inputEmail-' + (formNumber);
    lastForm.querySelectorAll('label')[0].setAttribute('for', 'inputEmail-' + (formNumber));
}

function changeInputEmailPasswordLabel(containerForms) {
    let lastForm = getLastForm(containerForms);
    let idPassword = lastForm.querySelectorAll('input')[1];
    let formNumber = getIdForm(containerForms);
    idPassword.id = 'inputPassword-' + (formNumber);
    lastForm.querySelectorAll('label')[1].setAttribute('for', 'inputPassword-' + (formNumber));
}

function getLastForm(containerForms) {
    return containerForms.lastChild.previousSibling;
}