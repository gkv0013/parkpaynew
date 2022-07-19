let dateInput = document.getElementById("dateInput");
let timeInput = document.getElementById("timeInput");
let output = document.getElementById("output");

const checker = () => {
  output.innerText = dateInput.value + "T" + timeInput.value + ":00";
};
