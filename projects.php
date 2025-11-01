<?php 
$pageTitle = "Projects - CodesByHarish";
$metaDescription = "Explore the diverse range of projects by CodesByHarish, showcasing expertise in web development, cybersecurity, AI, and more. Discover innovative solutions and creative implementations across various domains.";
include 'includes/header.php'; ?>

<!-- Main Content -->
<main class="main-content">
    <!-- Projects Hero Section -->
    <section class="projects-hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <span class="section-subtitle">Portfolio</span>
                <h1 class="hero-title">My Creative <span class="highlight">Projects</span></h1>
                <p class="hero-description">
                    Explore my journey through innovative web development, cybersecurity solutions, 
                    and cutting-edge technology implementations. Each project represents a unique 
                    challenge and creative solution.
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number" data-count="20">0</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-count="15">0</span>
                        <span class="stat-label">Technologies Used</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-count="100">0</span>
                        <span class="stat-label">Happy Clients</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="code-preview">
                    <div class="code-header">
                        <div class="window-controls">
                            <span class="control close"></span>
                            <span class="control minimize"></span>
                            <span class="control maximize"></span>
                        </div>
                        <span class="file-name">projects.php</span>
                    </div>
                    <div class="code-content">
                        <div class="code-line"><span class="keyword">&lt;?php</span></div>
                        <div class="code-line"><span class="comment">// Building amazing projects</span></div>
                        <div class="code-line"><span class="keyword">class</span> <span class="class">Developer</span> {</div>
                        <div class="code-line">&nbsp;&nbsp;<span class="property">$skills</span> = [<span class="string">'PHP'</span>, <span class="string">'Python'</span>, <span class="string">'Security'</span>];</div>
                        <div class="code-line">}</div>
                        <div class="code-line"><span class="keyword">?&gt;</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Filter -->
    <section class="projects-filter">
        <div class="container">
            <div class="filter-controls" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
                <button class="filter-btn" data-filter="education">Educational</button>
                <button class="filter-btn" data-filter="security">Security</button>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="projects-grid-section">
        <div class="container">
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

                <!-- QwickLearn Project -->
                <div class="project-card" data-category="education web" data-aos="zoom-in" data-aos-delay="100">
                    <div class="project-image">
                        <img src="assets/quicklearn.png" alt="QwickLearn Platform" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://github.com/harishprp370/QwickLearn-A-online-Learning-Platform" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="qwicklearn">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">QwickLearn Online Platform</h3>
                        <p class="project-description">
                            Interactive learning management system with video lectures, quizzes, 
                            progress tracking, and discussion forums for enhanced education.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag html">HTML5</span>
                            <span class="tech-tag js">JavaScript</span>
                            <span class="tech-tag firebase">Firebase</span>
                            <span class="tech-tag php">PHP</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Apr 2024 - Jun 2024
                            </span>
                            <span class="project-type">Education</span>
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

                <!-- Security Project -->
                <div class="project-card" data-category="security" data-aos="zoom-in" data-aos-delay="300">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&h=400&fit=crop&auto=format&q=80" alt="Security Project" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <button class="project-link view-details" data-project="security">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">IAM Security Framework</h3>
                        <p class="project-description">
                            Identity and Access Management solution with custom authentication, 
                            risk assessment, and security monitoring capabilities.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag security">IAM</span>
                            <span class="tech-tag python">Python</span>
                            <span class="tech-tag linux">Linux</span>
                            <span class="tech-tag owasp">OWASP</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Jan 2024 - Feb 2024
                            </span>
                            <span class="project-type">Security</span>
                        </div>
                    </div>
                </div>

                <!-- Face Recognition Project -->
                <div class="project-card" data-category="web" data-aos="zoom-in" data-aos-delay="400">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=600&h=400&fit=crop&auto=format&q=80" alt="Face Recognition" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="facerecognition">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Face Recognition Application</h3>
                        <p class="project-description">
                            AI-powered face recognition system built with Python for 
                            security applications and user authentication.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag python">Python</span>
                            <span class="tech-tag ai">AI/ML</span>
                            <span class="tech-tag opencv">OpenCV</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Apr 2021
                            </span>
                            <span class="project-type">AI/ML</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Website -->
                <div class="project-card" data-category="web" data-aos="zoom-in" data-aos-delay="500">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600&h=400&fit=crop&auto=format&q=80" alt="Portfolio Website" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <button class="project-link view-details" data-project="portfolio">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">CodeByHarish Portfolio</h3>
                        <p class="project-description">
                            Modern, responsive portfolio website showcasing projects, 
                            skills, and professional journey with dark/light mode.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag php">PHP</span>
                            <span class="tech-tag css">CSS3</span>
                            <span class="tech-tag js">JavaScript</span>
                            <span class="tech-tag responsive">Responsive</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                2024 - Present
                            </span>
                            <span class="project-type">Portfolio</span>
                        </div>
                    </div>
                </div>

                <!-- VTech Teachers Training Center -->
                <div class="project-card" data-category="web education" data-aos="zoom-in" data-aos-delay="600">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&h=400&fit=crop&auto=format&q=80" alt="VTech Teachers Training Center" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://vtechteacherstrainingcenter.org/" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="https://github.com/harishprp370/vtechteacherstraining" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="vtech">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">VTech Teachers Training Center</h3>
                        <p class="project-description">
                            Professional training institute website for teacher certification programs, 
                            course management, and online enrollment system.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag php">PHP</span>
                            <span class="tech-tag mysql">MySQL</span>
                            <span class="tech-tag bootstrap">Bootstrap</span>
                            <span class="tech-tag responsive">Responsive</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Jan 2025 - Mar 2025
                            </span>
                            <span class="project-type">Educational</span>
                        </div>
                    </div>
                </div>

                <!-- Pragathi Pumps and Motors -->
                <div class="project-card" data-category="web ecommerce" data-aos="zoom-in" data-aos-delay="700">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&h=400&fit=crop&auto=format&q=80" alt="Pragathi Pumps and Motors" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://www.pragatipumps.com/" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <button class="project-link view-details" data-project="pragathi">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Pragathi Pumps & Motors</h3>
                        <p class="project-description">
                            Industrial equipment website with product catalog, specifications, 
                            and business inquiry system for pump and motor solutions.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag php">PHP</span>
                            <span class="tech-tag mysql">MySQL</span>
                            <span class="tech-tag bootstrap">Bootstrap</span>
                            <span class="tech-tag seo">SEO</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Nov 2024 - Jan 2025
                            </span>
                            <span class="project-type">Industrial</span>
                        </div>
                    </div>
                </div>

                <!-- Kali Linux Setup Tool -->
                <div class="project-card" data-category="security" data-aos="zoom-in" data-aos-delay="800">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1629654297299-c8506221ca97?w=600&h=400&fit=crop&auto=format&q=80" alt="Kali Linux Setup" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://github.com/harishprp370/Kali-setup" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="kalisetup">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Kali Linux Auto Setup</h3>
                        <p class="project-description">
                            Automated setup script for Kali Linux environments with essential 
                            security tools, configurations, and penetration testing utilities.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag bash">Bash</span>
                            <span class="tech-tag linux">Linux</span>
                            <span class="tech-tag security">Security</span>
                            <span class="tech-tag automation">Automation</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Sep 2024
                            </span>
                            <span class="project-type">Security Tool</span>
                        </div>
                    </div>
                </div>

                <!-- Termux Setup Tool -->
                <div class="project-card" data-category="security" data-aos="zoom-in" data-aos-delay="900">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?w=600&h=400&fit=crop&auto=format&q=80" alt="Termux Setup" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://github.com/harishprp370/Termux-setup" class="project-link" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <button class="project-link view-details" data-project="termuxsetup">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Termux Auto Setup</h3>
                        <p class="project-description">
                            Android Termux environment setup script with hacking tools, 
                            development utilities, and security testing frameworks.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag bash">Bash</span>
                            <span class="tech-tag android">Android</span>
                            <span class="tech-tag termux">Termux</span>
                            <span class="tech-tag security">Security</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Oct 2024
                            </span>
                            <span class="project-type">Mobile Tool</span>
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

                <!-- ZetaRise Digital Marketing -->
                <div class="project-card" data-category="web" data-aos="zoom-in" data-aos-delay="1100">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop&auto=format&q=80" alt="ZetaRise Digital Marketing" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://zetarise.in/" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <button class="project-link view-details" data-project="zetarise">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">ZetaRise Digital Agency</h3>
                        <p class="project-description">
                            Digital marketing and IT consulting company website with service 
                            portfolios, client testimonials, and lead generation system.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag php">PHP</span>
                            <span class="tech-tag mysql">MySQL</span>
                            <span class="tech-tag bootstrap">Bootstrap</span>
                            <span class="tech-tag marketing">Digital Marketing</span>
                        </div>
                        <div class="project-meta">
                            <span class="project-date">
                                <i class="fas fa-calendar"></i>
                                Dec 2024 - Feb 2025
                            </span>
                            <span class="project-type">Business</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-showcase">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Technical Arsenal</span>
                <h2 class="section-title">Skills & Technologies</h2>
                <p class="section-description">
                    A comprehensive overview of my technical expertise and proficiency levels
                </p>
            </div>

            <div class="skills-container">
                <!-- Programming Languages -->
                <div class="skill-category" data-aos="slide-up">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="category-title">Programming Languages</h3>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">PHP</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Python</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">JavaScript</span>
                                <span class="skill-percentage">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">C/C++</span>
                                <span class="skill-percentage">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web Technologies -->
                <div class="skill-category" data-aos="slide-up" data-aos-delay="100">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="category-title">Web Technologies</h3>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">HTML5/CSS3</span>
                                <span class="skill-percentage">95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="95"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Bootstrap</span>
                                <span class="skill-percentage">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Laravel</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">API Integration</span>
                                <span class="skill-percentage">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Database & Cloud -->
                <div class="skill-category" data-aos="slide-up" data-aos-delay="200">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="category-title">Database & Cloud</h3>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">MySQL</span>
                                <span class="skill-percentage">88%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="88"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Google Cloud Platform</span>
                                <span class="skill-percentage">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Firebase</span>
                                <span class="skill-percentage">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Server Administration</span>
                                <span class="skill-percentage">70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security & Tools -->
                <div class="skill-category" data-aos="slide-up" data-aos-delay="300">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="category-title">Security & Tools</h3>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Cybersecurity</span>
                                <span class="skill-percentage">82%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="82"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Penetration Testing</span>
                                <span class="skill-percentage">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Linux/Bash</span>
                                <span class="skill-percentage">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span class="skill-name">Git/GitHub</span>
                                <span class="skill-percentage">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="projects-cta">
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Let's Build Something Amazing Together</h2>
                <p class="cta-description">
                    Ready to bring your ideas to life? I'm always excited to work on new challenges 
                    and create innovative solutions.
                </p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary-large">
                        <i class="fas fa-rocket"></i>
                        Start a Project
                    </a>
                    <a href="about.php" class="btn btn-outline-large">
                        <i class="fas fa-user"></i>
                        More About Me
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Project Detail Modal -->
<div class="modal" id="projectModal">
    <div class="modal-content">
        <button class="modal-close" id="closeModal">
            <i class="fas fa-times"></i>
        </button>
        <div class="modal-body" id="modalBody">
            <!-- Dynamic content will be loaded here -->
        </div>
    </div>
