<section id="hero" class="hero-section">
    <!-- Ambient glowing backgrounds -->
    <div class="ambient-glow glow-1"></div>
    <div class="ambient-glow glow-2"></div>
    <div class="ambient-glow glow-3"></div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center gy-5">
            <!-- Left Column: Content -->
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
                <!-- Status Badge -->
                <div class="glass-badge mb-3">
                    <span class="status-indicator">
                        <span class="status-dot"></span>
                    </span>
                    <span>{{ $profile['availability'] }}</span>
                </div>

                <!-- Hero Heading -->
                <h1 class="hero-title">
                    Crafting High-Performance <br>
                    <span class="text-gradient">Web Applications</span> <br>
                    <span class="text-white fs-2 fw-semibold">with Laravel &amp; Modern UI</span>
                </h1>

                <!-- Dynamic Typed Subheading -->
                <div class="mb-3">
                    <span id="typed-text" class="text-gradient-alt fw-bold fs-3" data-roles='@json($profile["typing_roles"])'></span>
                </div>

                <!-- Bio / Lead -->
                <p class="hero-lead">
                    {{ $profile['bio'] }}
                </p>

                <!-- Actions -->
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#projects" class="btn btn-primary-gradient">
                        <span>Explore Projects</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn btn-glass">
                        <i class="bi bi-envelope"></i>
                        <span>Get In Touch</span>
                    </a>
                </div>

                <!-- Social Icons -->
                <div class="d-flex align-items-center gap-2">
                    <span class="text-muted small me-2">Connect:</span>
                    <a href="{{ $profile['github'] }}" target="_blank" rel="noopener" class="social-circle-btn" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="mailto:{{ $profile['email'] }}" class="social-circle-btn" aria-label="Email">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Visual Avatar & Floating Stats -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="hero-visual">
                    <!-- Morphing Border Wrapper -->
                    <div class="avatar-wrapper">
                        <img src="{{ asset($profile['image']) }}" alt="{{ $profile['name'] }}" class="avatar-img">
                    </div>

                    <!-- Floating Badge: Experience -->
                    <div class="floating-stat-card card-left">
                        <div class="stat-icon" style="background: rgba(99, 102, 241, 0.2); color: var(--primary-light);">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-white fs-6">{{ $profile['years_experience'] }} Years</div>
                            <div class="text-muted small">Experience</div>
                        </div>
                    </div>

                    <!-- Floating Badge: Clean Code -->
                    <div class="floating-stat-card card-right">
                        <div class="stat-icon" style="background: rgba(16, 185, 129, 0.2); color: #10b981;">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-white fs-6">{{ $profile['code_reviews'] }}</div>
                            <div class="text-muted small">Code Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Banner -->
        <div class="stats-banner" data-aos="fade-up" data-aos-delay="300">
            <div class="row text-center gy-4">
                <div class="col-6 col-md-3">
                    <div class="counter-value" data-target="{{ $profile['years_experience'] }}">0</div>
                    <div class="counter-label">Years of Experience</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="counter-value" data-target="{{ $profile['projects_completed'] }}">0</div>
                    <div class="counter-label">Projects Completed</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="counter-value" data-target="{{ $profile['happy_clients'] }}">0</div>
                    <div class="counter-label">Satisfied Clients</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="counter-value" data-target="{{ $profile['code_reviews'] }}">0</div>
                    <div class="counter-label">Success Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>
