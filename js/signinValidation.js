// Wait until the HTML content is completely loaded before running the script
document.addEventListener("DOMContentLoaded", function () {
    // Select the sign in form element from the page
    const form = document.querySelector("form");

    // Add a function that runs when the form is submitted
    form.addEventListener("submit", function (e) {
        // Get the input values from the form and remove extra spaces
        const username = form.username.value.trim();
        const password = form.password.value.trim();

        // === Name Validation ===
        // Only allow letters, spaces, hyphens, and apostrophes
        const namePattern = /^[A-Za-z\s\-']+$/;

        if (!namePattern.test(username)) {
            alert("Please enter a valid name (letters, spaces, hyphens, or apostrophes only).");
            e.preventDefault(); // Prevent the form from being submitted
            return;
        }

        // === Password Validation ===
        // Check that the password is not too short
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            e.preventDefault();
            return;
        }

        // All checks passed, allow form submission
    });
});
