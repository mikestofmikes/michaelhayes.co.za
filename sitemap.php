<?php
declare(strict_types=1);

const BASE_URL   = 'https://michaelhayes.co.za';
const POSTS_DIR  = __DIR__ . '/articles';
const POST_EXT   = 'md';              // md, php, html, etc.
const CACHE_FILE = __DIR__ . '/cache/sitemap.xml';
const CACHE_TTL  = 3600;

// Serve from cache if fresh
if (is_file(CACHE_FILE) && (time() - filemtime(CACHE_FILE)) < CACHE_TTL) {
    header('Content-Type: application/xml; charset=utf-8');
    readfile(CACHE_FILE);
    exit;
}

$urls = [];

// Static pages
foreach (['/', '/articles'] as $path) {
    $urls[] = ['loc' => BASE_URL . $path, 'lastmod' => null];
}

// Blog posts from the filesystem
foreach (glob(POSTS_DIR . '/*.' . POST_EXT) ?: [] as $file) {
    $slug = basename($file, '.' . POST_EXT);

    // Skip drafts, e.g. files starting with "_" or "draft-"
    if (str_starts_with($slug, '_') || str_starts_with($slug, 'draft-')) {
        continue;
    }

    $urls[] = [
        'loc'     => BASE_URL . '/posts/' . rawurlencode($slug),
        'lastmod' => (new DateTimeImmutable('@' . filemtime($file)))->format(DATE_ATOM),
    ];
}

// Build XML
$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('urlset');
$xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($urls as $url) {
    $xml->startElement('url');
    $xml->writeElement('loc', $url['loc']);
    if ($url['lastmod']) {
        $xml->writeElement('lastmod', $url['lastmod']);
    }
    $xml->endElement();
}

$xml->endElement();
$xml->endDocument();
$output = $xml->outputMemory();

// Write cache atomically
if (!is_dir(dirname(CACHE_FILE))) {
    mkdir(dirname(CACHE_FILE), 0755, true);
}
$tmp = CACHE_FILE . '.' . bin2hex(random_bytes(4));
file_put_contents($tmp, $output);
rename($tmp, CACHE_FILE);

header('Content-Type: application/xml; charset=utf-8');
echo $output;