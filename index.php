<?php
$pageTitle = "Harish N — Full-Stack PHP Developer & Backend Engineer | CodesByHarish";
$metaDescription = "Harish N is a Full-Stack PHP Developer from Bengaluru. Specializing in PHP, MySQL, REST APIs, Laravel, and secure backend engineering. Available for freelance & full-time roles.";
include 'includes/header.php';
?>

<!-- ===== TERMINAL BOOT LOADER ===== -->
<div id="intro-overlay" class="intro-overlay" role="dialog" aria-label="Portfolio loading" aria-modal="true">
  <!-- Split Screen Panels -->
  <div class="intro-door intro-door-left" aria-hidden="true"></div>
  <div class="intro-door intro-door-right" aria-hidden="true"></div>
  <div class="intro-door-line" aria-hidden="true"></div>

  <div class="terminal-container">
    <div class="terminal-header">
      <span class="terminal-title">codesbyharish.in — boot_seq_v2026</span>
      <div class="terminal-controls" aria-hidden="true">
        <span class="t-red"></span>
        <span class="t-yellow"></span>
        <span class="t-green"></span>
      </div>
    </div>
    <div class="terminal-body">
      <div id="terminal-text"></div>
      <span class="t-cursor" aria-hidden="true"></span>
    </div>
  </div>
</div>

