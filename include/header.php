<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Farmers Survey Portal</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f9fafb;
    }

    /* HEADER */
    .header {
      /* background: linear-gradient(to right, #1e5f3b, #2d8f4f); */
      background: linear-gradient(135deg, #16a085 0%, #2d8f4f 50%, #1e5f3b 100%);
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
       padding: 0.5rem 1rem; /* Reduced from 1rem */
      flex-wrap: wrap;
    }

    .logo {
      width: 60px;
      height: 60px;
    }

    .center-text {
      flex: 1;
      text-align: center;
    }

    .center-text h1 {
    margin: 0;
    font-size: 2.8rem;
    font-weight: 800;
    /* margin-bottom: 0.5rem; */
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    background: linear-gradient(45deg, #ffffff, #e8f5e8, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 200% 200%;
    animation: titleShine 3s ease-in-out infinite;
}

    .center-text p {
    margin-bottom: 0.3rem;
    font-size: 1.6rem;
    font-weight: 600;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
    color: #e8f5e8;
    margin-top: 0.2rem;
    
    }
    .center-text .p1 {
        /* margin-bottom: 0.3rem; */
        font-size: 1.2rem;
        font-weight: 500;
        color: #d4edda;
        letter-spacing: 0.5px;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
    }

    /* NAVBAR */
    .navbar {
      /* background: #014421; */
        /* background: linear-gradient(135deg, #16a085 0%, #56b276 50%, #1e5f3b 100%); */
        background: linear-gradient(135deg, #16a085 0%, #14612f 50%, #1e5f3b 100%);
        backdrop-filter: blur(20px);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
    }

    .nav-container {
  max-width: 1200px;
  margin: auto;
  padding: 0 1rem;
  display: flex;
  justify-content: center; /* Centering navbar items */
  position: relative;
  flex-wrap: wrap;
}

    .nav-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
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
    }

    .nav-menu li {
      position: relative;
    }

    .nav-menu a {
      display: block;
      padding: 1rem;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .nav-menu a:hover {
      background: #02613a;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      /* background-color: #014421; */
      background: linear-gradient(135deg, #16a085 0%, #56b276 50%, #1e5f3b 100%);
      top: 100%;
      top: calc(100% + 4px); 
      left: 0;
      min-width: 190px;
      z-index: 100;
    }

    .dropdown-content a {
      padding: 0.75rem 1rem;
      display: block;
    }

    .nav-menu li:hover .dropdown-content {
      display: block;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
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

      .nav-menu .dropdown-toggle:focus + .dropdown-content {
        display: block;
      }
    }

    .dropdown-content {
  display: none;
}

.dropdown-content.show {
  display: block;
}

    
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <img src="assets/images/Emblem_of_India.svg.png" alt="Left Logo" class="logo"/>
    <div class="center-text">
      <h1>Farmers Survey Portal</h1>
      <p>Collector Office, Yavatmal</p>
      <p class="p1" >Government of Maharashtra</p>
    </div>
    <img src="assets/images/Seal_of_Maharashtra.png" alt="Right Logo" class="logo"/>
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
        <li><a href="#">Home</a></li>
        <li><a href="#">New Survey</a></li>
        <li><a href="#">My Surveys</a></li>
        <li><a href="#">Reports</a></li>
        <li>
          <a href="#" class="dropdown-toggle" onclick="event.preventDefault()">Forms</a>
          <div class="dropdown-content">
            <a href="farmer_survey.php">Farmer Survey</a>
            <a href="family_information.php">Family Information</a>
            <a href="household_facilities.php">Household Facilites</a>
            <a href="social_participation.php">Social Participation</a>
          </div>
        </li>
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
</body>
</html>
