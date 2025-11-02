<?php
// Compact primary button
// Data contract: $label, $href, $disable, $dark

$hrefOut = esc($href ?? '#');
$labelOut = esc($label ?? 'Primary');
$font = 'font-family: Poppins, Helvetica, Arial, sans-serif; font-weight: 600; letter-spacing: 0.2px;';

// Moodboard colors
$forest = '#355E3B'; // primary base
$moss = '#9EC590';   // accent highlight
$gold = '#F1B24A';   // warm contrast
$petal = '#FCFFF1';  // light neutral

if ($disable ?? false) {
    $classes = 'inline-block px-5 py-2.5 rounded-full shadow bg-opacity-50 text-white bg-[#355E3B] cursor-not-allowed';
    $attrs = 'aria-disabled="true" tabindex="-1"';
    $hrefOut = '#';
} elseif ($dark ?? false) {
    // Dark mode: gold background, forest text
    $classes = 'inline-block px-5 py-2.5 rounded-full shadow text-[var(--bp-forest)] bg-[var(--bp-gold)] hover:bg-[#FFD16A] hover:shadow-lg transition duration-200';
    $attrs = '';
} else {
    // Light mode: forest background, petal text
    $classes = 'inline-block px-5 py-2.5 rounded-full shadow text-[var(--bp-petal)] bg-[var(--bp-forest)] hover:bg-[var(--bp-moss)] hover:text-[var(--bp-forest)] hover:shadow-lg transition duration-200';
    $attrs = '';
}
?>
<a href="<?= $hrefOut ?>" class="<?= $classes ?>" style="<?= $font ?>" <?= $attrs ?>>
    <?= $labelOut ?>
</a>