<?php
// Compact link button
$href = esc($href ?? '#');
$label = esc($label ?? 'Learn more');
?>
<a href="<?= $href ?>" class="inline-block text-[#355E3B] hover:underline" style="font-family: Helvetica, Arial, sans-serif;"><?= $label ?></a>