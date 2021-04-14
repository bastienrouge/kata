<?php

namespace GildedRose\QualityUpdater;

use GildedRose\QualityUpdater\Base\ItemUpdaterAbstract;

class AgedBrieItemUpdater extends ItemUpdaterAbstract
{
    public function updateQuality(): void
    {
        //On incrémente sa qualité
        if ($this->getItem()->quality < 50) {
            $this->getItem()->quality++;
        }

        //Si le temps est dépassé, au l'augmente encore une fois
        if ($this->getItem()->sellIn < 1 && $this->getItem()->quality < 50) {
            $this->getItem()->quality++;
        }
    }
}