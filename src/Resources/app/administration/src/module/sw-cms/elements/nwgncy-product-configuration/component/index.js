import template from './sw-cms-el-nwgncy-product-configuration.html.twig';
import './sw-cms-el-nwgncy-product-configuration.scss';

/**
 * @private
 * @package buyers-experience
 */
export default {
    template,

    mixins: [
        Shopware.Mixin.getByName('cms-element'),
        Shopware.Mixin.getByName('placeholder'),
    ],

    created() {
        this.createdComponent();
    },

    methods: {
        createdComponent() {
            this.initElementConfig('nwgncy-product-configuration');
        },
    },
};
