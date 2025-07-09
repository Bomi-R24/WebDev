// Wait until the entire page is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    // Get the <form> element from the page
    const form = document.querySelector("form");

    // Listen for when the user tries to submit the form
    form.addEventListener("submit", function (e) {
        // Get the values the user entered into the form fields
        const name = form.name.value.trim();      // Trim removes extra spaces
        const email = form.email.value.trim();
        const date = form.date?.value;            // Optional: once I add a date field

        // Pattern to check a valid name:
        // - Letters (A-Z or a-z)
        // - Spaces
        // - Hyphens (-)
        // - Apostrophes (')
        const namePattern = /^[A-Za-z\s\-']+$/;

        // Pattern to check a valid email:
        // - Something@something.something (like user@example.com)
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // === Name Validation ===
        if (!namePattern.test(name)) {
            alert("Please enter a valid name (letters, spaces, hyphens only).");
            e.preventDefault(); // Stop the form from submitting
            return;
        }

        // === Email Validation ===
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            e.preventDefault(); // Stop the form from submitting
            return;
        }

        // === Date Validation (once I add a date field) ===
        if (form.date) {
            const selectedDate = new Date(date); // Convert the string to a Date object
            const today = new Date();

            // Remove time (hours/min/sec) from both dates to compare only the date
            selectedDate.setHours(0, 0, 0, 0);
            today.setHours(0, 0, 0, 0);

            if (selectedDate < today) {
                alert("Please select a date that is today or in the future.");
                e.preventDefault(); // Stop the form from submitting
                return;
            }
        }

        // If all checks pass, the form will be submitted
    });
});
