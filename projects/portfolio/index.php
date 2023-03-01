<!DOCTYPE html>
<html>
<head>
	<title>Developer Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
  <nav>
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>


	<section id="hero">
		<div class="hero-content">
			<h1>John Doe</h1>
			<p>Web Developer</p>
			<a href="#projects" class="cta-btn">View My Work</a>
		</div>
	</section>
    <section class="photos">
  <h2>My Work</h2>
  <div class="photo-grid">
    <img src="images/1.jpg" alt="Landscape 1">
    <img src="images/2.png" alt="Landscape 2">
    <img src="images/3.png" alt="Landscape 3">
  </div>
</section>


	<section id="about">
  <div class="container">
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor euismod ligula, vel feugiat justo ullamcorper at. Phasellus id nunc tincidunt, faucibus mauris vel, rhoncus libero.</p>
    <p>Phasellus quis sollicitudin lorem. Sed hendrerit velit risus, sit amet blandit magna hendrerit eu. Etiam tincidunt interdum dui, eget fermentum velit ullamcorper eget.</p>
  </div>
</section>

<section id="skills">
  <div class="container">
    <h2>Skills</h2>
    <ul>
      <li>React</li>
      <li>Nodejs</li>
      <li>Expressjs</li>
      <li>Mongodb</li>
      <li>Tailwindcss</li>
      <li>HTML</li>
      <li>CSS</li>
      <li>JavaScript</li>
      <li>PHP</li>
      <li>Laravel</li>
      <li>MySQL</li>
    </ul>
  </div>
</section>

	<section id="projects">
  <div class="container">
    <h2>Projects</h2>
    <div class="project">
      <img src="images/2.png" alt="Project 1">
      <h3>Project 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor euismod ligula, vel feugiat justo ullamcorper at.</p>
      <a href="#">View Project</a>
    </div>
    <div class="project">
      <img src="images/3.png" alt="Project 2">
      <h3>Project 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor euismod ligula, vel feugiat justo ullamcorper at.</p>
      <a href="#">View Project</a>
    </div>
  </div>
</section>

	<section id="contact">
		<div class="container">
			<h2>Contact</h2>
			<form method="post" action="contact.php">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" required>

				<label for="email">Your Email</label>
			<input type="email" name="email" id="email" required>

			<label for="message">Your Message</label>
			<textarea name="message" id="message" required></textarea>

			<input type="submit" value="Send Message">
		</form>
		</div>
</section>
<footer>
		<div class="container">
			<p>&copy; 2023 John Doe</p>
			<ul>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Service</a></li>
			</ul>
		</div>
	</footer>

	<script src="script.js"></script>
</body>
</html>
