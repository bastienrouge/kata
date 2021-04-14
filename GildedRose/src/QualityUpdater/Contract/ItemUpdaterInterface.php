<?php

namespace GildedRose\QualityUpdater\Contract;

use GildedRose\Item;

interface ItemUpdaterInterface
{
    public function __construct(Item $item);

    public function updateQuality(): void;

    public function updateSellIn(): void;
}