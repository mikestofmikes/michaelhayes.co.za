<!DOCTYPE html>
<html lang="en">
<?php include "../inc/head.php"; ?>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col" x-data="{ mobileMenuOpen: false }">

    
    <!-- Navigation -->
    <?php include "../inc/nav.php";?>

    <!-- Hero Section -->
    

    <!-- About Section -->
     <!-- transition-opacity duration-500 opacity-50 hover:opacity-100 -->
    <section id="about" class="p-20 bg-white max-w-3xl mx-auto py-12 pt-32 grid grid-cols-2 gap-4">
        <a href="/articles/aaaaaiiii.php">
            <div class="h-[150px] md:h-[190px]"><img src="/img/Embedded-AI.jpg" alt="AI " class=" "></div>
            <h2 class="text-bold text-l">AAAAAIIII</h2>
        </a>
        <!-- <a href="/articles/generativevsagentic.php">
            <div class="h-[150px] md:h-[190px]"><img src="/img/generativevsagentic.png" alt="AI " class=" "></div>
            <h2 class="text-bold text-l">Generative vs. Agentic</h2>
        </a> -->
        <a href="/articles/laravel.php">
            <div class="h-[150px] md:h-[190px]"><img src="/img/laravel-featured.png" alt="Laravel" class=" "></div>
            <h2 class="text-bold text-l">Kind of a Big Deal</h2>
        </a>
         <a href="/articles/tailwind.php" class="align-middle">
            <div class="h-[150px] md:h-[190px]"><img src="/img/tailwindcss.webp" alt=""></div>
            <h2 class="text-bold text-l">CSS Just Makes Sense</h2>
        </a>
         <a href="/articles/alpine.php" class="align-middle">
            <div class="h-[150px] md:h-[190px] "><img src="/img/alpine.jpg" alt="AlpineJS" ></div>
            <h2 class="text-bold text-l">JS that Gets it</h2>
        </a>
        <a href="/articles/livewire.php" class="align-middle">
            <div class="h-[150px] md:h-[190px] "><img src="/img/livewire.webp" alt="Livewire" ></div>
            <h2 class="text-bold text-l">Full-Stack Reactivity</h2>
        </a>
        <a href="/articles/tall.php" class="align-middle">
            <div class=h-[150px] md:h-[190px] "><img src="/img/tall.png" alt="Tallstack" ></div>
            <h2 class="text-bold text-l">Why choose TALL?</h2>
        </a>
        <a href="/articles/underused.php" class="align-middle">
            <div class="h-[150px] md:h-[190px] overflow-hidden"><img src="/img/html.jpg" alt="Underused HTML Tags" ></div>
            <h2 class="text-bold text-l">Use these Tags</h2>
        </a>
         <!-- s  -->
    </section>

    

    <!-- Footer -->
<?php include '../inc/footer.php'; ?>

</body>
</html>