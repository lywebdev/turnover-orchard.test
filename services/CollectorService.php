<?php

namespace services;

final class CollectorService implements CollectorServiceInterface
{
    private array $appleTrees;

    private array $pearTrees;

    public function __construct(int $appleQuantity = 10, int $pearQuantity = 15)
    {
        $this->appleTrees = $this->generate(\AppleTree::APPLE_TREE_NAME, $appleQuantity);
        $this->pearTrees  = $this->generate(\PearTree::PEAR_TREE_NAME, $pearQuantity);
    }

    public function generate(string $treeName, int $quantity): array
    {
        static $id = 1;
        $treesArray = [];

        foreach (range(1, $quantity) as $i) {
            $treeClassName = $treeName . 'Tree';
            $tree = new $treeClassName;
            $tree->setId($id++);

            $treesArray[] = $tree;
        }

        return $treesArray;
    }

    /**
     * @inheritDoc
     */
    public function collectFruits()
    {
        $apples = 0;
        $pears = 0;

        foreach ($this->appleTrees as $appleTree) {
            $apples += $appleTree->collectProducts();
        }
        foreach ($this->pearTrees as $pearTree) {
            $pears += $pearTree->collectProducts();
        }

        return [
            'Яблоки' => $apples,
            'Груши' => $pears
        ];
    }
}
