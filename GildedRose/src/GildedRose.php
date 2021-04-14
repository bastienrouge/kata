<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\QualityUpdater\Contract\ItemUpdaterInterface;
use GildedRose\QualityUpdater\Factory\ItemUpdaterFactory;

final class GildedRose
{
    /** @var Item[] */
    private array $items;

    /** @var ItemUpdaterInterface[] */
    private array $itemUpdaters;

    public function __construct(array $items)
    {
        $this->items = $items;
        $this->itemUpdaters = [];

        foreach ($this->items as $item) {
            $this->itemUpdaters[] = (new ItemUpdaterFactory())->getItemUpdater($item);
        }
    }

    public function updateQuality(): void
    {
        foreach ($this->itemUpdaters as $itemUpdater) {
            $itemUpdater->updateQuality();
            $itemUpdater->updateSellIn();
        }
    }
}
