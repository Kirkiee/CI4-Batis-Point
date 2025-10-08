<?php
// Compact primary button. Keeps same contract: $label, $href, $disable, $dark
$href = esc($href ?? '#');
$label = esc($label ?? 'Action');
$font = 'font-family: Helvetica, Arial, sans-serif;';
if ($disable ?? false) {
    $classes = 'inline-block px-4 py-2 rounded shadow text-white bg-[#355E3B] opacity-50 cursor-not-allowed';
    $attrs = 'aria-disabled="true" tabindex="-1"';
    $hrefOut = '#';
} elseif ($dark ?? false) {
    $classes = 'inline-block px-4 py-2 rounded shadow text-white bg-[#1F3D2A] hover:bg-[#0f2617] transition duration-150';
    $attrs = '';
    $hrefOut = $href;
} else {
    $classes = 'inline-block px-4 py-2 rounded shadow text-white bg-[#355E3B] hover:bg-[#1F3D2A] transition duration-150';
    $attrs = '';
    $hrefOut = $href;
}
?>
<a href="<?= $hrefOut ?>" class="<?= $classes ?>" style="<?= $font ?>" <?= $attrs ?>><?= $label ?></a>