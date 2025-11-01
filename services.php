<?php 
$pageTitle = "Services - CodesByHarish";
$metaDescription = "Explore the professional services offered by CodesByHarish, including web development, IT consultation, mobile app development, UI/UX design, cybersecurity, cloud solutions, and SEO & analytics. Contact for tailored solutions.";
include 'includes/header.php'; ?>

<main class="main-content">
    <!-- Services Hero Section -->
    <section class="services-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Professional <span class="highlight">Services</span></h1>
                <p class="hero-description">
                    Empower your business with modern web development, IT consultation, mobile apps, UI/UX design, cybersecurity, cloud solutions, and more. Get expert solutions tailored for your needs. For pricing, please <a href="contact.php">contact me</a>.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Cards -->
    <section class="services-list">
        <div class="container">
            <div class="services-grid">
                <!-- Web Development -->
                <div class="service-card" data-service="webdev">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&h=400&fit=crop" alt="Web Development" class="service-img">
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-desc">Custom websites, portals, and web apps using PHP, Laravel, Python, JS, and more. Responsive, secure, and scalable.</p>
                    <button class="btn btn-outline view-details" data-service="webdev">View Details</button>
                </div>
                <!-- IT Consultation -->
                <div class="service-card" data-service="consult">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&h=400&fit=crop" alt="IT Consultation" class="service-img">
                    <h3 class="service-title">IT Consultation</h3>
                    <p class="service-desc">Expert advice for digital transformation, tech stack selection, cloud migration, and business automation.</p>
                    <button class="btn btn-outline view-details" data-service="consult">View Details</button>
                </div>
                <!-- Mobile Apps -->
                <div class="service-card" data-service="mobile">
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=600&h=400&fit=crop" alt="Mobile Apps" class="service-img">
                    <h3 class="service-title">Mobile App Development</h3>
                    <p class="service-desc">Cross-platform mobile apps for iOS & Android using Flutter and native technologies. Seamless user experience.</p>
                    <button class="btn btn-outline view-details" data-service="mobile">View Details</button>
                </div>
                <!-- UI/UX Design -->
                <div class="service-card" data-service="uiux">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=600&h=400&fit=crop" alt="UI/UX Design" class="service-img">
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-desc">Modern, attractive interfaces and user journeys for web and mobile. Wireframes, prototypes, and branding.</p>
                    <button class="btn btn-outline view-details" data-service="uiux">View Details</button>
                </div>
                <!-- Cybersecurity -->
                <div class="service-card" data-service="security">
                    <img src="https://images.unsplash.com/photo-1510511459019-5dda7724fd87?w=600&h=400&fit=crop" alt="Cybersecurity" class="service-img">
                    <h3 class="service-title">Cybersecurity</h3>
                    <p class="service-desc">Vulnerability assessment, penetration testing, IAM, SOC, and security architecture for robust protection.</p>
                    <button class="btn btn-outline view-details" data-service="security">View Details</button>
                </div>
                <!-- Cloud Solutions -->
                <div class="service-card" data-service="cloud">
                    <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=600&h=400&fit=crop" alt="Cloud Solutions" class="service-img">
                    <h3 class="service-title">Cloud Solutions</h3>
                    <p class="service-desc">Google Cloud, AWS, Azure setup, migration, DevOps, CI/CD, and scalable infrastructure for your business.</p>
                    <button class="btn btn-outline view-details" data-service="cloud">View Details</button>
                </div>
                <!-- SEO & Analytics -->
                <div class="service-card" data-service="seo">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop" alt="SEO & Analytics" class="service-img">
                    <h3 class="service-title">SEO & Analytics</h3>
                    <p class="service-desc">Technical SEO, Google Analytics, performance monitoring, and optimization for better online visibility.</p>
                    <button class="btn btn-outline view-details" data-service="seo">View Details</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Detail Modal -->
    <div class="modal" id="serviceModal">
        <div class="modal-content">
            <button class="modal-close" id="closeServiceModal">
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-body" id="serviceModalBody">
                <!-- Dynamic content -->
            </div>
        </div>
    </div>
