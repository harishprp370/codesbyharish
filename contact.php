<?php 
include 'includes/config.php';

// Handle form submission
$formStatus = '';
$formMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if this is a contact form submission
    $isContactForm = isset($_POST['submit_contact']) || 
                    (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']));
    
    if ($isContactForm) {
        // Sanitize and validate form data
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $message = trim($_POST['message'] ?? '');
        $source = $_POST['source'] ?? 'website';
        
        // Validation
        $errors = [];
        
        if (empty($name) || strlen($name) < 2) {
            $errors[] = 'Name is required and must be at least 2 characters long.';
        }
        
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        }
        
        if (empty($message) || strlen($message) < 10) {
            $errors[] = 'Message is required and must be at least 10 characters long.';
        }
        
        if (!empty($phone) && !preg_match('/^[\+]?[0-9\s\-\(\)]+$/', $phone)) {
            $errors[] = 'Please enter a valid phone number.';
        }
        
        // If no errors, insert into database
        if (empty($errors)) {
            try {
                // Check database connection
                if (!$pdo) {
                    throw new Exception("Database connection not available");
                }
                
                
                
                $sql = "INSERT INTO contact_messages (name, email, phone, subject, message, source, created_at, ip_address, user_agent) 
                        VALUES (:name, :email, :phone, :subject, :message, :source, :created_at, :ip_address, :user_agent)";
                
                $stmt = $pdo->prepare($sql);
                
                $insertData = [
                    ':name' => $name,
                    ':email' => $email,
                    ':phone' => $phone,
                    ':subject' => $subject,
                    ':message' => $message,
                    ':source' => $source,
                    ':created_at' => date('Y-m-d H:i:s'),
                    ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
                    ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown'
                ];
                
                $result = $stmt->execute($insertData);
                
                if ($result) {
                    $formStatus = 'success';
                    $formMessage = 'Thank you for your message! I\'ll get back to you within 24 hours.';
                    
                    // Clear form data on success
                    $_POST = [];
                } else {
                    $formStatus = 'error';
                    $formMessage = 'Sorry, there was an error sending your message. Please try again.';
                }
                
            } catch (PDOException $e) {
                $formStatus = 'error';
                $formMessage = 'Database error: ' . $e->getMessage();
                error_log("Contact form PDO error: " . $e->getMessage());
            } catch (Exception $e) {
                $formStatus = 'error';
                $formMessage = 'System error: ' . $e->getMessage();
                error_log("Contact form error: " . $e->getMessage());
            }
        } else {
            $formStatus = 'error';
            $formMessage = implode('<br>', $errors);
        }
    }
}

include 'includes/header.php';
?>

