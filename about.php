<?php
$pageTitle = "About Harish N — PHP Developer & Backend Engineer | CodesByHarish";
$metaDescription = "Learn about Harish N — Full-Stack PHP Developer from Bengaluru. BCA (8.41 CGPA) + MCA Cyber Security (Jain University). Experience at SolarBee, PyGenicArc, CodeClause, VaultofCodes, Tata Group.";
include 'includes/header.php';
?>

<!-- ===== JSON-LD: BreadcrumbList ===== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Home","item":"https://codesbyharish.in"},
    {"@type":"ListItem","position":2,"name":"About","item":"https://codesbyharish.in/about.php"}
  ]
}
</script>

<main class="main-content" aria-label="About Harish N">

  <!-- ===== ABOUT HERO ===== -->
  <section class="about-hero section" aria-labelledby="about-heading">
    <div class="container" style="max-width:800px;">
      <img src="assets/heronobg.png" alt="Harish N — Full-Stack PHP Developer" class="about-avatar reveal" width="120"
        height="120">
      <div class="section-label reveal delay-1" style="justify-content:center;">About Me</div>
      <h1 class="section-title reveal delay-2" id="about-heading" style="margin-bottom:1rem;">
        Harish N — <span class="text-gradient">PHP Developer</span>
      </h1>
      <p class="section-desc reveal delay-3" style="margin:0 auto 1.5rem; max-width:640px; text-align:center;">
        Software Developer with a strong focus on secure web application development, backend engineering, and
        database-driven systems. I build PHP and JavaScript-based applications, design clean REST APIs, and deploy
        solutions on live servers — with OWASP best practices baked in throughout.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;" class="reveal delay-4">
        <a href="contact.php" class="btn btn-primary">
          <i class="fas fa-handshake" aria-hidden="true"></i> Hire Me
        </a>
        <a href="https://github.com/harishprp370" target="_blank" rel="noopener noreferrer" class="btn btn-ghost">
          <i class="fab fa-github" aria-hidden="true"></i> GitHub
        </a>
        <a href="mailto:harishprp370@gmail.com" class="btn btn-ghost">
          <i class="fas fa-envelope" aria-hidden="true"></i> Email Me
        </a>
      </div>
    </div>
  </section>

  <!-- ===== EXPERIENCE TIMELINE ===== -->
  <section class="section" style="background: var(--col-surface);" aria-labelledby="exp-heading">
    <div class="container">
      <div class="section-header">
        <div class="section-label reveal">Career</div>
        <h2 class="section-title reveal delay-1" id="exp-heading">Work Experience</h2>
      </div>

      <div class="timeline" role="list">

        <!-- SolarBee -->
        <article class="timeline-item" role="listitem">
          <div class="timeline-dot" aria-hidden="true"></div>
          <div class="timeline-date">Nov 2024 — Present · Full-time</div>
          <h3 class="timeline-role">Software Developer</h3>
          <p class="timeline-company">
            <i class="fas fa-building" style="font-size:0.8em;" aria-hidden="true"></i> SolarBee · Hybrid, India
          </p>
          <ul class="timeline-bullets" aria-label="Responsibilities">
            <li>Developed internal modules using PHP, MySQL, JS, and Bootstrap for operational workflows.</li>
            <li>Implemented secure login flows with role-based access control (RBAC) and session security.</li>
            <li>Performed code optimization and debugged API & DB-related issues across the application stack.</li>
            <li>Conducted vulnerability checks: input sanitization, CSRF protection, SQLi prevention.</li>
            <li>Trained non-technical staff on system workflows and secure usage practices.</li>
          </ul>
          <div style="margin-top:0.75rem;display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="chip">PHP</span><span class="chip">MySQL</span><span class="chip">JavaScript</span><span
              class="chip">Bootstrap</span><span class="chip">RBAC</span><span class="chip">CSRF</span>
          </div>
        </article>

        <!-- VaultofCodes -->
        <article class="timeline-item" role="listitem">
          <div class="timeline-dot" aria-hidden="true"></div>
          <div class="timeline-date">Sep 2024 — Oct 2024 · Internship · Remote</div>
          <h3 class="timeline-role">AI & Prompt Engineering Intern</h3>
          <p class="timeline-company">
            <i class="fas fa-building" style="font-size:0.8em;" aria-hidden="true"></i> VaultofCodes
          </p>
          <ul class="timeline-bullets" aria-label="Responsibilities">
            <li>Designed and tested structured prompt engineering pipelines for LLM-based workflows.</li>
            <li>Researched RAG (Retrieval-Augmented Generation) patterns for knowledge retrieval systems.</li>
          </ul>
          <div style="margin-top:0.75rem;display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="chip">Prompt Engineering</span><span class="chip">AI</span><span class="chip">LLMs</span>
          </div>
        </article>

        <!-- PyGenicArc -->
        <article class="timeline-item" role="listitem">
          <div class="timeline-dot" aria-hidden="true"></div>
          <div class="timeline-date">Apr 2024 — Jun 2024 · Internship</div>
          <h3 class="timeline-role">Web Development Intern</h3>
          <p class="timeline-company">
            <i class="fas fa-building" style="font-size:0.8em;" aria-hidden="true"></i> PyGenicArc
          </p>
          <ul class="timeline-bullets" aria-label="Responsibilities">
            <li>Built <strong>QwikLearn</strong> — a full-stack e-learning web app supporting quizzes, video lectures,
              and progress tracking.</li>
            <li>Integrated Firebase services for real-time data synchronization and authentication.</li>
            <li>Developed dynamic front-end modules with JavaScript and Bootstrap for responsive UX.</li>
            <li>Documented the complete project and published to GitHub with full README.</li>
          </ul>
          <div style="margin-top:0.75rem;display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="chip">PHP</span><span class="chip">Firebase</span><span class="chip">JavaScript</span><span
              class="chip">Bootstrap</span><span class="chip">MySQL</span>
          </div>
        </article>

        <!-- Tata Group -->
        <article class="timeline-item" role="listitem">
          <div class="timeline-dot" aria-hidden="true"></div>
          <div class="timeline-date">Jan 2024 — Feb 2024 · Job Simulation · Remote</div>
          <h3 class="timeline-role">Cybersecurity Analyst</h3>
          <p class="timeline-company">
            <i class="fas fa-building" style="font-size:0.8em;" aria-hidden="true"></i> Tata Group / Forage
          </p>
          <ul class="timeline-bullets" aria-label="Responsibilities">
            <li>Conducted Identity & Access Management (IAM) fundamentals and strategy assessments.</li>
            <li>Designed custom IAM solution architectures and evaluated platform integration approaches.</li>
            <li>Applied risk management and incident management frameworks in simulated enterprise environments.</li>
          </ul>
          <div style="margin-top:0.75rem;display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="chip">IAM</span><span class="chip">Risk Management</span><span class="chip">Incident
              Management</span>
          </div>
        </article>

        <!-- CodeClause -->
        <article class="timeline-item" role="listitem">
          <div class="timeline-dot" aria-hidden="true"></div>
          <div class="timeline-date">Aug 2023 — Sep 2023 · Internship · Remote</div>
          <h3 class="timeline-role">Python Development Intern</h3>
          <p class="timeline-company">
            <i class="fas fa-building" style="font-size:0.8em;" aria-hidden="true"></i> CodeClause
          </p>
          <ul class="timeline-bullets" aria-label="Responsibilities">
            <li>Built interactive Python desktop tools: Voice Assistant, Music Player, and Plagiarism Checker.</li>
            <li>Used tkinter for GUI development and speech recognition libraries for voice I/O.</li>
            <li>Published all projects to GitHub (<a href="https://github.com/harishprp370" target="_blank"
                rel="noopener noreferrer" style="color:var(--brand-primary);">@harishprp370</a>).</li>
          </ul>
          <div style="margin-top:0.75rem;display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="chip">Python</span><span class="chip">Tkinter</span><span class="chip">Machine
              Learning</span><span class="chip">GitHub</span>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ===== EDUCATION ===== -->
  <section class="section" aria-labelledby="edu-heading">
    <div class="container">
      <div class="section-header">
        <div class="section-label reveal">Education</div>
        <h2 class="section-title reveal delay-1" id="edu-heading">Academic Background</h2>
      </div>
      <div class="edu-grid">
        <article class="edu-card pop-construct card-glow">
          <div class="edu-icon">🎓</div>
          <h3 class="edu-degree">MCA — Master of Computer Applications</h3>
          <p class="edu-uni">Jain University, Bengaluru</p>
          <p class="edu-period">May 2025 — Aug 2027 (Pursuing)</p>
          <div class="chip" style="margin-bottom:0.5rem;">Specialization: Cyber Security</div>
          <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.5;">Pursuing advanced coursework in
            network security, cryptography, ethical hacking, and secure software development alongside core computer
            science subjects.</p>
        </article>
        <article class="edu-card pop-construct card-glow pop-stagger-2">
          <div class="edu-icon">📚</div>
          <h3 class="edu-degree">BCA — Bachelor of Computer Applications</h3>
          <p class="edu-uni">BITS Hi-Tech College, Chitradurga (Davangere University)</p>
          <p class="edu-period">Oct 2021 — Sep 2024</p>
          <span class="edu-grade">⭐ CGPA: 8.41</span>
          <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.5;margin-top:0.75rem;">Strong foundation
            in computer science, programming (C, Java, Python), web development, databases, networking, and information
            systems.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== SKILLS MATRIX ===== -->
  <section class="section" style="background: var(--col-surface);" aria-labelledby="skills-heading">
    <div class="container">
      <div class="section-header">
        <div class="section-label reveal">Technical Skills</div>
        <h2 class="section-title reveal delay-1" id="skills-heading">Skills Matrix</h2>
      </div>
      <div class="skills-grid">

        <!-- Backend -->
        <div class="skill-group pop-construct">
          <p class="skill-group-title">Backend & Web</p>
          <div class="skill-tags">
            <span class="skill-tag"><i class="devicon-php-plain" style="color:#7b7fb5;font-size:0.9rem;"></i> PHP</span>
            <span class="skill-tag"><i class="devicon-mysql-plain" style="color:#4479a1;font-size:0.9rem;"></i>
              MySQL</span>
            <span class="skill-tag"><i class="devicon-laravel-plain" style="color:#f55247;font-size:0.9rem;"></i>
              Laravel</span>
            <span class="skill-tag">REST APIs</span>
            <span class="skill-tag">MVC Pattern</span>
            <span class="skill-tag">JWT Auth</span>
            <span class="skill-tag">Session Security</span>
            <span class="skill-tag">cPanel</span>
          </div>
        </div>

        <!-- Frontend -->
        <div class="skill-group pop-construct pop-stagger-2">
          <p class="skill-group-title">Frontend</p>
          <div class="skill-tags">
            <span class="skill-tag"><i class="devicon-html5-plain" style="color:#e34f26;font-size:0.9rem;"></i>
              HTML5</span>
            <span class="skill-tag"><i class="devicon-css3-plain" style="color:#1572b6;font-size:0.9rem;"></i>
              CSS3</span>
            <span class="skill-tag"><i class="devicon-javascript-plain" style="color:#f7df1e;font-size:0.9rem;"></i>
              JavaScript</span>
            <span class="skill-tag"><i class="devicon-bootstrap-plain" style="color:#7952b3;font-size:0.9rem;"></i>
              Bootstrap</span>
            <span class="skill-tag">Fetch API</span>
            <span class="skill-tag">Responsive Design</span>
          </div>
        </div>

        <!-- Security -->
        <div class="skill-group pop-construct pop-stagger-3">
          <p class="skill-group-title">Security Concepts</p>
          <div class="skill-tags">
            <span class="skill-tag">OWASP Top 10</span>
            <span class="skill-tag">SQL Injection Prevention</span>
            <span class="skill-tag">CSRF Protection</span>
            <span class="skill-tag">XSS Filtering</span>
            <span class="skill-tag">Input Validation</span>
            <span class="skill-tag">Auth Security</span>
            <span class="skill-tag">IAM Basics</span>
          </div>
        </div>

        <!-- Tools -->
        <div class="skill-group pop-construct pop-stagger-4">
          <p class="skill-group-title">Tools & Other</p>
          <div class="skill-tags">
            <span class="skill-tag"><i class="devicon-git-plain" style="color:#f05032;font-size:0.9rem;"></i> Git</span>
            <span class="skill-tag"><i class="devicon-github-original" style="font-size:0.9rem;"></i> GitHub</span>
            <span class="skill-tag"><i class="devicon-linux-plain" style="font-size:0.9rem;"></i> Linux</span>
            <span class="skill-tag"><i class="devicon-python-plain" style="color:#3776ab;font-size:0.9rem;"></i>
              Python</span>
            <span class="skill-tag"><i class="devicon-firebase-plain" style="color:#ffca28;font-size:0.9rem;"></i>
              Firebase</span>
            <span class="skill-tag">PhpMyAdmin</span>
            <span class="skill-tag">Error Logging</span>
            <span class="skill-tag">TCP/IP · DNS</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== PHILOSOPHY ===== -->
  <section class="section" aria-labelledby="philosophy-heading">
    <div class="container" style="max-width:800px;">
      <div class="section-label reveal" style="justify-content:center;">Philosophy</div>
      <h2 class="section-title reveal delay-1" id="philosophy-heading" style="text-align:center;margin-bottom:1.5rem;">
        How I Approach Engineering
      </h2>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="reveal delay-2">
        <?php
        $principles = [
          ['icon' => 'fas fa-lock', 'title' => 'Security First', 'desc' => 'OWASP-aware development with input validation, CSRF protection, and secure session management in every project.'],
          ['icon' => 'fas fa-file-code', 'title' => 'Clean Code', 'desc' => 'Readable, well-documented PHP following MVC patterns. Code that future-you — or any developer — can maintain.'],
          ['icon' => 'fas fa-tachometer-alt', 'title' => 'Performance Matters', 'desc' => 'Optimized SQL queries, efficient API design, and server configurations that keep response times fast.'],
        ];
        foreach ($principles as $p): ?>
          <div class="card-glass" style="padding:1.5rem;text-align:center;">
            <div
              style="width:48px;height:48px;border-radius:var(--radius-md);background:var(--brand-primary-dim);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--brand-primary);margin:0 auto 1rem;">
              <i class="<?= $p['icon'] ?>" aria-hidden="true"></i>
            </div>
            <h3 style="font-size:0.95rem;font-weight:700;margin-bottom:0.5rem;"><?= $p['title'] ?></h3>
            <p style="font-size:0.83rem;color:var(--text-secondary);line-height:1.6;"><?= $p['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>