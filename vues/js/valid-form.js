function checkValidity() {
    if (this.validity.valid === false) {
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
    } else if (this.value.length !== 0) {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
    } else {
        this.classList.remove('is-invalid');
        this.classList.remove('is-valid');
    }
}
window.addEventListener('load', function () {
    // tabEvents est une collection d'évenements
    let tabEvents = ['keyup', 'change', 'click'];

    // tabInputs est une collection de <input>
    let tabInputs = window.document.querySelectorAll('.form-control');

    // Parcours de tabInputs en s'appuyant sur le nombre de <input> et sur tabEvents
    for (let i = 0; i < tabInputs.length; i++) {
        for (let j = 0; j < tabEvents.length; j++) {
            // Ajout d'un Listener sur tous les <input> sur les évènements listés dans tabEvents
            tabInputs[i].addEventListener(tabEvents[j], checkValidity);
        }
    }
});