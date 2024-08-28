const toggleButton1 = document.getElementById("toggleButton1");
const toggleButton = document.getElementById("toggleButton");
const filter = document.getElementById("filter");

// Event listener to open the sidebar
toggleButton1.addEventListener("click", function () {
    filter.classList.remove("hidden"); // Show sidebar
    toggleButton.classList.remove("hidden"); // Show close button
    toggleButton1.classList.add("hidden"); // Hide open button
});

// Event listener to close the sidebar
toggleButton.addEventListener("click", function () {
    filter.classList.add("hidden"); // Hide sidebar
    toggleButton.classList.add("hidden"); // Hide close button
    toggleButton1.classList.remove("hidden"); // Show open button
});
