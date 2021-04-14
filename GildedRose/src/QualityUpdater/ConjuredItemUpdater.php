<?php

namespace GildedRose\QualityUpdater;

use GildedRose\QualityUpdater\Base\ItemUpdaterAbstract;

class ConjuredItemUpdater extends ItemUpdaterAbstract
{
    public function updateQuality(): void
    {
        if ($this->getItem()->quality > 1) {
            $this->getItem()->quality -= 2;
        }

        if ($this->getItem()->quality > 0 && $this->getItem()->sellIn < 1) {
            $this->getItem()->quality--;
        }
    }
}