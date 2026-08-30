document.addEventListener("DOMContentLoaded", () => {

    const passwordInput = document.getElementById("password");
    const passwordToggle = document.getElementById("passwordToggle");

    if (passwordInput && passwordToggle) {

        passwordToggle.addEventListener("click", () => {

            if (passwordInput.type === "password") {

                passwordInput.type = "text";
                passwordToggle.textContent = "Hide";

            } else {

                passwordInput.type = "password";
                passwordToggle.textContent = "Show";

            }

        });

    }

});
