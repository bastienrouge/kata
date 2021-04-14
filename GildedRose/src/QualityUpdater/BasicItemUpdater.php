<?php

namespace GildedRose\QualityUpdater;

use GildedRose\QualityUpdater\Base\ItemUpdaterAbstract;

class BasicItemUpdater extends ItemUpdaterAbstract
{

    public function updateQuality(): void
    {
        if ($this->getItem()->quality > 0) {
            $this->getItem()->quality--;
        }

        if ($this->getItem()->quality > 0 && $this->getItem()->sellIn < 1) {
            $this->getItem()->quality--;
        }
    }
}