<?php include 'includes/header.php'; ?>

<!-- Main Content -->
<main class="main-content">
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
            <div class="scroll-indicator">
                <span>Scroll Down</span>
                <div class="scroll-arrow">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
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
            <div class="projects-preview">
                <div class="project-card">
                    <div class="project-image">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">EliteArtsss E-commerce</h3>
                        <p class="project-description">
                            Luxury jewelry shopping platform with Razorpay integration and real-time shipping
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">QwickLearn Platform</h3>
                        <p class="project-description">
                            Online learning management system with interactive content and progress tracking
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">Firebase</span>
                            <span class="tech-tag">PHP</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">School Management System</h3>
                        <p class="project-description">
                            Complete school website with admin panel and student management features
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Bootstrap</span>
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
        height: 500px;
    }

    .image-container {
        position: relative;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 20px;
        overflow: hidden;
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
        left: 15%;
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

    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-content {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 2rem;
        }

        .hero-title {
            font-size: 3rem;
        }

        .hero-stats {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 0 1rem;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-stats {
            flex-direction: column;
            gap: 1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .tech-categories {
            grid-template-columns: 1fr;
        }

        .hero-buttons {
            justify-content: center;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 2rem;
        }

        .cta-title {
            font-size: 2rem;
        }

        .service-card,
        .project-card {
            margin: 0 0.5rem;
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
</script>

<?php include 'includes/footer.php'; ?>