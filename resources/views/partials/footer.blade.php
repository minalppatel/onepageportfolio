<footer class="footer-section">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-6 text-center text-md-start">
                <a class="navbar-brand d-inline-flex align-items-center gap-2 fw-bold mb-2" href="#hero">
                    <span class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('favicon.svg') }}" alt="Minal Logo" width="38" height="38" class="rounded-3 shadow-sm" style="object-fit: contain;">
                    </span>
                    <span class="brand-text">Minal <span class="text-gradient">Patel</span></span>
                </a>
                <p class="text-muted small mb-0">
                    Engineered with passion using <strong>Laravel 13</strong>, <strong>Bootstrap 5.3</strong>, and modern CSS animations.
                </p>
            </div>

            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex justify-content-center justify-content-md-end gap-2 mb-2">
                    <a href="{{ $profile['github'] }}" target="_blank" rel="noopener" class="social-circle-btn" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="mailto:{{ $profile['email'] }}" class="social-circle-btn" aria-label="Email">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
                <div class="text-dim small">
                    &copy; {{ date('Y') }} {{ $profile['name'] }}. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
