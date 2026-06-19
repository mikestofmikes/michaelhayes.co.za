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
            background: #667eea;
            transition: width 0.3s ease;
        }
        nav a:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800" x-data="{ mobileMenuOpen: false }">
    
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50 p-3">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <img src="/img/logo.png" alt="Michael Hayes"  />
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-4 text-center">
                    <a href="#about" class="text-gray-700 hover:text-purple-600 mr-0">About</a>
                    <a href="#experience" class="text-gray-700 hover:text-purple-600">Experience</a>
                    <a href="#work" class="text-gray-700 hover:text-purple-600">Work</a>
                    <a href="#skills" class="text-gray-700 hover:text-purple-600">Skills</a>
                    <a href="#contact" class="text-gray-700 hover:text-purple-600">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden pb-4">
                <a href="#about" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">About</a>
                <a href="#experience" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Experience</a>
                <a href="#work" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Work</a>
                <a href="#skills" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Skills</a>
                <a href="#contact" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="min-h-screen flex items-center bg-slate-900 pt-16 relative">
        <video autoplay muted loop playsinline class=" top-0 left-0 w-full h-full object-cover absolute">
            <source src="/img/hero.mp4" type="video/mp4">
        </video>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-white absolute z-10 right-0 left-0  ">
            <div class="fade-in flex">
                <div class="mr-6">
                    <img src="/img/profile.png" alt="" class="w-32 h-32 hidden md:block  rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10 bg-gray-500 border-2 border-white" />
                </div>
                <div>
                    <h1 class="text-5xl md:text-7xl  mb-4">Michael Hayes</h1>
                    <p class="text-2xl md:text-3xl mb-6 text-white">Senior Fullstack Developer</p>
                    <p class="text-lg md:text-xl mb-8 max-w-2xl text-white">
                        20 years of experience in development, UI/UX consultancy &amp; <br/>pre-production for the commercial film industry
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact" class="bg-white text-rose-600 px-8 py-3 rounded-full font-semibold hover:bg-rose-50 transition">
                            Get In Touch
                        </a>
                        <a href="#work" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-rose-600 transition">
                            View Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
     <!-- transition-opacity duration-500 opacity-50 hover:opacity-100 -->
    <section id="about" class="py-20 bg-white ">
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
                        <a href="https://en.wikipedia.org/wiki/Michael_Hayes_(wrestler)" target="_blank" class="text-lg font-medium text-rose-600 hover:text-rose-700">
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
                            <a href="https://www.linkedin.com/in/michael-hayes-263588226/" class="mr-6">
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
                            <a href="https://www.instagram.com/mikestofmikes/">
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
                            <p class="text-slate-500 font-medium ">Helping to get it set up until i find my forever home.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">05/2025 – Present</span>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Teampact - Senior Fullstack Developer</h3>
                            <p class="text-slate-500 font-medium ">Built a comprehensive dashboard for a tim and attendance app using laravel and Filament.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">05/2023 – 05/2025</span>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Cyberpro consulting - Consultant & Senior Developer</h3>
                            <p class="text-slate-500 font-medium ">Worked for 2u/GetSmarter maintaining Wordpress websites, updating legacy database entries &amp; building custom Gutenberg blocks.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">06/2022 – 05/2025</span>
                    </div>
                </div>

                <!-- Make Better -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Make Better - Senior Fullstack Developer</h3>
                            <p class="text-slate-500 font-medium ">I built a backend for the TFG app using Strapi.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">05/2021 – 12/2021</span>
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

                <!-- Kids Industries -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">Kids Industries - Senior Developer</h3>
                            <p class="text-slate-500 font-medium ">Senior Developer in Flash concentrating on games for children. With products for Polly pocket, Pepper pig and more and end points for them.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">06/2012 – 12/2014</span>
                    </div>
                </div>

                <!-- BNRY Digital -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                    <div class=""></div>
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="md:w-3/4">
                            <h3 class=" text-1xl md:text-2xl font-semibold">BNRY Digital - Lead Developer & Studio Manager</h3>
                            <p class="text-slate-500 font-medium ">System Architect, studio Manager and lead developer.</p>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">02/2010 – 05/2012</span>
                    </div>
                </div>

                <!-- Earlier Experience -->
                <div class=" bg-white p-8 rounded-2xl shadow-md">
                    <div class=""></div>
                    <h3 class="text-xl font-semibold mb-4">Earlier Career</h3>
                    <div class="space-y-4 text-gray-700">
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
    <section id="work" class="py-20 bg-gray-100">
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
    <section id="skills" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-12 gradient-bg bg-clip-text text-transparent">Skills &amp;  Technologies</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Frontend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">HTML</span>
                        <span class="skill-tag bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">CSS/SASS/SCSS</span>
                        <span class="skill-tag bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">Tailwind</span>
                        <span class="skill-tag bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">Alpine JS</span>
                        <span class="skill-tag bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">Vue &amp; Nuxt</span>
                        <span class="skill-tag bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">React/Next</span>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold mb-4">Backend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium">PHP</span>
                        <span class="skill-tag bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium">Laravel</span>
                        <span class="skill-tag bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium">Filament</span>
                        <span class="skill-tag bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium">LiveWire</span>
                        <span class="skill-tag bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium">Strapi</span>
                        <span class="skill-tag bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium">SQL</span>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold mb-4">Platforms & Tools</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag bg-pink-100 text-pink-700 px-4 py-2 rounded-full text-sm font-medium">WordPress</span>
                        <span class="skill-tag bg-pink-100 text-pink-700 px-4 py-2 rounded-full text-sm font-medium">Shopify</span>
                        <span class="skill-tag bg-pink-100 text-pink-700 px-4 py-2 rounded-full text-sm font-medium">Magento</span>
                        <span class="skill-tag bg-pink-100 text-pink-700 px-4 py-2 rounded-full text-sm font-medium">AWS</span>
                        <span class="skill-tag bg-pink-100 text-pink-700 px-4 py-2 rounded-full text-sm font-medium">Apache</span>
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
    <section id="contact" class="py-20 bg-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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