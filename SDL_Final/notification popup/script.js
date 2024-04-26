const showNotificationBtn = document.getElementById("showNotification");
const notificationPopup = document.getElementById("notificationPopup");
const closeNotificationBtn = document.getElementById("closeNotification");

showNotificationBtn.addEventListener("click", function () {
  notificationPopup.classList.remove("hidden"); // Remove the 'hidden' class to show the popup
});

closeNotificationBtn.addEventListener("click", function () {
  notificationPopup.classList.add("hidden"); // Add the 'hidden' class to hide the popup
});
