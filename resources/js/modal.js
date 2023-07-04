// Var
const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

// Event
if (myModal) {
    myModal.addEventListener("shown.bs.modal", function () {
        myInput.focus();
    });
}
