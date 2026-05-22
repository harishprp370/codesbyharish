/**
 * CodesByHarish v2026 — Main JS Orchestrator
 * Handles: Smooth Scroll (Lenis), 3D Particles (Three.js hero),
 * Scroll Reveals, Magnetic Buttons, Counter Animations,
 * Tilt Cards, Cursor, FAQ, Modals, Nav, Terminal Boot
 */

/* ============================================================
   CURSOR
============================================================ */
(function initCursor() {
  const cursor = document.querySelector('.cursor');
  const follower = document.querySelector('.cursor-follower');
  if (!cursor || !follower) return;
  if (window.matchMedia('(hover: none)').matches) return;

  let mx = 0, my = 0, fx = 0, fy = 0;

  document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    cursor.style.transform = `translate(${mx - 5}px, ${my - 5}px)`;
  });

  (function animFol() {
    fx += (mx - fx) * 0.12;
    fy += (my - fy) * 0.12;
    follower.style.transform = `translate(${fx - 18}px, ${fy - 18}px)`;
    requestAnimationFrame(animFol);
  })();

  document.addEventListener('mouseover', e => {
    if (e.target.closest('a, button, .btn, .project-card, .service-card, .service-item, .filter-btn')) {
      cursor.classList.add('active');
      follower.classList.add('active');
    }
  });

  document.addEventListener('mouseout', e => {
    if (e.target.closest('a, button, .btn, .project-card, .service-card, .service-item, .filter-btn')) {
      cursor.classList.remove('active');
      follower.classList.remove('active');
    }
  });
})();


/* ============================================================
   HEADER SCROLL STATE
============================================================ */
(function initHeader() {
  const header = document.querySelector('.header');
  if (!header) return;

  const update = () => header.classList.toggle('scrolled', window.scrollY > 30);
  window.addEventListener('scroll', update, { passive: true });
  update();
})();


/* ============================================================
   MOBILE NAV
============================================================ */
(function initMobileNav() {
  const toggle = document.getElementById('mobileToggle');
  const menu = document.getElementById('navMenu');
  if (!toggle || !menu) return;

  toggle.addEventListener('click', () => {
    const open = menu.classList.toggle('active');
    toggle.querySelector('i').className = open ? 'fas fa-times' : 'fas fa-bars';
  });

  document.addEventListener('click', e => {
    if (!toggle.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.remove('active');
      const i = toggle.querySelector('i');
      if (i) i.className = 'fas fa-bars';
    }
  });

  // Active link
  const path = location.pathname.replace(/^\/|\/$/g, '').replace(/\.php$/, '') || 'index';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href').replace(/^\/|\/$/g, '').replace(/\.php$/, '');
    link.classList.toggle('active', href === path || (href === 'index' && path === 'index'));
  });
})();


