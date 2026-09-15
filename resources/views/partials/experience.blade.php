<section id="experience" class="py-5 my-md-4">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Career Pathway</span>
            <h2 class="section-title mb-3">
                Experience &amp; <span class="text-gradient">Education</span>
            </h2>
            <p class="section-desc">
                A timeline of continuous learning, professional growth, and meaningful software delivery.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="timeline-container">
                    @foreach($experiences as $index => $item)
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <!-- Node Marker -->
                        <div class="timeline-marker"></div>

                        <!-- Card Content -->
                        <div class="glass-card p-4">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-2">
                                <span class="timeline-badge">
                                    <i class="bi {{ $item['type'] === 'education' ? 'bi-mortarboard' : 'bi-briefcase' }} me-1"></i>
                                    {{ $item['period'] }}
                                </span>
                                <span class="text-muted small">
                                    <i class="bi bi-geo-alt me-1"></i>{{ $item['company'] }}
                                </span>
                            </div>

                            <h4 class="text-white fw-bold mb-2">{{ $item['role'] }}</h4>
                            <p class="text-muted mb-3">{{ $item['description'] }}</p>

                            <!-- Tech Badges -->
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($item['skills'] as $tech)
                                <span class="tech-tag">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