</div>

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

    /* Projects Hero */
    .projects-hero {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
        position: relative;
        overflow: hidden;
    }

    .projects-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 80%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .projects-hero .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        color: var(--text-primary);
    }

    .highlight {
        color: var(--primary-color);
        position: relative;
    }

    .highlight::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        border-radius: 2px;
    }

    .hero-description {
        font-size: 1.1rem;
        color: var(--text-secondary);
        line-height: 1.7;
        margin-bottom: 2rem;
    }

    .hero-stats {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
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

    /* Code Preview */
    .hero-visual {
        position: relative;
    }

    .code-preview {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .code-header {
        background: var(--bg-secondary);
        padding: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        border-bottom: 1px solid var(--border-color);
    }

    .window-controls {
        display: flex;
        gap: 0.5rem;
    }

    .control {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .control.close { background: #ff5f56; }
    .control.minimize { background: #ffbd2e; }
    .control.maximize { background: #27ca3f; }

    .file-name {
        color: var(--text-secondary);
        font-size: 0.9rem;
    }

    .code-content {
        padding: 1.5rem;
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .code-line {
        margin-bottom: 0.5rem;
    }

    .keyword { color: #e06c75; }
    .class { color: #61afef; }
    .property { color: #d19a66; }
    .string { color: #98c379; }
    .comment { color: #5c6370; font-style: italic; }

    /* Project Filter */
    .projects-filter {
        padding: 3rem 0 2rem;
        background: var(--bg-secondary);
    }

    .filter-controls {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .filter-btn {
        padding: 0.75rem 1.5rem;
        background: var(--bg-primary);
        border: 2px solid var(--border-color);
        border-radius: 25px;
        color: var(--text-secondary);
        font-weight: 500;
        cursor: pointer;
        transition: var(--transition);
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
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

    .tech-tag.php { background: rgba(119, 123, 180, 0.1); color: #777bb4; border-color: #777bb4; }
    .tech-tag.python { background: rgba(52, 101, 164, 0.1); color: #3465a4; border-color: #3465a4; }
    .tech-tag.mysql { background: rgba(0, 117, 143, 0.1); color: #00758f; border-color: #00758f; }
    .tech-tag.bootstrap { background: rgba(86, 61, 124, 0.1); color: #563d7c; border-color: #563d7c; }
    .tech-tag.js { background: rgba(247, 223, 30, 0.1); color: #f7df1e; border-color: #f7df1e; }
    .tech-tag.html { background: rgba(227, 76, 38, 0.1); color: #e34c26; border-color: #e34c26; }
    .tech-tag.css { background: rgba(21, 114, 182, 0.1); color: #1572b6; border-color: #1572b6; }
    .tech-tag.firebase { background: rgba(255, 202, 40, 0.1); color: #ffca28; border-color: #ffca28; }
    .tech-tag.api { background: rgba(37, 99, 235, 0.1); color: var(--primary-color); border-color: var(--primary-color); }
    .tech-tag.security { background: rgba(239, 68, 68, 0.1); color: #ef4444; border-color: #ef4444; }
    .tech-tag.ai { background: rgba(16, 185, 129, 0.1); color: #10b981; border-color: #10b981; }
    .tech-tag.linux { background: rgba(0, 0, 0, 0.1); color: #000; border-color: #000; }
    .tech-tag.owasp { background: rgba(0, 0, 0, 0.1); color: #000; border-color: #000; }
    .tech-tag.opencv { background: rgba(92, 184, 92, 0.1); color: #5cb85c; border-color: #5cb85c; }
    .tech-tag.responsive { background: rgba(111, 66, 193, 0.1); color: #6f42c1; border-color: #6f42c1; }
    .tech-tag.phpmyadmin { background: rgba(232, 62, 140, 0.1); color: #e83e8c; border-color: #e83e8c; }
    .tech-tag.bash { background: rgba(76, 175, 80, 0.1); color: #4caf50; border-color: #4caf50; }
    .tech-tag.android { background: rgba(76, 175, 80, 0.1); color: #4caf50; border-color: #4caf50; }
    .tech-tag.termux { background: rgba(33, 150, 243, 0.1); color: #2196f3; border-color: #2196f3; }
    .tech-tag.automation { background: rgba(156, 39, 176, 0.1); color: #9c27b0; border-color: #9c27b0; }
    .tech-tag.pentesting { background: rgba(244, 67, 54, 0.1); color: #f44336; border-color: #f44336; }
    .tech-tag.research { background: rgba(255, 152, 0, 0.1); color: #ff9800; border-color: #ff9800; }
    .tech-tag.marketing { background: rgba(233, 30, 99, 0.1); color: #e91e63; border-color: #e91e63; }
    .tech-tag.seo { background: rgba(103, 58, 183, 0.1); color: #673ab7; border-color: #673ab7; }

    .project-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid var(--border-color);
    }

    .project-date {
        color: var(--text-secondary);
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .project-type {
        padding: 0.25rem 0.75rem;
        background: var(--primary-color);
        color: white;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    /* Skills Showcase */
    .skills-showcase {
        padding: 5rem 0;
        background: var(--bg-primary);
    }

    .skills-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .skill-category {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        transition: var(--transition);
    }

    .skill-category:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .category-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .category-icon {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
    }

    .category-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--text-primary);
    }

    .skills-list {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .skill-item {
        width: 100%;
    }

    .skill-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .skill-name {
        font-weight: 500;
        color: var(--text-primary);
    }

    .skill-percentage {
        font-size: 0.9rem;
        color: var(--primary-color);
        font-weight: 600;
    }

    .skill-bar {
        height: 8px;
        background: var(--border-color);
        border-radius: 4px;
        overflow: hidden;
    }

    .skill-progress {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        border-radius: 4px;
        width: 0;
        transition: width 2s ease-out;
    }

    /* Projects CTA */
    .projects-cta {
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

    .projects-cta .btn-primary-large {
        background: white;
        color: var(--primary-color);
    }

    .projects-cta .btn-primary-large:hover {
        background: rgba(255, 255, 255, 0.9);
    }

    .projects-cta .btn-outline-large {
        border-color: white;
        color: white;
    }

    .projects-cta .btn-outline-large:hover {
        background: white;
        color: var(--primary-color);
    }

    /* Modal */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
    }

    .modal.active {
        opacity: 1;
        visibility: visible;
    }

    .modal-content {
        background: var(--bg-primary);
        border-radius: 16px;
        max-width: 800px;
        width: 90%;
        max-height: 80vh;
        overflow-y: auto;
        position: relative;
        transform: scale(0.9);
        transition: var(--transition);
    }

    .modal.active .modal-content {
        transform: scale(1);
    }

    .modal-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
    }

    .modal-body {
        padding: 2rem;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .projects-hero .container {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 2rem;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-stats {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }

        .projects-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .skills-container {
            grid-template-columns: 1fr;
        }

        .filter-controls {
            flex-direction: column;
            align-items: center;
        }

        .hero-stats {
            flex-direction: column;
            gap: 1rem;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 1.8rem;
        }

        .cta-title {
            font-size: 2rem;
        }

        .project-info {
            padding: 1.5rem;
        }

        .skill-category {
            padding: 1.5rem;
        }
    }

    /* Animation Classes */
    .slide-up {
        transform: translateY(50px);
        opacity: 0;
    }

    .slide-up.aos-animate {
        transform: translateY(0);
        opacity: 1;
    }

    /* Filter Animation */
    .project-card.hide {
        opacity: 0;
        transform: scale(0.8);
        pointer-events: none;
    }

    .project-card.show {
        opacity: 1;
        transform: scale(1);
        pointer-events: all;
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

    // Counter animation
    const counters = document.querySelectorAll('.stat-number');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.count);
                let current = 0;
                const increment = target / 50;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 40);
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

    // Skill progress animation
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progress = entry.target;
                const width = progress.dataset.width;
                setTimeout(() => {
                    progress.style.width = width + '%';
                }, 200);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.skill-progress').forEach(progress => {
        skillObserver.observe(progress);
    });

    // Project filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            projectCards.forEach(card => {
                const categories = card.dataset.category;
                
                if (filter === 'all' || categories.includes(filter)) {
                    card.classList.remove('hide');
                    card.classList.add('show');
                } else {
                    card.classList.remove('show');
                    card.classList.add('hide');
                }
            });
        });
    });

    // Project modal functionality
    const modal = document.getElementById('projectModal');
    const modalBody = document.getElementById('modalBody');
    const closeModal = document.getElementById('closeModal');
    const viewDetailsBtns = document.querySelectorAll('.view-details');

    const projectDetails = {
        eliteartsss: {
            title: 'EliteArtsss Jewelry Platform',
            description: 'A luxury e-commerce platform built for EliteArtsss jewelry brand featuring secure payment processing, real-time shipping integration, and elegant user interface.',
            features: [
                'Razorpay payment gateway integration',
                'Delhivery API for shipping and logistics',
                'Responsive design with mobile optimization',
                'Admin panel for inventory management',
                'User authentication and profile management',
                'Product catalog with advanced filtering'
            ],
            technologies: ['PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'API Integration'],
            timeline: 'Mar 2025 - Apr 2025',
            role: 'Full-Stack Developer',
            challenges: 'Implementing secure payment processing and real-time shipping tracking while maintaining elegant UI/UX design.',
            github: '#',
            live: '#'
        },
        qwicklearn: {
            title: 'QwickLearn Online Platform',
            description: 'An interactive learning management system designed to provide engaging educational content with comprehensive tracking and social features.',
            features: [
                'Video lecture streaming',
                'Interactive quizzes and assessments',
                'Progress tracking dashboard',
                'Discussion forums',
                'Course enrollment system',
                'Instructor-student communication'
            ],
            technologies: ['HTML5', 'JavaScript', 'Firebase', 'PHP', 'MySQL'],
            timeline: 'Apr 2024 - Jun 2024',
            role: 'Lead Developer',
            challenges: 'Creating scalable video streaming solution and implementing real-time communication features.',
            github: 'https://github.com/harishprp370/QwickLearn-A-online-Learning-Platform',
            live: '#'
        },
        school: {
            title: 'Vivekananda Techno School Website',
            description: 'Professional educational institution website with comprehensive management features and interactive elements.',
            features: [
                'Student information system',
                'Admin dashboard',
                'Event management',
                'Gallery and news sections',
                'Contact and inquiry forms',
                'Responsive design'
            ],
            technologies: ['PHP', 'MySQL', 'Bootstrap', 'HTML5', 'CSS3'],
            timeline: 'Feb 2025 - Apr 2025',
            role: 'Web Developer',
            challenges: 'Implementing complex admin functionality while maintaining simple user interface for different user roles.',
            github: '#',
            live: '#'
        },
        security: {
            title: 'IAM Security Framework',
            description: 'Identity and Access Management solution with advanced security features and risk assessment capabilities.',
            features: [
                'Custom authentication system',
                'Role-based access control',
                'Security risk assessment',
                'Audit logging and monitoring',
                'Multi-factor authentication',
                'Compliance reporting'
            ],
            technologies: ['Python', 'Linux', 'OWASP', 'Security Frameworks'],
            timeline: 'Jan 2024 - Feb 2024',
            role: 'Security Analyst',
            challenges: 'Designing secure authentication system while maintaining usability and implementing comprehensive audit trails.',
            github: '#',
            live: '#'
        },
        facerecognition: {
            title: 'Face Recognition Application',
            description: 'AI-powered face recognition system built with Python for security applications and user authentication.',
            features: [
                'Real-time face detection',
                'User enrollment system',
                'Security logging',
                'Multiple face recognition',
                'Performance optimization',
                'Cross-platform compatibility'
            ],
            technologies: ['Python', 'OpenCV', 'Machine Learning', 'AI'],
            timeline: 'Apr 2021',
            role: 'AI Developer',
            challenges: 'Optimizing face recognition accuracy and implementing real-time processing capabilities.',
            github: '#',
            live: '#'
        },
        portfolio: {
            title: 'CodeByHarish Portfolio',
            description: 'Modern, responsive portfolio website showcasing professional work with advanced features and smooth animations.',
            features: [
                'Dark/Light mode toggle',
                'Responsive design',
                'Project showcase',
                'Contact form integration',
                'SEO optimization',
                'Multi-language support'
            ],
            technologies: ['PHP', 'CSS3', 'JavaScript', 'Responsive Design'],
            timeline: '2024 - Present',
            role: 'Full-Stack Developer',
            challenges: 'Creating engaging user experience while maintaining professional appearance and optimal performance.',
            github: '#',
            live: '#'
        },
        vtech: {
            title: 'VTech Teachers Training Center',
            description: 'Comprehensive training institute website designed for professional teacher certification programs with modern course management and enrollment systems.',
            features: [
                'Course catalog and detailed descriptions',
                'Online enrollment and registration system',
                'Student progress tracking',
                'Certificate generation and management',
                'Instructor profiles and expertise',
                'Contact and inquiry management',
                'Responsive design for all devices'
            ],
            technologies: ['PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'HTML5/CSS3'],
            timeline: 'Jan 2025 - Mar 2025',
            role: 'Full-Stack Developer',
            challenges: 'Creating an intuitive enrollment system while managing complex course hierarchies and certification tracking.',
            github: 'https://github.com/harishprp370/vtechteacherstraining',
            live: 'https://vtechteacherstrainingcenter.org/'
        },
        pragathi: {
            title: 'Pragathi Pumps & Motors',
            description: 'Industrial equipment company website showcasing comprehensive pump and motor solutions with detailed product specifications and business inquiry systems.',
            features: [
                'Comprehensive product catalog',
                'Technical specifications database',
                'Business inquiry and quotation system',
                'Service area mapping',
                'Customer testimonials',
                'SEO optimized content',
                'Mobile-responsive design'
            ],
            technologies: ['PHP', 'MySQL', 'Bootstrap', 'SEO Optimization'],
            timeline: 'Nov 2024 - Jan 2025',
            role: 'Web Developer',
            challenges: 'Organizing complex industrial product data while maintaining user-friendly navigation and implementing effective SEO strategies.',
            github: '#',
            live: 'https://www.pragatipumps.com/'
        },
        kalisetup: {
            title: 'Kali Linux Auto Setup',
            description: 'Automated setup script that configures Kali Linux environment with essential security tools, custom configurations, and penetration testing utilities for cybersecurity professionals.',
            features: [
                'Automated tool installation',
                'System configuration optimization',
                'Security tool updates',
                'Custom environment setup',
                'Penetration testing utilities',
                'Network security tools',
                'One-command installation'
            ],
            technologies: ['Bash Scripting', 'Linux Administration', 'Security Tools', 'Automation'],
            timeline: 'Sep 2024',
            role: 'Security Tool Developer',
            challenges: 'Creating a robust installation script that handles various Kali Linux versions and manages dependency conflicts while ensuring security.',
            github: 'https://github.com/harishprp370/Kali-setup',
            live: '#'
        },
        termuxsetup: {
            title: 'Termux Auto Setup',
            description: 'Android Termux environment setup script that automatically installs hacking tools, development utilities, and security testing frameworks for mobile penetration testing.',
            features: [
                'Mobile hacking tools installation',
                'Development environment setup',
                'Security testing frameworks',
                'Network analysis tools',
                'Python and scripting environments',
                'Automated dependency management',
                'Android-specific optimizations'
            ],
            technologies: ['Bash Scripting', 'Android', 'Termux', 'Security Tools'],
            timeline: 'Oct 2024',
            role: 'Mobile Security Developer',
            challenges: 'Adapting Linux security tools for Android environment while managing limited system resources and package compatibility.',
            github: 'https://github.com/harishprp370/Termux-setup',
            live: '#'
        },
        tphish: {
            title: 'T-Phish Security Tool',
            description: 'Advanced social engineering and phishing simulation tool designed for security awareness training and authorized penetration testing in controlled environments.',
            features: [
                'Phishing page generation',
                'Social engineering templates',
                'Email campaign simulation',
                'Credential harvesting (for testing)',
                'Real-time monitoring dashboard',
                'Detailed reporting system',
                'Educational security awareness'
            ],
            technologies: ['Python', 'Web Technologies', 'Security Frameworks', 'Social Engineering'],
            timeline: 'Aug 2024',
            role: 'Security Researcher',
            challenges: 'Developing realistic phishing simulations while ensuring ethical use and implementing proper security awareness education.',
            github: 'https://github.com/harishprp370/T-Phish',
            live: '#'
        },
        zetarise: {
            title: 'ZetaRise Digital Agency',
            description: 'Professional digital marketing and IT consulting company website featuring comprehensive service portfolios, client success stories, and advanced lead generation systems.',
            features: [
                'Service portfolio showcase',
                'Client testimonials and case studies',
                'Lead generation and CRM integration',
                'Blog and content management',
                'Contact and consultation booking',
                'SEO and digital marketing optimization',
                'Analytics and performance tracking'
            ],
            technologies: ['PHP', 'MySQL', 'Bootstrap', 'Digital Marketing Tools', 'SEO'],
            timeline: 'Dec 2024 - Feb 2025',
            role: 'Full-Stack Developer & Digital Strategist',
            challenges: 'Creating a conversion-optimized website that effectively showcases digital marketing expertise while implementing advanced lead tracking systems.',
            github: '#',
            live: 'https://zetarise.in/'
        }
    };

    viewDetailsBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const project = btn.dataset.project;
            const details = projectDetails[project];

            if (details) {
                modalBody.innerHTML = `
                    <div class="project-detail">
                        <h2 class="project-detail-title">${details.title}</h2>
                        <p class="project-detail-description">${details.description}</p>
                        
                        <div class="project-detail-meta">
                            <div class="detail-item">
                                <strong>Timeline:</strong> ${details.timeline}
                            </div>
                            <div class="detail-item">
                                <strong>Role:</strong> ${details.role}
                            </div>
                        </div>

                        <h3>Key Features</h3>
                        <ul class="feature-list">
                            ${details.features.map(feature => `<li>${feature}</li>`).join('')}
                        </ul>

                        <h3>Technologies Used</h3>
                        <div class="tech-list">
                            ${details.technologies.map(tech => `<span class="tech-item">${tech}</span>`).join('')}
                        </div>

                        <h3>Challenge & Solution</h3>
                        <p class="challenge-text">${details.challenges}</p>

                        <div class="project-links-section">
                            ${details.github !== '#' ? `<a href="${details.github}" class="detail-link" target="_blank"><i class="fab fa-github"></i> View Code</a>` : ''}
                            ${details.live !== '#' ? `<a href="${details.live}" class="detail-link" target="_blank"><i class="fas fa-external-link-alt"></i> Live Demo</a>` : ''}
                        </div>
                    </div>
                `;

                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
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
</script>

<style>
    /* Additional Modal Styles */
    .project-detail {
        line-height: 1.6;
    }

    .project-detail-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 1rem;
    }

    .project-detail-description {
        color: var(--text-secondary);
        margin-bottom: 2rem;
        font-size: 1.1rem;
    }

    .project-detail-meta {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
        padding: 1rem;
        background: var(--bg-secondary);
        border-radius: 8px;
    }

    .detail-item {
        color: var(--text-secondary);
    }

    .detail-item strong {
        color: var(--text-primary);
    }

    .project-detail h3 {
        color: var(--text-primary);
        margin: 2rem 0 1rem;
        font-size: 1.2rem;
    }

    .feature-list {
        list-style: none;
        padding: 0;
    }

    .feature-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--border-color);
        position: relative;
        padding-left: 1.5rem;
    }

    .feature-list li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: bold;
    }

    .tech-list {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 1rem;
    }

    .tech-list .tech-item {
        padding: 0.5rem 1rem;
        background: var(--primary-color);
        color: white;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .challenge-text {
        color: var(--text-secondary);
        font-style: italic;
        margin-bottom: 2rem;
    }

    .project-links-section {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid var(--border-color);
    }

    .detail-link {
        padding: 0.75rem 1.5rem;
        background: var(--primary-color);
        color: white;
        text-decoration: none;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 500;
        transition: var(--transition);
    }

    .detail-link:hover {
        background: var(--secondary-color);
        transform: translateY(-2px);
    }
</style>

<?php include 'includes/footer.php'; ?>
