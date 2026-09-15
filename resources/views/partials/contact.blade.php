<section id="contact" class="py-5 my-md-4">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Let's Connect</span>
            <h2 class="section-title mb-3">
                Have a Project in Mind? <span class="text-gradient">Get In Touch</span>
            </h2>
            <p class="section-desc">
                Whether you have an upcoming project, need consultation on Laravel architecture, or just want to say hi, my inbox is always open.
            </p>
        </div>

        <div class="row g-5">
            <!-- Left Column: Contact Cards & Info -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="d-flex flex-column gap-3 mb-4">
                    <!-- Email Card -->
                    <div class="glass-card p-3 d-flex align-items-center gap-3">
                        <div class="contact-card-icon">
                            <i class="bi bi-envelope-at-fill"></i>
                        </div>
                        <div>
                            <div class="text-dim small">Send an Email</div>
                            <a href="mailto:{{ $profile['email'] }}" class="text-white text-decoration-none fw-semibold">
                                {{ $profile['email'] }}
                            </a>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="glass-card p-3 d-flex align-items-center gap-3">
                        <div class="contact-card-icon">
                            <i class="bi bi-telephone-inbound-fill"></i>
                        </div>
                        <div>
                            <div class="text-dim small">Call or WhatsApp</div>
                            <a href="tel:{{ $profile['phone'] }}" class="text-white text-decoration-none fw-semibold">
                                {{ $profile['phone'] }}
                            </a>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="glass-card p-3 d-flex align-items-center gap-3">
                        <div class="contact-card-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="text-dim small">Location</div>
                            <div class="text-white fw-semibold">{{ $profile['location'] }}</div>
                        </div>
                    </div>

                    <!-- Working Hours / Availability -->
                    <div class="glass-card p-3 d-flex align-items-center gap-3">
                        <div class="contact-card-icon" style="background: rgba(16, 185, 129, 0.12); color: #10b981;">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div>
                            <div class="text-dim small">Availability Status</div>
                            <div class="text-success fw-semibold">{{ $profile['availability'] }}</div>
                        </div>
                    </div>
                </div>

                <!-- Direct Socials -->
                <div class="glass-card p-4">
                    <h6 class="text-white fw-bold mb-3">Find me across the web:</h6>
                    <div class="d-flex gap-2">
                        <a href="{{ $profile['github'] }}" target="_blank" rel="noopener" class="social-circle-btn" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Form -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="glass-card p-4 p-md-5">
                    <h4 class="text-white fw-bold mb-2">Send a Direct Message</h4>
                    <p class="text-muted small mb-4">Fill out the form below and I will get back to you within 24 hours.</p>

                    <!-- Alert / Status Feedback Container -->
                    <div id="formAlert" class="alert d-none" role="alert"></div>

                    @if(session('success'))
                    <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                        <div>{{ session('success') }}</div>
                    </div>
                    @endif

                    <form id="contactForm" action="{{ route('portfolio.contact') }}" method="POST">
                        @csrf
                        
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6">
                                <label for="contactName" class="form-label text-muted small fw-semibold">Your Name *</label>
                                <input type="text" class="form-control contact-input" id="contactName" name="name" placeholder="John Doe" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="contactEmail" class="form-label text-muted small fw-semibold">Your Email *</label>
                                <input type="email" class="form-control contact-input" id="contactEmail" name="email" placeholder="john@example.com" required>
                                <div class="invalid-feedback">Please provide a valid email address.</div>
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <label for="contactSubject" class="form-label text-muted small fw-semibold">Subject *</label>
                                <input type="text" class="form-control contact-input" id="contactSubject" name="subject" placeholder="Project Inquiry / Opportunity" required>
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label for="contactMessage" class="form-label text-muted small fw-semibold">Your Message *</label>
                                <textarea class="form-control contact-input" id="contactMessage" name="message" rows="5" placeholder="Tell me about your project, timeline, budget or inquiry..." required minlength="10"></textarea>
                                <div class="invalid-feedback">Message must be at least 10 characters.</div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" id="submitBtn" class="btn btn-primary-gradient w-100 justify-content-center py-3">
                                    <i class="bi bi-send-fill me-2"></i>
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
