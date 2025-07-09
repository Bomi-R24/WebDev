// Wait until the page content is fully loaded before running this script
document.addEventListener("DOMContentLoaded", function () {
    // Get the sign up form
    const form = document.querySelector("form");

    // Add an event listener when the user submits the form
    form.addEventListener("submit", function (e) {
        // Get the values entered by the user, and remove any extra spaces
        const username = form.username.value.trim();
        const email = form.email.value.trim();
        const password = form.password.value.trim();

        // === Name Validation ===
        // Only allows letters, spaces, hyphens, and apostrophes
        const namePattern = /^[A-Za-z\s\-']+$/;

        if (!namePattern.test(username)) {
            alert("Please enter a valid name (letters, spaces, and hyphens only).");
            e.preventDefault(); // Prevent form submission
            return;
        }

        // === Email Validation ===
        // Basic pattern for email structure: text@text.text
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            e.preventDefault();
            return;
        }

        // === Password Validation ===
        // You can customize this based on rules (e.g. min 6 characters)
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            e.preventDefault();
            return;
        }

        // All validations passed — form will be submitted
    });
});
