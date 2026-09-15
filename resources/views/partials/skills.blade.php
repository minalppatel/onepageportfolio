<section id="skills" class="py-5 my-md-4">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Technical Arsenal</span>
            <h2 class="section-title mb-3">
                Skills, Languages &amp; <span class="text-gradient">Frameworks</span>
            </h2>
            <p class="section-desc">
                Engineered with battle-tested modern tools ensuring reliability, maintainability, and exceptional developer experience.
            </p>
        </div>

        <div class="row g-4">
            <!-- Backend Stack -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="brand-icon" style="background: linear-gradient(135deg, #777bb4 0%, #ff2d20 100%);">
                            <i class="fa-brands fa-laravel fs-5"></i>
                        </div>
                        <div>
                            <h4 class="text-white fw-bold mb-0">Backend Engineering</h4>
                            <span class="text-muted small">Server, APIs &amp; Data</span>
                        </div>
                    </div>

                    @foreach($skills['backend'] as $skill)
                    <div class="skill-bar-wrapper">
                        <div class="skill-info">
                            <span class="text-white">
                                <i class="{{ $skill['icon'] }} me-2" style="color: {{ $skill['color'] }}"></i>
                                {{ $skill['name'] }}
                            </span>
                            <span class="text-gradient fw-bold">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="progress-track">
                            <div class="progress-fill" style="width: {{ $skill['level'] }}%;"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Frontend Stack -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="brand-icon" style="background: linear-gradient(135deg, #7952b3 0%, #06b6d4 100%);">
                            <i class="fa-brands fa-bootstrap fs-5"></i>
                        </div>
                        <div>
                            <h4 class="text-white fw-bold mb-0">Frontend &amp; UI/UX</h4>
                            <span class="text-muted small">Responsive &amp; Interactive</span>
                        </div>
                    </div>

                    @foreach($skills['frontend'] as $skill)
                    <div class="skill-bar-wrapper">
                        <div class="skill-info">
                            <span class="text-white">
                                <i class="{{ $skill['icon'] }} me-2" style="color: {{ $skill['color'] }}"></i>
                                {{ $skill['name'] }}
                            </span>
                            <span class="text-gradient fw-bold">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="progress-track">
                            <div class="progress-fill" style="width: {{ $skill['level'] }}%;"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tools & DevOps -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="brand-icon" style="background: linear-gradient(135deg, #f05032 0%, #2496ed 100%);">
                            <i class="fa-solid fa-gears fs-5"></i>
                        </div>
                        <div>
                            <h4 class="text-white fw-bold mb-0">DevOps &amp; Workflow</h4>
                            <span class="text-muted small">Deployment &amp; Tooling</span>
                        </div>
                    </div>

                    @foreach($skills['tools'] as $skill)
                    <div class="skill-bar-wrapper">
                        <div class="skill-info">
                            <span class="text-white">
                                <i class="{{ $skill['icon'] }} me-2" style="color: {{ $skill['color'] }}"></i>
                                {{ $skill['name'] }}
                            </span>
                            <span class="text-gradient fw-bold">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="progress-track">
                            <div class="progress-fill" style="width: {{ $skill['level'] }}%;"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
