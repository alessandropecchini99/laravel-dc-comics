// Var
const myModal = document.querySelectorAll(".myModal");
const myForm = document.getElementById("myForm");
const oldAction = myForm.action;

// Event
myModal.forEach((button) => {
    button.addEventListener("click", function () {
        myForm.action = oldAction;

        console.log(oldAction);

        const id = button.getAttribute("data-id");

        console.log(id);

        const newAction = myForm.action.replace("***", id);

        myForm.action = newAction;
    });
});
