<?php
$pageTitle = "Contact Harish N — Hire PHP Developer | CodesByHarish";
$metaDescription = "Contact Harish N to hire a PHP developer in Bengaluru. Available for freelance projects, REST API development, full-stack web apps, and backend engineering. Reply within 24 hours.";

include 'includes/config.php';

$formStatus = '';
$formMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $source = 'contact-form';

    $errors = [];
    if (strlen($name) < 2) $errors[] = 'Please enter your full name.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
    if (strlen($message) < 10) $errors[] = 'Message must be at least 10 characters.';
    if (!empty($phone) && !preg_match('/^[\+]?[0-9\s\-\(\)]{7,}$/', $phone)) $errors[] = 'Please enter a valid phone number.';

    if (empty($errors)) {
        try {
            if (!$pdo) throw new Exception("DB connection unavailable");
            $sql = "INSERT INTO contact_messages (name, email, phone, subject, message, source, created_at, ip_address, user_agent)
                    VALUES (:name, :email, :phone, :subject, :message, :source, :created_at, :ip_address, :user_agent)";
            $stmt = $pdo->prepare($sql);
            $ok = $stmt->execute([
                ':name' => $name, ':email' => $email, ':phone' => $phone,
                ':subject' => $subject, ':message' => $message, ':source' => $source,
                ':created_at' => date('Y-m-d H:i:s'),
                ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
                ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
            ]);
            if ($ok) {
                $formStatus = 'success';
                $formMessage = 'Message received! I\'ll reply within 24 hours.';
                $_POST = [];
            } else {
                throw new Exception("Insert failed");
            }
        } catch (Exception $e) {
            $formStatus = 'error';
            $formMessage = 'Failed to send. Please email directly: harishprp370@gmail.com';
            error_log("Contact form error: " . $e->getMessage());
        }
    } else {
        $formStatus = 'error';
        $formMessage = implode(' ', $errors);
    }
}

$preService = htmlspecialchars($_GET['service'] ?? '');
include 'includes/header.php';
?>

<!-- JSON-LD: FAQPage (AEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What types of projects does Harish N take on?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "PHP web applications, REST API development, MySQL database design, e-commerce platforms with payment integrations (Razorpay), LMS/e-learning systems, and technical SEO implementations."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly does Harish N respond to inquiries?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Typically within 24 hours on working days. For urgent projects, email harishprp370@gmail.com directly for faster response."
      }
    },
    {
      "@type": "Question",
      "name": "Is Harish N available for remote freelance projects?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Harish N is available for remote freelance work globally, as well as on-site opportunities in Bengaluru, India."
      }
    },
    {
      "@type": "Question",
      "name": "What is the pricing range for a PHP web application?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "PHP web application development starts from ₹15,000 for simple projects. E-commerce platforms with payment integrations typically range from ₹25,000 to ₹1,20,000 depending on scope."
      }
    }
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
    {"@type":"ListItem","position":2,"name":"Contact","item":"https://codesbyharish.in/contact.php"}
  ]
}
</script>

