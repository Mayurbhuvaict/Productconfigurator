<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\Aggregate\ProductConfiguratorLockTranslation\ProductConfiguratorLockTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FloatField;

class ProductConfiguratorLockDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf_lock';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorLockEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorLockCollection::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id','id'))->addFlags(new Required(), new ApiAware(), new PrimaryKey()),
            (new TranslatedField('title'))->addFlags(new ApiAware()),
            (new TranslatedField('description'))->addFlags(new ApiAware()),
            (new TranslatedField('tooltip'))->addFlags(new ApiAware()),
            (new FloatField('min_height', 'minHeight'))->addFlags(new ApiAware()),
            (new FloatField('min_width', 'minWidth'))->addFlags(new ApiAware()),
            (new FloatField('min_depth', 'minDepth'))->addFlags(new ApiAware()),

            (new FkField('prod_conf_id', 'prodConfId', ProductConfiguratorDefinition::class))->addFlags(new Required()),

            (new FkField('lock_media_id', 'lockMediaId',MediaDefinition::class))->addFlags(new ApiAware()),

            //Translation Association field
            (new TranslationsAssociationField(ProductConfiguratorLockTranslationDefinition::class,'prod_conf_lock_id'))->addFlags(new ApiAware(),new Required()),

            new OneToOneAssociationField('lockMediaImage','lock_media_id','id',MediaDefinition::class,false),

            new ManyToOneAssociationField('prodConf', 'prod_conf_id', ProductConfiguratorDefinition::class, 'id'),
        ]);
    }
}