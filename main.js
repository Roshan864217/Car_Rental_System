function rentCar(carName) {
  alert("You have selected to rent: " + carName);
}
document.addEventListener("DOMContentLoaded", function () {
  let confirmButtons = document.querySelectorAll(".confirm-booking");

  confirmButtons.forEach(button => {
      button.addEventListener("click", function () {
          alert("Your booking has been confirmed! Thank you for choosing our service.");
          window.location.href = "confirmation.html"; // Redirect to confirmation page
      });
  });
});
