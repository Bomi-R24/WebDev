document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const messageBox = document.getElementById("message-box");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Stop default form submission

        // Get the input values
        const username = form.username.value.trim();
        const password = form.password.value.trim();

        // Clear previous messages
        messageBox.textContent = "";
        messageBox.style.color = "red";

        // === Name Validation ===
        const namePattern = /^[A-Za-z\s\-']+$/;
        if (!namePattern.test(username)) {
            messageBox.textContent = "Please enter a valid name (letters, spaces, hyphens, or apostrophes only).";
            return;
        }

        // === Password Validation ===
        if (password.length < 6) {
            messageBox.textContent = "Password must be at least 6 characters long.";
            return;
        }

        // === If validation passed, send request to server ===
        fetch("../php/signin_process.php", {
            method: "POST",
            body: new FormData(form),
        })
        .then(response => response.text().then(text => ({ status: response.status, text })))
        .then(({ status, text }) => {
            if (status === 200 && text === "success") {
                window.location.href = "dashboard.php"; // Redirect to dashboard on success
            } else {
                messageBox.textContent = text || "An error occurred during sign in.";
            }
        })
        .catch(error => {
            messageBox.textContent = "Network error: " + error.message;
        });
    });
});