<!-- ===== MAIN CONTENT ===== -->
<main id="main-content" class="main-content" style="display:none;" aria-label="Main content">

  <!-- ===== HERO ===== -->
  <section class="hero-section" id="home" aria-label="Introduction">
    <!-- Three.js canvas -->
    <canvas id="three-canvas" aria-hidden="true"></canvas>

    <!-- Subtle radial glow -->
    <div
      style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 60% 50%, rgba(99,102,241,0.08) 0%, transparent 70%);pointer-events:none;z-index:1;"
      aria-hidden="true"></div>

    <div class="container">
      <div class="hero-inner">

        <!-- Text Side -->
        <div class="hero-text">
          <div class="hero-label reveal">
            <span class="status-dot"></span>
            Available for new projects
          </div>

          <h1 class="hero-name reveal delay-1">
            I'm <span class="text-gradient">Harish N</span>
          </h1>

          <div class="hero-role-wrap reveal delay-2">
            <p class="hero-role">
              <i class="fas fa-code" style="color:var(--brand-primary);font-size:0.9em;" aria-hidden="true"></i>
              <span class="role-text" id="roleText">PHP Full-Stack Developer</span>
            </p>
          </div>

          <p class="hero-description reveal delay-3">
            Software Developer focused on secure backend engineering, database-driven systems, and clean REST APIs. I
            build production-ready PHP applications, integrate third-party APIs, and write code that scales — with
            security baked in from day one.
          </p>

          <div class="hero-actions reveal delay-4">
            <div class="btn-magnetic">
              <a href="projects.php" class="btn btn-primary">
                <i class="fas fa-folder-open" aria-hidden="true"></i>
                View My Work
              </a>
            </div>
            <div class="btn-magnetic">
              <a href="contact.php" class="btn btn-outline">
                <i class="fas fa-paper-plane" aria-hidden="true"></i>
                Hire Me
              </a>
            </div>
          </div>

          <!-- Stats -->
          <div class="hero-stats reveal delay-5">
            <div class="stat-block">
              <span class="stat-num" data-count="10" data-suffix="+">0+</span>
              <span class="stat-label">Projects Built</span>
            </div>
            <div class="stat-block">
              <span class="stat-num" data-count="5" data-suffix="+">0+</span>
              <span class="stat-label">Internships</span>
            </div>
            <div class="stat-block">
              <span class="stat-num" data-count="15" data-suffix="+">0+</span>
              <span class="stat-label">Certifications</span>
            </div>
            <div class="stat-block">
              <span class="stat-num" data-count="2" data-suffix="+">0+</span>
              <span class="stat-label">Years Exp.</span>
            </div>
          </div>
        </div>

        <!-- Visual Side -->
        <div class="hero-visual reveal-right delay-2">

          <!-- "Person emerges from circle" frame -->
          <div class="hero-frame-wrap" id="heroFrameWrap" aria-hidden="false">

            <!-- 1. Ambient glow (furthest back) -->
            <div class="hero-frame-glow" aria-hidden="true"></div>

            <!-- 2. Outer spinning conic ring -->
            <div class="hero-frame-ring-outer" aria-hidden="true"></div>

            <!-- 3. Inner counter-spinning ring -->
            <div class="hero-frame-ring-inner" aria-hidden="true"></div>

            <!-- 4. Solid circle disc (the "frame") with clipped inner photo -->
            <div class="hero-frame-circle" aria-hidden="true">
              <!-- Clipped image inside: bottom boundary is curved to circle shape -->
              <img
                src="assets/heronobg.png"
                alt="Harish N — Full-Stack PHP Developer"
                class="hero-photo hero-photo-clipped"
                width="260"
                height="390"
                fetchpriority="high"
              >
            </div>

            <!-- 5. Unclipped image on top: bottom cropped, top part pops out of circle -->
            <img
              src="assets/heronobg.png"
              alt="Harish N — Full-Stack PHP Developer"
              class="hero-photo hero-photo-unclipped"
              width="260"
              height="390"
              fetchpriority="high"
            >
          </div>

          <!-- Floating tech pills -->
          <div class="floating-pills" aria-label="Tech stack">
            <div class="floating-pill" style="--float-dur:2.8s;">
              <i class="devicon-php-plain" style="font-size:1.1rem;color:#7b7fb5;" aria-hidden="true"></i> PHP
            </div>
            <div class="floating-pill" style="--float-dur:3.2s;">
              <i class="devicon-mysql-plain" style="font-size:1.1rem;color:#4479a1;" aria-hidden="true"></i> MySQL
            </div>
            <div class="floating-pill" style="--float-dur:2.5s;">
              <i class="devicon-laravel-plain" style="font-size:1.1rem;color:#f55247;" aria-hidden="true"></i> Laravel
            </div>
            <div class="floating-pill" style="--float-dur:3.6s;">
              <i class="devicon-javascript-plain" style="font-size:1.1rem;color:#f7df1e;" aria-hidden="true"></i> JS
            </div>
            <div class="floating-pill" style="--float-dur:2.2s;">
              <i class="devicon-git-plain" style="font-size:1.1rem;color:#f05032;" aria-hidden="true"></i> Git
            </div>
            <div class="floating-pill" style="--float-dur:3.9s;">
              <i class="devicon-linux-plain" style="font-size:1.1rem;color:var(--text-secondary);"
                aria-hidden="true"></i> Linux
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== TECH STACK ORBIT ===== -->
  <section class="orbit-section" aria-label="Technology stack">
    <div class="orbit-track" aria-hidden="true">
      <?php
      $techs = [
        ['icon' => 'devicon-php-plain', 'color' => '#7b7fb5', 'name' => 'PHP'],
        ['icon' => 'devicon-mysql-plain', 'color' => '#4479a1', 'name' => 'MySQL'],
        ['icon' => 'devicon-laravel-plain', 'color' => '#f55247', 'name' => 'Laravel'],
        ['icon' => 'devicon-javascript-plain', 'color' => '#f7df1e', 'name' => 'JavaScript'],
        ['icon' => 'devicon-html5-plain', 'color' => '#e34f26', 'name' => 'HTML5'],
        ['icon' => 'devicon-css3-plain', 'color' => '#1572b6', 'name' => 'CSS3'],
        ['icon' => 'devicon-bootstrap-plain', 'color' => '#7952b3', 'name' => 'Bootstrap'],
        ['icon' => 'devicon-python-plain', 'color' => '#3776ab', 'name' => 'Python'],
        ['icon' => 'devicon-git-plain', 'color' => '#f05032', 'name' => 'Git'],
        ['icon' => 'devicon-linux-plain', 'color' => '#fcc624', 'name' => 'Linux'],
        ['icon' => 'devicon-firebase-plain', 'color' => '#ffca28', 'name' => 'Firebase'],
        ['icon' => 'devicon-docker-plain', 'color' => '#2496ed', 'name' => 'Docker'],
      ];
      // Duplicate for infinite scroll
      $allTechs = array_merge($techs, $techs);
      foreach ($allTechs as $t): ?>
        <div class="orbit-item">
          <i class="<?= $t['icon'] ?>" style="font-size:1.15rem;color:<?= $t['color'] ?>;"></i>
          <?= $t['name'] ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ===== SERVICES SECTION ===== -->
  <section class="section" id="services" aria-labelledby="services-heading">
    <div class="container">
      <div class="section-header">
        <div class="section-label reveal">What I Do</div>
        <h2 class="section-title reveal delay-1" id="services-heading">Core Capabilities</h2>
        <p class="section-desc reveal delay-2">From database design to deployment — I handle the full engineering stack
          with a security-first mindset.</p>
      </div>

      <div class="services-grid">
        <?php
        $services = [
          ['icon' => 'fas fa-server', 'name' => 'Backend Engineering', 'desc' => 'Architecting robust PHP backends with MVC patterns, role-based access control, secure session management, and optimized database queries.'],
          ['icon' => 'fas fa-plug', 'name' => 'REST API Development', 'desc' => 'Designing and documenting clean RESTful APIs with JWT authentication, input validation, rate limiting, and proper HTTP conventions.'],
          ['icon' => 'fas fa-database', 'name' => 'Database Design & Optimization', 'desc' => 'Relational schema design in MySQL/MariaDB with indexing strategies, query optimization, and migration management.'],
          ['icon' => 'fas fa-shopping-cart', 'name' => 'E-Commerce Platforms', 'desc' => 'Full-stack e-commerce with payment gateway integration (Razorpay), logistics APIs (Delhivery), inventory management, and admin dashboards.'],
          ['icon' => 'fas fa-shield-alt', 'name' => 'Secure Web Development', 'desc' => 'Implementing OWASP Top 10 defenses — SQL injection prevention, CSRF protection, XSS filtering, input sanitization, and secure auth flows.'],
          ['icon' => 'fas fa-chart-line', 'name' => 'Technical SEO & Analytics', 'desc' => 'Structured data markup, Core Web Vitals optimization, Google Analytics setup, robots.txt and sitemap engineering for search rankings.'],
        ];
        foreach ($services as $i => $s): ?>
          <article class="service-item pop-construct card-glow" style="transition-delay: <?= $i * 0.07 ?>s;">
            <div class="service-icon-wrap">
              <i class="<?= $s['icon'] ?>" aria-hidden="true"></i>
            </div>
            <h3 class="service-name"><?= $s['name'] ?></h3>
            <p class="service-desc"><?= $s['desc'] ?></p>
          </article>
        <?php endforeach; ?>
      </div>

      <div style="text-align:center; margin-top:2.5rem;" class="reveal">
        <a href="services.php" class="btn btn-outline">
          <i class="fas fa-arrow-right" aria-hidden="true"></i>
          All Services & Pricing
        </a>
      </div>
    </div>
  </section>

  <!-- ===== FEATURED PROJECTS ===== -->
  <section class="section" style="background: var(--col-surface);" id="featured-projects"
    aria-labelledby="projects-heading">
    <div class="container">
      <div class="section-header">
        <div class="section-label reveal">Portfolio</div>
        <h2 class="section-title reveal delay-1" id="projects-heading">Featured Projects</h2>
        <p class="section-desc reveal delay-2">Real-world systems built from scratch — e-commerce, LMS platforms, and
          web apps in production.</p>
      </div>

      <div class="projects-grid">
        <?php
        $projects = [
          [
            'title' => 'EliteArtsss — Jewelry E-Commerce',
            'desc' => 'Full-stack luxury jewelry e-commerce platform with Razorpay payments, Delhivery logistics API, order tracking, and admin dashboard. Built from scratch in PHP & MySQL.',
            'tags' => ['PHP', 'MySQL', 'Razorpay API', 'Delhivery API', 'Bootstrap'],
            'category' => 'ecommerce',
            'img' => 'assets/elitearts.jpeg',
            'github' => '#',
            'live' => '#',
            'period' => 'Mar – Apr 2025',
          ],
          [
            'title' => 'QwickLearn — LMS Platform',
            'desc' => 'Online learning platform supporting video lectures, quizzes, assignments, progress tracking, and discussion forums. Integrated Firebase for real-time features.',
            'tags' => ['PHP', 'MySQL', 'Firebase', 'JavaScript', 'Bootstrap'],
            'category' => 'edtech',
            'img' => 'assets/quicklearn.png',
            'github' => 'https://github.com/harishprp370/QwickLearn-A-online-Learning-Platform',
            'live' => '#',
            'period' => 'Apr – Jun 2024',
          ],
          [
            'title' => 'Vivekananda Techno School — Website',
            'desc' => 'Professional institutional website with faculty directory, news announcements, event listings, student portal, and admin CMS. Fully responsive.',
            'tags' => ['PHP', 'MySQL', 'Bootstrap', 'PhpMyAdmin'],
            'category' => 'fullstack',
            'img' => 'assets/vts.png',
            'github' => '#',
            'live' => '#',
            'period' => 'Feb – Apr 2025',
          ],
          [
            'title' => 'ZetaRise — Digital Agency Portal',
            'desc' => 'Corporate digital marketing and IT consulting agency website with CRM lead intake, dynamic case studies, schema-optimized SEO structure, and analytics dashboard.',
            'tags' => ['PHP', 'MySQL', 'SEO', 'Google Analytics'],
            'category' => 'fullstack',
            'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=380&fit=crop',
            'github' => '#',
            'live' => 'https://zetarise.in/',
            'period' => 'Dec 2024 – Feb 2025',
          ],
        ];
        foreach ($projects as $i => $p): ?>
          <article class="project-card card-tilt pop-construct" style="transition-delay:<?= $i * 0.1 ?>s;"
            data-category="<?= $p['category'] ?>">
            <div class="project-img-wrap">
              <img src="<?= $p['img'] ?>" alt="<?= $p['title'] ?> screenshot" loading="lazy" width="340" height="200">
              <div class="project-overlay" aria-hidden="true"></div>
              <div class="project-category-badge">
                <span class="chip"><?= ucfirst($p['category']) ?></span>
              </div>
            </div>
            <div class="project-body">
              <h3 class="project-title"><?= $p['title'] ?></h3>
              <p class="project-excerpt"><?= $p['desc'] ?></p>
              <div class="project-chips" aria-label="Tech stack">
                <?php foreach (array_slice($p['tags'], 0, 4) as $tag): ?>
                  <span class="chip"><?= $tag ?></span>
                <?php endforeach; ?>
              </div>
              <div class="project-footer">
                <?php if ($p['github'] !== '#'): ?>
                  <a href="<?= $p['github'] ?>" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i class="fab fa-github" aria-hidden="true"></i> Code
                  </a>
                <?php endif; ?>
                <?php if ($p['live'] !== '#'): ?>
                  <a href="<?= $p['live'] ?>" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i class="fas fa-external-link-alt" aria-hidden="true"></i> Live Demo
                  </a>
                <?php endif; ?>
                <span class="project-link"
                  style="margin-left:auto;font-size:0.75rem;color:var(--text-muted);"><?= $p['period'] ?></span>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <div style="text-align:center; margin-top:2.5rem;" class="reveal">
        <a href="projects.php" class="btn btn-outline">
          <i class="fas fa-folder" aria-hidden="true"></i>
          All Projects
        </a>
      </div>
    </div>
  </section>

  <!-- ===== CERTIFICATIONS MARQUEE ===== -->
  <section class="certs-section" aria-label="Certifications">
    <div class="section-label reveal" style="justify-content:center;margin-bottom:1.5rem;">Credentials & Certifications
    </div>
    <div class="cert-track" aria-hidden="true">
      <?php
      $certs = [
        ['name' => 'Cybersecurity Analyst', 'issuer' => 'Tata Group / Forage'],
        ['name' => 'MITRE ATT&CK SOC Assessments', 'issuer' => 'Cybrary'],
        ['name' => 'jq & Bash Scripting', 'issuer' => 'EC-Council'],
        ['name' => 'AI for India 2.0', 'issuer' => 'HCL GUVI'],
        ['name' => 'Python Programming for AI', 'issuer' => 'HCL GUVI'],
        ['name' => 'Face Recognition with Python', 'issuer' => 'HCL GUVI'],
        ['name' => 'R Programming', 'issuer' => 'Great Learning'],
        ['name' => 'Data Science & ML with R', 'issuer' => 'Udemy'],
        ['name' => 'CSS Advanced', 'issuer' => 'Udemy'],
        ['name' => 'Linux Networking', 'issuer' => 'Udemy'],
        ['name' => 'HTML5 Advanced', 'issuer' => 'Udemy'],
        ['name' => 'Guinness World Record', 'issuer' => 'AICTE'],
      ];
      $allCerts = array_merge($certs, $certs); // duplicate for infinite
      foreach ($allCerts as $c): ?>
        <div class="cert-item">
          <i class="fas fa-certificate" style="color:var(--brand-warm);font-size:0.8rem;" aria-hidden="true"></i>
          <span><?= $c['name'] ?></span>
          <span class="cert-issuer">· <?= $c['issuer'] ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ===== CTA SECTION ===== -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container" style="text-align:center; max-width:700px;">
      <div class="section-label reveal" style="justify-content:center;">Let's Build Together</div>
      <h2 class="section-title reveal delay-1" id="cta-heading" style="margin-bottom:1rem;">
        Open to <span class="text-gradient">Freelance & Full-Time</span> Roles
      </h2>
      <p class="section-desc reveal delay-2" style="margin:0 auto 2rem;">
        Looking for a PHP developer who writes clean, secure, and documented code? I'm available for backend projects,
        API development, and full-stack web apps.
      </p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;" class="reveal delay-3">
        <div class="btn-magnetic">
          <a href="contact.php" class="btn btn-primary">
            <i class="fas fa-handshake" aria-hidden="true"></i>
            Start a Project
          </a>
        </div>
        <div class="btn-magnetic">
          <a href="about.php" class="btn btn-ghost">
            <i class="fas fa-user" aria-hidden="true"></i>
            About Me
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- Role cycling script -->
<script>
  (function () {
    const roles = [
      'PHP Full-Stack Developer',
      'Backend Engineer',
      'REST API Architect',
      'Laravel Developer',
      'Database Engineer'
    ];
    let i = 0;
    const el = document.getElementById('roleText');
    if (!el) return;

    function cycle() {
      el.style.opacity = '0';
      el.style.transform = 'translateY(10px)';
      el.style.transition = 'opacity 0.3s, transform 0.3s';
      setTimeout(() => {
        i = (i + 1) % roles.length;
        el.textContent = roles[i];
        el.style.opacity = '1';
        el.style.transform = 'translateY(0)';
      }, 320);
    }

    setInterval(cycle, 2800);
  })();
</script>

<?php include 'includes/footer.php'; ?>