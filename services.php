<?php
$pageTitle = "Services — Hire PHP Developer | Backend Engineering | CodesByHarish";
$metaDescription = "Hire Harish N for PHP web development, REST API engineering, MySQL database design, e-commerce platforms, and technical SEO in Bengaluru or remote. Transparent pricing.";
include 'includes/header.php';
?>

<!-- JSON-LD: Service Offering -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Web Development & Backend Engineering",
  "provider": {
    "@type": "Person",
    "name": "Harish N",
    "url": "https://codesbyharish.in"
  },
  "areaServed": {"@type": "Country", "name": "India"},
  "description": "Full-Stack PHP Development, REST API Engineering, MySQL Database Design, E-Commerce Platforms, and Technical SEO services by Harish N."
}
</script>

<!-- JSON-LD: HowTo (Process) for AEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How to Hire Harish N for a Web Project",
  "step": [
    {"@type":"HowToStep","position":1,"name":"Brief","text":"Share your project requirements, timeline, and technical stack via the contact form."},
    {"@type":"HowToStep","position":2,"name":"Scope","text":"Receive a detailed project scope document, architecture plan, and cost estimate within 24 hours."},
    {"@type":"HowToStep","position":3,"name":"Build","text":"Collaborative development with regular milestone updates, code reviews, and documentation."},
    {"@type":"HowToStep","position":4,"name":"Deploy","text":"Deployment to live server with testing, bug fixing, handover documentation, and post-launch support."}
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
    {"@type":"ListItem","position":2,"name":"Services","item":"https://codesbyharish.in/services.php"}
  ]
}
</script>

