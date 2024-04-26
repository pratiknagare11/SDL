// Mouse Events
const eventContainer = document.querySelector(".event-container"); // Selecting the container
const mouseButton = document.getElementById("mouseButton");
const mouseOutput = document.getElementById("mouseOutput");

mouseButton.addEventListener("click", function () {
  mouseOutput.textContent = "Button Clicked!";
});

mouseButton.addEventListener("mouseover", function () {
  mouseOutput.textContent = "Mouse Over Button";
  eventContainer.style.backgroundColor = "#e9e9e9"; // Change container color on mouseover
});

mouseButton.addEventListener("mouseout", function () {
  mouseOutput.textContent = "Mouse Out of Button";
  eventContainer.style.backgroundColor = "#fff"; // Reset container color on mouseout
});

// Keyboard Events
const textInput = document.getElementById("textInput");
const keyboardOutput = document.getElementById("keyboardOutput");

textInput.addEventListener("keydown", function (event) {
  keyboardOutput.textContent = `Key Down: ${event.key}`;
});

textInput.addEventListener("keyup", function (event) {
  keyboardOutput.textContent = `Key Up: ${event.key}`;
});

textInput.addEventListener("keypress", function (event) {
  keyboardOutput.textContent = `Key Pressed: ${event.key}`;
});
