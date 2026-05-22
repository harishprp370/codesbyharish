<?php
$pageTitle = "Projects — PHP & Full-Stack Portfolio | Harish N | CodesByHarish";
$metaDescription = "Real-world PHP projects by Harish N: EliteArtsss jewelry e-commerce, QwickLearn LMS, Vivekananda school website, ZetaRise agency portal. Live demos and GitHub links.";
include 'includes/header.php';
?>

<!-- JSON-LD: ItemList for projects -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Portfolio Projects by Harish N",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"EliteArtsss Jewelry E-Commerce","url":"https://codesbyharish.in/projects.php"},
    {"@type":"ListItem","position":2,"name":"QwickLearn LMS Platform","url":"https://github.com/harishprp370/QwickLearn-A-online-Learning-Platform"},
    {"@type":"ListItem","position":3,"name":"Vivekananda Techno School Website","url":"https://codesbyharish.in/projects.php"},
    {"@type":"ListItem","position":4,"name":"ZetaRise Agency Portal","url":"https://zetarise.in/"}
  ]
}
</script>

<!-- JSON-LD: BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Home","item":"https://codesbyharish.in"},
    {"@type":"ListItem","position":2,"name":"Projects","item":"https://codesbyharish.in/projects.php"}
  ]
}
</script>

<?php
$projects = [
  [
    'id' => 'eliteartss',
    'title' => 'EliteArtsss — Luxury Jewelry E-Commerce',
    'short' => 'Full-stack e-commerce platform for a luxury jewelry brand with live payment gateway and logistics integration.',
    'desc' => 'Developed a fully functional, visually elegant e-commerce website for EliteArtsss, a luxury jewelry brand, as a freelance project. Customers can browse, purchase, and track premium jewelry items with ease. Built from scratch using PHP, MySQL, and Bootstrap with a strong focus on UX.',
    'features' => [
      'Razorpay payment gateway integration with webhook verification',
      'Delhivery API for real-time shipment tracking and logistics',
      'Admin CMS: product management, order processing, inventory',
      'Secure customer authentication with session-based auth',
      'Responsive UI designed in Figma, built with HTML/CSS/Bootstrap',
      'PhpMyAdmin-managed relational database schema',
    ],
    'tech' => ['PHP', 'MySQL', 'Razorpay API', 'Delhivery API', 'Bootstrap', 'Figma', 'MariaDB'],
    'category' => 'ecommerce',
    'period' => 'Mar 2025 — Apr 2025',
    'role' => 'Freelance Full-Stack Developer',
    'img' => 'assets/elitearts.jpeg',
    'github' => '#',
    'live' => '#',
    'badge' => 'E-Commerce',
  ],
  [
    'id' => 'qwicklearn',
    'title' => 'QwickLearn — Online Learning Platform',
    'short' => 'Interactive LMS supporting video lectures, quizzes, assignments, and progress tracking — built during internship at PyGenicArc.',
    'desc' => 'QwikLearn is an online learning platform designed to provide an interactive environment for students to access educational content, enroll in courses, track progress, and interact with instructors. Supports video lectures, quizzes, assignments, and forums.',
    'features' => [
      'Firebase Realtime Database for live student progress updates',
      'Firebase Authentication for secure signup/login flows',
      'Quiz and assignment submission with auto-grading logic',
      'Instructor dashboard for course and student management',
      'Discussion forum with threaded replies',
      'GitHub-published with full project documentation',
    ],
    'tech' => ['PHP', 'MySQL', 'Firebase', 'JavaScript', 'Bootstrap', 'HTML5', 'CSS3'],
    'category' => 'edtech',
    'period' => 'Apr 2024 — Jun 2024',
    'role' => 'Web Development Intern (PyGenicArc)',
    'img' => 'assets/quicklearn.png',
    'github' => 'https://github.com/harishprp370/QwickLearn-A-online-Learning-Platform',
    'live' => '#',
    'badge' => 'EdTech',
  ],
  [
    'id' => 'school',
    'title' => 'Vivekananda Techno School — Institutional Website',
    'short' => 'Professional, interactive school website with faculty directory, events, news, and admin CMS.',
    'desc' => 'Designed and developed a complete institutional website for Vivekananda Techno School. The platform includes a faculty directory, announcement system, event listings, gallery, and a backend admin CMS for non-technical staff to manage content.',
    'features' => [
      'Admin CMS for managing news, events, faculty, and gallery',
      'Responsive layout across mobile, tablet, and desktop',
      'phpMyAdmin-managed content with structured MySQL schema',
      'SEO-optimized page structure with proper meta and heading hierarchy',
      'Contact form with server-side validation and email routing',
    ],
    'tech' => ['PHP', 'MySQL', 'Bootstrap', 'HTML5', 'CSS3', 'PhpMyAdmin'],
    'category' => 'fullstack',
    'period' => 'Feb 2025 — Apr 2025',
    'role' => 'Freelance Full-Stack Developer',
    'img' => 'assets/vts.png',
    'github' => '#',
    'live' => '#',
    'badge' => 'Institutional',
  ],
  [
    'id' => 'zetarise',
    'title' => 'ZetaRise — Digital Agency Portal',
    'short' => 'Corporate website for a digital marketing and IT consulting agency with CRM lead intake and analytics.',
    'desc' => 'Built a high-performance corporate landing portal for ZetaRise, marketing global digital optimization and technology consultation services. Focused on conversion, SEO visibility, and CRM lead routing.',
    'features' => [
      'CRM lead intake form with automated DB logging and response tracking',
      'Semantic HTML5 and structured schema markup for SEO rich snippets',
      'Google Analytics API integration for custom event tracking',
      'Fully fluid CSS grid adapting across viewport widths',
      'Dynamic portfolio components loading case studies on-demand',
    ],
    'tech' => ['PHP', 'MySQL', 'Bootstrap', 'Google Analytics', 'SEO', 'Metadata'],
    'category' => 'fullstack',
    'period' => 'Dec 2024 — Feb 2025',
    'role' => 'Full-Stack Developer',
    'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=380&fit=crop&q=80',
    'github' => '#',
    'live' => 'https://zetarise.in/',
    'badge' => 'Agency',
  ],
  [
    'id' => 'tphish',
    'title' => 'T-Phish — Security Awareness Simulator',
    'short' => 'Ethical phishing simulation engine for cybersecurity training and organizational security awareness.',
    'desc' => 'An ethical phishing simulation tool built for security awareness training exercises. Allows administrators to run simulated phishing campaigns within an organization to measure and improve human-layer security posture.',
    'features' => [
      'Stateful tracking system logging target click metrics and browser metadata',
      'Integrated training overlay redirecting users to security education pages',
      'Flask-based backend with SMTP campaign routing',
      'SQLite session management for campaign analytics',
      'Custom DNS routing for realistic domain simulation',
    ],
    'tech' => ['Python', 'Flask', 'SQLite', 'SMTP', 'HTML/CSS'],
    'category' => 'security',
    'period' => 'Aug 2024',
    'role' => 'Security Research Project',
    'img' => 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=600&h=380&fit=crop&q=80',
    'github' => 'https://github.com/harishprp370/T-Phish',
    'live' => '#',
    'badge' => 'Security',
  ],
];
?>

