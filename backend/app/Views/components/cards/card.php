<?php
// Component: components/cards/card.php
// Data contract:
// $title: string
// $excerpt: string
// $image: string|null
// $href: string|null
?>
<article class="bg-[var(--bp-petal)] border border-[var(--bp-moss)] rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition duration-300 hover:-translate-y-1">
    <?php if (!empty($image)): ?>
        <img src="<?= esc($image) ?>" alt="<?= esc($title ?? '') ?>" class="w-full h-48 object-cover">
    <?php endif; ?>

    <div class="p-5">
        <?php if (!empty($title)): ?>
            <h3 class="mb-2 font-proza text-xl font-semibold text-[var(--bp-forest)]">
                <?= esc($title) ?>
            </h3>
        <?php endif; ?>

        <?php if (!empty($excerpt)): ?>
            <p class="mb-4 text-sm leading-relaxed text-[var(--bp-forest)]/80 font-poppins">
                <?= esc($excerpt) ?>
            </p>
        <?php endif; ?>

        <?php if (!empty($href)): ?>
            <a href="<?= esc($href) ?>"
                class="inline-block text-[var(--bp-gold)] font-poppins font-medium text-sm hover:text-[var(--bp-forest)] transition duration-200">
                Read more →
            </a>
        <?php endif; ?>
    </div>
</article>