<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\Aggregate\ProductConfiguratorMaterialTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorMaterialTranslationEntity $entity)
 * @method void                set(string $key, ProductConfiguratorMaterialTranslationEntity $entity)
 * @method ProductConfiguratorMaterialTranslationEntity[]    getIterator()
 * @method ProductConfiguratorMaterialTranslationEntity[]    getElements()
 * @method ProductConfiguratorMaterialTranslationEntity|null get(string $key)
 * @method ProductConfiguratorMaterialTranslationEntity|null first()
 * @method ProductConfiguratorMaterialTranslationEntity|null last()
 */
class ProductConfiguratorMaterialTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorMaterialTranslationEntity::class;
    }
}