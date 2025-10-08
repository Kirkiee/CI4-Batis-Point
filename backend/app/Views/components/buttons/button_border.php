<?php
// Compact border button (single anchor output)
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
// $dark: string | null

$hrefOut = esc($href ?? '#');
$labelOut = esc($label ?? 'Secondary');
$font = 'font-family: Helvetica, Arial, sans-serif;';

if ($disable ?? false) {
    $classes = 'inline-block px-4 py-1.5 rounded border border-gray-300 text-gray-600 opacity-50 cursor-not-allowed';
    $attrs = 'aria-disabled="true" tabindex="-1"';
    $hrefOut = '#';
} elseif ($dark ?? false) {
    $classes = 'inline-block px-4 py-1.5 rounded border border-gray-600 text-white hover:bg-gray-700 transition duration-150';
    $attrs = '';
} else {
    $classes = 'inline-block px-4 py-1.5 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition duration-150';
    $attrs = '';
}
?>
<a href="<?= $hrefOut ?>" class="<?= $classes ?>" style="<?= $font ?>" <?= $attrs ?>><?= $labelOut ?></a>