</main>

<style>
/* ...existing code for main-content, container, btn, modal, etc... */
.main-content { margin-top: 70px; }
.services-hero { padding: 5rem 0 2rem; background: var(--bg-secondary); text-align: center; }
.hero-title { font-size: 2.5rem; font-weight: 700; }
.highlight { color: var(--primary-color); }
.hero-description { font-size: 1.2rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto; margin-top: 1rem; }
.services-list { padding: 2rem 0 5rem; }
.services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; }
.service-card { background: var(--bg-primary); border: 1px solid var(--border-color); border-radius: 16px; padding: 2rem 1rem 1.5rem; text-align: center; box-shadow: var(--shadow); transition: var(--transition); position: relative; }
.service-card:hover { border-color: var(--primary-color); transform: translateY(-5px); box-shadow: 0 8px 25px rgba(37,99,235,0.1); }
.service-img { width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 1.2rem; }
.service-title { font-size: 1.2rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem; }
.service-desc { color: var(--text-secondary); margin-bottom: 1.2rem; font-size: 1rem; }
.btn-outline { border: 2px solid var(--primary-color); color: var(--primary-color); background: none; border-radius: 8px; padding: 0.7rem 1.2rem; cursor: pointer; transition: var(--transition); }
.btn-outline:hover { background: var(--primary-color); color: white; }
.modal { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); display: flex; align-items: center; justify-content: center; z-index: 10000; opacity: 0; visibility: hidden; transition: var(--transition); }
.modal.active { opacity: 1; visibility: visible; }
.modal-content { 
    background: var(--bg-primary); 
    border-radius: 16px; 
    max-width: 600px; 
    width: 90%; 
    max-height: 80vh; 
    overflow-y: auto; 
    position: relative; 
    padding: 2rem; 
    color: var(--text-primary); /* Ensure modal text uses primary text color */
}
.modal-close { position: absolute; top: 1rem; right: 1rem; width: 40px; height: 40px; background: var(--primary-color); color: white; border: none; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; }
.modal-body { 
    padding-top: 1rem; 
    color: var(--text-primary); /* Ensure modal body text uses primary text color */
}
[data-theme="dark"] .modal-content,
[data-theme="dark"] .modal-body {
    color: var(--text-primary); /* Force text color in dark mode */
}
[data-theme="dark"] .modal-content a,
[data-theme="dark"] .modal-body a {
    color: var(--primary-color); /* Make links visible in dark mode */
}
@media (max-width: 768px) {
    .services-grid { grid-template-columns: 1fr; }
    .service-img { height: 140px; }
    .modal-content { padding: 1rem; }
}

a{
    color: white;
    text-decoration: none;
}
</style>

