<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Survey Portal - Government of Maharashtra</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
        } */

        .header {
            background: linear-gradient(135deg, #16a085 0%, #2d8f4f 50%, #1e5f3b 100%);
            color: white;
            padding: 0rem 1rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
        }

        /* Animated background effect */
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 70%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: backgroundFloat 8s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes backgroundFloat {

            0%,
            100% {
                transform: rotate(0deg) scale(1);
            }

            50% {
                transform: rotate(180deg) scale(1.1);
            }
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .logo-left,
        .logo-right {
            flex: 0 0 auto;
            animation: logoSlideIn 1s ease-out;
        }

        .logo-left {
            animation-delay: 0.2s;
        }

        .logo-right {
            animation-delay: 0.4s;
        }

        @keyframes logoSlideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .logo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(45, 143, 79, 0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .logo:hover::before {
            transform: translateX(100%);
        }

        .logo:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .logo svg {
            width: 55px;
            height: 55px;
            transition: transform 0.4s ease;
        }

        .logo:hover svg {
            transform: scale(1.1) rotate(-5deg);
        }

        .title-section {
            flex: 1;
            text-align: center;
            padding: 0 2rem;
            animation: titleFadeIn 1.2s ease-out 0.6s both;
        }

        @keyframes titleFadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .main-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #ffffff, #e8f5e8, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: titleShine 3s ease-in-out infinite;
        }

        @keyframes titleShine {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .subtitle-hindi {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
            color: #e8f5e8;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
            animation: subtitlePulse 2s ease-in-out infinite;
        }

        @keyframes subtitlePulse {

            0%,
            100% {
                opacity: 0.9;
            }

            50% {
                opacity: 1;
            }
        }

        .subtitle-english {
            font-size: 1.2rem;
            font-weight: 500;
            color: #d4edda;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }

        /* Floating particles */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: particleFloat 6s infinite ease-in-out;
        }

        @keyframes particleFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        /* Navbar */
        .navbar {
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;

            /* overflow: hidden; */

            overflow: hidden;

        }

        .navbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: navShimmer 4s infinite;
        }

        @keyframes navShimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            position: relative;
            z-index: 2;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            display: block;
            padding: 1rem 1.5rem;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
            transition: width 0.3s ease;
            z-index: -1;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #ffd700, #ffed4a);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .nav-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: #ffd700;
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: white;
            cursor: pointer;
            padding: 0.6rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            /* position: absolute; */
            top: 1rem;
            right: 1rem;
            z-index: 1000;
        }

        .mobile-menu-toggle:hover {
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
            transform: scale(1.05);
        }

        .hamburger {
            display: block;
            width: 22px;
            height: 3px;
            background: white;
            margin: 4px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .mobile-menu-toggle.active .hamburger:nth-child(1) {
            transform: rotate(-45deg) translate(-4px, 5px);
        }

        .mobile-menu-toggle.active .hamburger:nth-child(2) {
            opacity: 0;
        }

        .mobile-menu-toggle.active .hamburger:nth-child(3) {
            transform: rotate(45deg) translate(-4px, -5px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 1.5rem 1rem;
            }

            .header-container {
                flex-direction: column;
                gap: 1.5rem;
            }

            .logo-left,
            .logo-right {
                order: 1;
            }

            .title-section {
                order: 2;
                padding: 0;
            }

            .logo {
                width: 65px;
                height: 65px;
            }

            .logo svg {
                width: 45px;
                height: 45px;
            }

            .main-title {
                font-size: 2rem;
            }

            .subtitle-hindi {
                font-size: 1.3rem;
            }

            .subtitle-english {
                font-size: 1rem;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(45, 143, 79, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                gap: 0;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
                animation: mobileSlide 0.3s ease-out;
            }

            @keyframes mobileSlide {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-link {
                width: 100%;
                text-align: center;
                padding: 1rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 0;
            }

            .nav-container {
                padding: 0;
            }
        }

        @media (max-width: 480px) {
            .main-title {
                font-size: 1.6rem;
            }

            .subtitle-hindi {
                font-size: 1.1rem;
            }

            .subtitle-english {
                font-size: 0.9rem;
            }

            .logo {
                width: 55px;
                height: 55px;
            }

            .logo svg {
                width: 38px;
                height: 38px;
            }

            .header-container {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .title-section {
                order: 0;
                flex: 1;
                padding: 0 1rem;
            }

            .logo-left {
                order: -1;
            }

            .logo-right {
                order: 1;
            }
        }

        /* Demo content */
        .content-section {
            background: white;
            margin: 2rem auto;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            animation: contentFadeIn 1s ease-out 1s both;
        }

        @keyframes contentFadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .text-center {
            text-align: center;
        }

        h2 {
            color: #2d3748;
            margin-bottom: 1rem;
            font-size: 2rem;
            font-weight: 700;
        }

        p {
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 1rem;
        }


        /* Dropdown */
        .dropdown-menu {
            /* display: none; */
            position: relative;
            background-color: #014421;
            top: 38px;
            left: 0;
            min-width: 180px;
            z-index: 100;
        }

        .dropdown-menu li {
            border-bottom: 1px solid #0a5a30;
        }

        .dropdown-item {
            padding: 10px 15px;
            display: block;
            color: white;
            text-decoration: none;
        }

        .dropdown-item:hover {
            background-color: #02613a;
        }
    </style>
</head>

<body>
    <header class="header">
        <!-- Floating particles -->
        <div class="particle" style="top: 10%; left: 15%; animation-delay: 0s;"></div>
        <div class="particle" style="top: 30%; right: 20%; animation-delay: 1s;"></div>
        <div class="particle" style="bottom: 40%; left: 10%; animation-delay: 2s;"></div>
        <div class="particle" style="bottom: 20%; right: 15%; animation-delay: 3s;"></div>
        <div class="particle" style="top: 50%; left: 50%; animation-delay: 4s;"></div>

        <div class="header-container">
            <!-- Left Logo -->
            <div class="logo-left">
                <div class="logo">
                    <img src="assets/images/Emblem_of_India.png" alt="Emblem of India" />
                </div>
            </div>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/512px-Emblem_of_India.svg.png"
                alt="Emblem of India" />
        </div>
        </div>


        <!-- Title Section -->
        <div class="title-section">
            <h1 class="main-title">Farmers Survey Portal</h1>
            <p class="subtitle-hindi">Collector Office, Yavatmal</p>
            <p class="subtitle-english">Government of Maharashtra</p>

            <!--end::Logo and search-->
            <!--begin::Navbar-->
            <div class="app-navbar">
                <!--begin::User menu-->
                <div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img class="symbol symbol-35px" src="assets/media/avatars/300-3.jpg" alt="user" />
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">Surveryor
                                    </div>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <!-- <div class="menu-item px-5">
                            <a href="../dist/account/overview.html" class="menu-link px-5">My Profile</a>
                        </div> -->
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">My Statements</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">Mode
                                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                        <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                        <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span></span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                        data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-night-day fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-moon fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                        data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-screen fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="logout.php" class="menu-link px-5">Sign
                                Out</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-flex btn-center btn-success btn-sm align-self-center p-3 px-lg-4 h-35px"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                    <i class="ki-duotone ki-plus-square fs-2 p-0 m-0">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <span class="ms-2 d-none d-lg-block">Invite</span>
                </a>
                <!--end::Primary button-->
                <!--begin::Header menu toggle-->
                <!--end::Header menu toggle-->

            </div>

            <!-- Right Logo -->
            <div class="logo-right">
                <div class="logo">
                    <img src="assets/images/Seal_of_Maharashtra.png" alt="Maharashtra Government Logo" />
                    <img src="assets/media/logos/Seal_of_Maharashtra.png" alt="Maharashtra Government Logo" />
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar">
            <div class="nav-container">
                <button class="mobile-menu-toggle" onclick="toggleMobileMenu(event)">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </button>

                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">New Survey</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">My Surveys</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Reports</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="toggleDropdown(event)">Forms ▾</a>
                        <ul class="dropdown-menu" id="formsDropdown">
                            <li><a href="form1.php" class="dropdown-item">Social Participation</a></li>
                            <li><a href="form2.php" class="dropdown-item">Widow Support</a></li>
                            <li><a href="form3.php" class="dropdown-item">Suicide Family Form</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Guidelines</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <script>
        // Mobile menu toggle
        function toggleMobileMenu(event) {
            event.stopPropagation();  // ✅ Prevents propagation to document click handler
            const navMenu = document.getElementById('navMenu');
            const toggle = document.querySelector('.mobile-menu-toggle');

            navMenu.classList.toggle('active');
            toggle.classList.toggle('active');
        }


        // Close mobile menu when clicking on a nav link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const navMenu = document.getElementById('navMenu');
                const toggle = document.querySelector('.mobile-menu-toggle');
                navMenu.classList.remove('active');
                toggle.classList.remove('active');
            });
        });


        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            const navMenu = document.getElementById('navMenu');
            const toggle = document.querySelector('.mobile-menu-toggle');

            if (!toggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('active');
                toggle.classList.remove('active');
            }
        });

        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    <script>
        function toggleMenu() {
            const nav = document.getElementById("navMenu");
            nav.classList.toggle("active");
        }

        function toggleDropdown(event) {
            event.preventDefault();
            event.stopPropagation();
            const dropdown = document.getElementById("formsDropdown");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }

        // Close dropdown on outside click
        document.addEventListener("click", function () {
            const dropdown = document.getElementById("formsDropdown");
            if (dropdown) dropdown.style.display = "none";
        });
    </script>


</body>

</html>