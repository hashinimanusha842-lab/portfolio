<?php
$projects = [
    [
        "title"=>"Online Flower Shop",
        "description"=>"Full e-commerce system with cart, order confirmation, delivery details, and admin dashboard using PHP & MySQL.",
        "images"=>["images/flower1.jpg","images/flower2.jpg","images/flower3.jpg"],
        "demo"=>"https://your-flower-demo.com",
        "code"=>"https://github.com/yourusername/flower-shop"
    ],
    [
        "title"=>"Book Store System",
        "description"=>"Online book store with cart, payment integration, and admin dashboard.",
        "images"=>["images/book1.jpg","images/book2.jpg"],
        "demo"=>"https://your-book-demo.com",
        "code"=>"https://github.com/yourusername/book-store"
    ],
    [
        "title"=>"DRC Website",
        "description"=>"Developed the Department of the Registrar of Companies website using WordPress, MySQL, PHP.",
        "images"=>["roc1.png","roc2.png","roc.png"],
        "demo"=>"https://your-blog-demo.com",
        "code"=>"https://github.com/yourusername/mini-blog"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hashini Manusha | Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<header>
    <nav>
        <h2>Hashini</h2>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#journey">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#hire-me">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- HERO -->
<section id="home" class="hero">
    <div class="hero-text">
        <h1>Hi, I'm <span>Hashini Manusha</span></h1>
        <h3>I am a <span class="typed-text"></span><span class="cursor">|</span></h3>
        <p>Building Modern, Responsive, and Elegant Websites</p>
        <a href="mailto:hashinimanusha842@gmail.com" class="btn btn-primary">Hire Me</a>
        <a href="https://wa.me/94781879988" class="btn btn-outline">Let's Talk</a>
    </div>
    <div class="hero-img">
        <img src="AC.png" alt="Hashini Manusha">
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="about">
    <h2>About <span>Me</span></h2>
    <label for="profile-upload">
        <img id="profile-img" src="AC.png" alt="Your Photo">
    </label>
    <input type="file" id="profile-upload" accept="image/*" style="display:none">
    <h3>Frontend Developer!</h3>
    <p>Frontend Developer | UI/UX Enthusiast | Creative Problem Solver.</p>
</section>

<!-- JOURNEY -->
<section id="journey" class="journey">
    <div class="section-title"><h2>My <span>Journey</span></h2></div>
    <div class="journey-content">
        <div>
            <div class="box"><h4>2024 - Sri Lanka College of Technology</h4><p>Diploma in ICT</p></div>
            <div class="box"><h4>2025 - Internship</h4><p>IT Intern</p></div>
        </div>
        <div>
            <div class="box"><h4>2026 - University of Vocational Technology</h4><p>Bachelor of Technology in Software and Intelligent Systems</p></div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="skills">
    <div class="section-title">
        <h2>My <span>Skills</span></h2>
        <p>Languages & Tools: Java, HTML, CSS, JS, Dart, PHP, MySQL, Python, React, Laravel, Git, Figma, Tailwind.</p>
    </div>
    <div class="skills-grid">
        <div class="skill-card"><img src="1.png" alt="HTML5"><p>HTML5</p></div>
        <div class="skill-card"><img src="2.png" alt="CSS3"><p>CSS3</p></div>
        <div class="skill-card"><img src="download.png" alt="JavaScript"><p>JavaScript</p></div>
        <div class="skill-card"><img src="download (1).png" alt="React"><p>React JS</p></div>
        <div class="skill-card"><img src="7.jpg" alt="PHP"><p>PHP</p></div>
        <div class="skill-card"><img src="8.png" alt="Python"><p>Python</p></div>
        <div class="skill-card"><img src="12.jpg" alt="Java"><p>Java</p></div>
        <div class="skill-card"><img src="43.jpg" alt="WordPress"><p>WordPress</p></div>
        <div class="skill-card"><img src="11.png" alt="Laravel"><p>Laravel</p></div>
        <div class="skill-card"><img src="12.png" alt="MySQL"><p>MySQL</p></div>
        <div class="skill-card"><img src="13.png" alt="Git"><p>Git</p></div>
        <div class="skill-card"><img src="15.png" alt="Figma"><p>Figma</p></div>
        <div class="skill-card"><img src="17.png" alt="Tailwind"><p>Tailwind</p></div>
        <div class="skill-card"><img src="25.png" alt="Photoshop"><p>Photoshop</p></div>
        <div class="skill-card"><img src="75.png" alt="Illustrator"><p>Illustrator</p></div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="projects">
    <div class="section-title"><h2>My <span>Projects</span></h2></div>
    <div class="projects-container">
        <?php foreach($projects as $project): ?>
        <div class="project-card fade">
            <div class="project-img carousel">
                <?php foreach($project['images'] as $img): ?>
                    <img src="<?= $img ?>" alt="<?= $project['title'] ?>">
                <?php endforeach; ?>
                <div class="overlay">
                    <a href="<?= $project['demo'] ?>" target="_blank">Live Demo</a>
                    <a href="<?= $project['code'] ?>" target="_blank">View Code</a>
                </div>
            </div>
            <h3><?= $project['title'] ?></h3>
            <p><?= $project['description'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- CONTACT / HIRE ME -->
<section id="hire-me">
  <h2>Contact Me</h2>
  <p>I’m available for full-time web development projects. Feel free to reach out!</p>
  <ul>
    <li>📧 Email: <a href="mailto:hashinimanusha842@gmail.com">hashinimanusha842@gmail.com</a></li>
    <li>📞 Phone: <a href="tel:+94781879988">+94 781879988</a></li>
    <li>💼 LinkedIn: <a href="https://www.linkedin.com/in/hashini-manusha-690291366" target="_blank">My Profile</a></li>
    <li>🖥️ GitHub: <a href="https://github.com/hashinimanusha842-lab" target="_blank">My Projects</a></li>
  </ul>
</section>

<footer>© 2026 Hashini Manusha | All Rights Reserved</footer>

<script>
// ====== TYPING EFFECT ======
const typedTextSpan = document.querySelector(".typed-text");
const textArray = ["Frontend Developer", "UI/UX Designer", "React Enthusiast"];
let textArrayIndex = 0, charIndex = 0;
const typingDelay = 100, erasingDelay = 50, newTextDelay = 1500;

function type() {
    if(charIndex < textArray[textArrayIndex].length){
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
    } else setTimeout(erase, newTextDelay);
}
function erase(){
    if(charIndex > 0){
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0,charIndex-1);
        charIndex--;
        setTimeout(erase, erasingDelay);
    } else { textArrayIndex++; if(textArrayIndex >= textArray.length) textArrayIndex = 0; setTimeout(type, typingDelay + 500); }
}
document.addEventListener("DOMContentLoaded", function(){ if(textArray.length) setTimeout(type, newTextDelay + 250); });

// ====== PROFILE IMAGE UPLOAD ======
const profileInput = document.getElementById('profile-upload');
const profileImg = document.getElementById('profile-img');
profileInput.addEventListener('change', function(){
    const file = this.files[0];
    if(file){
        const reader = new FileReader();
        reader.onload = function(e){ profileImg.src = e.target.result; }
        reader.readAsDataURL(file);
    }
});

// ====== PROJECT CAROUSEL ======
document.querySelectorAll('.carousel').forEach(carousel => {
    const images = carousel.querySelectorAll('img');
    let current = 0;
    images[current].classList.add('active');
    setInterval(() => {
        images[current].classList.remove('active');
        current = (current + 1) % images.length;
        images[current].classList.add('active');
    }, 2500);
});

// ====== FADE-IN ======
const faders = document.querySelectorAll('.fade, .box, .skill-card');
function fadeOnScroll() {
    faders.forEach(el => {
        const elementTop = el.getBoundingClientRect().top;
        if(elementTop < window.innerHeight - 100){ el.classList.add('show'); }
    });
}
window.addEventListener('scroll', fadeOnScroll);
window.addEventListener('load', fadeOnScroll);
</script>
</body>
</html>