<!DOCTYPE html>
<html lang="en">
<?php include "../inc/head.php"; ?>
<body class="bg-gray-50 text-gray-800" x-data="{ mobileMenuOpen: false }">
    
    <!-- Navigation -->
    <?php include "../inc/nav.php";?>

    <section id="about" class="md:py-20 bg-white max-w-3xl mx-auto py-12 pt-32 px-3 md:px-0">


<article class="max-w-3xl mx-auto px-6 py-16 prose-slate">

  <h1 class="text-4xl font-extrabold text-slate-900 mb-2 border-b-4 border-orange-400 pb-4">
    The HTML Features Nobody Uses (But Should)
  </h1>

  <p class="text-lg leading-relaxed mt-6">
    Everyone loves talking about the latest JavaScript framework or the newest CSS trick. Meanwhile,
    HTML — the tag soup we all pretend to know cold — has quietly been shipping genuinely useful
    features for years, and most developers have no idea they exist. Half the internet is still reaching
    for a JavaScript library to do things the browser can now do on its own.
  </p>

  <p class="leading-relaxed mt-4">
    Here's a tour of the HTML features that are sitting right there, free, unused, gathering dust.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">1. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">&lt;dialog&gt;</code> — A Real, Native Modal</h2>
  <p class="leading-relaxed mb-4">
    For years, "build a modal" meant a <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;div&gt;</code>,
    a pile of CSS for positioning and overlay, some JavaScript for focus trapping, and an ARIA attribute
    checklist. The <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;dialog&gt;</code>
    element does most of that for you, natively:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;dialog id="myDialog"&gt;
  &lt;p&gt;Hello from a native modal!&lt;/p&gt;
  &lt;button onclick="this.closest('dialog').close()"&gt;Close&lt;/button&gt;
&lt;/dialog&gt;

&lt;button onclick="document.getElementById('myDialog').showModal()"&gt;
  Open Dialog
&lt;/button&gt;</code></pre>
  <p class="leading-relaxed">
    Call <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">.showModal()</code> and
    you get a centered, backdrop-covered modal with built-in focus trapping and Escape-to-close — no
    JavaScript library, no ARIA gymnastics. There's even a
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">::backdrop</code>
    pseudo-element you can style directly.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">2. The Popover API — Tooltips and Menus Without the JS</h2>
  <p class="leading-relaxed mb-4">
    Chances are you've built (or copy-pasted) a dropdown menu or tooltip component that manages its own
    open/close state, click-outside detection, and z-index stacking. The Popover API does all of that
    natively, with a single attribute:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;button popovertarget="myPopover"&gt;Open&lt;/button&gt;
&lt;div id="myPopover" popover&gt;I'm a popover, no JS required.&lt;/div&gt;</code></pre>
  <p class="leading-relaxed">
    Click outside, and it closes automatically. Press Escape, and it closes. It's the kind of feature
    that quietly makes an entire category of npm packages unnecessary.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">3. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">loading="lazy"</code> — Free Image Performance</h2>
  <p class="leading-relaxed mb-4">
    You've probably installed a whole library for lazy-loading images at some point. Modern browsers do
    it with one attribute:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;img src="huge-photo.jpg" loading="lazy" alt="A huge photo"&gt;</code></pre>
  <p class="leading-relaxed">
    Images outside the viewport won't load until the user scrolls near them. No IntersectionObserver
    boilerplate, no dependency, no bundle size cost.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">4. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">&lt;search&gt;</code> — A Landmark Element for Search</h2>
  <p class="leading-relaxed mb-4">
    New enough that plenty of developers haven't even heard of it:
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;search&gt;</code> is a
    semantic wrapper specifically for search and filtering forms:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;search&gt;
  &lt;form&gt;
    &lt;input type="search" name="q" placeholder="Search…"&gt;
    &lt;button type="submit"&gt;Go&lt;/button&gt;
  &lt;/form&gt;
&lt;/search&gt;</code></pre>
  <p class="leading-relaxed">
    It gives assistive technology a proper landmark for search functionality — something that used to
    require a manual <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">role="search"</code>
    attribute, if anyone remembered to add it at all.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">5. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">inert</code> — Disable a Whole Section, Instantly</h2>
  <p class="leading-relaxed mb-4">
    Ever built a modal and had to carefully make sure background content wasn't still focusable or
    clickable behind it? The <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">inert</code>
    attribute solves that in one word:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;div id="background" inert&gt;
  &lt;!-- Nothing in here is focusable, clickable, or reachable by screen readers --&gt;
