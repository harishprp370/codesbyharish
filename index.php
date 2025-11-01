<?php 
$pageTitle = "Home - Harish Prasad";
$metaDescription = "Welcome to Harish Prasad's personal portfolio website. Explore my projects, skills, and services in software development and cybersecurity.";

include 'includes/header.php'; ?>

<!-- Intro Animation Overlay -->
<div id="intro-overlay" class="intro-overlay">
    <div class="terminal-container">
        <div class="terminal-header">
            <span class="terminal-title">codesbyharish.in - System Boot</span>
            <div class="terminal-controls">
                <span class="control red"></span>
                <span class="control yellow"></span>
                <span class="control green"></span>
            </div>
        </div>
        <div class="terminal-body">
            <div id="terminal-text" class="terminal-text"></div>
            <span class="cursor"></span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="main-content" id="main-content" style="display: none;">
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-text">
                    <span class="hero-greeting">Hello, I'm</span>
                    <h1 class="hero-title">
                        <span class="name-highlight">Harish</span>
                        <span class="typing-text"></span>
                    </h1>
                    <p class="hero-description">
                        Full-stack developer and cybersecurity specialist crafting secure, 
                        scalable digital solutions. Expert in modern web technologies, 
                        cloud platforms, and enterprise security frameworks.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">10+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Certifications</span>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="projects.php" class="btn btn-primary">
                            <i class="fas fa-rocket"></i>
                            View My Work
                        </a>
                        <a href="contact.php" class="btn btn-outline">
                            <i class="fas fa-comments"></i>
                            Let's Talk
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-container">
                        <div class="floating-elements">
                            <div class="float-item" data-tech="PHP">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="float-item" data-tech="Python">
                                <i class="fab fa-python"></i>
                            </div>
                            <div class="float-item" data-tech="Security">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="float-item" data-tech="Cloud">
                                <i class="fas fa-cloud"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="scroll-indicator">
                <span>Scroll Down</span>
                <div class="scroll-arrow">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">What I Do</span>
                <h2 class="section-title">My Expertise</h2>
                <p class="section-description">
                    Specialized in creating secure, scalable, and modern digital solutions
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="service-title">Software Development</h3>
                    <p class="service-description">
                        Custom software solutions using Python, PHP, and modern frameworks. 
                        From web applications to enterprise systems.
                    </p>
                    <ul class="service-features">
                        <li>Full-stack web applications</li>
                        <li>API development & integration</li>
                        <li>Database design & optimization</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="service-title">Cybersecurity</h3>
                    <p class="service-description">
                        Comprehensive security solutions including vulnerability assessments, 
                        penetration testing, and security architecture design.
                    </p>
                    <ul class="service-features">
                        <li>Security audits & assessments</li>
                        <li>IAM implementation</li>
                        <li>SOC analysis & monitoring</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="service-title">Mobile Development</h3>
                    <p class="service-description">
                        Cross-platform mobile applications with native performance 
                        and seamless user experience.
                    </p>
                    <ul class="service-features">
                        <li>iOS & Android apps</li>
                        <li>Progressive web apps</li>
                        <li>App store optimization</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="service-title">Cloud Solutions</h3>
                    <p class="service-description">
                        Scalable cloud infrastructure on Google Cloud Platform 
                        with automated deployment and monitoring.
                    </p>
                    <ul class="service-features">
                        <li>Cloud migration & hosting</li>
                        <li>DevOps & CI/CD pipelines</li>
                        <li>Performance optimization</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="service-title">SEO & Analytics</h3>
                    <p class="service-description">
                        Search engine optimization and web analytics to maximize 
                        online visibility and performance.
                    </p>
                    <ul class="service-features">
                        <li>Technical SEO audit</li>
                        <li>Google Analytics setup</li>
                        <li>Performance monitoring</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="service-title">SaaS Applications</h3>
                    <p class="service-description">
                        End-to-end SaaS platform development with subscription 
                        management, analytics, and scalable architecture.
                    </p>
                    <ul class="service-features">
                        <li>Multi-tenant architecture</li>
                        <li>Payment integration</li>
                        <li>User management systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="tech-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Technology Stack</span>
                <h2 class="section-title">Tools & Technologies</h2>
            </div>
            <div class="tech-categories">
                <div class="tech-category">
                    <h3 class="tech-category-title">Frontend</h3>
                    <div class="tech-items">
                        <div class="tech-item">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-js"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-bootstrap"></i>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="tech-category">
                    <h3 class="tech-category-title">Backend</h3>
                    <div class="tech-items">
                        <div class="tech-item">
                            <i class="fab fa-php"></i>
                            <span>PHP</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-laravel"></i>
                            <span>Laravel</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-database"></i>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="tech-category">
                    <h3 class="tech-category-title">Cloud & DevOps</h3>
                    <div class="tech-items">
                        <div class="tech-item">
                            <i class="fab fa-google"></i>
                            <span>Google Cloud</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-docker"></i>
                            <span>Docker</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-git-alt"></i>
                            <span>Git</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-fire"></i>
                            <span>Firebase</span>
                        </div>
                    </div>
                </div>

                <div class="tech-category">
                    <h3 class="tech-category-title">Security</h3>
                    <div class="tech-items">
                        <div class="tech-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>OWASP</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-bug"></i>
                            <span>Burp Suite</span>
                        </div>
                        <div class="tech-item">
                            <i class="fab fa-linux"></i>
                            <span>Linux</span>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-user-shield"></i>
                            <span>IAM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Work Section -->
    <section class="work-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Portfolio</span>
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-description">
                    Some of my recent work showcasing different technologies and solutions
                </p>
            </div>
            <div class="projects-grid">
                <!-- EliteArtsss Project -->
                <div class="project-card featured" data-category="ecommerce web" data-aos="zoom-in">
                    <div class="project-image">
                        <img src="assets/elitearts.jpeg" alt="EliteArtsss Jewelry Platform" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://eliteartsss.com" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="eliteartsss">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="project-badge featured-badge">Featured</div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">EliteArtsss Jewelry Platform</h3>
                        <p class="project-description">
                            Luxury e-commerce platform with Razorpay integration, real-time shipping via Delhivery API, 
                            and responsive design for premium jewelry shopping experience.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag php">PHP</span>
                            <span class="tech-tag mysql">MySQL</span>
                            <span class="tech-tag bootstrap">Bootstrap</span>
                            <span class="tech-tag api">API Integration</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Mar 2025 - Apr 2025
                            </span>
                            <span class="project-type">E-commerce</span>
                        </div>
                    </div>
                </div>

                

                <!-- School Website Project -->
                <div class="project-card" data-category="web education" data-aos="zoom-in" data-aos-delay="200">
                    <div class="project-image">
                        <img src="assets/vts.png" alt="School Website" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://vivekanandatechnoschool.com/" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <button class="project-link view-details" data-project="school">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Vivekananda Techno School</h3>
                        <p class="project-description">
                            Professional school website with admin panel, student management, 
                            and interactive features for educational institution.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag php">PHP</span>
                            <span class="tech-tag mysql">MySQL</span>
                            <span class="tech-tag bootstrap">Bootstrap</span>
                            <span class="tech-tag phpmyadmin">PhpMyAdmin</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Feb 2025 - Apr 2025
                            </span>
                            <span class="project-type">Educational</span>
                        </div>
                    </div>
                </div>

                

                <!-- T-Phish Tool -->
                <div class="project-card" data-category="security" data-aos="zoom-in" data-aos-delay="1000">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=600&h=400&fit=crop&auto=format&q=80" alt="T-Phish Tool" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://github.com/harishprp370/T-Phish" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="tphish">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="project-badge security-badge">Security Research</div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">T-Phish Security Tool</h3>
                        <p class="project-description">
                            Social engineering and phishing simulation tool for security awareness 
                            training and penetration testing purposes.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag python">Python</span>
                            <span class="tech-tag security">Security</span>
                            <span class="tech-tag pentesting">Pentesting</span>
                            <span class="tech-tag research">Research</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Aug 2024
                            </span>
                            <span class="project-type">Security Tool</span>
                        </div>
                    </div>
                </div>

                

            </div>

            <div class="projects-cta">
                <a href="projects.php" class="btn btn-outline-large">
                    <i class="fas fa-folder-open"></i>
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="certifications-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Credentials</span>
                <h2 class="section-title">Certifications & Training</h2>
            </div>
            <div class="certifications-grid">
                <div class="cert-card">
                    <div class="cert-logo">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="cert-info">
                        <h3 class="cert-title">Tata Group Cybersecurity</h3>
                        <p class="cert-issuer">Tata Group via Forage</p>
                        <span class="cert-date">Feb 2024</span>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-logo">
                        <i class="fab fa-python"></i>
                    </div>
                    <div class="cert-info">
                        <h3 class="cert-title">AI for India 2.0</h3>
                        <p class="cert-issuer">HCL GUVI</p>
                        <span class="cert-date">Aug 2023</span>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-logo">
                        <i class="fas fa-terminal"></i>
                    </div>
                    <div class="cert-info">
                        <h3 class="cert-title">Bash Scripting & jq</h3>
                        <p class="cert-issuer">EC-Council</p>
                        <span class="cert-date">Sep 2023</span>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-logo">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <div class="cert-info">
                        <h3 class="cert-title">MITRE ATT&CK Defender</h3>
                        <p class="cert-issuer">Cybrary</p>
                        <span class="cert-date">Sep 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Build Something Amazing?</h2>
                <p class="cta-description">
                    Let's collaborate on your next project. Whether you need secure web applications, 
                    cybersecurity solutions, or cloud infrastructure, I'm here to help.
                </p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary-large">
                        <i class="fas fa-rocket"></i>
                        Start a Project
                    </a>
                    <a href="about.php" class="btn btn-outline-large">
                        <i class="fas fa-user"></i>
                        Learn More About Me
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    /* Main Content Spacing */
    .main-content {
        margin-top: 70px;
        opacity: 0;
        animation: fadeInContent 1.5s ease-out 0.5s forwards;
    }

    @keyframes fadeInContent {
        to { opacity: 1; }
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    /* Hero Section */
    .hero-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 80%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .hero-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 2;
    }

    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .hero-greeting {
        color: var(--primary-color);
        font-size: 1.2rem;
        font-weight: 500;
        display: block;
        margin-bottom: 1rem;
        animation: fadeInUp 0.6s ease-out;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        animation: fadeInUp 0.6s ease-out 0.2s both;
    }

    .name-highlight {
        color: var(--primary-color);
        display: block;
    }

    .typing-text::after {
        content: '';
        border-right: 2px solid var(--primary-color);
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%, 50% { border-color: var(--primary-color); }
        51%, 100% { border-color: transparent; }
    }

    .hero-description {
        font-size: 1.2rem;
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 2rem;
        animation: fadeInUp 0.6s ease-out 0.4s both;
    }

    .hero-stats {
        display: flex;
        gap: 2rem;
        margin-bottom: 2.5rem;
        animation: fadeInUp 0.6s ease-out 0.6s both;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0.25rem;
    }

    .stat-label {
        font-size: 0.9rem;
        color: var(--text-secondary);
    }

    .hero-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        animation: fadeInUp 0.6s ease-out 0.8s both;
    }

    /* Button Styles */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
        border: 2px solid transparent;
        cursor: pointer;
    }

    .btn-primary {
        background: var(--primary-color);
        color: white;
    }

    .btn-primary:hover {
        background: var(--secondary-color);
        transform: translateY(-2px);
    }

    .btn-outline {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    .btn-outline:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    .btn-outline-large, .btn-primary-large {
        padding: 1rem 2rem;
        font-size: 1.1rem;
    }

    .btn-primary-large {
        background: var(--primary-color);
        color: white;
    }

    .btn-primary-large:hover {
        background: var(--secondary-color);
        transform: translateY(-2px);
    }

    .btn-outline-large {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    .btn-outline-large:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    /* Hero Image */
    .hero-image {
        position: relative;
        height: 600px;
    }
    

    .image-container {
    position: relative;
    width: 100%;
    height: 100%;
    background-image: url('assets/hero.jpeg');
    background-size: cover;
    background-position: center 40%; /* show more top or bottom if needed */
    border-radius: 20px;
    overflow: hidden;
}


    .image-container::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(10, 25, 47, 0.55); /* Dark blue overlay */
    mix-blend-mode: multiply;
    z-index: 1;
}

.float-item {
    position: absolute;
    color: #00f5d4; /* Cyber teal */
    font-size: 24px;
    opacity: 0.8;
    animation: float 6s ease-in-out infinite;
    text-shadow: 0 0 10px rgba(0, 245, 212, 0.8);
    z-index: 2;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.float-item:nth-child(1) { top: 20%; left: 15%; }
.float-item:nth-child(2) { top: 60%; left: 30%; }
.float-item:nth-child(3) { top: 40%; right: 20%; }
.float-item:nth-child(4) { bottom: 15%; right: 30%; }

.hero-image {
    position: relative;
    height: 600px;
    animation: fadeIn 1.5s ease-out forwards;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.image-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 25px rgba(0, 153, 255, 0.2);
}

.image-container::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 20px;
    background: linear-gradient(45deg, #2563eb, #00f5d4);
    opacity: 0.2;
    z-index: 1;
}


    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .float-item {
        position: absolute;
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        animation: float 6s ease-in-out infinite;
        backdrop-filter: blur(10px);
    }

    .float-item:nth-child(1) {
        top: 20%;
        left: 50%;
        animation-delay: -0.5s;
    }

    .float-item:nth-child(2) {
        top: 60%;
        left: 70%;
        animation-delay: -2s;
    }

    .float-item:nth-child(3) {
        top: 30%;
        right: 20%;
        animation-delay: -3.5s;
    }

    .float-item:nth-child(4) {
        bottom: 25%;
        left: 25%;
        animation-delay: -1s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    .scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        color: var(--text-secondary);
        animation: fadeInUp 0.6s ease-out 1s both;
    }

    .scroll-arrow {
        margin-top: 0.5rem;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* Section Styles */
    .services-section,
    .tech-section,
    .work-section,
    .certifications-section {
        padding: 5rem 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-subtitle {
        color: var(--primary-color);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: block;
        margin-bottom: 0.5rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .section-description {
        font-size: 1.1rem;
        color: var(--text-secondary);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Services Grid */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .service-card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 2rem;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.05), transparent);
        transition: var(--transition);
    }

    .service-card:hover::before {
        left: 100%;
    }

    .service-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .service-icon {
        width: 60px;
        height: 60px;
        background: var(--primary-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .service-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .service-description {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .service-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-features li {
        color: var(--text-secondary);
        margin-bottom: 0.5rem;
        position: relative;
        padding-left: 1.5rem;
    }

    .service-features li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: 600;
    }

    /* Tech Section */
    .tech-section {
        background: var(--bg-secondary);
    }

    .tech-categories {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .tech-category-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: var(--text-primary);
        text-align: center;
    }

    .tech-items {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .tech-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        transition: var(--transition);
    }

    .tech-item:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .tech-item i {
        font-size: 1.5rem;
        color: var(--primary-color);
    }

    .tech-item span {
        font-size: 0.9rem;
        color: var(--text-secondary);
        font-weight: 500;
    }

    /* Projects Section */
    .projects-preview {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .project-card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        transition: var(--transition);
    }

    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .project-image {
        height: 200px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        position: relative;
        overflow: hidden;
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
    }

     /* Projects Grid */
    .projects-grid-section {
        padding: 3rem 0 5rem;
        background: var(--bg-secondary);
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .project-card {
        background: var(--bg-primary);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
    }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .project-card.featured {
        border: 2px solid var(--primary-color);
    }

    .project-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .project-card:hover .project-image img {
        transform: scale(1.1);
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(37, 99, 235, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-links {
        display: flex;
        gap: 1rem;
    }

    .project-link {
        width: 50px;
        height: 50px;
        background: white;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        text-decoration: none;
        font-size: 1.2rem;
        cursor: pointer;
        transition: var(--transition);
    }

    .project-link:hover {
        transform: scale(1.1);
        background: var(--bg-secondary);
    }

    .project-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 2;
    }

    .featured-badge {
        background: var(--primary-color);
        color: white;
    }

    .project-info {
        padding: 2rem;
    }

    .project-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .project-description {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .project-tech {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 1.5rem;
    }

    .tech-tag {
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
        border: 1px solid;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-links {
        display: flex;
        gap: 1rem;
    }

    .project-link {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-primary);
        text-decoration: none;
        transition: var(--transition);
    }

    .project-link:hover {
        transform: scale(1.1);
    }

    .project-info {
        padding: 1.5rem;
    }

    .project-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        color: var(--text-primary);
    }

    .project-description {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .project-tech {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .tech-tag {
        padding: 0.25rem 0.75rem;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        font-size: 0.8rem;
        color: var(--text-secondary);
    }

    .projects-cta {
        text-align: center;
    }

    /* Certifications */
    .certifications-section {
        background: var(--bg-secondary);
    }

    .certifications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .cert-card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: var(--transition);
    }

    .cert-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .cert-logo {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .cert-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: var(--text-primary);
    }

    .cert-issuer {
        font-size: 0.9rem;
        color: var(--text-secondary);
        margin-bottom: 0.25rem;
    }

    .cert-date {
        font-size: 0.8rem;
        color: var(--primary-color);
        font-weight: 500;
    }

    /* CTA Section */
    .cta-section {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        text-align: center;
    }

    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .cta-description {
        font-size: 1.2rem;
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        opacity: 0.9;
        line-height: 1.6;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .cta-section .btn-primary-large {
        background: white;
        color: var(--primary-color);
    }

    .cta-section .btn-primary-large:hover {
        background: rgba(255, 255, 255, 0.9);
        transform: translateY(-2px);
    }

    .cta-section .btn-outline-large {
        border-color: white;
        color: white;
    }

    .cta-section .btn-outline-large:hover {
        background: white;
        color: var(--primary-color);
    }

    /* Intro Overlay */
    .intro-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #0a0a0a;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        font-family: 'Courier New', monospace;
    }

    .terminal-container {
        background: #1a1a1a;
        border: 2px solid #333;
        border-radius: 8px;
        width: 90%;
        max-width: 600px;
        box-shadow: 0 0 20px rgba(0, 255, 153, 0.3);
        overflow: hidden;
    }

    .terminal-header {
        background: #2a2a2a;
        padding: 10px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #333;
    }

    .terminal-title {
        color: #00ff99;
        font-size: 14px;
        font-weight: bold;
    }

    .terminal-controls {
        display: flex;
        gap: 5px;
    }

    .control {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .red { background: #ff5f57; }
    .yellow { background: #ffbd2e; }
    .green { background: #28ca42; }

    .terminal-body {
        padding: 20px;
        color: #00ff99;
        font-size: 16px;
        line-height: 1.5;
        min-height: 200px;
        position: relative;
    }

    .terminal-text {
        white-space: pre-line;
    }

    .cursor {
        display: inline-block;
        animation: blink 0.7s infinite;
        color: #00ff99;
    }

    @keyframes blink {
        50% { opacity: 0; }
    }

    /* Enhanced Homepage Animations */
    .main-content {
        opacity: 0;
        animation: fadeInContent 1.5s ease-out 0.5s forwards;
    }

    @keyframes fadeInContent {
        to { opacity: 1; }
    }

    .hero-section, .services-section, .tech-section, .work-section, .certifications-section, .cta-section {
        opacity: 0;
        transform: translateY(50px) scale(0.95);
        animation: scrollUpPop 1s ease-out forwards;
    }

    .hero-section { animation-delay: 1s; }
    .services-section { animation-delay: 1.2s; }
    .tech-section { animation-delay: 1.4s; }
    .work-section { animation-delay: 1.6s; }
    .certifications-section { animation-delay: 1.8s; }
    .cta-section { animation-delay: 2s; }

    @keyframes scrollUpPop {
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Mobile Enhancements for Attractiveness */
    @media (max-width: 768px) {
        .hero-content {
            grid-template-columns: 1fr;
            text-align: left; /* Shift from center to left for better flow */
            gap: 1.5rem;
            padding: 1rem;
        }

        .hero-title {
            font-size: 2.8rem;
            text-align: left;
        }

        .hero-description {
            text-align: left;
            font-size: 1rem;
        }

        .hero-stats {
            flex-direction: row;
            justify-content: space-around;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .hero-buttons {
            flex-direction: column;
            align-items: stretch;
            gap: 0.5rem;
        }

        .btn {
            padding: 1rem;
            font-size: 1rem;
            justify-content: center;
        }

        .hero-image {
            height: 400px;
            margin-top: 1rem;
        }

        .image-container {
            background-size: cover;
            background-position: center;
        }

        .floating-elements {
            display: none; /* Hide floating elements on mobile for cleaner look */
        }

        /* Staggered card animations for services and projects */
        .services-grid, .projects-preview {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .service-card, .project-card {
            transform: translateX(-100%);
            opacity: 0;
            animation: slideInLeft 0.6s ease-out forwards;
        }

        .service-card:nth-child(odd), .project-card:nth-child(odd) {
            animation-delay: 0.2s;
        }

        .service-card:nth-child(even), .project-card:nth-child(even) {
            animation-delay: 0.4s;
        }

        @keyframes slideInLeft {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Tech stack as a swipeable horizontal scroll */
        .tech-categories {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 1rem;
            padding: 0 1rem;
        }

        .tech-category {
            min-width: 200px;
            scroll-snap-align: start;
        }

        /* Certifications as a vertical stack with hover effects */
        .certifications-grid {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .cert-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cert-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        /* CTA section with full-width buttons */
        .cta-buttons {
            flex-direction: column;
            gap: 1rem;
        }

        .btn {
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    // Typing animation
    const typingText = document.querySelector('.typing-text');
    const words = ['Full-Stack Developer', 'Cybersecurity Expert', 'Cloud Architect', 'Problem Solver'];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeText() {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typingText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            
            if (charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                setTimeout(typeText, 500);
                return;
            }
        } else {
            typingText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            
            if (charIndex === currentWord.length) {
                isDeleting = true;
                setTimeout(typeText, 2000);
                return;
            }
        }
        
        setTimeout(typeText, isDeleting ? 100 : 150);
    }

    // Start typing animation
    setTimeout(typeText, 1000);

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.service-card, .project-card, .cert-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add floating animation to tech items
    document.querySelectorAll('.tech-item').forEach((item, index) => {
        item.style.animationDelay = `${index * 0.1}s`;
    });

    // Intro Animation Script
    document.addEventListener('DOMContentLoaded', function() {
        const overlay = document.getElementById('intro-overlay');
        const terminalText = document.getElementById('terminal-text');
        const mainContent = document.getElementById('main-content');
        
        // Ensure elements exist before proceeding
        if (!overlay || !terminalText || !mainContent) {
            console.error('Intro animation elements not found!');
            if(mainContent) mainContent.style.display = 'block';
            if(overlay) overlay.style.display = 'none';
            return;
        }

        const lines = [
            
            '> Loading Harish\'s Developer Toolkit... ✓',
            '> Establishing secure connection to codesbyharish.in...',
            '> Fetching project data... ✓',
            '> Launching interface...',
            '',
            '💥 WELCOME TO CODES BY HARISH'
        ];

        let lineIndex = 0;
        let charIndex = 0;
        let currentLine = '';

        function typeLine() {
            // Stop if we've already faded out (e.g., user navigated away)
            if (overlay.style.opacity === '0') return;

            if (lineIndex < lines.length) {
                const line = lines[lineIndex];
                if (charIndex < line.length) {
                    currentLine += line[charIndex];
                    terminalText.textContent = lines.slice(0, lineIndex).join('\n') + '\n' + currentLine;
                    charIndex++;
                    setTimeout(typeLine, 10);
                } else {
                    lineIndex++;
                    charIndex = 0;
                    currentLine = '';
                    // Pause longer on the last line before fading
                    const pause = lineIndex === lines.length ? 400 : 90;
                    setTimeout(typeLine, pause);
                }
            } else {
                // Animation complete, transition to main content
                setTimeout(() => {
                    overlay.style.transition = 'opacity 1s ease-out';
                    overlay.style.opacity = '0';
                    // Use 'transitionend' event for a more reliable handoff
                    setTimeout(() => {
                        overlay.style.display = 'none';
                        mainContent.style.display = 'block';
                        // The CSS animation `fadeInContent` will handle the reveal
                    }, 1000); // Corresponds to transition duration
                }, 500);
            }
        }

        // Start the animation
        setTimeout(typeLine, 500);
    });
</script>

<?php include 'includes/footer.php'; ?>