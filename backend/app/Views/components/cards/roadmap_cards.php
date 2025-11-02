<?php
// Component: components/cards/roadmap_cards.php
// Props: $title, $excerpt, $priority, $status
?>

<article data-status="<?= strtolower($status) ?>"
    class="bg-[#FCFFF1] border border-[#E5E7EB] rounded-2xl p-6 shadow-soft transition-all duration-300 hover:shadow-md hover:-translate-y-1 hover:bg-[#FFFFFF]">
    <div class="flex flex-col h-full">
        <div>
            <h3 class="text-xl font-proza font-semibold text-[#355E3B] mb-2"><?= esc($title) ?></h3>
            <p class="text-sm text-gray-700 leading-relaxed mb-4"><?= esc($excerpt) ?></p>
        </div>

        <div class="mt-auto flex items-center justify-between pt-4 border-t border-[#E5E7EB]">
            <span class="text-xs text-gray-600">
                <span class="font-medium text-[#355E3B]">Priority:</span> <?= esc($priority) ?>
            </span>

            <?php
            $statusColors = [
                'backlog' => 'bg-[#EDEDE9] text-[#355E3B]',
                'planned' => 'bg-[#9EC590] text-white',
                'in progress' => 'bg-[#F1B24A] text-[#355E3B]',
                'done' => 'bg-[#355E3B] text-white',
            ];
            $color = $statusColors[strtolower($status)] ?? 'bg-gray-300 text-gray-700';
            ?>
            <span class="px-3 py-1.5 rounded-full text-xs font-semibold <?= $color ?> shadow-sm">
                <?= esc($status) ?>
            </span>
        </div>
    </div>
</article>