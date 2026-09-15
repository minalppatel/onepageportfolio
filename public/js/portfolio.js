/**
 * Modern One-Page Portfolio - Interactive Script
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize AOS Animation Engine
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 850,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60,
            delay: 50,
        });
    }

    // 2. Initialize Typed.js for Hero Section
    const typedElement = document.querySelector('#typed-text');
    if (typedElement && typeof Typed !== 'undefined') {
        const rolesData = typedElement.getAttribute('data-roles');
        let roles = ['Full-Stack Laravel Developer', 'Modern Web Architect', 'REST API Specialist'];
        if (rolesData) {
            try {
                roles = JSON.parse(rolesData);
            } catch (e) {
                console.warn('Could not parse typed roles:', e);
            }
        }

        new Typed('#typed-text', {
            strings: roles,
            typeSpeed: 60,
            backSpeed: 35,
            backDelay: 1800,
            loop: true,
            smartBackspace: true,
        });
    }

    // 3. Navbar Scrolled State & Active Spy
    const navbar = document.querySelector('.custom-navbar');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.custom-navbar .nav-link');

    const handleScroll = () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Active section spy
        const scrollPosition = window.scrollY + 200;
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });

        // Back to top visibility
        const backToTopBtn = document.getElementById('backToTopBtn');
        if (backToTopBtn) {
            if (window.scrollY > 400) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // 4. Back to top action
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 5. Close mobile navigation menu on link click
    const navCollapse = document.getElementById('navbarContent');
    if (navCollapse) {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992 && navCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                    if (bsCollapse) bsCollapse.hide();
                }
            });
        });
    }

    // 6. Project Category Filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            projectItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (filterValue === 'all' || itemCategory === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });

            // Refresh AOS animations
            if (typeof AOS !== 'undefined') {
                setTimeout(() => AOS.refresh(), 350);
            }
        });
    });

    // 7. Interactive Counter Animation
    const counterElements = document.querySelectorAll('.counter-value');
    let hasAnimatedCounters = false;

    const animateCounters = () => {
        if (hasAnimatedCounters) return;
        const banner = document.querySelector('.stats-banner');
        if (!banner) return;

        const rect = banner.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            hasAnimatedCounters = true;
            counterElements.forEach(el => {
                const targetText = el.getAttribute('data-target') || el.innerText;
                const numericMatch = targetText.match(/\d+/);
                if (!numericMatch) return;
                const targetNumber = parseInt(numericMatch[0], 10);
                const suffix = targetText.replace(/\d+/, '');
                let start = 0;
                const duration = 1500;
                const stepTime = 30;
                const stepIncrement = Math.ceil(targetNumber / (duration / stepTime));

                const timer = setInterval(() => {
                    start += stepIncrement;
                    if (start >= targetNumber) {
                        el.innerText = targetNumber + suffix;
                        clearInterval(timer);
                    } else {
                        el.innerText = start + suffix;
                    }
                }, stepTime);
            });
        }
    };

    window.addEventListener('scroll', animateCounters, { passive: true });
    animateCounters();

    // 8. Dynamic Project Modal Details
    const projectModal = document.getElementById('projectDetailModal');
    if (projectModal) {
        projectModal.addEventListener('show.bs.modal', (event) => {
            const button = event.relatedTarget;
            if (!button) return;

            const card = button.closest('.project-card') || button;
            const projectDataRaw = card.getAttribute('data-project');
            if (!projectDataRaw) return;

            try {
                const project = JSON.parse(projectDataRaw);
                document.getElementById('modalProjectTitle').innerText = project.title;
                document.getElementById('modalProjectCategory').innerText = project.category_label || 'Project';
                document.getElementById('modalProjectImage').src = project.image;
                document.getElementById('modalProjectImage').alt = project.title;
                document.getElementById('modalProjectDescription').innerText = project.description || project.summary;
                
                // Highlights
                const highlightsList = document.getElementById('modalProjectHighlights');
                highlightsList.innerHTML = '';
                if (project.highlights && project.highlights.length) {
                    project.highlights.forEach(highlight => {
                        const li = document.createElement('li');
                        li.className = 'mb-2 text-muted';
                        li.innerHTML = `<i class="bi bi-check-circle-fill text-primary me-2"></i> ${highlight}`;
                        highlightsList.appendChild(li);
                    });
                }

                // Tags
                const tagsContainer = document.getElementById('modalProjectTags');
                tagsContainer.innerHTML = '';
                if (project.tags && project.tags.length) {
                    project.tags.forEach(tag => {
                        const span = document.createElement('span');
                        span.className = 'tech-tag me-1 mb-1';
                        span.innerText = tag;
                        tagsContainer.appendChild(span);
                    });
                }

                // Links
                const liveBtn = document.getElementById('modalLiveLink');
                const githubBtn = document.getElementById('modalGithubLink');
                if (liveBtn) liveBtn.href = project.live_url || '#';
                if (githubBtn) githubBtn.href = project.github_url || '#';

            } catch (err) {
                console.error('Error populating project modal:', err);
            }
        });
    }

    // 9. AJAX Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    const formAlert = document.getElementById('formAlert');
    const submitBtn = document.getElementById('submitBtn');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Clear existing error highlights
            contactForm.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            if (formAlert) {
                formAlert.classList.add('d-none');
                formAlert.className = 'alert d-none';
            }

            const originalBtnHtml = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...`;

            const formData = new FormData(contactForm);

            try {
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    if (formAlert) {
                        formAlert.className = 'alert alert-success d-flex align-items-center mb-4';
                        formAlert.innerHTML = `<i class="bi bi-check-circle-fill me-2 fs-5"></i> <div>${data.message}</div>`;
                        formAlert.classList.remove('d-none');
                    }
                    contactForm.reset();
                } else if (response.status === 422 && data.errors) {
                    // Validation errors
                    let errorMessages = [];
                    for (const [field, messages] of Object.entries(data.errors)) {
                        const input = contactForm.querySelector(`[name="${field}"]`);
                        if (input) input.classList.add('is-invalid');
                        errorMessages.push(messages[0]);
                    }

                    if (formAlert) {
                        formAlert.className = 'alert alert-danger d-flex align-items-center mb-4';
                        formAlert.innerHTML = `<i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i> <div>${errorMessages.join('<br>')}</div>`;
                        formAlert.classList.remove('d-none');
                    }
                } else {
                    throw new Error(data.message || 'Something went wrong. Please try again.');
                }
            } catch (error) {
                if (formAlert) {
                    formAlert.className = 'alert alert-danger d-flex align-items-center mb-4';
                    formAlert.innerHTML = `<i class="bi bi-x-circle-fill me-2 fs-5"></i> <div>${error.message || 'Network error occurred. Please try again.'}</div>`;
                    formAlert.classList.remove('d-none');
                }
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
            }
        });
    }
});
