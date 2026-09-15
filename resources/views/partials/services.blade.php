<section id="services" class="py-5 my-md-4">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Services &amp; Offerings</span>
            <h2 class="section-title mb-3">
                What I Bring To <span class="text-gradient">Your Project</span>
            </h2>
            <p class="section-desc">
                From initial architectural planning and database normalization to frontend implementation and cloud deployment.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="row g-4">
            @foreach($services as $index => $service)
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="glass-card service-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="service-icon-box">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>
                        <span class="badge bg-primary bg-opacity-10 text-primary-light border border-primary border-opacity-25 rounded-pill px-3 py-1">
                            {{ $service['badge'] }}
                        </span>
                    </div>
                    <h5 class="text-white fw-bold mb-3">{{ $service['title'] }}</h5>
                    <p class="text-muted small mb-0">{{ $service['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
