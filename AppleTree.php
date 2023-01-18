<?php

final class AppleTree extends Tree
{
    public const APPLE_TREE_NAME = 'Apple';

    /**
     * @inheritDoc
     */
    protected int $minFruitsQuantity = 40;

    /**
     * @inheritDoc
     */
    protected int $maxFruitsQuantity = 50;

    /**
     * @inheritDoc
     */
    protected string $treeName = self::APPLE_TREE_NAME;
}
