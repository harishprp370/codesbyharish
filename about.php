<?php 

$pageTitle = "About Me - CodesByHarish";
$metaDescription = "Learn more about Harish, a passionate full-stack developer and cybersecurity specialist. Discover his journey, skills, education, and professional experiences in the tech industry.";
include 'includes/header.php'; ?>

<!-- Main Content -->
<main class="main-content">
    <!-- Hero About Section -->
    <section class="about-hero" id="about">
        <div class="container">
            <div class="about-hero-content">
                <div class="about-text">
                    <span class="section-subtitle">Get to Know Me</span>
                    <h1 class="about-title">
                        I'm <span class="name-highlight">Harish</span><br>
                        <span class="typing-roles"></span>
                    </h1>
                    <p class="about-description">
                        A passionate full-stack developer and cybersecurity specialist from Bangalore, India. 
                        Currently pursuing my Master's in Cybersecurity at Jain University while working as 
                        a Junior Software Developer at Solar Bee. I bridge the gap between innovative 
                        development and robust security practices.
                    </p>
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="highlight-text">
                                <span class="highlight-title">MCA Student</span>
                                <span class="highlight-desc">Cybersecurity at Jain University</span>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="highlight-text">
                                <span class="highlight-title">Currently Working</span>
                                <span class="highlight-desc">Junior Developer at Solar Bee</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-wrapper">
                        <div class="profile-card">
                            <div class="profile-avatar">
                                <img src="assets/hero.jpeg" alt="Harish Profile" class="avatar-img">
                                <div class="status-indicator">
                                    <div class="status-dot"></div>
                                    <span>Available for work</span>
                                </div>
                            </div>
                            <div class="floating-badges">
                                <div class="badge-item" style="--delay: 0.5s;">
                                    <i class="fab fa-php"></i>
                                    <span>PHP</span>
                                </div>
                                <div class="badge-item" style="--delay: 1s;">
                                    <i class="fab fa-python"></i>
                                    <span>Python</span>
                                </div>
                                <div class="badge-item" style="--delay: 1.5s;">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Security</span>
                                </div>
                                <div class="badge-item" style="--delay: 2s;">
                                    <i class="fas fa-cloud"></i>
                                    <span>Cloud</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Timeline -->
    <section class="journey-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">My Journey</span>
                <h2 class="section-title">Professional Timeline</h2>
                <p class="section-description">
                    From student to professional developer - here's my journey in tech
                </p>
            </div>
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-marker">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-date">Nov 2024 - Present</span>
                        <h3 class="timeline-title">Junior Software Developer</h3>
                        <p class="timeline-company">Solar Bee - India</p>
                        <p class="timeline-description">
                            Working on full-stack development using PHP, MySQL, Python, and Google Cloud Platform. 
                            Implementing SEO strategies, managing web hosting, and developing scalable applications.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">MySQL</span>
                            <span class="skill-tag">Python</span>
                            <span class="skill-tag">GCP</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-marker">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-date">Sep 2024 - Oct 2024</span>
                        <h3 class="timeline-title">AI & Prompt Engineering Intern</h3>
                        <p class="timeline-company">VaultofCodes</p>
                        <p class="timeline-description">
                            Specialized in artificial intelligence and prompt engineering, developing AI-driven 
                            solutions and optimizing language model interactions.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">AI</span>
                            <span class="skill-tag">Prompt Engineering</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-marker">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-date">Apr 2024 - Jun 2024</span>
                        <h3 class="timeline-title">Web Development Intern</h3>
                        <p class="timeline-company">PyGenicArc</p>
                        <p class="timeline-description">
                            Gained hands-on experience in web development, creating responsive applications 
                            with HTML, CSS, JavaScript, and Bootstrap. Worked with Firebase for backend services.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">HTML5</span>
                            <span class="skill-tag">CSS</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="timeline-marker">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-date">Jan 2024 - Feb 2024</span>
                        <h3 class="timeline-title">Cybersecurity Analyst Intern</h3>
                        <p class="timeline-company">Tata Group</p>
                        <p class="timeline-description">
                            Worked on Identity and Access Management (IAM) fundamentals, strategy assessment, 
                            and crafting custom IAM solutions with platform integration.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">IAM</span>
                            <span class="skill-tag">Risk Management</span>
                            <span class="skill-tag">Security Analysis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="education-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Academic Background</span>
                <h2 class="section-title">Education & Learning</h2>
            </div>
            <div class="education-grid">
                <div class="education-card current" data-aos="fade-up">
                    <div class="education-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="education-content">
                        <span class="education-period">May 2025 - Apr 2027</span>
                        <h3 class="education-degree">Master of Computer Applications</h3>
                        <p class="education-specialization">Cybersecurity Specialization</p>
                        <p class="education-institution">Jain (Deemed-to-be University)</p>
                        <div class="education-status">
                            <span class="status-badge current">Currently Pursuing</span>
                        </div>
                    </div>
                </div>

                <div class="education-card completed" data-aos="fade-up" data-aos-delay="200">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="education-content">
                        <span class="education-period">Oct 2021 - Sep 2024</span>
                        <h3 class="education-degree">Bachelor of Computer Applications</h3>
                        <p class="education-specialization">Computer Programming & Applications</p>
                        <p class="education-institution">Davangere University</p>
                        <div class="education-grade">
                            <span class="grade-badge">CGPA: 8.4/10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Matrix -->
    <section class="skills-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Technical Expertise</span>
                <h2 class="section-title">Skills & Technologies</h2>
            </div>
            <div class="skills-container">
                <!-- Programming Languages -->
                <div class="skill-category" data-aos="fade-up">
                    <h3 class="category-title">
                        <i class="fas fa-code"></i>
                        Programming Languages
                    </h3>
                    <div class="skills-grid">
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">PHP</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="90"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Python</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="85"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-js"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">JavaScript</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="80"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-java"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Java</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="75"></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Frameworks & Technologies -->
                <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="category-title">
                        <i class="fas fa-layer-group"></i>
                        Frameworks & Technologies
                    </h3>
                    <div class="skills-grid">
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Laravel</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="85"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-bootstrap"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Bootstrap</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="90"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Firebase</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">MySQL</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="85"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security & Cloud -->
                <div class="skill-category" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="category-title">
                        <i class="fas fa-shield-alt"></i>
                        Security & Cloud
                    </h3>
                    <div class="skills-grid">
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">IAM</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-google"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Google Cloud</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="75"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fab fa-linux"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Linux</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-icon">
                                <i class="fas fa-bug"></i>
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">Penetration Testing</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="70"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Showcase -->
    <section class="certifications-showcase">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Professional Development</span>
                <h2 class="section-title">Certifications & Achievements</h2>
            </div>
            <div class="certifications-slider">
                <div class="cert-item" data-aos="zoom-in">
                    <div class="cert-badge">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="cert-details">
                        <h4 class="cert-name">Tata Group Cybersecurity Analyst</h4>
                        <p class="cert-issuer">Tata Group via Forage</p>
                        <span class="cert-date">Feb 2024</span>
                        <div class="cert-skills">
                            <span>IAM Fundamentals</span>
                            <span>Strategy Assessment</span>
                            <span>Risk Management</span>
                        </div>
                    </div>
                </div>

                <div class="cert-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="cert-badge">
                        <i class="fas fa-terminal"></i>
                    </div>
                    <div class="cert-details">
                        <h4 class="cert-name">Bash Scripting & jq</h4>
                        <p class="cert-issuer">EC-Council</p>
                        <span class="cert-date">Sep 2023</span>
                        <div class="cert-skills">
                            <span>Bash</span>
                            <span>Shell Scripting</span>
                            <span>Linux</span>
                        </div>
                    </div>
                </div>

                <div class="cert-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="cert-badge">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <div class="cert-details">
                        <h4 class="cert-name">MITRE ATT&CK Defender</h4>
                        <p class="cert-issuer">Cybrary</p>
                        <span class="cert-date">Sep 2023</span>
                        <div class="cert-skills">
                            <span>SOC Analysis</span>
                            <span>Threat Hunting</span>
                        </div>
                    </div>
                </div>

                <div class="cert-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="cert-badge">
                        <i class="fab fa-python"></i>
                    </div>
                    <div class="cert-details">
                        <h4 class="cert-name">AI for India 2.0</h4>
                        <p class="cert-issuer">HCL GUVI</p>
                        <span class="cert-date">Aug 2023</span>
                        <div class="cert-skills">
                            <span>Python</span>
                            <span>Artificial Intelligence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fun Facts & Stats -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card" data-aos="flip-up">
                    <div class="stat-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stat-number" data-count="15">0</div>
                    <div class="stat-label">Certifications Earned</div>
                </div>
                <div class="stat-card" data-aos="flip-up" data-aos-delay="100">
                    <div class="stat-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="stat-number" data-count="20">0</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat-card" data-aos="flip-up" data-aos-delay="200">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-number" data-count="3">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-card" data-aos="flip-up" data-aos-delay="300">
                    <div class="stat-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="stat-number" data-count="500">0</div>
                    <div class="stat-label">Cups of Coffee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Let's Work Together</h2>
                <p class="cta-description">
                    Ready to bring your ideas to life with secure, scalable solutions? 
                    I'm always excited to collaborate on new projects and challenges.
                </p>
                <div class="cta-buttons">
                    <a href="projects.php" class="btn btn-primary-large">
                        <i class="fas fa-eye"></i>
                        View My Work
                    </a>
                    <a href="contact.php" class="btn btn-outline-large">
                        <i class="fas fa-envelope"></i>
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    /* Main Content */
    .main-content {
        margin-top: 70px;
    }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }
    /* About Hero Section */
    .about-hero {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 30% 70%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .about-hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .about-title {
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        color: var(--text-primary);
    }

    .name-highlight {
        color: var(--primary-color);
    }

    .typing-roles::after {
        content: '';
        border-right: 2px solid var(--primary-color);
        animation: blink 1s infinite;
    }

    .about-description {
        font-size: 1.1rem;
        color: var(--text-secondary);
        line-height: 1.7;
        margin-bottom: 2rem;
    }

    .about-highlights {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .highlight-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        transition: var(--transition);
    }

    .highlight-item:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .highlight-icon {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
    }

    .highlight-text {
        display: flex;
        flex-direction: column;
    }

    .highlight-title {
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 0.25rem;
    }

    .highlight-desc {
        font-size: 0.9rem;
        color: var(--text-secondary);
    }

    /* Profile Card */
    .image-wrapper {
        position: relative;
        height: 500px;
    }

    .profile-card {
        position: relative;
        width: 100%;
        height: 100%;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: var(--shadow);
    }

    .profile-avatar {
        position: relative;
        margin-bottom: 2rem;
    }

    .avatar-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid var(--primary-color);
    }

    .status-indicator {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--bg-primary);
        border: 2px solid var(--primary-color);
        border-radius: 20px;
        padding: 0.5rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.8rem;
        font-weight: 500;
        color: var(--primary-color);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        background: #10b981;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    .floating-badges {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    .badge-item {
        position: absolute;
        background: var(--primary-color);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.8rem;
        font-weight: 500;
        animation: float 6s ease-in-out infinite;
        animation-delay: var(--delay);
    }

    .badge-item:nth-child(1) {
        top: 10%;
        left: 10%;
    }

    .badge-item:nth-child(2) {
        top: 20%;
        right: 10%;
    }

    .badge-item:nth-child(3) {
        bottom: 30%;
        left: 5%;
    }

    .badge-item:nth-child(4) {
        bottom: 10%;
        right: 15%;
    }

    /* Timeline Section */
    .journey-section {
        padding: 5rem 0;
        background: var(--bg-secondary);
    }

    .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 30px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: var(--border-color);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
        padding-left: 80px;
    }

    .timeline-marker {
        position: absolute;
        left: 15px;
        top: 0;
        width: 30px;
        height: 30px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.8rem;
        z-index: 2;
    }

    .timeline-content {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 2rem;
        position: relative;
    }

    .timeline-content::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 15px;
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-right: 10px solid var(--bg-primary);
    }

    .timeline-date {
        font-size: 0.9rem;
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
    }

    .timeline-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
    }

    .timeline-company {
        font-size: 1rem;
        color: var(--text-secondary);
        margin-bottom: 1rem;
        font-style: italic;
    }

    .timeline-description {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .timeline-skills {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .skill-tag {
        padding: 0.25rem 0.75rem;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 15px;
        font-size: 0.8rem;
        color: var(--text-secondary);
    }

    /* Education Section */
    .education-section {
        padding: 5rem 0;
    }

    .education-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 2rem;
        max-width: 900px;
        margin: 0 auto;
    }

    .education-card {
        background: var(--bg-primary);
        border: 2px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        position: relative;
        transition: var(--transition);
        overflow: hidden;
    }

    .education-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.05), transparent);
        transition: var(--transition);
    }

    .education-card:hover::before {
        left: 100%;
    }

    .education-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .education-card.current {
        border-color: var(--primary-color);
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, var(--bg-primary) 100%);
    }

    .education-icon {
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

    .education-period {
        font-size: 0.9rem;
        color: var(--primary-color);
        font-weight: 600;
        display: block;
        margin-bottom: 0.5rem;
    }

    .education-degree {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
    }

    .education-specialization {
        color: var(--text-secondary);
        margin-bottom: 0.5rem;
    }

    .education-institution {
        color: var(--text-secondary);
        font-weight: 500;
        margin-bottom: 1rem;
    }

    .status-badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .status-badge.current {
        background: var(--primary-color);
        color: white;
    }

    .grade-badge {
        padding: 0.5rem 1rem;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--text-primary);
    }

    /* Skills Section */
    .skills-section {
        padding: 5rem 0;
        background: var(--bg-secondary);
    }

    .skill-category {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .category-title {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 2rem;
    }

    .category-title i {
        color: var(--primary-color);
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .skill-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        transition: var(--transition);
    }

    .skill-item:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .skill-icon {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .skill-info {
        flex: 1;
    }

    .skill-name {
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
        display: block;
    }

    .skill-bar {
        height: 6px;
        background: var(--border-color);
        border-radius: 3px;
        overflow: hidden;
    }

    .skill-progress {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        border-radius: 3px;
        transition: width 2s ease-out;
        width: 0;
    }

    /* Certifications Showcase */
    .certifications-showcase {
        padding: 5rem 0;
    }

    .certifications-slider {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .cert-item {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .cert-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.1), transparent);
        transition: var(--transition);
    }

    .cert-item:hover::before {
        left: 100%;
    }

    .cert-item:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .cert-badge {
        width: 80px;
        height: 80px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        margin: 0 auto 1.5rem;
    }

    .cert-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
    }

    .cert-issuer {
        color: var(--text-secondary);
        margin-bottom: 0.5rem;
    }

    .cert-date {
        font-size: 0.9rem;
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 1rem;
        display: block;
    }

    .cert-skills {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .cert-skills span {
        padding: 0.25rem 0.75rem;
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 15px;
        font-size: 0.8rem;
        color: var(--text-secondary);
    }

    /* Stats Section */
    .stats-section {
        padding: 5rem 0;
        background: var(--bg-secondary);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
    }

    .stat-card {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        transition: var(--transition);
    }

    .stat-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        margin: 0 auto 1rem;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
        display: block;
    }

    .stat-label {
        color: var(--text-secondary);
        font-weight: 500;
    }

    /* About CTA */
    .about-cta {
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
        margin-bottom: 2rem;
        opacity: 0.9;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .about-cta .btn-primary-large {
        padding: 1rem 2rem;
        border: 2px solid white;
        border-radius: 12px;
        background: white;
        color: var(--primary-color);
    }

    .about-cta .btn-primary:hover {
        background: rgba(255, 255, 255, 0.9);
    }

    .about-cta .btn-outline-large {
        padding: 1rem 2rem;
        border-radius: 12px;    
        border-color: white;
        color: white;
    }

    .about-cta .btn-outline-large:hover {
        background: white;
        color: var(--primary-color);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .about-hero-content {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 2rem;
        }

        .about-title {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 768px) {
        .about-title {
            font-size: 2rem;
        }

        .timeline {
            margin-left: 1rem;
        }

        .timeline::before {
            left: 15px;
        }

        .timeline-item {
            padding-left: 60px;
        }

        .timeline-marker {
            left: 0;
            width: 25px;
            height: 25px;
        }

        .education-grid {
            grid-template-columns: 1fr;
        }

        .skills-grid {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        .about-title {
            font-size: 1.8rem;
        }

        .cta-title {
            font-size: 2rem;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-out',
        once: true,
        offset: 100
    });

    // Typing animation for roles
    const typingRoles = document.querySelector('.typing-roles');
    const roles = ['Full-Stack Developer', 'Cybersecurity Expert', 'Cloud Architect', 'Problem Solver'];
    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeRole() {
        const currentRole = roles[roleIndex];
        
        if (isDeleting) {
            typingRoles.textContent = currentRole.substring(0, charIndex - 1);
            charIndex--;
            
            if (charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                setTimeout(typeRole, 500);
                return;
            }
        } else {
            typingRoles.textContent = currentRole.substring(0, charIndex + 1);
            charIndex++;
            
            if (charIndex === currentRole.length) {
                isDeleting = true;
                setTimeout(typeRole, 2000);
                return;
            }
        }
        
        setTimeout(typeRole, isDeleting ? 100 : 150);
    }

    // Start typing animation
    setTimeout(typeRole, 1000);

    // Animate skill progress bars
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progress = entry.target.dataset.progress;
                entry.target.style.width = progress + '%';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.skill-progress').forEach(progress => {
        skillObserver.observe(progress);
    });

    // Animate counter numbers
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.dataset.count);
                let current = 0;
                const increment = target / 50;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        entry.target.textContent = target + (target === 500 ? '+' : '');
                        clearInterval(timer);
                    } else {
                        entry.target.textContent = Math.floor(current) + (target === 500 ? '+' : '');
                    }
                }, 40);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.stat-number').forEach(number => {
        counterObserver.observe(number);
    });

    // Smooth scroll for internal links
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

    // Add stagger animation to timeline items
    document.querySelectorAll('.timeline-item').forEach((item, index) => {
        item.setAttribute('data-aos-delay', index * 200);
    });

    // Add floating animation to badges with random delays
    document.querySelectorAll('.badge-item').forEach((badge, index) => {
        badge.style.animationDelay = (index * 0.5 + Math.random()) + 's';
    });
</script>

<?php include 'includes/footer.php'; ?>
