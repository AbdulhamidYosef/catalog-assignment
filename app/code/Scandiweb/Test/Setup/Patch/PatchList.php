<?php

namespace Scandiweb\Migration\Setup\Patch;

use Magento\Framework\Setup\Patch\PatchListInterface;

class PatchList implements PatchListInterface
{
    public static function getPatches()
    {
        return [
            \Scandiweb\Test\Setup\Patch\Data\CreateProduct::class,
        ];
    }
}
