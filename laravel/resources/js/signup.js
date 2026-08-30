/* =========================================================
   AI INTERVIEW ANALYZER
   SIGN UP PAGE JAVASCRIPT
   ========================================================= */

const signupForm =
    document.getElementById("signupForm");


/* ================= PASSWORD TOGGLE ================= */

const passwordToggleButtons =
    document.querySelectorAll(".password-toggle");


passwordToggleButtons.forEach((button) => {

    button.addEventListener("click", () => {

        const targetId =
            button.getAttribute("data-target");

        const input =
            document.getElementById(targetId);


        if (input.type === "password") {

            input.type = "text";

            button.textContent = "Hide";

            button.setAttribute(
                "aria-label",
                "Hide password"
            );

        } else {

            input.type = "password";

            button.textContent = "Show";

            button.setAttribute(
                "aria-label",
                "Show password"
            );

        }

    });

});


/* ================= VALIDATION ================= */

if (signupForm) {

    signupForm.addEventListener("submit", (event) => {

        let isValid = true;


        /* Get fields */

        const name =
            document.getElementById("name");

        const email =
            document.getElementById("email");

        const phone =
            document.getElementById("phone");

        const password =
            document.getElementById("password");

        const confirmPassword =
            document.getElementById(
                "password_confirmation"
            );

        const terms =
            document.getElementById("terms");


        /* Error elements */

        const nameError =
            document.getElementById("nameError");

        const emailError =
            document.getElementById("emailError");

        const phoneError =
            document.getElementById("phoneError");

        const passwordError =
            document.getElementById("passwordError");

        const confirmPasswordError =
            document.getElementById(
                "confirmPasswordError"
            );

        const termsError =
            document.getElementById("termsError");


        /* Clear previous errors */

        document
            .querySelectorAll(".error-message")
            .forEach((error) => {

                error.textContent = "";

            });


        document
            .querySelectorAll(".input-error")
            .forEach((input) => {

                input.classList.remove(
                    "input-error"
                );

            });


        /* ================= NAME ================= */

        if (name.value.trim() === "") {

            nameError.textContent =
                "Name is required.";

            name.classList.add("input-error");

            isValid = false;

        }


        /* ================= EMAIL ================= */

        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


        if (email.value.trim() === "") {

            emailError.textContent =
                "Email is required.";

            email.classList.add("input-error");

            isValid = false;

        } else if (
            !emailPattern.test(
                email.value.trim()
            )
        ) {

            emailError.textContent =
                "Please enter a valid email address.";

            email.classList.add("input-error");

            isValid = false;

        }


        /* ================= PHONE ================= */

        const phonePattern =
            /^[0-9]{10}$/;


        if (phone.value.trim() === "") {

            phoneError.textContent =
                "Phone number is required.";

            phone.classList.add("input-error");

            isValid = false;

        } else if (
            !phonePattern.test(
                phone.value.trim()
            )
        ) {

            phoneError.textContent =
                "Enter a valid 10-digit phone number.";

            phone.classList.add("input-error");

            isValid = false;

        }


        /* ================= PASSWORD ================= */

        if (password.value === "") {

            passwordError.textContent =
                "Password is required.";

            password.classList.add("input-error");

            isValid = false;

        } else if (password.value.length < 8) {

            passwordError.textContent =
                "Password must contain at least 8 characters.";

            password.classList.add("input-error");

            isValid = false;

        }


        /* ================= CONFIRM PASSWORD ================= */

        if (confirmPassword.value === "") {

            confirmPasswordError.textContent =
                "Please confirm your password.";

            confirmPassword.classList.add(
                "input-error"
            );

            isValid = false;

        } else if (
            password.value !==
            confirmPassword.value
        ) {

            confirmPasswordError.textContent =
                "Passwords do not match.";

            confirmPassword.classList.add(
                "input-error"
            );

            isValid = false;

        }


        /* ================= TERMS ================= */

        if (!terms.checked) {

            termsError.textContent =
                "You must accept the Terms & Conditions.";

            isValid = false;

        }


        /* ================= STOP SUBMISSION ================= */

        if (!isValid) {

            event.preventDefault();

        }

    });

}