<script>
// Service details data
const serviceDetails = {
    webdev: {
        title: 'Web Development',
        image: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&h=400&fit=crop',
        desc: 'Custom websites, portals, and web apps using PHP, Laravel, Python, JS, and more. Responsive, secure, and scalable.',
        features: [
            'Full-stack web applications',
            'API development & integration',
            'Database design & optimization',
            'Responsive & mobile-friendly',
            'E-commerce solutions',
            'Admin dashboards'
        ],
        price: '₹15,000 - ₹80,000+ (Contact for exact quote)',
        cta: 'Contact for a free consultation & quote.'
    },
    consult: {
        title: 'IT Consultation',
        image: 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&h=400&fit=crop',
        desc: 'Expert advice for digital transformation, tech stack selection, cloud migration, and business automation.',
        features: [
            'Digital strategy planning',
            'Cloud migration guidance',
            'Tech stack selection',
            'Business process automation',
            'Security & compliance advice'
        ],
        price: '₹2,000 - ₹10,000 per session',
        cta: 'Contact to discuss your business needs.'
    },
    mobile: {
        title: 'Mobile App Development',
        image: 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=600&h=400&fit=crop',
        desc: 'Cross-platform mobile apps for iOS & Android using Flutter and native technologies. Seamless user experience.',
        features: [
            'iOS & Android apps',
            'Progressive web apps',
            'App store optimization',
            'Push notifications',
            'User authentication',
            'API integration'
        ],
        price: '₹25,000 - ₹1,00,000+ (Contact for details)',
        cta: 'Let\'s build your mobile app together.'
    },
    uiux: {
        title: 'UI/UX Design',
        image: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=600&h=400&fit=crop',
        desc: 'Modern, attractive interfaces and user journeys for web and mobile. Wireframes, prototypes, and branding.',
        features: [
            'Wireframes & prototypes',
            'Branding & visual identity',
            'User journey mapping',
            'Accessibility design',
            'Responsive layouts'
        ],
        price: '₹8,000 - ₹40,000+ (Contact for quote)',
        cta: 'Get a stunning design for your product.'
    },
    security: {
        title: 'Cybersecurity',
        image: 'https://images.unsplash.com/photo-1510511459019-5dda7724fd87?w=600&h=400&fit=crop',
        desc: 'Vulnerability assessment, penetration testing, IAM, SOC, and security architecture for robust protection.',
        features: [
            'Security audits & assessments',
            'Penetration testing',
            'IAM implementation',
            'SOC analysis & monitoring',
            'Compliance consulting'
        ],
        price: '₹10,000 - ₹60,000+ (Contact for scope)',
        cta: 'Secure your business with expert help.'
    },
    cloud: {
        title: 'Cloud Solutions',
        image: 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=600&h=400&fit=crop',
        desc: 'Google Cloud, AWS, Azure setup, migration, DevOps, CI/CD, and scalable infrastructure for your business.',
        features: [
            'Cloud migration & hosting',
            'DevOps & CI/CD pipelines',
            'Performance optimization',
            'Backup & disaster recovery',
            'Serverless architecture'
        ],
        price: '₹12,000 - ₹70,000+ (Contact for details)',
        cta: 'Move to the cloud with confidence.'
    },
    seo: {
        title: 'SEO & Analytics',
        image: 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop',
        desc: 'Technical SEO, Google Analytics, performance monitoring, and optimization for better online visibility.',
        features: [
            'Technical SEO audit',
            'Google Analytics setup',
            'Performance monitoring',
            'Content optimization',
            'Keyword research'
        ],
        price: '₹5,000 - ₹25,000+ (Contact for package)',
        cta: 'Boost your online presence today.'
    }
};

// Modal logic
const modal = document.getElementById('serviceModal');
const modalBody = document.getElementById('serviceModalBody');
const closeModal = document.getElementById('closeServiceModal');
document.querySelectorAll('.view-details').forEach(btn => {
    btn.addEventListener('click', function() {
        const service = btn.dataset.service;
        const details = serviceDetails[service];
        if (details) {
            modalBody.innerHTML = `
                <h2>${details.title}</h2>
                <img src="${details.image}" alt="${details.title}" style="width:100%;border-radius:12px;margin-bottom:1rem;">
                <p style="margin-bottom:1.2rem;">${details.desc}</p>
                <h3>Key Features</h3>
                <ul style="text-align:left;margin-bottom:1.2rem;">
                    ${details.features.map(f => `<li>✓ ${f}</li>`).join('')}
                </ul>
                <div style="margin-bottom:1.2rem;"><strong>Price Range:</strong> ${details.price}</div>
                <div style="margin-bottom:1.2rem;"><strong>Note:</strong> For exact pricing and requirements, please <a href="contact.php">contact me</a>.</div>
                <a href="contact.php" class="btn btn-primary" style="margin-top:1rem;">Contact Now</a>
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
</script>

<?php include 'includes/footer.php'; ?>
