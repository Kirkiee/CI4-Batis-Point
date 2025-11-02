<?php
// Compact border button (single anchor output)
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
// $dark: string | null

$hrefOut = esc($href ?? '#');
$labelOut = esc($label ?? 'Border');
$font = 'font-family: Poppins, Helvetica, Arial, sans-serif; font-weight: 500;';

// Moodboard color tokens
$forest = '#355E3B'; // main
$gold = '#F1B24A';   // accent
$neutral = '#FCFFF1'; // light neutral

if ($disable ?? false) {
    $classes = 'inline-block px-4 py-1.5 rounded-full border border-gray-300 text-gray-400 opacity-50 cursor-not-allowed';
    $attrs = 'aria-disabled="true" tabindex="-1"';
    $hrefOut = '#';
} elseif ($dark ?? false) {
    // Dark mode style — readable on dark background
    $classes = 'inline-block px-4 py-1.5 rounded-full border border-[var(--bp-gold)] text-[var(--bp-gold)] hover:bg-[var(--bp-gold)] hover:text-[var(--bp-forest)] transition duration-200';
    $attrs = '';
} else {
    // Light mode style
    $classes = 'inline-block px-4 py-1.5 rounded-full border border-[var(--bp-forest)] text-[var(--bp-forest)] hover:bg-[var(--bp-forest)] hover:text-[var(--bp-neutral)] transition duration-200';
    $attrs = '';
}
?>
<a href="<?= $hrefOut ?>" class="<?= $classes ?>" style="<?= $font ?>" <?= $attrs ?>>
    <?= $labelOut ?>
</a>