/* ============================================================
   THEME TOGGLE
============================================================ */
(function initTheme() {
  const btn = document.getElementById('themeToggle');
  const root = document.documentElement;
  const stored = localStorage.getItem('theme') || 'dark';

  const apply = t => {
    root.setAttribute('data-theme', t);
    document.body.setAttribute('data-theme', t);
    localStorage.setItem('theme', t);
    const i = btn?.querySelector('i');
    if (i) i.className = t === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
  };

  apply(stored);
  btn?.addEventListener('click', () => apply(root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark'));
})();


/* ============================================================
   LANGUAGE DROPDOWN
============================================================ */
(function initLang() {
  const toggle = document.getElementById('langToggle');
  const menu = document.getElementById('langMenu');
  if (!toggle || !menu) return;

  toggle.addEventListener('click', e => { e.stopPropagation(); menu.classList.toggle('show'); });

  document.querySelectorAll('.lang-option').forEach(opt => {
    opt.addEventListener('click', e => {
      e.preventDefault();
      const sel = document.querySelector('select.goog-te-combo');
      if (sel) { sel.value = opt.dataset.lang; sel.dispatchEvent(new Event('change')); }
      menu.classList.remove('show');
    });
  });

  document.addEventListener('click', e => {
    if (!toggle.contains(e.target)) menu.classList.remove('show');
  });
})();


/* ============================================================
   SMOOTH SCROLL (Lenis — loaded via CDN)
============================================================ */
function initLenis() {
  if (typeof Lenis === 'undefined') return;
  const lenis = new Lenis({ lerp: 0.08, smoothWheel: true });
  function raf(t) { lenis.raf(t); requestAnimationFrame(raf); }
  requestAnimationFrame(raf);
  window._lenis = lenis;
}


/* ============================================================
   SCROLL REVEAL (IntersectionObserver)
============================================================ */
function initReveal() {
  const els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .timeline-item, .pop-construct');
  if (!els.length) return;

  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => obs.observe(el));
}


/* ============================================================
   COUNTER ANIMATION
============================================================ */
function initCounters() {
  const els = document.querySelectorAll('[data-count]');
  if (!els.length) return;

  const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const target = parseInt(el.dataset.count, 10);
      const suffix = el.dataset.suffix || '';
      const dur = 1800;
      const start = performance.now();

      const tick = now => {
        const p = Math.min((now - start) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(ease * target) + suffix;
        if (p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
      obs.unobserve(el);
    });
  }, { threshold: 0.5 });

  els.forEach(el => obs.observe(el));
}


