<?php
http_response_code(404);
header('X-Robots-Tag: noindex, follow');
$pageTitle = 'Page Not Found | PureLine Water Filtration';
$pageDescription = 'The page you are looking for could not be found. Return to PureLine Water Filtration or contact our team.';
$bodyClass = 'error-page';
$canonicalPath = '/';
$robots = 'noindex, follow';
include __DIR__ . '/includes/header.php';
?>
<main id="main-content">
    <section class="error-section" aria-labelledby="error-title">
        <div class="section-shell error-content">
            <span class="error-code" aria-hidden="true">404</span>
            <p class="eyebrow">PAGE NOT FOUND</p>
            <h1 id="error-title">Let’s get you back<br>to better water.</h1>
            <p class="error-description">The page you’re looking for may have moved or no longer exists.</p>
            <div class="error-actions">
                <a class="button button--primary" href="<?php echo $baseUrl; ?>/">Back to Home <span aria-hidden="true">&#8594;</span></a>
                <a class="button button--quiet" href="<?php echo $baseUrl; ?>/request-a-quote.php">Contact Us</a>
            </div>
        </div>
    </section>
    <section class="quote-office-map" aria-label="PureLine office location">
        <iframe title="Map of PureLine office, Clyde North VIC" src="https://maps.google.com/maps?q=46%20Palladium%20Circuit%2C%20Clyde%20North%20VIC%203978%2C%20Australia&amp;output=embed" width="1440" height="420" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
