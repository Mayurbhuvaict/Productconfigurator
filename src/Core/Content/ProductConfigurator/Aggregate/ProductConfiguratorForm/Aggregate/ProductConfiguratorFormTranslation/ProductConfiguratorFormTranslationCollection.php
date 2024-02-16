<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\Aggregate\ProductConfiguratorFormTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorFormTranslationEntity $entity)
 * @method void                set(string $key, ProductConfiguratorFormTranslationEntity $entity)
 * @method ProductConfiguratorFormTranslationEntity[]    getIterator()
 * @method ProductConfiguratorFormTranslationEntity[]    getElements()
 * @method ProductConfiguratorFormTranslationEntity|null get(string $key)
 * @method ProductConfiguratorFormTranslationEntity|null first()
 * @method ProductConfiguratorFormTranslationEntity|null last()
 */
class ProductConfiguratorFormTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorFormTranslationEntity::class;
    }
}