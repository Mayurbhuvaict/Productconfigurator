/**
 * @private
 * @package buyers-experience
 */
Shopware.Component.register('sw-cms-preview-nwgncy-product-configuration', () => import('./preview'));
/**
 * @private
 * @package buyers-experience
 */
Shopware.Component.register('sw-cms-block-nwgncy-product-configuration', () => import('./component'));

/**
 * @private
 * @package buyers-experience
 */
Shopware.Service('cmsService').registerCmsBlock({
    name: 'nwgncy-product-configuration',
    label: 'sw-cms.blocks.form.label',
    category: 'form',
    component: 'sw-cms-block-nwgncy-product-configuration',
    previewComponent: 'sw-cms-preview-nwgncy-product-configuration',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        productConfiguration: 'nwgncy-product-configuration'
    },
});