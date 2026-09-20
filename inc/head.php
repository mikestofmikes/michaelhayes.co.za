<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="With over two decades of experience in the digital landscape, I've honed my skills across fullstack development & system architecture. ">
    <meta name="keywords" content="fullstack development, laravel, filament, livewire, tailwind, vue, websites">
    <meta name="author" content="Michael Hayes">
    <meta property="og:title" content="Michael Hayes - Senior Fullstack Developer" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://michaelhayes.co.za/" />
    <meta property="og:image" content="https://michaelhayes.co.za/img/logo.png" />
    <meta property="og:description" content="Over 20 years of experience in development across a width range of technologies and methodologies.
                        Focussing Mainly on PHP. Currently working with Tailwind, Alpine Livewire, Laravel &amp; FilamentPHP and Vue or React." />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Michael Hayes - Senior Fullstack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@marcreichel/alpine-typewriter/dist/alpine-typewriter.min.js" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');
        * {
            font-family: 'Montserrat', serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #cf364c 0%, #860013 100%);
        }
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .skill-tag {
            transition: all 0.3s ease;
        }
        /* Scroll-triggered reveal animations */
        .reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1),
                        transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: opacity, transform;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        @media (prefers-reduced-motion: reduce) {
            .reveal {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }
        .skill-tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
        }
        .timeline-dot {
            position: absolute;
            left: -6px;
            top: 8px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #667eea;
            border: 3px solid white;
        }
        nav a {
            position: relative;
            transition: color 0.3s ease;
        }
        nav a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #000;
            transition: width 0.3s ease;
        }
        nav a:hover::after {
            width: 100%;
        }
        .og-1{
            background-image:  url('img/orange-1.jpg') ;
            background-repeat: no-repeat;
            background-position:left; 
            background-size: cover;
        }
        .og-2{
            background-image:  url('img/og-2.png') ;
            background-repeat: no-repeat;
            background-position: top right; 
        }
        .og-3{
            background-image:  url('img/orange-3.jpg') ;
            background-repeat: no-repeat;
            background-position: top right; 
        }
        .og-3{
            background-image:  url('img/red.webp') ;
            background-repeat: no-repeat;
            background-position: top right; 
        }
    </style>
</head>