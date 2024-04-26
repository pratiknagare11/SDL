// 1. Alert
document.getElementById("alertOutput").innerHTML =
  "<strong>Alert:</strong> Hello, this is an alert!<br><br>";

// 2. Calculate average number of weeks in human lifetime
document
  .getElementById("weeksForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const averageLifespanYears = parseFloat(
      document.getElementById("lifespanYears").value
    );
    const weeksInYear = parseFloat(
      document.getElementById("weeksPerYear").value
    );
    
    const averageWeeks = averageLifespanYears * weeksInYear;
    document.getElementById(
      "averageWeeksOutput"
    ).innerHTML = `<strong>Average number of weeks in human lifetime:</strong> ${averageWeeks} weeks<br><br>`;
  });

// 3. Create variables to store a string
document
  .getElementById("greetingForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    let greeting = "Hello, ";
    let name = document.getElementById("name").value || "John";
    let message = greeting + name;
    document.getElementById(
      "greetingOutput"
    ).innerHTML = `<strong>Greeting message:</strong> ${message}<br><br>`;
  });

// 4. Program that tells time of the day (morning, afternoon, night)
const date = new Date();
const hour = date.getHours();

let timeOfDay;

if (hour >= 5 && hour < 12) {
  timeOfDay = "morning";
} else if (hour >= 12 && hour < 18) {
  timeOfDay = "afternoon";
} else {
  timeOfDay = "night";
}

document.getElementById(
  "timeOfDayOutput"
).innerHTML = `<strong>Time of the day:</strong> Good ${timeOfDay}, it's ${hour} o'clock!<br><br>`;