<main class="main-content" aria-label="Contact Harish N">

  <!-- Hero -->
  <section class="contact-page-hero" aria-labelledby="contact-heading">
    <div class="container">
      <div class="section-label reveal" style="justify-content:center;">Get in Touch</div>
      <h1 class="section-title reveal delay-1" id="contact-heading">
        Let's <span class="text-gradient">Build Together</span>
      </h1>
      <p class="section-desc reveal delay-2" style="margin:1rem auto 0;text-align:center;max-width:560px;">
        Have a project in mind? Looking for a PHP developer for your startup or freelance work? Send me a message — I reply within 24 hours.
      </p>
    </div>
  </section>

  <!-- Contact Layout -->
  <section class="section-sm" aria-label="Contact details and form">
    <div class="container">
      <div class="contact-layout">

        <!-- Info Panel -->
        <div class="contact-info-panel">
          <div class="section-label reveal" style="margin-bottom:1.25rem;">Direct Channels</div>

          <a href="mailto:harishprp370@gmail.com" class="contact-detail reveal delay-1" aria-label="Email Harish N">
            <div class="contact-detail-icon" aria-hidden="true"><i class="fas fa-envelope"></i></div>
            <div>
              <p class="contact-detail-label">Email</p>
              <p class="contact-detail-value">harishprp370@gmail.com</p>
            </div>
          </a>

          <a href="tel:+919019940788" class="contact-detail reveal delay-2" aria-label="Call Harish N">
            <div class="contact-detail-icon" aria-hidden="true"><i class="fas fa-phone"></i></div>
            <div>
              <p class="contact-detail-label">Phone / WhatsApp</p>
              <p class="contact-detail-value">+91 90199 40788</p>
            </div>
          </a>

          <a href="https://github.com/harishprp370" target="_blank" rel="noopener noreferrer" class="contact-detail reveal delay-3" aria-label="Harish N GitHub profile">
            <div class="contact-detail-icon" aria-hidden="true"><i class="fab fa-github"></i></div>
            <div>
              <p class="contact-detail-label">GitHub</p>
              <p class="contact-detail-value">github.com/harishprp370</p>
            </div>
          </a>

          <div class="contact-detail reveal delay-4" style="cursor:default;">
            <div class="contact-detail-icon" aria-hidden="true"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <p class="contact-detail-label">Location</p>
              <p class="contact-detail-value">Bengaluru, Karnataka, India</p>
            </div>
          </div>

          <!-- Availability -->
          <div class="card-glass reveal delay-5" style="padding:1.5rem;margin-top:0.5rem;">
            <div class="status-badge" style="margin-bottom:1rem;">
              <div class="status-dot"></div>
              Available for Projects
            </div>
            <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.6;margin-bottom:1rem;">
              Open to freelance projects, internships, and full-time PHP developer roles. Currently active at SolarBee — taking side projects on weekends.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
              <span class="chip">PHP Dev</span>
              <span class="chip">API Projects</span>
              <span class="chip">Remote OK</span>
            </div>
          </div>
        </div>

        <!-- Form -->
        <div class="contact-form-box reveal delay-1" role="region" aria-label="Contact form">
          <h2 style="font-size:1.4rem;font-weight:800;margin-bottom:0.4rem;color:var(--text-primary);">Send a Message</h2>
          <p style="font-size:0.85rem;color:var(--text-secondary);margin-bottom:1.5rem;">Fill out the form below and I'll get back to you within 24 hours.</p>

          <?php if ($formStatus === 'success'): ?>
            <div class="alert alert-success" role="alert">
              <i class="fas fa-check-circle" aria-hidden="true"></i>
              <div>
                <strong>Message Sent!</strong><br>
                <?php echo htmlspecialchars($formMessage); ?>
              </div>
            </div>
          <?php elseif ($formStatus === 'error'): ?>
            <div class="alert alert-error" role="alert">
              <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
              <div>
                <strong>Error</strong><br>
                <?php echo htmlspecialchars($formMessage); ?>
              </div>
            </div>
          <?php endif; ?>

          <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contactForm" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label for="name" class="form-label">Full Name *</label>
                <i class="fas fa-user form-icon" aria-hidden="true"></i>
                <input type="text" id="name" name="name" class="form-input" required
                  value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                  placeholder="Your name" autocomplete="name">
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email Address *</label>
                <i class="fas fa-envelope form-icon" aria-hidden="true"></i>
                <input type="email" id="email" name="email" class="form-input" required
                  value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                  placeholder="you@company.com" autocomplete="email">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone" class="form-label">Phone / WhatsApp</label>
                <i class="fas fa-phone form-icon" aria-hidden="true"></i>
                <input type="tel" id="phone" name="phone" class="form-input"
                  value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>"
                  placeholder="+91 XXXXX XXXXX" autocomplete="tel">
              </div>
              <div class="form-group">
                <label for="subject" class="form-label">Project Type</label>
                <select id="subject" name="subject" class="form-select" style="padding-left:1rem;">
                  <option value="">Select service...</option>
                  <option value="webdev" <?= ($preService === 'webdev' || ($_POST['subject'] ?? '') === 'webdev') ? 'selected' : '' ?>>PHP Web Application</option>
                  <option value="api" <?= ($preService === 'api' || ($_POST['subject'] ?? '') === 'api') ? 'selected' : '' ?>>REST API Development</option>
                  <option value="backend" <?= ($preService === 'backend' || ($_POST['subject'] ?? '') === 'backend') ? 'selected' : '' ?>>Database Design</option>
                  <option value="ecom" <?= ($preService === 'ecom' || ($_POST['subject'] ?? '') === 'ecom') ? 'selected' : '' ?>>E-Commerce Platform</option>
                  <option value="security" <?= ($preService === 'security' || ($_POST['subject'] ?? '') === 'security') ? 'selected' : '' ?>>Security Review</option>
                  <option value="seo" <?= ($preService === 'seo' || ($_POST['subject'] ?? '') === 'seo') ? 'selected' : '' ?>>Technical SEO</option>
                  <option value="other" <?= (($_POST['subject'] ?? '') === 'other') ? 'selected' : '' ?>>Other / General</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="message" class="form-label">Project Details *</label>
              <textarea id="message" name="message" class="form-textarea" required rows="5"
                placeholder="Describe your project: What does it do? What tech stack do you prefer? What's your timeline and budget?"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
            </div>

            <button type="submit" name="submit_contact" class="btn btn-primary" id="submitBtn" style="width:100%;justify-content:center;font-size:1rem;padding:0.9rem 1.5rem;">
              <span class="btn-text"><i class="fas fa-paper-plane" aria-hidden="true"></i> Send Message</span>
              <span class="btn-loading" style="display:none;"><i class="fas fa-spinner fa-spin" aria-hidden="true"></i> Sending...</span>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section-sm" style="background:var(--col-surface);" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-header" style="text-align:center;">
        <div class="section-label reveal" style="justify-content:center;">FAQ</div>
        <h2 class="section-title reveal delay-1" id="faq-heading">Common Questions</h2>
      </div>
      <div class="faq-list reveal delay-2" role="list">
        <?php
        $faqs = [
          ['q' => 'What types of projects do you take on?', 'a' => 'PHP web applications, REST APIs, MySQL database design, e-commerce platforms with Razorpay, LMS/educational platforms, and technical SEO. If it\'s PHP-based backend work, I\'m interested.'],
          ['q' => 'Do you work remotely?', 'a' => 'Yes — fully remote. I work with clients across India and can adapt to different time zones. I provide regular updates via GitHub and messaging.'],
          ['q' => 'How long does a typical project take?', 'a' => 'Small APIs or bug fixes: 1–3 days. Standard web apps: 2–6 weeks. Full e-commerce platforms: 4–10 weeks. I provide a detailed timeline in my quote after reviewing your requirements.'],
          ['q' => 'What\'s your pricing model?', 'a' => 'Fixed-price for well-defined projects. Hourly rate for consulting or ongoing maintenance. I send a full scope document and quote before any work begins — no surprise costs.'],
          ['q' => 'Do you sign NDAs?', 'a' => 'Yes. Happy to sign a mutual NDA before any technical discussions about proprietary business logic or sensitive codebases.'],
        ];
        foreach ($faqs as $faq): ?>
          <div class="faq-item" role="listitem">
            <button class="faq-q" aria-expanded="false">
              <?= $faq['q'] ?>
              <i class="fas fa-chevron-down" aria-hidden="true"></i>
            </button>
            <div class="faq-a" role="region">
              <p><?= $faq['a'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<script>
// Form loading state
document.getElementById('contactForm')?.addEventListener('submit', function() {
  const btnText = this.querySelector('.btn-text');
  const btnLoad = this.querySelector('.btn-loading');
  const btn = document.getElementById('submitBtn');
  if (btnText && btnLoad) { btnText.style.display = 'none'; btnLoad.style.display = 'inline-flex'; }
  if (btn) btn.disabled = true;
});
</script>

<?php include 'includes/footer.php'; ?>
