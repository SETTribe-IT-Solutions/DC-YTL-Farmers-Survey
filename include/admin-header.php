<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farmers Survey Portal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f9fafb;
        }

        /* HEADER */
        .header {
            background: linear-gradient(135deg, #16a085 0%, #2d8f4f 50%, #1e5f3b 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.3rem 1rem;
            flex-wrap: nowrap;
            gap: 10px;
        }

        .logo {
            width: 70px;
            height: 70px;
            flex-shrink: 0;
        }

        .center-text {
            text-align: center;
            flex: 1;
            min-width: 0;
        }

        .center-text h1 {
            margin: 0;
            font-size: 1.6rem;
            font-weight: 800;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            background: linear-gradient(45deg, #ffffff, #e8f5e8, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: titleShine 3s ease-in-out infinite;
        }

        .center-text p {
            margin: 0.1rem 0 0;
            font-size: 1rem;
            font-weight: 600;
            color: #e8f5e8;
        }

        .center-text .p1 {
            font-size: 0.9rem;
            font-weight: 500;
            color: #d4edda;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(135deg, #16a085 0%, #14612f 50%, #1e5f3b 100%);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            /* margin: auto; */
            padding: 0 1rem;
            /* display: flex; */
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
        }

        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            margin-left: auto;
        }

        .nav-toggle span {
            height: 3px;
            background: white;
            margin: 4px 0;
            width: 25px;
            border-radius: 2px;
        }

        .nav-menu {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
        }

        .nav-menu li {
            position: relative;
        }

        .nav-menu a {
            display: block;
            padding: 0.8rem 1rem;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-menu a:hover,
        .nav-menu a:focus,
        .nav-menu a.active {
            background-color: yellow;
            color: black;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: linear-gradient(135deg, #16a085 0%, #56b276 50%, #1e5f3b 100%);
            top: calc(100% + 4px);
            left: 0;
            min-width: 260px;
            z-index: 1000;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .dropdown-content a {
            padding: 0.75rem 1rem;
            display: block;
        }

        /* MOBILE RESPONSIVENESS */
        @media (max-width: 768px) {
            .header {
                flex-direction: row;
                justify-content: space-between;
                padding: 0.5rem;
            }

            .logo {
                width: 40px;
                height: 40px;
            }

            .center-text h1 {
                font-size: 1.1rem;
            }

            .center-text p {
                font-size: 0.9rem;
            }

            .center-text .p1 {
                font-size: 0.75rem;
            }

            .nav-toggle {
                display: flex;
            }

            .nav-menu {
                width: 100%;
                flex-direction: column;
                display: none;
            }

            .nav-menu.active {
                display: flex;
            }

            .dropdown-content {
                position: static;
            }

            .nav-menu li:hover .dropdown-content {
                display: none;
            }

            .nav-menu .dropdown-toggle:focus+.dropdown-content,
            .nav-menu .dropdown-content.show {
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <img src="assets/images/Emblem_of_India.svg.png" alt="Left Logo" class="logo" />
        <div class="center-text">
            <h1>Farmers Survey Portal</h1>
            <p>Collector Office, Yavatmal</p>
            <p class="p1">Government of Maharashtra</p>
        </div>
        <img src="assets/images/Seal_of_Maharashtra.png" alt="Right Logo" class="logo" />
    </header>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-toggle" onclick="document.getElementById('navMenu').classList.toggle('active')">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="admin/index.php">Home</a></li>
                <li><a href="admin/question-wise-report.php">Question wise report</a></li>

                <!-- <li><a href="#">Reports</a></li> -->
                <li>
                    <a href="#" class="dropdown-toggle" onclick="event.preventDefault()">Forms</a>
                    <div class="dropdown-content">
                        <a href="farmer_survey.php">प्राथमिक माहीती</a>
                        <a href="family_information.php">शेतकरी कुटुंबातील सदस्‍य</a>
                        <a href="household_facilities.php">इतर कुटुंबिक माहिती</a>
                        <a href="social_participation.php">सामाजिक सहभाग विषयक माहीती</a>

                        <a href="Welfare_Scheme_Benefit_Information.php">कल्‍याणकारी योजनेचा लाभ विषयक माहीती</a>
                        <a href="Health_Nutrition_and_Related_Information.php">आरोग्‍य पोषण व शिक्षण विषयक माहीती</a>
                        <a href="Current_Loan_related _nformation.php">सद्यस्‍थीतीतील कर्ज विषयक माहीती</a>
                        <a href="Agricultural_land_information.php">शेतजमीन विषयक माहीती</a>

                        <a href="#">मागील एक वर्षातील पिक व उत्‍पादन</a>
                        <a href="krushi_yojana.php">कृषी योजना विषयक</a>
                        <a href="pashudhana_babi.php">पशुधन विषयक बाबी</a>

                        <a href="migration_survey_form.php">स्‍थलांतर विषयक बाबी</a>

                        <a href="natural_calamity_impact_form.php">नैसर्गिक आपत्‍ती विषयक बाबी</a>
                        <a href="#">उत्‍पन्‍नाचे स्‍त्रोत (वार्षिक )</a>

                    </div>
                </li>

                <li><a href="admin_logout.php">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <script>
        // Dropdown open on click for mobile
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                const content = this.nextElementSibling;
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
        });
    </script>
    <script>
        // Toggle nav menu on mobile
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                const content = this.nextElementSibling;
                content.classList.toggle('show');
            });
        });
    </script>

</body>

</html>