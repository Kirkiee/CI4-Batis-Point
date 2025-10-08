<?php
// Page: components/button/button_secondary
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
// $dark: string | null
?>
<?php
// Compact secondary button
$href = esc($href ?? '#');
$label = esc($label ?? 'Secondary');
$font = 'font-family: Helvetica, Arial, sans-serif;';
if ($disable ?? false) {
    $classes = 'inline-block px-4 py-2 rounded shadow text-white bg-[#C2A800] opacity-50 cursor-not-allowed';
    $attrs = 'aria-disabled="true" tabindex="-1"';
    $hrefOut = '#';
} elseif ($dark ?? false) {
    $classes = 'inline-block px-4 py-2 rounded shadow text-white bg-[#C2A800] hover:bg-[#a58e00] transition duration-150';
    $attrs = '';
    $hrefOut = $href;
} else {
    $classes = 'inline-block px-4 py-2 rounded shadow text-[#1F3D2A] bg-[#E4D00A] hover:bg-[#d6c900] transition duration-150';
    $attrs = '';
    $hrefOut = $href;
}
?>
<a href="<?= $hrefOut ?>" class="<?= $classes ?>" style="<?= $font ?>" <?= $attrs ?>><?= $label ?></a>