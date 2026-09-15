<section id="projects" class="py-5 my-md-4">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Featured Work</span>
            <h2 class="section-title mb-3">
                Highlighted <span class="text-gradient">Portfolio Projects</span>
            </h2>
            <p class="section-desc">
                A selection of real-world web applications, SaaS platforms, APIs, and client systems engineered from scratch.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">
                <i class="bi bi-grid-fill me-1"></i> All Projects
            </button>
            <button class="filter-btn" data-filter="laravel">
                <i class="fa-brands fa-laravel me-1"></i> Web Applications
            </button>
            <button class="filter-btn" data-filter="fullstack">
                <i class="bi bi-layers-half me-1"></i> Enterprise Platforms
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4" id="projectsGrid">
            @foreach($projects as $index => $project)
            <div class="col-lg-6 project-item" data-category="{{ $project['category'] }}" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                <div class="glass-card project-card" data-project='@json($project)'>
                    <!-- Thumbnail & Overlay -->
                    <div class="project-thumb">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
                        
                        <!-- Floating Category Badge -->
                        <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 border border-secondary border-opacity-25 rounded-pill px-3 py-2 small">
                            {{ $project['category_label'] }}
                        </span>

                        <div class="project-overlay">
                            <!-- Quick View Modal Trigger -->
                            <button type="button" class="project-overlay-btn" data-bs-toggle="modal" data-bs-target="#projectDetailModal" title="View Details">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                            @if(!empty($project['live_url']))
                            <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener" class="project-overlay-btn" title="Live Preview">
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                            @endif
                            @if(!empty($project['github_url']))
                            <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener" class="project-overlay-btn" title="Source Code">
                                <i class="bi bi-github"></i>
                            </a>
                            @endif
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="project-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary-light small border border-primary border-opacity-20">
                                {{ $project['badge'] }}
                            </span>
                        </div>

                        <h5 class="text-white fw-bold mb-2">{{ $project['title'] }}</h5>
                        <p class="text-muted small flex-grow-1 mb-3">
                            {{ $project['summary'] }}
                        </p>

                        <!-- Tech Tags -->
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            @foreach(array_slice($project['tags'], 0, 3) as $tag)
                            <span class="tech-tag">{{ $tag }}</span>
                            @endforeach
                            @if(count($project['tags']) > 3)
                            <span class="tech-tag">+{{ count($project['tags']) - 3 }}</span>
                            @endif
                        </div>

                        <!-- Details Button -->
                        <button type="button" class="btn btn-glass btn-sm w-100 justify-content-center" data-bs-toggle="modal" data-bs-target="#projectDetailModal">
                            <span>View Case Study</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
