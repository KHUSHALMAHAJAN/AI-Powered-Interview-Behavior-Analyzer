
/* =========================================================
   AI INTERVIEW ANALYZER
   THEME + MOBILE MENU
   ========================================================= */


/* ================= THEME ================= */

const themeToggle = document.getElementById("themeToggle");


// Check previously selected theme

const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {

    document.body.classList.add("dark");

}


// Toggle theme

if (themeToggle) {

    themeToggle.addEventListener("click", () => {

        document.body.classList.toggle("dark");


        // Save preference

        if (document.body.classList.contains("dark")) {

            localStorage.setItem("theme", "dark");

        } else {

            localStorage.setItem("theme", "light");

        }

    });

}


/* ================= MOBILE MENU ================= */

const mobileMenuBtn =
    document.getElementById("mobileMenuBtn");

const mobileMenu =
    document.getElementById("mobileMenu");


if (mobileMenuBtn && mobileMenu) {

    mobileMenuBtn.addEventListener("click", () => {

        mobileMenu.classList.toggle("show");

    });


    // Close menu after clicking a link

    const mobileLinks =
        mobileMenu.querySelectorAll("a");

    mobileLinks.forEach((link) => {

        link.addEventListener("click", () => {

            mobileMenu.classList.remove("show");

        });

    });

}
