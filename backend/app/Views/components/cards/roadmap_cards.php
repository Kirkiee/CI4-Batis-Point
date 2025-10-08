<?php
// Component: components/cards/roadmap_cards.php
// Props: $title, $excerpt, $priority, $status
?>

<article data-status="<?= strtolower($status) ?>"
    class="bg-white border border-stone rounded-2xl p-5 shadow-subtle transition-transform duration-200 hover:shadow-lg hover:-translate-y-1">
    <div class="flex flex-col h-full">
        <div>
            <h3 class="text-lg font-semibold text-forest mb-1"><?= esc($title) ?></h3>
            <p class="text-sm text-slate-600 leading-relaxed mb-3"><?= esc($excerpt) ?></p>
        </div>

        <div class="mt-auto flex items-center justify-between pt-3 border-t border-stone">
            <span class="text-xs text-slate-500">
                <span class="font-medium">Priority:</span> <?= esc($priority) ?>
            </span>

            <?php
            $statusColors = [
                'backlog' => 'bg-stone text-slate-800',
                'planned' => 'bg-citrine text-white',
                'in progress' => 'bg-yellow-400 text-slate-800',
                'done' => 'bg-forest text-white',
            ];
            $color = $statusColors[strtolower($status)] ?? 'bg-gray-300 text-gray-700';
            ?>
            <span class="px-3 py-1 rounded-full text-xs font-semibold <?= $color ?>">
                <?= esc($status) ?>
            </span>
        </div>
    </div>
</article>