// Var
const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

// Event
myModal.addEventListener("shown.bs.modal", function () {
    myInput.focus();
});
