<?php
namespace GildedRose\QualityUpdater;

use GildedRose\QualityUpdater\Base\ItemUpdaterAbstract;

class SulfurasHandOfRagnarosItemUpdater extends ItemUpdaterAbstract
{
    public function updateQuality(): void
    {
        $this->getItem()->quality = 80;
    }

    public function updateSellIn(): void
    {
    }
}