<section id="about" class="py-5 my-md-4">
    <div class="container py-4">
        <div class="row align-items-center gy-5">
            <!-- Left Column: Visual card & highlights -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="glass-card p-4 p-md-5 position-relative overflow-hidden">
                    <div class="ambient-glow glow-1" style="width: 250px; height: 250px; top: -50px; right: -50px;"></div>
                    
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="brand-icon" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <div>
                            <h4 class="mb-0 text-white fw-bold">{{ $profile['name'] }}</h4>
                            <span class="text-gradient small fw-semibold">{{ $profile['role'] }}</span>
                        </div>
                    </div>

                    <p class="text-muted mb-4">
                        Specialized in translating sophisticated business workflows into clean, maintainable, and high-performance Laravel architectures with crisp Bootstrap frontends.
                    </p>

                    <div class="border-top border-secondary border-opacity-10 pt-3">
                        <div class="row g-3 small">
                            <div class="col-sm-6">
                                <div class="text-dim">Location:</div>
                                <div class="fw-semibold text-white">{{ $profile['location'] }}</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-dim">Experience:</div>
                                <div class="fw-semibold text-white">{{ $profile['years_experience'] }} Years</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-dim">Email:</div>
                                <div class="fw-semibold text-white text-truncate">{{ $profile['email'] }}</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-dim">Employment:</div>
                                <div class="fw-semibold text-success">Full-Time / Contract</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <a href="#contact" class="btn btn-primary-gradient w-100 justify-content-center">
                            <i class="bi bi-file-earmark-person"></i>
                            <span>Request Full Resume</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Story & Key Pillars -->
            <div class="col-lg-7" data-aos="fade-left">
                <span class="section-tag">About Me</span>
                <h2 class="section-title mb-4">
                    Architecting scalable web solutions with <span class="text-gradient">precision &amp; passion</span>
                </h2>

                <p class="text-muted fs-5 mb-4">
                    I believe great software lives at the intersection of robust backend engineering, intuitive UX, and bulletproof code structure. Over the past 5+ years, I have worked with startups, agencies, and enterprise teams to turn ideas into reliable production-ready products.
                </p>

                <!-- Key Pillars Grid -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <h5 class="text-white fw-bold mb-1">Clean MVC Architecture</h5>
                            <p class="text-muted small mb-0">Strict separation of concerns, repository patterns, custom service providers, and modular design.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <h5 class="text-white fw-bold mb-1">Blazing Fast Execution</h5>
                            <p class="text-muted small mb-0">Eager loading optimizations, multi-tier Redis caching, database indexes, and minified assets.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h5 class="text-white fw-bold mb-1">Security by Design</h5>
                            <p class="text-muted small mb-0">CSRF protection, encrypted sessions, strict input validation, rate limiting, and RBAC authentication.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <h5 class="text-white fw-bold mb-1">Pixel-Perfect Responsive</h5>
                            <p class="text-muted small mb-0">Fluid layouts that look extraordinary on 4K desktops, tablets, and smartphones alike.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
