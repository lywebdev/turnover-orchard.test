<?php

abstract class Tree
{
    /**
     * @var int Регистрационный номер дерева в саду
     */
    protected int $id;

    /**
     * @var int Минимальное значение плодов, при собирании плодов с дерева
     */
    protected int $minFruitsQuantity;

    /**
     * @var int Максимальное значение плодов, при собирании плодов с дерева
     */
    protected int $maxFruitsQuantity;

    /**
     * @var string Название дерева
     */
    protected string $treeName;


    /**
     * Собрать плоды с дерева
     * @return int
     */
    public function collectProducts(): int
    {
        return rand($this->minFruitsQuantity, $this->maxFruitsQuantity);
    }

    /**
     * Установить регистрационный номер для дерева
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}