&lt;/div&gt;</code></pre>
  <p class="leading-relaxed">
    It's the accessibility fix that used to require a small essay of JavaScript, now a single HTML
    attribute.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">6. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">&lt;details&gt;</code> and <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">&lt;summary&gt;</code> — Accordions for Free</h2>
  <p class="leading-relaxed mb-4">
    Want a collapsible section? You don't need a JavaScript accordion component:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;details&gt;
  &lt;summary&gt;Click to expand&lt;/summary&gt;
  &lt;p&gt;Here's the hidden content, revealed with zero JavaScript.&lt;/p&gt;
&lt;/details&gt;</code></pre>
  <p class="leading-relaxed">
    It's keyboard accessible, screen-reader friendly, and works out of the box. Pair multiple
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;details&gt;</code>
    elements with the <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">name</code>
    attribute to make them behave like an exclusive accordion (only one open at a time) — also with no
    JavaScript.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">7. View Transitions — Smooth Page Animations, Natively</h2>
  <p class="leading-relaxed mb-4">
    The View Transitions API lets you animate between DOM states — including full page navigations —
    without hand-rolling a transition library:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>::view-transition-old(root),
::view-transition-new(root) {
  animation-duration: 0.4s;
}</code></pre>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>document.startViewTransition(() => {
  updateTheDOM();
});</code></pre>
  <p class="leading-relaxed">
    The browser automatically crossfades (or animates however you configure it) between the old and new
    states. It's the kind of polish that used to require a dedicated animation library, now built into
    the platform.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">8. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">enterkeyhint</code> and <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">inputmode</code> — Better Mobile Keyboards for Free</h2>
  <p class="leading-relaxed mb-4">
    Two attributes, zero JavaScript, dramatically better mobile UX:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;input type="text" inputmode="numeric" enterkeyhint="search"&gt;</code></pre>
  <p class="leading-relaxed">
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">inputmode</code> tells
    mobile browsers which keyboard layout to show (numeric, email, tel, and so on), and
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">enterkeyhint</code>
    customizes what the Enter key says and does ("Search," "Go," "Send"). Small, but the kind of detail
    that makes a form feel genuinely native.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">9. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">&lt;template&gt;</code> — Inert HTML You Can Clone</h2>
  <p class="leading-relaxed mb-4">
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;template&gt;</code>
    holds markup that's parsed but never rendered, ready to be cloned into the DOM via JavaScript:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;template id="rowTemplate"&gt;
  &lt;tr&gt;&lt;td class="name"&gt;&lt;/td&gt;&lt;td class="value"&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;/template&gt;</code></pre>
  <p class="leading-relaxed">
    It's a clean, framework-free way to define reusable HTML fragments, and it predates most of the
    component-based frameworks that eventually made the same idea popular.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-2">10. <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">srcset</code> and <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-lg">&lt;picture&gt;</code> — Responsive Images Done Right</h2>
  <p class="leading-relaxed mb-4">
    Not brand new, but still wildly underused: instead of shipping one giant image to every device, you
    can let the browser choose:
  </p>
  <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm mb-4"><code>&lt;picture&gt;
  &lt;source srcset="photo-large.avif" media="(min-width: 800px)"&gt;
  &lt;source srcset="photo-small.avif" media="(max-width: 799px)"&gt;
  &lt;img src="photo-fallback.jpg" alt="A photo"&gt;
&lt;/picture&gt;</code></pre>
  <p class="leading-relaxed">
    The browser picks the right image for the screen size and format support automatically — real
    performance gains, entirely in markup.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-4">Why These Go Unused</h2>
  <p class="leading-relaxed">
    Mostly inertia. A lot of developers learned "how to build a modal" or "how to build an accordion"
    back when the only option was JavaScript, and that habit never got revisited once the platform
    caught up. Framework culture doesn't help either — when your component library already has a
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;Modal&gt;</code> or
    <code class="bg-slate-100 text-orange-700 px-1.5 py-0.5 rounded text-sm">&lt;Tooltip&gt;</code>,
    there's rarely a reason to go check whether the browser grew a native equivalent while you weren't
    looking.
  </p>

  <h2 class="text-2xl font-bold text-orange-600 mt-12 mb-4">The Bottom Line</h2>
  <p class="leading-relaxed mb-8">
    The browser has quietly been absorbing a huge amount of what used to require a JavaScript library —
    modals, popovers, lazy loading, accordions, focus management, page transitions. None of it needs a
    build step, a dependency, or a bundle size hit. It's just sitting there in the spec, free, waiting
    for someone to actually read the MDN page. Next time you reach for a library to solve a UI problem,
    it's worth a quick check: does HTML already do this now?
  </p>

</article>

    </section>

    

    <!-- Footer -->
<?php include '../inc/footer.php'; ?>

</body>
</html>