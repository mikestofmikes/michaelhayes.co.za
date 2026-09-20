<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="With two decades of experience in the digital landscape, I've honed my skills across fullstack development & system architecture. ">
    <meta name="keywords" content="fullstack development, laravel, filament, livewire, tailwind, vue, websites">
    <meta name="author" content="Michael Hayes">
    <meta property="og:title" content="Michael Hayes - Senior Fullstack Developer" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://michaelhayes.co.za/" />
    <meta property="og:image" content="https://michaelhayes.co.za/img/logo.png" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Michael Hayes - Senior Fullstack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
            background-image:  url('img/orange-2.jpg') ;
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
<body class="bg-gray-50 text-gray-800" x-data="{ mobileMenuOpen: false }">
    
    <?php include "./inc/nav.php"; ?>

    <!-- Hero Section -->
    <section id="hero" class="min-h-screen flex items-center bg-slate-900 pt-16 relative">
        <video autoplay muted loop playsinline class=" top-0 left-0 w-full h-full object-cover absolute">
            <source src="/img/hero.mp4" type="video/mp4">
        </video>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-white absolute z-10 right-0 left-0  ">
            <div class="fade-in flex">
                <div class="mr-6 ">
                    <img src="/img/profile.png" alt="" class="w-32 h-32  hidden md:block  rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10 bg-orange-300 border-2 border-white" />
                </div>
                <div>
                    <h1 class="text-5xl md:text-7xl  mb-4">Michael Hayes</h1>
                    <p class="text-2xl md:text-3xl mb-6 text-white">Senior Full Stack Developer</p>
                    <p class="text-lg md:text-xl mb-8 max-w-2xl text-white">
                        Over 20 years of experience in development across a width range of technologies and methodologies.
                        Focussing Mainly on PHP. Currently working with Tailwind, Alpine Livewire, Laravel &amp; FilamentPHP and Vue or React.
                    </p>
                    <p class="text-lg md:text-xl mb-8 max-w-2xl text-white">
                        I have a strong background in system architecture, UI/UX design, and team leadership. </p>
                    <p class="text-lg md:text-xl mb-8 max-w-2xl text-white">
                        I have a proven track record of delivering high-quality digital solutions that meet business objectives.
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact" class="bg-white text-rose-600 px-8 py-3 rounded-full font-semibold hover:bg-rose-50 transition">
                           Let's work toogether
                        </a>
                        <a href="#work" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-rose-600 transition">
                            View Previous Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
     <!-- transition-opacity duration-500 opacity-50 hover:opacity-100 -->
    <section id="about" class="og-1 py-20 " style="">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 gradient-bg bg-clip-text text-transparent">About Me</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-2   ">
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        With two decades of experience in the digital landscape, I've honed my skills across fullstack development, 
                        system architecture &amp; UI/UX design. My journey has taken me from hands-on development to leadership roles, 
                        where I've built and guided teams to create exceptional digital experiences.
                    </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        I bring a wealth of expertise in modern web technologies, 
                        <span class="whitespace-nowrap">e-commerce</span> platforms like Shopify and Magento. My diverse background includes work in commercial film 
                        <span class="whitespace-nowrap">pre-production</span>, giving me a unique perspective on creative and technical problem-solving.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        <a href="https://en.wikipedia.org/wiki/Michael_Hayes_(wrestler)" target="_blank" class="text-lg font-medium text-rose-900 ">
                            Not the wrestler!
                        </a>
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl shadow-xl">
                    <h3 class="text-2xl font-semibold mb-6">Quick Facts</h3>
                    <div class="space-y-4">
                        <div class="flex">
                            <!-- <p class="text-sm text-gray-500 uppercase tracking-wide">Location</p> -->
                             <div class="mr-1 ">
                                <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                             </div>
                             <div>
                                 <p class="text-lg font-medium">Durbanville, Cape Town</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div  class="mr-1 ">
                                <svg class="w-6 h-6 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                </svg>
                            </div>
                            <div>
                                <!-- <p class="text-sm text-gray-500 uppercase tracking-wide">Experience</p> -->
                                <p class="text-lg font-medium">20+ Years</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div  class="mr-1 ">
                                <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <!-- <p class="text-sm text-gray-500 uppercase tracking-wide">Email</p> -->
                                <p class="text-lg font-medium">
                                    <a href="mailto:info@michaelhayes.co.za?subject=whats up&body=Let's chat" class="text-lg font-medium text-rose-600 hover:text-rose-700">
                                        info@michaelhayes.co.za
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div  class="mr-1 ">
                                <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <!-- <p class="text-sm text-gray-500 uppercase tracking-wide">Phone</p> -->
                                <p class="text-lg font-medium">
                                    <a href="tel:+27848235735" class="text-lg font-medium text-rose-600 hover:text-rose-700">
                                        +27 84 823 5735
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <a href="https://www.linkedin.com/in/michael-hayes-263588226/" class="mr-6" target="_blank">
                                <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 382 382" xml:space="preserve" class="w-6 h-6">
                                <path style="fill:#0077B7;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
                                    C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
                                    H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
                                    c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
                                    s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
                                    c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
                                    c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
                                    c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
                                    L341.91,330.654L341.91,330.654z"/>
                                </svg>
                            </a>
                            &Tab;
                            <a href="https://www.instagram.com/mikestofmikes/" class="mr-6" target="_blank">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve" class="w-6 h-6">
                                <style type="text/css">
                                    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#000000;}
                                </style>
                                <path id="XMLID_3_" class="st0" d="M5.57,0.4h8.87c2.85,0,5.19,2.34,5.19,5.19v8.82c0,2.85-2.34,5.19-5.19,5.19H5.57
                                    c-2.85,0-5.19-2.34-5.19-5.19V5.59C0.38,2.74,2.72,0.4,5.57,0.4L5.57,0.4z M15.17,3.75L15.17,3.75c0.6,0,1.1,0.51,1.1,1.1l0,0
                                    c0,0.6-0.51,1.1-1.1,1.1l0,0c-0.64,0-1.1-0.51-1.1-1.1l0,0C14.07,4.26,14.52,3.75,15.17,3.75L15.17,3.75z M9.98,4.76h0.05
                                    c2.85,0,5.24,2.39,5.24,5.24l0,0c0,2.89-2.39,5.24-5.24,5.24H9.98c-2.85,0-5.19-2.34-5.19-5.24l0,0C4.79,7.15,7.13,4.76,9.98,4.76
                                    L9.98,4.76z M9.98,6.55h0.05c1.88,0,3.45,1.56,3.45,3.45l0,0c0,1.93-1.56,3.49-3.45,3.49H9.98c-1.88,0-3.45-1.56-3.45-3.49l0,0
                                    C6.53,8.12,8.09,6.55,9.98,6.55L9.98,6.55z M5.61,2.05h8.77c1.98,0,3.58,1.61,3.58,3.58v8.73c0,1.98-1.61,3.58-3.58,3.58H5.61
                                    c-1.98,0-3.58-1.61-3.58-3.58V5.64C2.03,3.66,3.64,2.05,5.61,2.05L5.61,2.05z"/>
                                </svg>
                            </a>
                            <a href="https://github.com/mikestofmikes" target="_blank">
                                <svg class="w-6 h-6" width="2500" height="2432" viewBox="0 0 256 249" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><g fill="#161614"><path d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0"/><path d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398"/></g></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 gradient-bg bg-clip-text text-transparent">Work Experience</h2>
            
            <div class="space-y-8">
                <!-- Current Role -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Metamorph Digital - Senior Fullstack Developer</h3>
                            <p class="text-slate-500 font-medium ">Helping to get it set up until I find my forever work.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">05/2025 – Present</span>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Teampact - Senior Fullstack Developer</h3>
                            <p class="text-slate-500 font-medium ">Built a comprehensive dashboard for a time and attendance app using Laravel and Filament.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">05/2023 – 05/2025</span>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Cyberpro consulting - Consultant & Senior Developer</h3>
                            <p class="text-slate-500 font-medium ">Worked for GetSmarter maintaining Wordpress websites, updating legacy database entries &amp; building custom Gutenberg blocks.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">06/2022 – 05/2025</span>
                    </div>
                </div>

                <!-- King James -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">King James Digital - Senior Fullstack Developer</h3>
                            <p class="text-slate-500 font-medium ">Built Wordpress sites for Tyme bank (with location search), Black Umbrellas & Glacier Insights. Built a game for Pick 'n Pay during Covid to highlight that people should keep their distance. </p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">06/2019 – 05/2021</span>
                    </div>
                </div>

                <!-- zero2one -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">zero2one digital - Technical Director & Founder</h3>
                            <p class="text-slate-500 font-medium ">I was one of the founders &amp; partners of the company. I lead team of 3 developers and one designer. System Architect & Lead Developer. Built a CRM for a Super Annuation consolidation company working with a caller and end enpoints for info.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">02/2014 – 06/2019</span>
                    </div>
                </div>

                
                <!-- Earlier Experience -->
                <div class=" bg-white p-8 rounded-2xl shadow-md">
                    <div class=""></div>
                    <h3 class="text-xl font-semibold mb-4">Earlier Career</h3>
                    <div class="space-y-4 text-gray-700">
                        <div>
                            <p class="font-medium">Kids Industries (08/2012 - 12/2014) - Mid to Senior Developer & Mentor</p>
                        </div>
                        <div>
                            <p class="font-medium">BNRY Digital  (02/2010 - 05/2012) - Mid to Senior Developer & Mentor</p>
                        </div>
                        <div>
                            <p class="font-medium">Hello Computer (08/2007 - 01/2010) - Mid to Senior Developer & Mentor</p>
                        </div>
                        <div>
                            <p class="font-medium">Eldiablo Design (02/2003 - 08/2007) - Developer</p>
                        </div>
                        <div>
                            <p class="font-medium">Atkinson Television (01/2001 - 01/2003) - Editor/Animation/DVD & Pre-production</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="py-20 og-2">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 gradient-bg bg-clip-text text-transparent">Projects</h2>
            <!-- <p>Here are some recent projects I've worked on.</p> -->
             <div class="grid md:grid-cols-3 gap-12">
                <img src="/img/blackumbrellas_32.webp" alt="Black Umbrellas" class="rounded shadow-md hover:shadow-lg skill-tag w-full"
                    srcset="/img/blackumbrellas.webp 300w" loading="lazy">
                <img src="/img/faircape_32.webp" alt="Faircape Dairies" class="rounded shadow-md hover:shadow-lg skill-tag w-full"
                    srcset="/img/faircape.webp 300w" loading="lazy">
                <img src="/img/glacierinsights_32.webp" alt="Glacier Insights" class="rounded shadow-md hover:shadow-lg skill-tag w-full"
                    srcset="/img/glacierinsights.webp 300w" loading="lazy">
                <img src="/img/metamorph_32.webp" alt="Metamorph" class="rounded shadow-md hover:shadow-lg skill-tag w-full"
                    srcset="/img/metamorph.webp 300w" loading="lazy">
                <img src="/img/teampact_32.webp" alt="Teampact Dashboard" class="rounded shadow-md hover:shadow-lg skill-tag w-full"
                    srcset="/img/teampact.webp 300w" loading="lazy">
                <img src="/img/tyme_32.webp" alt="Tyme Bank" class="rounded shadow-md hover:shadow-lg skill-tag w-full"
                    srcset="/img/tyme.webp 300w" loading="lazy">
             </div>
        </div>
        <div>

        </div>
    </section>
    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white og-3">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 gradient-bg bg-clip-text text-transparent">Skills &amp;  Technologies</h2>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Backend &amp; AI</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium w-full text-ceenter">PHP | Laravel | Filament</span>
                        <!-- <span class="skill-tag bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium w-full text-ceenter">Wordpress</span> -->
                        <span class="skill-tag bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium w-full text-ceenter">MYSQL | Postgre | MongoDB</span>
                        <span class="skill-tag bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium w-full text-ceenter">Codex | Claude | Antigravity </span>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4">Frontend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-purple-100 hover:bg-purple-200 text-purple-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">CSS| SASS | SCSS | Tailwind</span>
                        <span class="skill-tag bg-purple-100 hover:bg-purple-200 text-purple-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">Alpine.JS | LiveWire</span>
                        <span class="skill-tag bg-purple-100 hover:bg-purple-200 text-purple-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">Vue/Nuxt | React/Next</span>
                    </div>
                </div>
                
                
                
                <div>
                    <h3 class="text-xl font-semibold mb-4">Ecommerce</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-pink-100 hover:bg-pink-200 text-pink-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">WordPress & WooCommerce</span>
                        <span class="skill-tag bg-pink-100 hover:bg-pink-200 text-pink-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">Shopify | Magento</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Mobile</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-orange-100 hover:bg-orange-200 text-orange-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">React Native</span>
                        <span class="skill-tag bg-orange-100 hover:bg-orange-200 text-orange-700 px-4 py-2 rounded-full text-sm font-medium w-full text-center">Kotlin</span>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gray-50 p-8 rounded-2xl shadow-md flex items-start space-x-4">
                <div class="bg-rose-600 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                </div>
                <div>

                    <!-- <h3 class="text-2xl font-semibold mb-6">Education</h3> -->
                    <div>
                        <p class="text-lg font-medium mt-2">City Varsity - Multimedia Design - <span class="text-gray-500 text-sm">1999 - 2000</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-200 mb-100 pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8" style="back">
            <h2 class="text-4xl font-bold mb-12 gradient-bg bg-clip-text text-transparent">Get In Touch</h2>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                        I'm always interested in hearing about new opportunities and collaborations. 
                        Whether you have a project in mind or just want to connect, feel free to reach out.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-rose-600 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide">Email</p>

                                <a href="mailto:info@michaelhayes.co.za?subject=whats up&body=Let's chat" class="text-lg font-medium text-rose-600 hover:text-rose-700">
                                    info@michaelhayes.co.za
                                </a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-rose-600 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide">Phone</p>
                                <a href="tel:+27848235735" class="text-lg font-medium text-rose-600 hover:text-rose-700">
                                    +27 84 823 5735
                                </a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-rose-600 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase tracking-wide">Location</p>
                                <p class="text-lg font-medium">Durbanville, Cape Town</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-md">
                    <h3 class="text-2xl font-semibold mb-6">References</h3>
                    <div class="space-y-4">
                        <div class="pb-4 border-b border-gray-200">
                            <p class="font-medium">Matt Cech</p>
                            <p class="text-sm text-gray-600">King James</p>
                        </div>
                        <div class="pb-4 border-b border-gray-200">
                            <p class="font-medium">Jonny Sachar</p>
                            <p class="text-sm text-gray-600">zero2one</p>
                        </div>
                        <div>
                            <p class="font-medium">Nicole Davies</p>
                            <p class="text-sm text-gray-600">Woolworths Financial Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-white">&copy; <?php echo date('Y'); ?> Michael Hayes. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>