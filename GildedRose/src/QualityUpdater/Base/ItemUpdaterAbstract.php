<?php
namespace GildedRose\QualityUpdater\Base;

use GildedRose\Item;
use GildedRose\QualityUpdater\Contract\ItemUpdaterInterface;

abstract class ItemUpdaterAbstract implements ItemUpdaterInterface
{
    protected Item $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @param Item $item
     * @return ItemUpdaterAbstract
     */
    public function setItem(Item $item): self
    {
        $this->item = $item;
        return $this;
    }

    public function updateSellIn(): void
    {
        $this->item->sellIn--;
    }
}