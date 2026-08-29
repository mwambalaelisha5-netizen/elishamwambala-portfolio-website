/* =====================================================
   ELISHA PORTFOLIO - INTERACTIVE JAVASCRIPT
   ===================================================== */

document.addEventListener("DOMContentLoaded", () => {

    /* ==========================================
       ELEMENTS
       ========================================== */

    const body = document.body;

    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    const themeToggle = document.querySelector(".theme-toggle");

    const header = document.querySelector("header");

    const backToTop = document.querySelector(".back-to-top");

    const sections = document.querySelectorAll("section");

    const navItems = document.querySelectorAll(".nav-links a");

    /* ==========================================
       MOBILE MENU
       ========================================== */

    if (menuToggle && navLinks) {

        menuToggle.addEventListener("click", () => {

            navLinks.classList.toggle("active");

            const icon = menuToggle.querySelector("i");

            if (navLinks.classList.contains("active")) {

                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");

            } else {

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            }

        });

        /* Close menu when link is clicked */

        navItems.forEach(link => {

            link.addEventListener("click", () => {

                navLinks.classList.remove("active");

                const icon = menuToggle.querySelector("i");

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            });

        });

    }

    /* ==========================================
       DARK / LIGHT MODE
       ========================================== */

    const savedTheme = localStorage.getItem("portfolio-theme");

    if (savedTheme === "dark") {

        body.classList.add("dark-mode");

    }

    updateThemeIcon();

    if (themeToggle) {

        themeToggle.addEventListener("click", () => {

            body.classList.toggle("dark-mode");

            const theme = body.classList.contains("dark-mode")
                ? "dark"
                : "light";

            localStorage.setItem("portfolio-theme", theme);

            updateThemeIcon();

        });

    }

    function updateThemeIcon() {

        if (!themeToggle) return;

        const icon = themeToggle.querySelector("i");

        if (body.classList.contains("dark-mode")) {

            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");

        } else {

            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");

        }

    }

    /* ==========================================
       NAVBAR ON SCROLL
       ========================================== */

    window.addEventListener("scroll", () => {

        if (header) {

            if (window.scrollY > 50) {

                header.classList.add("scrolled");

            } else {

                header.classList.remove("scrolled");

            }

        }

        /* Back to top */

        if (backToTop) {

            if (window.scrollY > 500) {

                backToTop.classList.add("show");

            } else {

                backToTop.classList.remove("show");

            }

        }

        updateActiveNavigation();

    });

    /* ==========================================
       ACTIVE NAVIGATION
       ========================================== */

    function updateActiveNavigation() {

        let currentSection = "";

        sections.forEach(section => {

            const sectionTop = section.offsetTop - 150;

            const sectionHeight = section.offsetHeight;

            if (
                window.scrollY >= sectionTop &&
                window.scrollY < sectionTop + sectionHeight
            ) {

                currentSection = section.getAttribute("id");

            }

        });

        navItems.forEach(link => {

            link.classList.remove("active");

            const href = link.getAttribute("href");

            if (href === `#${currentSection}`) {

                link.classList.add("active");

            }

        });

    }

    /* ==========================================
       BACK TO TOP
       ========================================== */

    if (backToTop) {

        backToTop.addEventListener("click", () => {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        });

    }

    /* ==========================================
       SCROLL REVEAL
       ========================================== */

    const revealElements = document.querySelectorAll(
        ".about, .skill-card, .project-card, .service-card, .contact-container"
    );

    revealElements.forEach(element => {

        element.classList.add("reveal");

    });

    const revealObserver = new IntersectionObserver(
        entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add("active");

                    revealObserver.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.15
        }
    );

    revealElements.forEach(element => {

        revealObserver.observe(element);

    });

    /* ==========================================
       SKILL BAR ANIMATION
       ========================================== */

    const skillSection = document.querySelector("#skills");

    const skillLevels = document.querySelectorAll(".skill-level");

    let skillsAnimated = false;

    if (skillSection) {

        const skillObserver = new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (
                        entry.isIntersecting &&
                        !skillsAnimated
                    ) {

                        skillsAnimated = true;

                        skillLevels.forEach(level => {

                            const width =
                                level.getAttribute("style");

                            if (width) {

                                level.style.width = "0";

                                setTimeout(() => {

                                    level.style.width =
                                        width.match(/\d+/)[0] + "%";

                                }, 200);

                            }

                        });

                    }

                });

            },
            {
                threshold: 0.25
            }
        );

        skillObserver.observe(skillSection);

    }

    /* ==========================================
       TYPED.JS
       ========================================== */

    if (
        typeof Typed !== "undefined" &&
        document.querySelector("#typing")
    ) {

        new Typed("#typing", {

            strings: [
                "ICT Student",
                "Web Developer",
                "PHP Programmer",
                "Database Administrator",
                "Network Technician",
                
            ],

            typeSpeed: 70,

            backSpeed: 45,

            backDelay: 1200,

            loop: true

        });

    }

});