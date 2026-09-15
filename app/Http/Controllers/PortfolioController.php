<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the one-page portfolio.
     */
    public function index(): View
    {
        $profile = [
            'name' => 'Minal Patel',
            'role' => 'Full-Stack Software Engineer & Solutions Architect',
            'typing_roles' => [
                'Full-Stack Laravel Engineer',
                'Backend & REST API Specialist',
                'Modern Responsive UI/UX Developer',
                'Cloud & DevOps Enthusiast',
            ],
            'bio' => 'Performance-driven Full-Stack Engineer with 5+ years of experience architecting resilient enterprise web applications, scalable RESTful microservices, and modern responsive Bootstrap 5 interfaces. Passionate about writing clean, maintainable code, sub-second performance, and intuitive user experiences.',
            'email' => 'minalp391@gmail.com',
            'phone' => '+91 9687174131',
            'location' => 'Valsad, Gujarat, India',
            'availability' => 'Open to New Projects',
            'github' => 'https://github.com',
            'image' => 'images/minal-patel.jpeg',
            'years_experience' => '5+',
            'projects_completed' => '25+',
            'happy_clients' => '80%',
            'code_reviews' => '100%',
        ];

        $services = [
            [
                'icon' => 'bi-laptop',
                'title' => 'Full-Stack Web Development',
                'description' => 'High-performance, secure, and scalable web apps built with Laravel backend and sleek responsive Bootstrap 5 interfaces.',
                'badge' => 'Clean Architecture',
            ],
            [
                'icon' => 'bi-diagram-3',
                'title' => 'RESTful & Microservices APIs',
                'description' => 'Scalable, secure REST API design with token authentication, rate limiting, and comprehensive OpenAPI documentation.',
                'badge' => 'High Scalability',
            ],
            [
                'icon' => 'bi-palette',
                'title' => 'UI/UX & Interactive Design',
                'description' => 'Accessible, visually captivating user interfaces adhering to modern design systems with smooth scroll & hover animations.',
                'badge' => 'Pixel Perfect',
            ],
            [
                'icon' => 'bi-hdd-network',
                'title' => 'Database & DevOps',
                'description' => 'Relational database schema optimization, Redis caching, Docker containerization, and IIS/Apache/Nginx cloud deployments.',
                'badge' => 'Performance',
            ],
        ];

        $skills = [
            'backend' => [
                ['name' => 'PHP 8.2 / 8.3', 'level' => 95, 'icon' => 'fa-brands fa-php', 'color' => '#777bb4'],
                ['name' => 'Laravel Framework', 'level' => 95, 'icon' => 'fa-brands fa-laravel', 'color' => '#ff2d20'],
                ['name' => 'RESTful APIs & Webhooks', 'level' => 92, 'icon' => 'fa-solid fa-network-wired', 'color' => '#10b981'],
                ['name' => 'CodeIgniter & OOP', 'level' => 88, 'icon' => 'fa-solid fa-fire', 'color' => '#ef4444'],
                ['name' => 'Redis & Session Store', 'level' => 85, 'icon' => 'fa-solid fa-bolt', 'color' => '#dc2626'],
            ],
            'frontend' => [
                ['name' => 'Bootstrap 5.3 & Responsive UI', 'level' => 95, 'icon' => 'fa-brands fa-bootstrap', 'color' => '#7952b3'],
                ['name' => 'HTML5 / Modern CSS3 & SCSS', 'level' => 95, 'icon' => 'fa-brands fa-html5', 'color' => '#e34f26'],
                ['name' => 'JavaScript (ES6+) & TypeScript', 'level' => 88, 'icon' => 'fa-brands fa-js', 'color' => '#f7df1e'],
                ['name' => 'Angular & Frontend Integration', 'level' => 85, 'icon' => 'fa-brands fa-angular', 'color' => '#dd0031'],
                ['name' => 'Animations (AOS & CSS3)', 'level' => 90, 'icon' => 'fa-solid fa-wand-magic-sparkles', 'color' => '#06b6d4'],
            ],
            'tools' => [
                ['name' => 'MySQL & PostgreSQL DBs', 'level' => 90, 'icon' => 'fa-solid fa-database', 'color' => '#00758f'],
                ['name' => 'Docker & Containerization', 'level' => 82, 'icon' => 'fa-brands fa-docker', 'color' => '#2496ed'],
                ['name' => 'Git & GitHub Workflows', 'level' => 88, 'icon' => 'fa-brands fa-git-alt', 'color' => '#f05032'],
                ['name' => 'IIS, Apache & Linux Server Setup', 'level' => 85, 'icon' => 'fa-brands fa-linux', 'color' => '#fcc624'],
            ],
        ];

        $experiences = [
            [
                'period' => '2023 - Present',
                'role' => 'Backend Developer',
                'company' => 'Tech Solutions',
                'description' => 'Architected enterprise backend web applications and API endpoints. Contributed to frontend web development using Angular for 6 months. Leveraged DevOps practices, Docker for containerization, and integrated AI-driven features.',
                'skills' => ['Laravel', 'REST APIs', 'Docker', 'Angular', 'DevOps', 'AI Integration'],
                'type' => 'work',
            ],
            [
                'period' => '2021 - 2023',
                'role' => 'Web Developer',
                'company' => 'Web Agency',
                'description' => 'Specialized in building full-stack web applications and robust platforms using PHP, CodeIgniter, and the Laravel framework. Collaborated closely with design teams to integrate functional UI components.',
                'skills' => ['PHP', 'Laravel', 'CodeIgniter', 'MySQL', 'Bootstrap', 'JavaScript'],
                'type' => 'work',
            ],
            [
                'period' => '2013 - 2017',
                'role' => 'BE in Information Technology',
                'company' => 'Gujarat Technological University',
                'description' => 'Graduated with honors. Core specialization in Software Engineering, Database Management Systems, Object-Oriented Programming, and Human-Computer Interaction.',
                'skills' => ['Information Technology', 'Software Engineering', 'Databases', 'Computer Networks'],
                'type' => 'education',
            ],
        ];

        $projects = [
            [
                'id' => 'camp-musart',
                'title' => 'Camp MusArt - Track Out Camp',
                'category' => 'laravel',
                'category_label' => 'Web Application',
                'summary' => 'Comprehensive children\'s music & arts track out camp platform featuring online booking, interactive schedules, and parent enrollment management.',
                'description' => 'A comprehensive platform for a children\'s music and arts track out camp. Features online booking, interactive schedules, galleries, and a parent portal for managing enrollments. Built with Laravel and Bootstrap 5 with automated registration flows.',
                'image' => 'https://www.campmusart.com/data/banners/2/0_25340500_1575728171.jpg',
                'badge' => 'Live Platform',
                'tags' => ['Laravel', 'Bootstrap 5', 'Registration System', 'MySQL'],
                'live_url' => 'https://www.campmusart.com/',
                'github_url' => 'https://github.com',
                'highlights' => [
                    'Online student enrollment and camp session scheduling',
                    'Parent dashboard with real-time registration status',
                    'Secure registration payment workflows',
                    'Responsive Bootstrap 5 media gallery',
                ],
            ],
            [
                'id' => 'inspiring-excellence',
                'title' => 'Inspiring Excellence - Coaching Platform',
                'category' => 'fullstack',
                'category_label' => 'Enterprise Platform',
                'summary' => 'Global leadership & coaching platform for enterprise clients with integrated session booking, corporate program management, and multilingual support.',
                'description' => 'A global leadership and coaching platform for enterprise clients. Features integrated session booking, corporate program management, and multilingual support for international coaches and members.',
                'image' => 'https://www.inspiringexcellence.ie/data/banners/11/0-19084700-1586516069.jpg',
                'badge' => 'Global Reach',
                'tags' => ['Laravel', 'Bootstrap', 'Multi-Language', 'Booking System'],
                'live_url' => 'https://www.inspiringexcellence.ie/',
                'github_url' => 'https://github.com',
                'highlights' => [
                    'Multi-language localization for European & international coaches',
                    'Integrated calendar booking and video session scheduling',
                    'Corporate member portal with engagement tracking',
                    'Automated email reminders and calendar syncing',
                ],
            ],
        ];

        return view('portfolio', compact(
            'profile',
            'services',
            'skills',
            'experiences',
            'projects'
        ));
    }

    /**
     * Handle the contact form submission.
     */
    public function submitContact(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        // 1. Save to database (optional / resilient for serverless)
        $contactMessage = null;
        try {
            $contactMessage = ContactMessage::create($validated);
        } catch (\Throwable $e) {
            Log::warning('Database save skipped or failed on serverless: ' . $e->getMessage());
            // Create in-memory model for mailable if DB save failed
            $contactMessage = new ContactMessage($validated);
        }

        // 2. Send email notification
        try {
            Mail::to('minalp391@gmail.com')->send(new ContactFormSubmitted($contactMessage));
            Log::info('Contact form email dispatched to minalp391@gmail.com');
        } catch (\Throwable $e) {
            Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        $successMessage = 'Thank you, ' . htmlspecialchars($validated['name']) . '! Your message has been received. I will reply to you as soon as possible.';

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('success', $successMessage);
    }
}
