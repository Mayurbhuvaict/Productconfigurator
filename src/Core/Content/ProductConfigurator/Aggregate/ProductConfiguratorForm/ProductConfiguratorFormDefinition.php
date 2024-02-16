<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\Aggregate\ProductConfiguratorFormTranslation\ProductConfiguratorFormTranslationDefinition;
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

class ProductConfiguratorFormDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf_form';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorFormEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorFormCollection::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id','id'))->addFlags(new Required(), new ApiAware(), new PrimaryKey()),
            (new TranslatedField('name'))->addFlags(new ApiAware()),
            (new TranslatedField('description'))->addFlags(new ApiAware()),
            (new TranslatedField('tooltip'))->addFlags(new ApiAware()),
            (new FloatField('height', 'height'))->addFlags(new ApiAware()),
            (new FloatField('width', 'width'))->addFlags(new ApiAware()),
            (new FloatField('depth', 'depth'))->addFlags(new ApiAware()),

            (new FkField('prod_conf_id', 'prodConfId', ProductConfiguratorDefinition::class))->addFlags(new Required()),

            (new FkField('form_media_id', 'formMediaId',MediaDefinition::class))->addFlags(new ApiAware()),

            //Translation Association field
            (new TranslationsAssociationField(ProductConfiguratorFormTranslationDefinition::class,'prod_conf_form_id'))->addFlags(new ApiAware(),new Required()),


            new OneToOneAssociationField(
                'formMediaImage',
                'form_media_id',
                'id',
                MediaDefinition::class,
                false
            ),

            new ManyToOneAssociationField('prodConf', 'prod_conf_id', ProductConfiguratorDefinition::class, 'id'),
        ]);
    }
}