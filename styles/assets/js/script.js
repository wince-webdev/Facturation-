let delbtn = document.querySelectorAll('.deletebtn');

delbtn.forEach((el, index) => {
    el.addEventListener("click", function (event) {
        if (confirm("Confirmer la suppression") == false) {
            event.preventDefault();
        }
    });
});

let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});
