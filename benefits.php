<?php
$pageTitle = 'Whole House Water Filter Benefits for Your Home | PureLine';
$pageDescription = 'Better tasting water, softer-feeling showers and longer-lasting appliances. See the real benefits of a whole house water filter and what it won\'t do for you.';
$bodyClass = 'benefits-page';
$canonicalPath = '/benefits';
$extraHead = <<<'HTML'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://purelinewaterfiltration.com.au/benefits/#faq",
  "url": "https://purelinewaterfiltration.com.au/benefits/",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is it worth filtering shower water?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For many people, yes. Chlorine and hard water minerals are the main causes of dry skin and dull hair after showering, and a whole house filter reduces both. It's one of the main reasons people choose whole house systems over a kitchen filter."
      }
    },
    {
      "@type": "Question",
      "name": "Will filtered water make my hot water system last longer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reducing sediment and scale reduces wear on hot water units, especially electric ones with elements. How much longer it lasts depends on your water hardness and the unit."
      }
    },
    {
      "@type": "Question",
      "name": "Is filtered tap water better than bottled water?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Filtered tap water is fresh, costs less per litre and avoids plastic bottles. Australian mains water is already safe to drink, so the filter is mainly improving taste and removing chlorine."
      }
    },
    {
      "@type": "Question",
      "name": "Is it safe for my garden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Filtered water is fine for plants, veggie gardens and pots."
      }
    },
    {
      "@type": "Question",
      "name": "How soon will I notice a difference?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Straight away. Taste and smell change from the first glass, and most people notice the difference in the shower within a few days."
      }
    }
  ]
}
</script>
HTML;
include __DIR__ . '/includes/header.php';
?>
<style>
.benefits-page h2 {max-width: 555px;}    
</style>
<main id="main-content">
<section class="hero section-shell" aria-labelledby="hero-title">
    <div class="hero__copy reveal">
        <p class="eyebrow"><a href="<?php echo $baseUrl; ?>/">Home</a> / Benefits</p>
        <h1 id="hero-title">Benefits of a <span class="hero__title-accent">Whole House Water Filter</span></h1>
        <p class="hero__detail">The main benefits of a whole house water filter are better-tasting water at every tap and showers without the chlorine. It also means less sediment and scale in your pipes and appliances, and no need for bottled water. Because it filters water where it enters the house, you get all of that from one system.</p>
        <p class="hero__detail">Here&#039;s what each benefit looks like in practice, plus what a filter can&#039;t do.</p>
        <div class="hero__actions"><a class="button button--primary" href="<?php echo $baseUrl; ?>/request-a-quote.php">Book a Free In-Home Assessment <span aria-hidden="true">&#8594;</span></a></div>
    </div>
    <div class="hero__visual reveal reveal--late"><div class="hero__photo-wrap"><img class="hero__photo" src="<?php echo $baseUrl; ?>/assets/images/benefits-banner-img.webp" alt="Benefits of a Whole House Water Filter" fetchpriority="high"></div></div>
