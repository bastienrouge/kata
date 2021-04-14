<?php

namespace GildedRose\QualityUpdater;

use GildedRose\QualityUpdater\Base\ItemUpdaterAbstract;

class BackStagePassesItemUpdater extends ItemUpdaterAbstract
{

    public function updateQuality(): void
    {
        //Après le concert, le produit n'a plus de qualité
        if ($this->getItem()->sellIn < 1) {
            $this->getItem()->quality = 0;
            return;
        }
        //S'il reste 5 jours ou moins, la qualité prend 3 points
        if ($this->getItem()->sellIn <= 5) {
            $this->getItem()->quality += 3;
            if ($this->getItem()->quality > 50) {
                $this->getItem()->quality = 50;
            }
            return;
        }

        //S'il reste 10 jours ou moins, la qualité prend 2 points
        if ($this->getItem()->sellIn <= 10) {
            $this->getItem()->quality += 2;
            if ($this->getItem()->quality > 50) {
                $this->getItem()->quality = 50;
            }
            return;
        }

        $this->getItem()->quality++;
    }
}