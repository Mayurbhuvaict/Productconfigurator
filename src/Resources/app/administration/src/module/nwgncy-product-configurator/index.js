const { Module, State } = Shopware;

Shopware.Component.register('nwgncy-product-configurator-detail', () => import('./page/nwgncy-product-configurator-detail'));

import deDE from './snippet/de-DE';
import enGB from './snippet/en-GB';


Module.register('nwgncy-product-configurator', {
    type: 'plugin',
    name: 'nwgncy-product-configurator',
    title: 'nwgncy-product-configurator.general.mainMenuItemGeneral',
    description: 'nwgncy-product-configurator.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',

    snippets: {
        'de-DE': deDE,
        'en-GB': enGB
    },

    routes: {

        create: {
            component: 'nwgncy-product-configurator-detail',
            path: 'create',
            meta: {
                parentPath: 'nwgncy.product.configurator.create'
            }
        },
        detail: {
            component: 'nwgncy-product-configurator-detail',
            path: 'detail/:id?',
            props: {
                default(route) {
                    return {
                        prodId: route.params.id,
                    };
                },
            },
            meta: {
                parentPath: 'nwgncy.product.configurator.create'
            }
        }
    },

    navigation: [{
        label: 'nwgncy-product-configurator.general.mainMenuItemGeneral',
        color: '#ff3d58',
        path: 'nwgncy.product.configurator.create',
        icon: 'default-shopping-paper-bag-product',
        position: 100,
        parent: 'sw-marketing'
    }]
});