<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Storefront\Page\Product\Subscriber;

use Shopware\Core\Content\Cms\Events\CmsPageLoadedEvent;
use Shopware\Core\Content\Product\Events\ProductListingResultEvent;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\System\SalesChannel\Entity\SalesChannelRepository;
use Shopware\Storefront\Page\GenericPageLoadedEvent;
use Shopware\Storefront\Page\LandingPage\LandingPageLoadedEvent;
use Shopware\Storefront\Page\Navigation\NavigationPageLoadedEvent;
use Shopware\Storefront\Page\PageLoadedEvent;
use Shopware\Storefront\Page\Product\ProductPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ProductPageSubscriber implements EventSubscriberInterface
{

    public function __construct(
        private readonly SalesChannelRepository $repository,
        private readonly EntityRepository       $prodConf,
        private readonly EntityRepository       $productRepository
    )
    {
    }

//PRODUCT_CATEGORY_LOADED_EVENT
    public static function getSubscribedEvents(): array
    {
        return [
            ProductPageLoadedEvent::class => 'onProductPageLoaded',
            GenericPageLoadedEvent::class => 'onNavigationPageLoaded',
        ];
    }

    public function onProductPageLoaded(ProductPageLoadedEvent $event): void
    {
        $context = $event->getSalesChannelContext()->getContext();
        $criteriaData = new Criteria();
        $criteriaData->addAssociation('productConfiguratorForms');
        $criteriaData->addAssociation('productConfiguratorMaterials');
        $criteriaData->addAssociation('productConfiguratorCoatings');
        $criteriaData->addAssociation('productConfiguratorDimensions');
        $criteriaData->addAssociation('productConfiguratorLocks');
        $criteriaData->addAssociation('productConfiguratorAccessoriess');

//        /* @var $productRepository EntityRepository */
        $productDatas = $this->prodConf->search($criteriaData, $context)->getEntities();
//        $event->getPage()->getProduct()->addExtension('testProduct', $productDatas);
    }

    public function onNavigationPageLoaded(GenericPageLoadedEvent $event): void
    {
        $context = $event->getSalesChannelContext()->getContext();
        $criteriaData = new Criteria();
        $criteriaData->addAssociation('productConfiguratorForms');
        $criteriaData->addAssociation('productConfiguratorMaterials');
        $criteriaData->addAssociation('productConfiguratorCoatings');
        $criteriaData->addAssociation('productConfiguratorDimensions');
        $criteriaData->addAssociation('productConfiguratorLocks');
        $criteriaData->addAssociation('productConfiguratorAccessoriess');

//        /* @var $productRepository EntityRepository */
        $productDatas = $this->prodConf->search($criteriaData, $context)->getEntities();

        $event->getPage()->addExtension('nwgncyProductConfiger', $productDatas);
    }
}