</section>
<section class="section bx-section"><div class="section-shell"><div class="bx"><div class="bx-tabs" role="tablist" aria-label="Benefits of a whole house water filter">
<button type="button" role="tab" class="bx-tab is-active" id="bx-tab-1" aria-selected="true" aria-controls="bx-panel-1"><span class="bx-tab__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 3h12l-1.5 17a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1Z"/><path d="M6.5 9h11"/><path d="M10 14c.8.8 2.2.8 3 0"/></svg></span><span class="bx-tab__title">Better-tasting drinking and cooking water</span><span class="bx-tab__progress" aria-hidden="true"></span></button>
<button type="button" role="tab" class="bx-tab" id="bx-tab-2" aria-selected="false" aria-controls="bx-panel-2"><span class="bx-tab__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 21V8a4 4 0 0 1 4-4h1a4 4 0 0 1 4 4"/><path d="M10 8h6l-3 4Z"/><path d="M11 15v1M14 15v2M17 14v1M12.5 19v1M16 18v2"/></svg></span><span class="bx-tab__title">Showers without the chlorine</span><span class="bx-tab__progress" aria-hidden="true"></span></button>
<button type="button" role="tab" class="bx-tab" id="bx-tab-3" aria-selected="false" aria-controls="bx-panel-3"><span class="bx-tab__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></span><span class="bx-tab__title">Longer life for appliances and plumbing</span><span class="bx-tab__progress" aria-hidden="true"></span></button>
<button type="button" role="tab" class="bx-tab" id="bx-tab-4" aria-selected="false" aria-controls="bx-panel-4"><span class="bx-tab__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2h4v3l1.5 2v13a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2V7L10 5Z"/><path d="M3 3l18 18"/></svg></span><span class="bx-tab__title">Less plastic and fewer bottles</span><span class="bx-tab__progress" aria-hidden="true"></span></button>
<button type="button" role="tab" class="bx-tab" id="bx-tab-5" aria-selected="false" aria-controls="bx-panel-5"><span class="bx-tab__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 3 9 5-9 5-9-5Z"/><path d="m3 13 9 5 9-5"/></svg></span><span class="bx-tab__title">One system instead of several</span><span class="bx-tab__progress" aria-hidden="true"></span></button>
<button type="button" role="tab" class="bx-tab" id="bx-tab-6" aria-selected="false" aria-controls="bx-panel-6"><span class="bx-tab__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7" cy="8" r="1.8"/><circle cx="12" cy="5.5" r="1.8"/><circle cx="17" cy="8" r="1.8"/><path d="M12 11c-3 0-6 3.5-6 6.5 0 1.5 1.2 2.5 2.7 2.5 1.2 0 2-.6 3.3-.6s2.1.6 3.3.6c1.5 0 2.7-1 2.7-2.5 0-3-3-6.5-6-6.5Z"/></svg></span><span class="bx-tab__title">Better water for pets and the garden</span><span class="bx-tab__progress" aria-hidden="true"></span></button>
</div><div class="bx-panels">
<article role="tabpanel" class="bx-panel is-active" id="bx-panel-1" aria-labelledby="bx-tab-1"><div class="bx-panel__visual" aria-hidden="true"><span class="bx-panel__ring bx-panel__ring--1"></span><span class="bx-panel__ring bx-panel__ring--2"></span><span class="bx-panel__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 3h12l-1.5 17a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1Z"/><path d="M6.5 9h11"/><path d="M10 14c.8.8 2.2.8 3 0"/></svg></span><span class="bx-panel__count">01 <span>/ 06</span></span></div><div class="bx-panel__copy"><h2>Better-tasting drinking and cooking water</h2><p>Chlorine is what makes tap water taste and smell like a swimming pool. The PureLine system reduces it by more than 95%, and the final coconut carbon stage polishes the taste further.</p>
<p>You&#039;ll notice it most in plain water, tea and coffee. Cooking water for pasta, rice and vegetables doesn&#039;t carry that chemical note either. And because the water tastes good straight from the tap, most people find they drink more of it.</p></div></article>
<article role="tabpanel" class="bx-panel" id="bx-panel-2" aria-labelledby="bx-tab-2"><div class="bx-panel__visual" aria-hidden="true"><span class="bx-panel__ring bx-panel__ring--1"></span><span class="bx-panel__ring bx-panel__ring--2"></span><span class="bx-panel__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 21V8a4 4 0 0 1 4-4h1a4 4 0 0 1 4 4"/><path d="M10 8h6l-3 4Z"/><path d="M11 15v1M14 15v2M17 14v1M12.5 19v1M16 18v2"/></svg></span><span class="bx-panel__count">02 <span>/ 06</span></span></div><div class="bx-panel__copy"><h2>Showers without the chlorine</h2><p>When you shower, chlorine in hot water contacts your skin and hair for several minutes a day. It dries skin out and can leave hair feeling rough. Hard water adds to the problem, because minerals react with soap and leave a film.</p>
<p>With filtered shower water, most people notice their skin feels less tight after washing and their hair is easier to manage. Some find they need less moisturiser and conditioner. A filter isn&#039;t a treatment for eczema or other skin conditions, but it does take one daily irritant out of the routine.</p></div></article>
<article role="tabpanel" class="bx-panel" id="bx-panel-3" aria-labelledby="bx-tab-3"><div class="bx-panel__visual" aria-hidden="true"><span class="bx-panel__ring bx-panel__ring--1"></span><span class="bx-panel__ring bx-panel__ring--2"></span><span class="bx-panel__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></span><span class="bx-panel__count">03 <span>/ 06</span></span></div><div class="bx-panel__copy"><h2>Longer life for appliances and plumbing</h2><p>Sediment and scale are slow, silent costs. Grit wears out tap washers and cartridges. Scale builds up on shower heads, kettle elements and the heating element in electric hot water units, which makes them work harder.</p>
<p>Filtering at the point of entry protects everything downstream, including your hot water system, washing machine and dishwasher. The effect is biggest in hard water areas, but even in soft water cities like Melbourne, sediment from older mains is common.</p></div></article>
<article role="tabpanel" class="bx-panel" id="bx-panel-4" aria-labelledby="bx-tab-4"><div class="bx-panel__visual" aria-hidden="true"><span class="bx-panel__ring bx-panel__ring--1"></span><span class="bx-panel__ring bx-panel__ring--2"></span><span class="bx-panel__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2h4v3l1.5 2v13a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2V7L10 5Z"/><path d="M3 3l18 18"/></svg></span><span class="bx-panel__count">04 <span>/ 06</span></span></div><div class="bx-panel__copy"><h2>Less plastic and fewer bottles</h2><p>If you&#039;re buying bottled water because you don&#039;t like the taste of your tap water, a whole house filter removes the reason. That means fewer plastic bottles going into the bin and less carrying slabs home from the shops. Long-life cartridges that last 6 to 12 months also keep replacement waste down.</p></div></article>
<article role="tabpanel" class="bx-panel" id="bx-panel-5" aria-labelledby="bx-tab-5"><div class="bx-panel__visual" aria-hidden="true"><span class="bx-panel__ring bx-panel__ring--1"></span><span class="bx-panel__ring bx-panel__ring--2"></span><span class="bx-panel__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 3 9 5-9 5-9-5Z"/><path d="m3 13 9 5 9-5"/></svg></span><span class="bx-panel__count">05 <span>/ 06</span></span></div><div class="bx-panel__copy"><h2>One system instead of several</h2><p>A lot of homes end up with a filter jug in the fridge, a shower head filter in the bathroom and maybe an under-sink unit too. Each one needs its own cartridges on its own schedule. A whole house system replaces all of them with one set of cartridges and one reminder.</p></div></article>
<article role="tabpanel" class="bx-panel" id="bx-panel-6" aria-labelledby="bx-tab-6"><div class="bx-panel__visual" aria-hidden="true"><span class="bx-panel__ring bx-panel__ring--1"></span><span class="bx-panel__ring bx-panel__ring--2"></span><span class="bx-panel__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7" cy="8" r="1.8"/><circle cx="12" cy="5.5" r="1.8"/><circle cx="17" cy="8" r="1.8"/><path d="M12 11c-3 0-6 3.5-6 6.5 0 1.5 1.2 2.5 2.7 2.5 1.2 0 2-.6 3.3-.6s2.1.6 3.3.6c1.5 0 2.7-1 2.7-2.5 0-3-3-6.5-6-6.5Z"/></svg></span><span class="bx-panel__count">06 <span>/ 06</span></span></div><div class="bx-panel__copy"><h2>Better water for pets and the garden</h2><p>Your pets drink the same tap water you do, and many pets are fussy about taste. Filtered water is also fine for veggie gardens and pot plants, since the garden taps are covered too.</p></div></article>
</div></div></div></section>
<section class="section sv-section"><div class="section-shell"><div class="sv-head"><h2>Does it save money?</h2><p>It can, but it depends on your habits. The savings come from buying less bottled water, replacing fewer shower and jug filters, and slower wear on appliances. The costs are the upfront install and replacement cartridges every 6 to 12 months.</p></div>
<div class="sv-board">
<div class="sv-side sv-side--save" tabindex="0"><span class="sv-side__tag">The savings</span><ul class="sv-list"><li class="sv-item"><span class="sv-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2h4v3l1.5 2v13a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2V7L10 5Z"/><path d="M8.5 12h7"/></svg></span><span>Buying less bottled water</span></li><li class="sv-item"><span class="sv-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16l-6 8v6l-4 2v-8Z"/></svg></span><span>Replacing fewer shower and jug filters</span></li><li class="sv-item"><span class="sv-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></span><span>Slower wear on appliances</span></li></ul></div>
<div class="sv-scale" aria-hidden="true"><span class="sv-scale__beam"><span class="sv-scale__pan sv-scale__pan--l"></span><span class="sv-scale__pan sv-scale__pan--r"></span></span><span class="sv-scale__post"></span><span class="sv-scale__base"></span></div>
<div class="sv-side sv-side--cost" tabindex="0"><span class="sv-side__tag">The costs</span><ul class="sv-list"><li class="sv-item"><span class="sv-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 5a6 6 0 0 0-7 7l-4 4a3 3 0 0 0 4 4l4-4a6 6 0 0 0 8-7l-4 4-4-4 4-4Z"/></svg></span><span>The upfront install</span></li><li class="sv-item"><span class="sv-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 12a8 8 0 1 1-2.3-5.7"/><path d="M20 4v4h-4"/></svg></span><span>Replacement cartridges every 6 to 12 months</span></li></ul></div>
</div></div></section>
<section class="section wd-section"><div class="section-shell"><div class="wd-head"><h2>What a whole house filter won&#039;t do</h2></div><ul class="wd-grid"><li class="wd-card"><div class="wd-card__top"><span class="wd-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 7c0-1.7 3.1-3 7-3s7 1.3 7 3v10c0 1.7-3.1 3-7 3s-7-1.3-7-3Z"/><path d="M5 7c0 1.7 3.1 3 7 3s7-1.3 7-3M5 12c0 1.7 3.1 3 7 3s7-1.3 7-3"/></svg></span><span class="wd-card__x" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M7 7l10 10M17 7 7 17"/></svg></span></div><p>It won&#039;t make untreated tank, bore or creek water safe. That needs testing and disinfection, such as UV.</p></li><li class="wd-card"><div class="wd-card__top"><span class="wd-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s-6 7-6 11a6 6 0 0 0 12 0c0-4-6-11-6-11Z"/><path d="M10 14h4"/></svg></span><span class="wd-card__x" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M7 7l10 10M17 7 7 17"/></svg></span></div><p>It won&#039;t remove fluoride with the standard cartridges.</p></li><li class="wd-card"><div class="wd-card__top"><span class="wd-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 21h10M8 21l1-9h6l1 9M9 12V8a3 3 0 0 1 6 0v4"/></svg></span><span class="wd-card__x" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M7 7l10 10M17 7 7 17"/></svg></span></div><p>It isn&#039;t a salt-based softener. It helps limit scale, but very hard water may need a softener as well.</p></li><li class="wd-card"><div class="wd-card__top"><span class="wd-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="6" cy="7" r="2"/><circle cx="18" cy="7" r="2"/><circle cx="12" cy="17" r="2"/><path d="M8 7h8M7 9l4 6.5M17 9l-4 6.5"/></svg></span><span class="wd-card__x" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M7 7l10 10M17 7 7 17"/></svg></span></div><p>The standard cartridges aren&#039;t PFAS-rated.</p></li></ul></div></section>
<section class="section section-shell benefits-fit benefits-fit--image"><div class="benefits-fit__image"><img src="<?php echo $baseUrl; ?>/assets/images/benefits-whole-house-filter-img.webp" alt="Is a whole house filter right for you" loading="lazy" decoding="async"></div><div class="benefits-fit__content"><h2>Is a whole house filter right for you?</h2><p>It&#039;s likely a good fit if one or more of these sound familiar:</p><p>If you only want better drinking water from one tap, an under-sink filter may be enough. We&#039;ll tell you honestly at the assessment.</p><ul class="benefits-checklist"><li>You don&#039;t like the taste or smell of your tap water</li><li>Your skin or hair feels dry after showering</li><li>You buy bottled water regularly</li><li>You see scale on shower screens, taps or the kettle</li><li>Your home has older pipes or you notice discoloured water</li><li>You&#039;re building or renovating and want filtered water from day one</li></ul></div></section>
<section class="section section--faq" aria-labelledby="faq-title">
        <div class="section-shell faq-layout">
            <div class="faq-heading reveal"><h2 id="faq-title">Frequently asked questions</h2></div>
            <div class="faq-list reveal reveal--late">
                <article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-1" aria-expanded="false" aria-controls="faq-answer-1"><span>Q. Is it worth filtering shower water?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-1" role="region" aria-labelledby="faq-question-1" hidden><p>For many people, yes. Chlorine and hard water minerals are the main causes of dry skin and dull hair after showering, and a whole house filter reduces both. It's one of the main reasons people choose whole house systems over a kitchen filter.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-2" aria-expanded="false" aria-controls="faq-answer-2"><span>Q. Does a whole house filter help with eczema?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-2" role="region" aria-labelledby="faq-question-2" hidden><p>We can't claim it treats any skin condition. Some people with sensitive skin find chlorine-free showers more comfortable, but talk to your GP or dermatologist about eczema.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-3" aria-expanded="false" aria-controls="faq-answer-3"><span>Q. Will filtered water make my hot water system last longer?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-3" role="region" aria-labelledby="faq-question-3" hidden><p>Reducing sediment and scale reduces wear on hot water units, especially electric ones with elements. How much longer it lasts depends on your water hardness and the unit.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-4" aria-expanded="false" aria-controls="faq-answer-4"><span>Q. Is filtered tap water better than bottled water?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-4" role="region" aria-labelledby="faq-question-4" hidden><p>Filtered tap water is fresh, costs less per litre and avoids plastic bottles. Australian mains water is already safe to drink, so the filter is mainly improving taste and removing chlorine.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-5" aria-expanded="false" aria-controls="faq-answer-5"><span>Q. Does filtered water keep healthy minerals?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-5" role="region" aria-labelledby="faq-question-5" hidden><p>Yes. Carbon filtration leaves dissolved minerals like calcium and magnesium in the water. Reverse osmosis is the type of filtration that removes them.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-6" aria-expanded="false" aria-controls="faq-answer-6"><span>Q. Is filtered water safe for babies?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-6" role="region" aria-labelledby="faq-question-6" hidden><p>Filtered mains water is still mains water, so follow the usual advice to boil water for infant formula. Ask your child health nurse or GP if you're unsure.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-7" aria-expanded="false" aria-controls="faq-answer-7"><span>Q. Is it safe for my garden?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-7" role="region" aria-labelledby="faq-question-7" hidden><p>Yes. Filtered water is fine for plants, veggie gardens and pots.</p></div>
