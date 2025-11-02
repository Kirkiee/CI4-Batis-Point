<?php
// Compact secondary button
// Data contract: $disable, $href, $label, $dark

$hrefOut = esc($href ?? '#');
$labelOut = esc($label ?? 'Secondary');
$font = 'font-family: Poppins, Helvetica, Arial, sans-serif; font-weight: 500; letter-spacing: 0.2px;';

// Moodboard color palette
$forest = '#355E3B'; // deep green
$moss = '#9EC590';   // soft moss
$gold = '#F1B24A';   // warm gold
$petal = '#FCFFF1';  // light neutral

if ($disable ?? false) {
    $classes = 'inline-block px-5 py-2.5 rounded-full shadow bg-opacity-50 text-white bg-[var(--bp-gold)] cursor-not-allowed';
    $attrs = 'aria-disabled="true" tabindex="-1"';
    $hrefOut = '#';
} elseif ($dark ?? false) {
    // Dark mode: forest text with gold base
    $classes = 'inline-block px-5 py-2.5 rounded-full shadow text-[var(--bp-forest)] bg-[var(--bp-gold)] hover:bg-[#FFD16A] hover:shadow-lg transition duration-200';
    $attrs = '';
} else {
    // Light mode: gold base with forest text, hover to moss
    $classes = 'inline-block px-5 py-2.5 rounded-full shadow text-[var(--bp-forest)] bg-[var(--bp-gold)] hover:bg-[var(--bp-moss)] hover:text-[var(--bp-forest)] hover:shadow-lg transition duration-200';
    $attrs = '';
}
?>
<a href="<?= $hrefOut ?>" class="<?= $classes ?>" style="<?= $font ?>" <?= $attrs ?>>
    <?= $labelOut ?>
</a>