<!-- Main Content -->
<main class="main-content">
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <span class="section-subtitle">Get in Touch</span>
                <h1 class="hero-title">Let's Work <span class="highlight">Together</span></h1>
                <p class="hero-description">
                    Have a project in mind or want to collaborate? I'm always excited to discuss 
                    new opportunities and challenges. Let's create something amazing together.
                </p>
                <div class="hero-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <span>Quick Response</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span>Professional Service</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <span>Secure & Reliable</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-wrapper">
                <!-- Contact Form -->
                <div class="contact-form-container" data-aos="fade-right">
                    <h2 class="form-title">Send me a message</h2>
                    
                    <?php if ($formStatus === 'success'): ?>
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i>
                            <div class="alert-content">
                                <h4>Message Sent Successfully!</h4>
                                <p><?php echo htmlspecialchars($formMessage); ?></p>
                            </div>
                        </div>
                    <?php elseif ($formStatus === 'error'): ?>
                        <div class="alert alert-error">
                            <i class="fas fa-exclamation-triangle"></i>
                            <div class="alert-content">
                                <h4>Error</h4>
                                <p><?php echo $formMessage; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <form class="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name *</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    class="form-input" 
                                    required
                                    value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                                    placeholder="Your full name"
                                >
                                <div class="input-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    class="form-input" 
                                    required
                                    value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                    placeholder="your.email@example.com"
                                >
                                <div class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone" 
                                    class="form-input"
                                    value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>"
                                    placeholder="+91 98765 43210"
                                >
                                <div class="input-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="form-label">Subject</label>
                                <select id="subject" name="subject" class="form-select">
                                    <option value="">Select a subject</option>
                                    <option value="web-development" <?php echo ($_POST['subject'] ?? '') === 'web-development' ? 'selected' : ''; ?>>Web Development</option>
                                    <option value="cybersecurity" <?php echo ($_POST['subject'] ?? '') === 'cybersecurity' ? 'selected' : ''; ?>>Cybersecurity</option>
                                    <option value="mobile-app" <?php echo ($_POST['subject'] ?? '') === 'mobile-app' ? 'selected' : ''; ?>>Mobile App Development</option>
                                    <option value="consultation" <?php echo ($_POST['subject'] ?? '') === 'consultation' ? 'selected' : ''; ?>>IT Consultation</option>
                                    <option value="other" <?php echo ($_POST['subject'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                                <div class="select-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                class="form-textarea" 
                                rows="6" 
                                required
                                placeholder="Tell me about your project, requirements, timeline, and any specific details..."
                            ><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        
                        <input type="hidden" name="source" value="contact-form">
                        
                        <div class="form-actions">
                            <button type="submit" name="submit_contact" value="Send Message" class="btn btn-primary-large" id="submitBtn">
                                <span class="btn-text">
                                    <i class="fas fa-paper-plane"></i>
                                    Send Message
                                </span>
                                <span class="btn-loading" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i>
                                    Sending...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-container" data-aos="fade-left">
                    <div class="contact-info-card">
                        <h3 class="info-title">Let's Connect</h3>
                        <p class="info-description">
                            Ready to bring your ideas to life? I'm here to help you create 
                            secure, scalable, and innovative solutions.
                        </p>
                        
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Email</h4>
                                    <p>hello@codebyharish.com</p>
                                    <span class="response-time">Response within 24 hours</span>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Phone</h4>
                                    <p>+91 90199 40788</p>
                                    <span class="response-time">Mon-Fri, 9AM-6PM IST</span>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Location</h4>
                                    <p>Bangalore, India</p>
                                    <span class="response-time">Available for remote work</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-connect">
                            <h4 class="social-title">Follow me on</h4>
                            <div class="social-links">
                                <a href="#" class="social-link">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Availability Status -->
                    <div class="availability-card">
                        <div class="status-indicator">
                            <div class="status-dot"></div>
                            <span class="status-text">Available for new projects</span>
                        </div>
                        <p class="availability-text">
                            Currently accepting new projects for Q4 2025. 
                            Book a consultation to discuss your requirements.
                        </p>
                        <a href="#" class="btn btn-outline">
                            <i class="fas fa-calendar"></i>
                            Schedule a Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Have Questions?</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            
            <div class="faq-container">
                <div class="faq-item" data-aos="fade-up">
                    <div class="faq-question">
                        <h4>What services do you offer?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>I offer full-stack web development, cybersecurity solutions, mobile app development, SaaS applications, cloud hosting, and IT consultation services using modern technologies like PHP, Python, and Google Cloud Platform.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <h4>How long does a typical project take?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Project timelines vary based on complexity and requirements. Simple websites typically take 2-4 weeks, while complex applications can take 2-6 months. I'll provide a detailed timeline after understanding your specific needs.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">
                        <h4>Do you provide ongoing support and maintenance?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, I offer ongoing support and maintenance packages to ensure your website or application stays secure, updated, and performs optimally. This includes regular backups, security updates, and technical support.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">
                        <h4>What is your development process?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>My process includes: 1) Discovery and planning, 2) Design and wireframing, 3) Development and testing, 4) Review and feedback, 5) Deployment and launch, 6) Ongoing support. I maintain clear communication throughout each phase.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Enhanced form submission handling
document.getElementById('contactForm').addEventListener('submit', function(e) {
    // Add the submit button value explicitly
    const submitBtn = document.createElement('input');
    submitBtn.type = 'hidden';
    submitBtn.name = 'submit_contact';
    submitBtn.value = 'Send Message';
    this.appendChild(submitBtn);
    
    // Show loading state
    const btnText = document.querySelector('.btn-text');
    const btnLoading = document.querySelector('.btn-loading');
    const submitButton = document.getElementById('submitBtn');
    
    if (btnText && btnLoading) {
        btnText.style.display = 'none';
        btnLoading.style.display = 'flex';
    }
    submitButton.disabled = true;
});

// AOS initialization
AOS.init({
    duration: 800,
    easing: 'ease-out',
    once: true,
    offset: 100
});

// FAQ functionality
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentNode;
        const isActive = faqItem.classList.contains('active');
        
        // Close all FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });
        
        // Toggle current item
        if (!isActive) {
            faqItem.classList.add('active');
        }
    });
});

