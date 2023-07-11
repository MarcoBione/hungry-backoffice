import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// delete modal
const deleteSubmitButtons = document.querySelectorAll('.delete-button');

deleteSubmitButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const dataTitle = button.getAttribute('data-item-title');

        const modal = document.getElementById('deleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalItemTitle = modal.querySelector('#modal-item-title');
        modalItemTitle.textContent = dataTitle;

        const buttonDelete = modal.querySelector('button.btn-primary');

        buttonDelete.addEventListener('click', () => {
            button.parentElement.submit();
        });
    });
});

// image preview
const previewImage = document.getElementById('image');
if(previewImage){
    previewImage.addEventListener('change', (event) => {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(previewImage.files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    });
}
//Confirm Password
function confirmPsw(){
    //prendo le password
    const password = document.getElementById("password").value;
    const passwordConfirm = document.getElementById("password-confirm");
    //le confronto
    if(password === passwordConfirm.value){
        passwordConfirm.setCustomValidity("");
    }else{
        passwordConfirm.setCustomValidity("Per favore, inserisci la stessa password del campo precedente");
    }
}
//se sono uguali allora aggiungo la classe... valido?? invalid event?
//Form Validation
// Fetch all the forms we want to apply custom Bootstrap validation styles to
const forms = document.querySelectorAll('.needs-validation');
Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
          confirmPsw();
        // console.log(confirmPsw);
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

        // form.classList.remove('needs-validation');
        form.classList.add('was-validated');
    }, false)
  })