<main class="main-content" aria-label="Services offered by Harish N">

  <!-- Hero -->
  <section class="services-page-hero" aria-labelledby="services-heading">
    <div class="container" style="max-width:800px;">
      <div class="section-label reveal" style="justify-content:center;">Available for Hire</div>
      <h1 class="section-title reveal delay-1" id="services-heading">
        PHP & Backend <span class="text-gradient">Engineering Services</span>
      </h1>
      <p class="section-desc reveal delay-2" style="margin:1rem auto 2rem;text-align:center;">
        End-to-end web development from database schema to deployment. Clean code, documented APIs, and security-conscious engineering — for freelance clients and startups.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;" class="reveal delay-3">
        <div class="status-badge">
          <div class="status-dot"></div>
          Currently Available
        </div>
        <span class="chip chip-warm">
          <i class="fas fa-clock" aria-hidden="true"></i> &lt; 24hr Response
        </span>
      </div>
    </div>
  </section>

  <!-- Services Catalog -->
  <section class="section-sm" id="webdev" aria-labelledby="catalog-heading">
    <div class="container">
      <h2 class="sr-only" id="catalog-heading">Service Catalog</h2>
      <div class="services-catalog">
        <?php
        $services = [
          [
            'icon' => 'fas fa-server',
            'name' => 'PHP Web Application Development',
            'desc' => 'Custom PHP applications built with MVC architecture, secure authentication, role-based access control, and thorough code documentation. Scalable and maintainable from day one.',
            'features' => ['Custom CMS & admin dashboards', 'Secure login & RBAC', 'CRUD operations & session management', 'Code documentation & handover'],
            'price' => '₹15,000 — ₹80,000',
            'id' => 'webdev',
          ],
          [
            'icon' => 'fas fa-plug',
            'name' => 'REST API Development',
            'desc' => 'Clean, versioned RESTful APIs in PHP with JWT authentication, input validation, rate limiting, and proper error responses. Full Postman/Swagger documentation on delivery.',
            'features' => ['JWT / session-based auth', 'Input validation & sanitization', 'Structured JSON responses', 'API documentation (Postman)'],
            'price' => '₹10,000 — ₹50,000',
            'id' => 'api',
          ],
          [
            'icon' => 'fas fa-database',
            'name' => 'Database Design & Optimization',
            'desc' => 'Relational database schema design in MySQL/MariaDB with normalization, indexing strategies, stored procedures, and query optimization for fast performance at scale.',
            'features' => ['Schema design & normalization', 'Index optimization', 'Query performance tuning', 'Migration scripts & backups'],
            'price' => '₹5,000 — ₹25,000',
            'id' => 'backend',
          ],
          [
            'icon' => 'fas fa-shopping-cart',
            'name' => 'E-Commerce Platform Development',
            'desc' => 'Full-stack e-commerce with Razorpay payment integration, real-time shipping tracking (Delhivery/Shiprocket API), product management, and admin order processing dashboard.',
            'features' => ['Razorpay payment integration', 'Logistics API (Delhivery)', 'Product & inventory management', 'Order tracking & admin panel'],
            'price' => '₹25,000 — ₹1,20,000',
            'id' => 'ecom',
          ],
          [
            'icon' => 'fas fa-shield-alt',
            'name' => 'Web Security Review',
            'desc' => 'Code review and vulnerability assessment for existing PHP applications against OWASP Top 10. Includes SQL injection, XSS, CSRF, authentication flaws, and session security analysis.',
            'features' => ['OWASP Top 10 audit', 'SQL injection & XSS testing', 'CSRF & auth flow review', 'Written remediation report'],
            'price' => '₹8,000 — ₹35,000',
            'id' => 'security',
          ],
          [
            'icon' => 'fas fa-chart-line',
            'name' => 'Technical SEO & Analytics',
            'desc' => 'Implement structured data (JSON-LD), optimize Core Web Vitals, configure Google Analytics & Search Console, rebuild robots.txt/sitemap.xml, and fix crawl-blocking issues.',
            'features' => ['JSON-LD structured data', 'Core Web Vitals optimization', 'Google Analytics setup', 'Sitemap & robots.txt'],
            'price' => '₹6,000 — ₹30,000',
            'id' => 'seo',
          ],
        ];
        foreach ($services as $s): ?>
          <article class="service-card card-glow reveal" id="<?= $s['id'] ?>">
            <div class="service-card-icon" aria-hidden="true">
              <i class="<?= $s['icon'] ?>"></i>
            </div>
            <h2 class="service-card-name"><?= $s['name'] ?></h2>
            <p class="service-card-desc"><?= $s['desc'] ?></p>

            <ul style="margin-bottom:1.5rem;display:flex;flex-direction:column;gap:0.4rem;">
              <?php foreach ($s['features'] as $f): ?>
                <li style="display:flex;align-items:center;gap:0.6rem;font-size:0.83rem;color:var(--text-secondary);">
                  <i class="fas fa-check" style="color:var(--brand-primary);font-size:0.7rem;" aria-hidden="true"></i>
                  <?= $f ?>
                </li>
              <?php endforeach; ?>
            </ul>

            <div class="service-price">
              <i class="fas fa-tag" aria-hidden="true"></i>
              Starting from <?= $s['price'] ?>
            </div>
            <a href="contact.php?service=<?= $s['id'] ?>" class="btn btn-outline" style="border-radius:var(--radius-md);">
              <i class="fas fa-paper-plane" aria-hidden="true"></i> Get a Quote
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="divider"></div>

  <!-- Process Steps -->
  <section class="section-sm" aria-labelledby="process-heading">
    <div class="container">
      <div class="section-header" style="text-align:center;">
        <div class="section-label reveal" style="justify-content:center;">How It Works</div>
        <h2 class="section-title reveal delay-1" id="process-heading">From Brief to Delivery</h2>
      </div>
      <div class="process-grid">
        <?php
        $steps = [
          ['num'=>'01','title'=>'Brief','desc'=>'Share your requirements, tech stack preferences, timeline, and budget via the contact form or email.'],
          ['num'=>'02','title'=>'Scope & Quote','desc'=>'I send a detailed scope document with architecture plan, milestones, and cost estimate within 24 hours.'],
          ['num'=>'03','title'=>'Build','desc'=>'Collaborative development with regular milestone demos, code reviews, and daily/weekly updates via GitHub.'],
          ['num'=>'04','title'=>'Deploy & Handover','desc'=>'Live deployment, end-to-end testing, documentation, and 2 weeks post-launch support included.'],
        ];
        foreach ($steps as $i => $step): ?>
          <div class="process-step reveal" style="transition-delay:<?= $i * 0.1 ?>s;">
            <div class="process-num" aria-hidden="true"><?= $step['num'] ?></div>
            <h3 class="process-title"><?= $step['title'] ?></h3>
            <p class="process-desc"><?= $step['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="divider"></div>

  <!-- Why Work With Me -->
  <section class="section-sm" aria-labelledby="why-heading">
    <div class="container">
      <div class="section-header" style="text-align:center;">
        <div class="section-label reveal" style="justify-content:center;">Why Choose Me</div>
        <h2 class="section-title reveal delay-1" id="why-heading">Developer You Can Trust</h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.25rem;" class="reveal delay-2">
        <?php
        $whys = [
          ['icon'=>'fas fa-code','title'=>'Clean, Documented Code','desc'=>'Every project is delivered with clean, commented PHP and a proper README. Handovers are smooth.'],
          ['icon'=>'fas fa-clock','title'=>'Deadline-Focused','desc'=>'Milestones tracked on GitHub. You always know exactly what\'s done and what\'s next.'],
          ['icon'=>'fas fa-lock','title'=>'Security-Aware','desc'=>'OWASP-aware development. SQL injection prevention, CSRF protection, and safe auth — standard practice.'],
          ['icon'=>'fas fa-comments','title'=>'Clear Communication','desc'=>'Daily or weekly updates. I respond to messages within a few hours during business hours.'],
        ];
        foreach ($whys as $w): ?>
          <div class="card-glass" style="padding:1.5rem;display:flex;flex-direction:column;gap:0.75rem;">
            <div style="width:44px;height:44px;border-radius:var(--radius-md);background:var(--brand-primary-dim);display:flex;align-items:center;justify-content:center;color:var(--brand-primary);font-size:1.1rem;" aria-hidden="true">
              <i class="<?= $w['icon'] ?>"></i>
            </div>
            <h3 style="font-size:0.95rem;font-weight:700;color:var(--text-primary);"><?= $w['title'] ?></h3>
            <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.6;"><?= $w['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section style="padding:4rem 0;background:var(--col-surface);text-align:center;" aria-labelledby="services-cta-heading">
    <div class="container" style="max-width:650px;">
      <h2 class="section-title reveal" id="services-cta-heading" style="margin-bottom:1rem;">Ready to Start?</h2>
      <p class="section-desc reveal delay-1" style="margin:0 auto 2rem;">Fill out the contact form with your project details and I'll get back to you with a quote within 24 hours.</p>
      <div class="reveal delay-2">
        <a href="contact.php" class="btn btn-primary" style="font-size:1rem;padding:0.9rem 2rem;">
          <i class="fas fa-paper-plane" aria-hidden="true"></i>
          Request a Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
