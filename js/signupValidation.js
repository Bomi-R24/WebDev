document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    // Create a placeholder for success/error messages
    const messageBox = document.createElement("div");
    messageBox.id = "form-message";
    messageBox.style.marginTop = "10px";
    form.appendChild(messageBox);

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Always prevent default form submission

        const username = form.username.value.trim();
        const email = form.email.value.trim();
        const password = form.password.value.trim();

        // === Name Validation ===
        const namePattern = /^[A-Za-z\s\-']+$/;
        if (!namePattern.test(username)) {
            messageBox.textContent = "Please enter a valid name (letters, spaces, and hyphens only).";
            messageBox.style.color = "red";
            return;
        }

        // === Email Validation ===
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            messageBox.textContent = "Please enter a valid email address.";
            messageBox.style.color = "red";
            return;
        }

        // === Password Validation ===
        if (password.length < 6) {
            messageBox.textContent = "Password must be at least 6 characters long.";
            messageBox.style.color = "red";
            return;
        }

        // === Send the data to PHP using fetch() ===
        fetch("../php/signup_process.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `username=${encodeURIComponent(username)}&email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
        })
        .then(response => response.text())
        .then(data => {
            messageBox.textContent = data;
            messageBox.style.color = data.includes("successfully") ? "green" : "red";
            if (data.includes("successfully")) {
                form.reset(); // Clear form on success
            }
        })
        .catch(error => {
            console.error("Error:", error);
            messageBox.textContent = "An unexpected error occurred. Please try again.";
            messageBox.style.color = "red";
        });
    });
});
