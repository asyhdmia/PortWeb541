<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "PortWeb24";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert form data into the database
  $sql = "INSERT INTO form_data (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql) === TRUE) {
    // Successful insertion
    echo "Thank you for your message!";
  } else {
    // Error handling
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8" />
<meta http-equiv = "X-UA-Compatible" content = "IE = edge" />
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
<link href = "https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel = "stylesheet" />
<link rel = "stylesheet" href = "css/style.css" />
<title>About Me | Portfolio Website</title>
</head>
<body>
<nav>
<div class = "nav_content">
<div class = "logo"><a href = "#home">Damia</a></div>
<label for = "check" class = "checkbox">
<i class = "ri-menu-line"></i>
</label>
<input type = "checkbox" name = "check" id = "check">
<ul>
<li><a href = "#home">Home</a></li>
<li><a href = "#about">About</a></li>
<li><a href = "#hobbies">Hobbies</a></li>
<li><a href = "#form">Form</a></li>
<li><a href = "#contact">Contact</a></li>
<li><a href = "#photo-gallery">Photo Gallery</a></li>
</ul>
</div>
</nav>
<section class="section" id="home">
        <div class="section_container">
            <div class="content">
                <p class="subtitle">HELLO</p>
                <h1 class="title">
                    I'm <span>Damia<br />a</span> Computer Science Student
                </h1>
                <p class="description">
                    Welcome to my website! I'm Damia, a computer science student who is currently pursuing a degree in multimedia.
                </p>
                <div class="action_btns">
                    <a href="#about" class="about_me">More About Me</a>
                </div>
            </div>
            <div class="image">
                <img src="images/3.jpg" alt="profile">
            </div>
        </div>
    </section>

    <section class="section" id="about">
    <div class="section_container">
        <div class="about-content">
		<p class="subtitle">ABOUT</p>
            <h1 class="title">About Me</h1>
            <div class="about-info">
                </div>
                <div class="about-text">
                    <p>Hi, my name is Nur Aisyah Damia and you can call me Aisyah or Damia. I'm 22 years old this year and i was born on the 3rd of July 2002.</p>
					</div></div>
                </div>
            </div>
        </div>
    </div>
	</div>
</section>

<section class="section" id="hobbies">
    <div class="section_container">
        <div class="hobbies-content">
		<p class="subtitle">HOBBIES</p>
            <h1 class="title">My Hobbies</h1>
            <div class="hobbies-list">
                <div class="hobby-item">
                    <i class="ri-book-open-line"></i>
                    <h3>Reading</h3>
					<p>Reading helps me to relieve my stress, and i especially like to read books that have character development.</p>
                </div>
                <div class="hobby-item">
                    <i class="ri-gamepad-line"></i>
                    <h3>Playing Games</h3>
					<p>My current favourite games to play are Lethal Company and Honkai Star Rail.</p>
                </div>
                <div class="hobby-item">
                    <i class="ri-movie-2-line"></i>
                    <h3>Watching Anime</h3>
                    <p>I like to watch Slice of Life and Sports Anime.</p>
            </div>
        </div>
    </div>
	</div>
</section>

<form class="contact-form" action="submit-form.php" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea id="message" name="message" rows="3" required></textarea>
  </div>
  <button type="submit" class="submit-btn">Send Message</button>
</form>

<section class="section" id="contact">
    <div class="section_container">
        <div class="contact-content">
		<p class="subtitle">CONTACT</p>
            <h1 class="title">My Contacts</h1>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="ri-map-pin-line"></i>
                    <div class="contact-details">
                        <h3>Address</h3>
                        <p>Alam Impian, Shah Alam</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="ri-phone-line"></i>
                    <div class="contact-details">
                        <h3>Phone</h3>
                        <p>+60 (11) 3907-0245</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="ri-mail-line"></i>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <p>2023423544@student.uitm.edu.my</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="photo-gallery">
    <div class="section_container">
        <div class="gallery-content">
		<p class="subtitle">PHOTO GALLERY</p>
            <h1 class="title">My Gallery</h1>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/2.jpg" alt="My Favourite Fruit" width="200">
	
	<script>
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    };
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link behavior
            const targetId = e.target.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            // Calculate the offset position (e.g., height of the fixed nav)
            const offset = 70; // Adjust based on your fixed header's height
            const sectionTop = targetSection.getBoundingClientRect().top + window.pageYOffset - offset;

            // Scroll to the offset position
            window.scrollTo({
                top: sectionTop,
                behavior: 'smooth'
            });
        });
    });

    // Additional code to handle smooth scrolling for the "More About Me" link
    document.querySelector('.about_me').addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        const offset = 70; // Adjust based on your fixed header's height
        const sectionTop = targetSection.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
            top: sectionTop,
            behavior: 'smooth'
        });
    });
</script>
</body>
</html>