// Phone number formatting
const phoneInput = document.getElementById('phone');
if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 0) {
            if (value.startsWith('91')) {
                value = '+91 ' + value.substring(2);
            } else if (!value.startsWith('+')) {
                value = '+91 ' + value;
            }
        }
        e.target.value = value;
    });
}
</script>

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

    /* Contact Hero */
    .contact-hero {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 30% 70%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .hero-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
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
        font-size: 1.2rem;
        color: var(--text-secondary);
        line-height: 1.7;
        margin-bottom: 3rem;
    }

    .hero-features {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem 1.5rem;
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 50px;
        transition: var(--transition);
    }

    .feature-item:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .feature-icon {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
    }

    /* Contact Form Section */
    .contact-form-section {
        padding: 5rem 0;
        background: var(--bg-secondary);
    }

    .contact-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: start;
    }

    /* Contact Form */
    .contact-form-container {
        background: var(--bg-primary);
        padding: 3rem;
        border-radius: 20px;
        box-shadow: var(--shadow);
        border: 1px solid var(--border-color);
    }

    .form-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
        color: var(--text-primary);
    }

    .alert {
        padding: 1rem;
        border-radius: 12px;
        margin-bottom: 2rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .alert-success {
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.3);
        color: #065f46;
    }

    .alert-error {
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #991b1b;
    }

    .alert i {
        font-size: 1.25rem;
        margin-top: 0.25rem;
    }

    .alert-content h4 {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .form-group {
        position: relative;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: var(--text-primary);
    }

    .form-input,
    .form-select,
    .form-textarea {
        width: 100%;
        padding: 1rem 3rem 1rem 1rem;
        border: 2px solid var(--border-color);
        border-radius: 12px;
        background: var(--bg-secondary);
        color: var(--text-primary);
        font-size: 1rem;
        transition: var(--transition);
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    .input-icon,
    .select-icon {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-secondary);
        pointer-events: none;
    }

    .form-label + .form-input + .input-icon,
    .form-label + .form-select + .select-icon {
        top: calc(50% + 0.75rem);
    }

    .form-textarea {
        resize: vertical;
        min-height: 120px;
        padding-right: 1rem;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        cursor: pointer;
        margin-bottom: 1.5rem;
    }

    .checkbox-input {
        display: none;
    }

    .checkbox-custom {
        width: 20px;
        height: 20px;
        border: 2px solid var(--border-color);
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        flex-shrink: 0;
    }

    .checkbox-input:checked + .checkbox-custom {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }

    .checkbox-input:checked + .checkbox-custom::after {
        content: '✓';
        color: white;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .checkbox-text {
        color: var(--text-secondary);
        font-size: 0.9rem;
    }

    .form-actions {
        margin-top: 2rem;
    }

    /* Contact Info */
    .contact-info-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .contact-info-card,
    .availability-card {
        background: var(--bg-primary);
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow);
        border: 1px solid var(--border-color);
    }

    .info-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .info-description {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    .contact-methods {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .contact-method {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        border-radius: 12px;
        transition: var(--transition);
    }

    .contact-method:hover {
        background: var(--bg-secondary);
    }

    .method-icon {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .method-info h4 {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: var(--text-primary);
    }

    .method-info p {
        font-weight: 500;
        margin-bottom: 0.25rem;
        color: var(--text-primary);
    }

    .response-time {
        font-size: 0.85rem;
        color: var(--text-secondary);
    }

    .social-connect {
        border-top: 1px solid var(--border-color);
        padding-top: 1.5rem;
    }

    .social-title {
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .social-links {
        display: flex;
        gap: 1rem;
    }

    .social-link {
        width: 45px;
        height: 45px;
        background: var(--bg-secondary);
        border: 2px solid var(--border-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-secondary);
        text-decoration: none;
        transition: var(--transition);
    }

    .social-link:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    /* Availability Card */
    .status-indicator {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .status-dot {
        width: 12px;
        height: 12px;
        background: #10b981;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .status-text {
        font-weight: 600;
        color: var(--text-primary);
    }

    .availability-text {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    /* FAQ Section */
    .faq-section {
        padding: 5rem 0;
        background: var(--bg-primary);
    }

    .faq-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-item {
        background: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        margin-bottom: 1rem;
        overflow: hidden;
        transition: var(--transition);
    }

    .faq-item:hover {
        box-shadow: var(--shadow);
    }

    .faq-question {
        padding: 1.5rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        user-select: none;
    }

    .faq-question h4 {
        font-weight: 600;
        color: var(--text-primary);
        margin: 0;
    }

    .faq-question i {
        color: var(--primary-color);
        transition: var(--transition);
    }

    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }

    .faq-answer {
        padding: 0 1.5rem;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
        padding: 0 1.5rem 1.5rem;
        max-height: 200px;
    }

    .faq-answer p {
        color: var(--text-secondary);
        line-height: 1.6;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-features {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }

        .contact-form-container {
            padding: 2rem;
        }

        .contact-info-card,
        .availability-card {
            padding: 2rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .hero-features {
            gap: 1rem;
        }

        .feature-item {
            padding: 0.75rem 1.25rem;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 1.8rem;
        }

        .contact-form-container {
            padding: 1.5rem;
        }

        .contact-info-card,
        .availability-card {
            padding: 1.5rem;
        }
    }
</style>

<!-- AOS Animation Library -->


<?php include 'includes/footer.php'; ?>
