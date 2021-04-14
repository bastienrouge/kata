<?php

namespace GildedRose\QualityUpdater;

use GildedRose\QualityUpdater\Base\ItemUpdaterAbstract;

class ConjuredItemUpdater extends ItemUpdaterAbstract
{
    public function updateQuality(): void
    {
        if ($this->getItem()->quality >= 2) {
            $this->getItem()->quality -= 2;
            return;
        }

        $this->getItem()->quality = 0;
    }
}