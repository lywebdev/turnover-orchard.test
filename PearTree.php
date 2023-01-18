<?php

final class PearTree extends Tree
{
    public const PEAR_TREE_NAME = 'Pear';

    /**
     * @inheritDoc
     */
    protected int $minFruitsQuantity = 0;

    /**
     * @inheritDoc
     */
    protected int $maxFruitsQuantity = 20;

    /**
     * @inheritDoc
     */
    protected string $treeName = self::PEAR_TREE_NAME;
}
