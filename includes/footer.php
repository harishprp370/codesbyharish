<footer class="footer">
    <div class="footer-container">
        <!-- Footer Content -->
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-brand">
                <a href="#home" class="footer-logo">CodesByHarish</a>
                <p class="footer-description">
                    Crafting digital experiences with passion and precision. 
                    Full-stack developer creating innovative web solutions.
                </p>
                <div class="social-links">
                    <a href="https://github.com/harishprp370" class="social-link" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/harishcodes01" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://x.com/h4ckerharish36" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/im.harish.n" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="mailto:hello@codesbyharish.in" class="social-link" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php" class="footer-link">Home</a></li>
                    <li><a href="about.php" class="footer-link">About</a></li>
                    <li><a href="projects.php" class="footer-link">Projects</a></li>
                    <li><a href="contact.php" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-section">
                <h3 class="footer-title">Services</h3>
                <ul class="footer-links">
                    <li><a href="#" class="footer-link">Web Development</a></li>
                    <li><a href="#" class="footer-link">UI/UX Design</a></li>
                    <li><a href="#" class="footer-link">Mobile Apps</a></li>
                    <li><a href="#" class="footer-link">Consulting</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <h3 class="footer-title">Get In Touch</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>hello@codesbyharish.in</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+91 90199 40788</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bangalore, India</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="newsletter-section">
            <div class="newsletter-content">
                <h3 class="newsletter-title">Stay Updated</h3>
                <p class="newsletter-text">Subscribe to get latest updates and tech insights</p>
            </div>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> CodesByHarish. All rights reserved.</p>
            </div>
            <div class="footer-bottom-links">
                <a href="privacy.php" class="bottom-link">Privacy Policy</a>
                <a href="terms.php" class="bottom-link">Terms of Service</a>
                <a href="sitemap.xml" class="bottom-link">Sitemap</a>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>

<style>
    /* Footer Styles */
    .footer {
        background: var(--bg-secondary);
        border-top: 1px solid var(--border-color);
        margin-top: auto;
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
        0%, 100% { opacity: 0; }
        50% { opacity: 1; }
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem 2rem;
    }

    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 3rem;
        margin-bottom: 3rem;
    }

    /* Brand Section */
    .footer-brand {
        max-width: 300px;
    }

    .footer-logo {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-color);
        text-decoration: none;
        display: inline-block;
        margin-bottom: 1rem;
        transition: var(--transition);
    }

    .footer-logo:hover {
        transform: scale(1.05);
    }

    .footer-description {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }

    .social-links {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .social-link {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--bg-primary);
        border: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-secondary);
        text-decoration: none;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .social-link::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: var(--primary-color);
        border-radius: 50%;
        transition: var(--transition);
        transform: translate(-50%, -50%);
        z-index: 0;
    }

    .social-link i {
        position: relative;
        z-index: 1;
        transition: var(--transition);
    }

    .social-link:hover::before {
        width: 100%;
        height: 100%;
    }

    .social-link:hover {
        border-color: var(--primary-color);
        transform: translateY(-3px);
    }

    .social-link:hover i {
        color: white;
    }

    /* Footer Sections */
    .footer-section {
        animation: fadeInUp 0.6s ease-out;
        animation-fill-mode: both;
    }

    .footer-section:nth-child(2) { animation-delay: 0.1s; }
    .footer-section:nth-child(3) { animation-delay: 0.2s; }
    .footer-section:nth-child(4) { animation-delay: 0.3s; }

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

    .footer-title {
        color: var(--text-primary);
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: -0.5rem;
        left: 0;
        width: 30px;
        height: 2px;
        background: var(--primary-color);
        border-radius: 1px;
    }

    .footer-links {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 0.8rem;
    }

    .footer-link {
        color: var(--text-secondary);
        text-decoration: none;
        transition: var(--transition);
        font-size: 0.95rem;
        position: relative;
        padding-left: 0;
    }

    .footer-link::before {
        content: '';
        position: absolute;
        left: -15px;
        top: 50%;
        width: 0;
        height: 1px;
        background: var(--primary-color);
        transition: var(--transition);
        transform: translateY(-50%);
    }

    .footer-link:hover {
        color: var(--primary-color);
        padding-left: 15px;
    }

    .footer-link:hover::before {
        width: 10px;
    }

    /* Contact Info */
    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        color: var(--text-secondary);
        font-size: 0.95rem;
    }

    .contact-item i {
        color: var(--primary-color);
        width: 16px;
        text-align: center;
    }

    /* Newsletter Section */
    .newsletter-section {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }

    .newsletter-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.1), transparent);
        animation: slideRight 3s infinite;
    }

    @keyframes slideRight {
        0% { left: -100%; }
        100% { left: 100%; }
    }

    .newsletter-content h3 {
        color: var(--text-primary);
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .newsletter-text {
        color: var(--text-secondary);
        font-size: 0.95rem;
    }

    .newsletter-form {
        display: flex;
        gap: 0.5rem;
        min-width: 300px;
    }

    .newsletter-input {
        flex: 1;
        padding: 0.8rem 1rem;
        border: 2px solid var(--border-color);
        border-radius: 8px;
        background: var(--bg-secondary);
        color: var(--text-primary);
        font-size: 0.95rem;
        transition: var(--transition);
    }

    .newsletter-input:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .newsletter-btn {
        padding: 0.8rem 1.2rem;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .newsletter-btn:hover {
        background: var(--secondary-color);
        transform: translateY(-2px);
    }

    /* Footer Bottom */
    .footer-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 2rem;
        border-top: 1px solid var(--border-color);
        flex-wrap: wrap;
        gap: 1rem;
    }

    .copyright {
        color: var(--text-secondary);
        font-size: 0.9rem;
    }

    .footer-bottom-links {
        display: flex;
        gap: 2rem;
    }

    .bottom-link {
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 0.9rem;
        transition: var(--transition);
    }

    .bottom-link:hover {
        color: var(--primary-color);
    }

    /* Back to Top Button */
    .back-to-top {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        transition: var(--transition);
        z-index: 1000;
        box-shadow: var(--shadow);
    }

    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .back-to-top:hover {
        background: var(--secondary-color);
        transform: translateY(-5px);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .footer-content {
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .newsletter-section {
            flex-direction: column;
            text-align: center;
        }

        .newsletter-form {
            min-width: auto;
            width: 100%;
            max-width: 400px;
        }
    }

    @media (max-width: 768px) {
        .footer-container {
            padding: 3rem 1rem 2rem;
        }

        .footer-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .footer-brand {
            max-width: none;
            text-align: center;
        }

        .social-links {
            justify-content: center;
        }

        .newsletter-section {
            padding: 1.5rem;
        }

        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }

        .footer-bottom-links {
            justify-content: center;
        }

        .back-to-top {
            bottom: 1rem;
            right: 1rem;
            width: 45px;
            height: 45px;
        }
    }

    @media (max-width: 480px) {
        .footer-container {
            padding: 2rem 1rem;
        }

        .newsletter-form {
            flex-direction: column;
        }

        .footer-bottom-links {
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>

<script>
    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Newsletter Form
    const newsletterForm = document.querySelector('.newsletter-form');
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = e.target.querySelector('.newsletter-input').value;
        
        // Add your newsletter subscription logic here
        alert(`Thank you for subscribing with email: ${email}`);
        e.target.reset();
    });

    // Animate footer sections on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.footer-section').forEach(section => {
        section.style.animationPlayState = 'paused';
        observer.observe(section);
    });
</script>

</body>
</html>
