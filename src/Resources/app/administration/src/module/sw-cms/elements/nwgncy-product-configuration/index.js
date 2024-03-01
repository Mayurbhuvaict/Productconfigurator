/**
 * @private
 * @package buyers-experience
 */
Shopware.Component.register('sw-cms-el-preview-nwgncy-product-configuration', () => import('./preview'));

/**
 * @private
 * @package buyers-experience
 */
Shopware.Component.register('sw-cms-el-nwgncy-product-configuration', () => import('./component'));

/**
 * @private
 * @package buyers-experience
 */
Shopware.Service('cmsService').registerCmsElement({
    name: 'nwgncy-product-configuration',
    label: 'sw-cms.elements.form.name',
    component: 'sw-cms-el-nwgncy-product-configuration',
    previewComponent: 'sw-cms-el-preview-nwgncy-product-configuration',
});
