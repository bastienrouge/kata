<?php

namespace GildedRose\QualityUpdater\Factory;

use GildedRose\Item;
use GildedRose\QualityUpdater\AgedBrieItemUpdater;
use GildedRose\QualityUpdater\BackStagePassesItemUpdater;
use GildedRose\QualityUpdater\BasicItemUpdater;
use GildedRose\QualityUpdater\ConjuredItemUpdater;
use GildedRose\QualityUpdater\SulfurasHandOfRagnarosItemUpdater;

final class ItemUpdaterFactory
{
    public function getItemUpdater(Item $item)
    {
        if (0 === strpos($item->name, 'Backstage passes')) {
            return new BackStagePassesItemUpdater($item);
        }

        if (0 === strpos($item->name, 'Conjured')) {
            return new ConjuredItemUpdater($item);
        }

        switch ($item->name) {
            case 'Aged Brie':
                return new AgedBrieItemUpdater($item);
            case 'Sulfuras, Hand of Ragnaros':
                return new SulfurasHandOfRagnarosItemUpdater($item);
            default:
                return new BasicItemUpdater($item);
        }
    }
}