/* ============================================================
   3D TILT CARDS
============================================================ */
function initTilt() {
  document.querySelectorAll('.card-tilt').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width - 0.5) * 14;
      const y = ((e.clientY - rect.top) / rect.height - 0.5) * -14;
      card.style.transform = `perspective(800px) rotateX(${y}deg) rotateY(${x}deg) scale3d(1.02,1.02,1.02)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}


/* ============================================================
   MAGNETIC BUTTONS
============================================================ */
function initMagnetic() {
  document.querySelectorAll('.btn-magnetic').forEach(wrap => {
    const btn = wrap.querySelector('.btn') || wrap;
    wrap.addEventListener('mousemove', e => {
      const rect = wrap.getBoundingClientRect();
      const x = (e.clientX - rect.left - rect.width / 2) * 0.35;
      const y = (e.clientY - rect.top - rect.height / 2) * 0.35;
      btn.style.transform = `translate(${x}px, ${y}px)`;
    });
    wrap.addEventListener('mouseleave', () => { btn.style.transform = ''; });
  });
}


/* ============================================================
   GLOWING CARD MOUSE TRACK
============================================================ */
function initCardGlow() {
  document.querySelectorAll('.card-glow').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--glow-x', `${x}px`);
      card.style.setProperty('--glow-y', `${y}px`);
      const pseudo = card.querySelector(':scope > *:first-child') || card;
      card.style.setProperty('background-position', `${x}px ${y}px`, '');
    });
  });
}


/* ============================================================
   FAQ
============================================================ */
function initFAQ() {
  document.querySelectorAll('.faq-item').forEach(item => {
    const q = item.querySelector('.faq-q');
    q?.addEventListener('click', () => {
      const wasOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
      if (!wasOpen) item.classList.add('open');
    });
  });
}


/* ============================================================
   MODAL
============================================================ */
function initModals() {
  document.querySelectorAll('[data-modal-open]').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const id = trigger.dataset.modalOpen;
      const modal = document.getElementById(id);
      if (modal) { modal.classList.add('active'); document.body.style.overflow = 'hidden'; }
    });
  });

  document.querySelectorAll('.modal').forEach(modal => {
    const closeBtn = modal.querySelector('.modal-close');
    closeBtn?.addEventListener('click', () => closeModal(modal));
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(modal); });
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      document.querySelectorAll('.modal.active').forEach(m => closeModal(m));
    }
  });
}

function closeModal(modal) {
  modal.classList.remove('active');
  document.body.style.overflow = '';
}

window.closeModal = closeModal;


/* ============================================================
   THREE.JS HERO PARTICLE FIELD
============================================================ */
function initThreeHero() {
  const canvas = document.getElementById('three-canvas');
  if (!canvas || typeof THREE === 'undefined') return;

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(60, canvas.clientWidth / canvas.clientHeight, 0.1, 1000);
  camera.position.z = 4;

  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setSize(canvas.clientWidth, canvas.clientHeight);
  renderer.setClearColor(0x000000, 0);

  // Particles
  const COUNT = 1800;
  const geo = new THREE.BufferGeometry();
  const pos = new Float32Array(COUNT * 3);
  const sizes = new Float32Array(COUNT);

  for (let i = 0; i < COUNT; i++) {
    pos[i * 3] = (Math.random() - 0.5) * 12;
    pos[i * 3 + 1] = (Math.random() - 0.5) * 8;
    pos[i * 3 + 2] = (Math.random() - 0.5) * 6;
    sizes[i] = Math.random() * 2.5 + 0.5;
  }

  geo.setAttribute('position', new THREE.BufferAttribute(pos, 3));
  geo.setAttribute('size', new THREE.BufferAttribute(sizes, 1));

  const mat = new THREE.PointsMaterial({
    color: 0x6366f1,
    size: 0.035,
    transparent: true,
    opacity: 0.55,
    sizeAttenuation: true,
  });

  const points = new THREE.Points(geo, mat);
  scene.add(points);

  // Connection lines
  const lineMat = new THREE.LineBasicMaterial({ color: 0x6366f1, transparent: true, opacity: 0.07 });
  const lineGeo = new THREE.BufferGeometry();
  const linePositions = [];
  const limit = 200;
  for (let i = 0; i < limit; i++) {
    const a = Math.floor(Math.random() * COUNT);
    const b = Math.floor(Math.random() * COUNT);
    linePositions.push(pos[a * 3], pos[a * 3 + 1], pos[a * 3 + 2]);
    linePositions.push(pos[b * 3], pos[b * 3 + 1], pos[b * 3 + 2]);
  }
  lineGeo.setAttribute('position', new THREE.BufferAttribute(new Float32Array(linePositions), 3));
  scene.add(new THREE.LineSegments(lineGeo, lineMat));

  // Mouse parallax
  let mouseX = 0, mouseY = 0;
  document.addEventListener('mousemove', e => {
    mouseX = (e.clientX / window.innerWidth - 0.5) * 0.5;
    mouseY = (e.clientY / window.innerHeight - 0.5) * -0.3;
  });

  let t = 0;
  function animate() {
    requestAnimationFrame(animate);
    t += 0.003;
    points.rotation.y += 0.0008;
    points.rotation.x += 0.0003;
    camera.position.x += (mouseX - camera.position.x) * 0.02;
    camera.position.y += (mouseY - camera.position.y) * 0.02;
    camera.lookAt(scene.position);
    renderer.render(scene, camera);
  }
  animate();

  window.addEventListener('resize', () => {
    camera.aspect = canvas.clientWidth / canvas.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
  });
}


/* ============================================================
   HERO FRAME MOUSE PARALLAX — subtle tilt follows cursor
============================================================ */
function initHeroParallax() {
  const wrap = document.getElementById('heroFrameWrap');
  if (!wrap) return;
  if (window.matchMedia('(hover: none)').matches) return;

  let currentX = 0, currentY = 0, targetX = 0, targetY = 0;

  document.addEventListener('mousemove', e => {
    const cx = window.innerWidth / 2;
    const cy = window.innerHeight / 2;
    // Gentle ±6° tilt — subtle, not jarring
    targetX = ((e.clientY - cy) / cy) * -6;
    targetY = ((e.clientX - cx) / cx) *  6;
  });

  (function tiltLoop() {
    currentX += (targetX - currentX) * 0.06;
    currentY += (targetY - currentY) * 0.06;
    wrap.style.transform = `perspective(600px) rotateX(${currentX.toFixed(2)}deg) rotateY(${currentY.toFixed(2)}deg)`;
    requestAnimationFrame(tiltLoop);
  })();

  document.addEventListener('mouseleave', () => { targetX = 0; targetY = 0; });
}


/* ============================================================
   FILTER BUTTONS (Projects)
============================================================ */
function initFilters() {
  const btns = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('[data-category]');
  if (!btns.length) return;

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const cat = btn.dataset.filter;

      cards.forEach(card => {
        const match = cat === 'all' || card.dataset.category === cat;
        card.style.transition = 'opacity 0.3s, transform 0.3s';
        if (match) {
          card.style.opacity = '1';
          card.style.transform = '';
          card.style.display = '';
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(0.95)';
          setTimeout(() => { if (!match) card.style.display = 'none'; }, 300);
        }
      });
    });
  });
}


/* ============================================================
   TERMINAL BOOT (index page only)
============================================================ */
function initTerminal() {
  const overlay = document.getElementById('intro-overlay');
  const textEl = document.getElementById('terminal-text');
  const main = document.getElementById('main-content');
  if (!overlay || !textEl) return;

  // Skip if already seen this session
  if (sessionStorage.getItem('booted')) {
    overlay.style.display = 'none';
    if (main) { main.style.display = ''; main.style.opacity = '1'; }
    afterBoot();
    return;
  }

  const lines = [
    { text: '$ initializing codesbyharish.in — portfolio_v2026', cls: '' },
    { text: '[ OK ] Runtime environment verified', cls: 't-ok' },
    { text: '[ OK ] PHP 8.3 backend connected', cls: 't-ok' },
    { text: '[ OK ] MySQL database secured', cls: 't-ok' },
    { text: '[ OK ] SSL/TLS handshake complete', cls: 't-ok' },
    { text: '[ OK ] Loading Harish N — Full-Stack Developer', cls: 't-accent' },
    { text: '> All systems nominal. Welcome.', cls: 't-accent' },
  ];

  let i = 0;
  const TYPE_DELAY = 28;
  const LINE_DELAY = 260;

  function typeLine(lineObj, done) {
    const div = document.createElement('div');
    div.className = 'terminal-line';
    div.innerHTML = `<span class="t-prompt">›</span><span class="${lineObj.cls || ''}"></span>`;
    textEl.appendChild(div);
    const span = div.querySelector('span:last-child');
    let c = 0;
    const interval = setInterval(() => {
      span.textContent += lineObj.text[c++];
      if (c >= lineObj.text.length) { clearInterval(interval); done(); }
    }, TYPE_DELAY);
  }

  function nextLine() {
    if (i >= lines.length) {
      setTimeout(() => {
        // Reveal main content underneath doors instantly (since doors hide it)
        if (main) {
          main.style.display = '';
          main.style.opacity = '1';
        }

        // Add loaded class to trigger horizontal split slide-out transitions
        overlay.classList.add('loaded');

        setTimeout(() => {
          overlay.style.display = 'none';
          sessionStorage.setItem('booted', '1');
          afterBoot();
        }, 850); // Wait for the 800ms split animation to fully complete
      }, 400);
      return;
    }
    typeLine(lines[i++], () => setTimeout(nextLine, LINE_DELAY));
  }
  nextLine();
}


/* ============================================================
   AFTER BOOT — run all animations
============================================================ */
function afterBoot() {
  initLenis();
  initReveal();
  initCounters();
  initTilt();
  initMagnetic();
  initCardGlow();
  initFAQ();
  initModals();
  initFilters();
  initThreeHero();
  initHeroParallax();
}


/* ============================================================
   INIT
============================================================ */
document.addEventListener('DOMContentLoaded', () => {
  // Non-index pages boot immediately
  const isIndex = document.getElementById('intro-overlay');
  if (!isIndex) afterBoot();
  else initTerminal();
});