</article>
<article class="faq-item">
<h3 class="faq-item__heading"><button class="faq-trigger" type="button" id="faq-question-8" aria-expanded="false" aria-controls="faq-answer-8"><span>Q. How soon will I notice a difference?</span><span class="faq-trigger__icon" aria-hidden="true"></span></button></h3>
<div class="faq-answer" id="faq-answer-8" role="region" aria-labelledby="faq-question-8" hidden><p>Straight away. Taste and smell change from the first glass, and most people notice the difference in the shower within a few days.</p></div>
</article>
            </div>
        </div>
    </section>
<section class="final-cta final-cta--rich" aria-labelledby="benefits-cta-title"><div class="final-cta__image" aria-hidden="true"><span class="cta-orb cta-orb--1"></span><span class="cta-orb cta-orb--2"></span><span class="cta-grid"></span><span class="cta-spot"></span><span class="cta-bubbles"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="cta-wave cta-wave--3"></span><span class="cta-wave cta-wave--2"></span><span class="cta-wave cta-wave--1"></span></div><div class="section-shell final-cta__content"><h2 id="benefits-cta-title">See if a whole house filter suits your home</h2><p>Book a free in-home assessment. We&#039;ll look at your water and plumbing, tell you which whole house water filter benefits you&#039;re likely to notice, and give you a fixed quote.</p><div class="final-cta__actions"><a class="button button--light cta-button" href="<?php echo $baseUrl; ?>/request-a-quote.php">Book a Free In-Home Assessment <span aria-hidden="true">&#8594;</span></a><a class="cta-phone" href="tel:1300011406"><span class="cta-phone__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/></svg></span>1300 011 406</a></div></div></section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>