document.addEventListener("DOMContentLoaded", function () {
  // Select the form
  const form = document.getElementById("myForm");

  // Add a listener for the form submission
  form.addEventListener("submit", function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Validate the form using HTML5 Constraint Validation API
    if (form.checkValidity() === false) {
      event.stopPropagation();
    } else {
      const formData = new FormData(form);
      for (const pair of formData.entries()) {
        console.log(`${pair[0]}: ${pair[1]}`);
      }
    }

    // Add Bootstrap's was-validated class to display validation styles
    form.classList.add("was-validated");
  }, false);
});