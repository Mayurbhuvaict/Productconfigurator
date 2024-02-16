<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorCoating;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\Aggregate\ProductConfiguratorFormTranslation\ProductConfiguratorFormTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductConfiguratorCoatingDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf_coat';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorCoatingEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorCoatingCollection::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id','id'))->addFlags(new Required(), new ApiAware(), new PrimaryKey()),
            (new BoolField('without_coating', 'withoutCoating'))->addFlags(new ApiAware()),
            (new BoolField('powder_coating', 'powderCoating'))->addFlags(new ApiAware()),
            (new BoolField('wet_painting', 'wetPainting'))->addFlags(new ApiAware()),

            (new FkField('prod_conf_id', 'prodConfId', ProductConfiguratorDefinition::class))->addFlags(new Required()),

            new ManyToOneAssociationField('prodConf', 'prod_conf_id', ProductConfiguratorDefinition::class, 'id'),
        ]);
    }
}