<main class="main-content" aria-label="Projects portfolio">

  <!-- Page Hero -->
  <section style="padding: calc(var(--header-h) + 4rem) 0 3rem; text-align:center;" aria-labelledby="projects-page-heading">
    <div class="container">
      <div class="section-label reveal" style="justify-content:center;">Portfolio</div>
      <h1 class="section-title reveal delay-1" id="projects-page-heading">
        Engineering <span class="text-gradient">Projects</span>
      </h1>
      <p class="section-desc reveal delay-2" style="margin:1rem auto 0;text-align:center;">
        Production systems, internship builds, and research projects — all built from scratch with clean code and real-world constraints.
      </p>
    </div>
  </section>

  <!-- Filter Bar -->
  <section style="padding-bottom:1rem;" aria-label="Project filters">
    <div class="container">
      <div class="filter-bar reveal" role="group" aria-label="Filter projects by category">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
        <button class="filter-btn" data-filter="edtech">EdTech / LMS</button>
        <button class="filter-btn" data-filter="fullstack">Full-Stack</button>
        <button class="filter-btn" data-filter="security">Security</button>
      </div>
    </div>
  </section>

  <!-- Projects Grid -->
  <section class="section-sm" aria-label="Project cards">
    <div class="container">
      <div class="projects-grid" id="projectsGrid">
        <?php foreach ($projects as $i => $p): ?>
          <article
            class="project-card card-tilt reveal card-glow"
            data-category="<?= $p['category'] ?>"
            style="transition-delay:<?= $i * 0.08 ?>s;"
            aria-label="<?= htmlspecialchars($p['title']) ?>"
          >
            <div class="project-img-wrap">
              <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?> screenshot" loading="lazy" width="340" height="200">
              <div class="project-overlay" aria-hidden="true"></div>
              <div class="project-category-badge">
                <span class="chip"><?= $p['badge'] ?></span>
              </div>
            </div>
            <div class="project-body">
              <h2 class="project-title"><?= $p['title'] ?></h2>
              <p class="project-excerpt"><?= $p['short'] ?></p>
              <div class="project-chips" aria-label="Tech stack">
                <?php foreach (array_slice($p['tech'], 0, 4) as $t): ?>
                  <span class="chip"><?= $t ?></span>
                <?php endforeach; ?>
                <?php if (count($p['tech']) > 4): ?>
                  <span class="chip" style="background:transparent;color:var(--text-muted);">+<?= count($p['tech']) - 4 ?> more</span>
                <?php endif; ?>
              </div>
              <div class="project-footer">
                <button
                  class="project-link btn-ghost"
                  style="border:none;background:none;cursor:pointer;font-family:inherit;font-size:0.83rem;font-weight:600;color:var(--brand-primary);display:inline-flex;align-items:center;gap:0.4rem;"
                  data-modal-open="modal-<?= $p['id'] ?>"
                  aria-haspopup="dialog"
                >
                  <i class="fas fa-expand-alt" aria-hidden="true"></i> Details
                </button>
                <?php if ($p['github'] !== '#'): ?>
                  <a href="<?= $p['github'] ?>" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i class="fab fa-github" aria-hidden="true"></i> Code
                  </a>
                <?php endif; ?>
                <?php if ($p['live'] !== '#'): ?>
                  <a href="<?= $p['live'] ?>" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i class="fas fa-external-link-alt" aria-hidden="true"></i> Live
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<!-- ===== PROJECT MODALS ===== -->
<?php foreach ($projects as $p): ?>
<div class="modal" id="modal-<?= $p['id'] ?>" role="dialog" aria-modal="true" aria-label="<?= htmlspecialchars($p['title']) ?> details">
  <div class="modal-box">
    <button class="modal-close" onclick="closeModal(document.getElementById('modal-<?= $p['id'] ?>'))" aria-label="Close dialog">
      <i class="fas fa-times" aria-hidden="true"></i>
    </button>
    <div class="modal-content-inner">
      <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?>" class="modal-img" loading="lazy" width="640" height="220">

      <span class="chip chip-accent" style="margin-bottom:0.75rem;display:inline-flex;"><?= $p['badge'] ?></span>
      <h2 class="modal-title"><?= $p['title'] ?></h2>
      <p class="modal-desc"><?= $p['desc'] ?></p>

      <div class="modal-meta">
        <div class="meta-item">
          <span class="meta-label">Timeline</span>
          <span class="meta-value"><?= $p['period'] ?></span>
        </div>
        <div class="meta-item">
          <span class="meta-label">Role</span>
          <span class="meta-value"><?= $p['role'] ?></span>
        </div>
      </div>

      <div class="modal-features">
        <h3 style="font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:0.75rem;">Key Features & Architecture</h3>
        <ul class="feature-list">
          <?php foreach ($p['features'] as $feat): ?>
            <li><?= $feat ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div style="margin-bottom:1.5rem;">
        <p style="font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:0.6rem;">Tech Stack</p>
        <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
          <?php foreach ($p['tech'] as $t): ?>
            <span class="chip"><?= $t ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="modal-actions">
        <?php if ($p['github'] !== '#'): ?>
          <a href="<?= $p['github'] ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
            <i class="fab fa-github" aria-hidden="true"></i> View Source
          </a>
        <?php endif; ?>
        <?php if ($p['live'] !== '#'): ?>
          <a href="<?= $p['live'] ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
            <i class="fas fa-external-link-alt" aria-hidden="true"></i> Live Demo
          </a>
        <?php endif; ?>
        <a href="contact.php" class="btn btn-ghost">
          <i class="fas fa-comments" aria-hidden="true"></i> Discuss Project
        </a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>
