/**
 * @package buyers-experience
 */
import template from './nwgncy-product-configurator-detail.html.twig';
import './nwgncy-product-configurator-detail.scss';

const {Component, Mixin, Data: {Criteria}} = Shopware;

export default {
    template,

    inject: ['repositoryFactory', 'configService', 'acl'],

    mixins: [
        Mixin.getByName('placeholder'),
    ],

    props: {
        prodId: {
            type: String, required: false, default: null
        },
    },

    created() {
        this.createdComponent();
    },

    data() {
        return {
            isLoading: false,
            productConfigurator: null,
            processSuccess: false,
            isSaveSuccessful: false,
            showMediaModal: false,
        };
    },

    computed: {
        productConfiguratorRepository() {
            return this.repositoryFactory.create('prod_conf');
        },

        productConfiguratorFormsRepository() {
            return this.repositoryFactory.create('prod_conf_form');
        },

        productConfiguratorAccessoriesRepository() {
            return this.repositoryFactory.create('prod_conf_acce');
        },

        productConfiguratorCoatingRepository() {
            return this.repositoryFactory.create('prod_conf_coat');
        },

        productConfiguratorDimensionRepository() {
            return this.repositoryFactory.create('prod_conf_dime');
        },

        productConfiguratorLockRepository() {
            return this.repositoryFactory.create('prod_conf_lock');
        },

        productConfiguratorMaterialRepository() {
            return this.repositoryFactory.create('prod_conf_mat');
        },

        productConfiguratorCriteria() {
            const criteria = new Criteria();
            criteria.addAssociation('productConfiguratorForms');
            criteria.addAssociation('productConfiguratorMaterials');
            criteria.addAssociation('productConfiguratorCoatings');
            criteria.addAssociation('productConfiguratorDimensions');
            criteria.addAssociation('productConfiguratorLocks');
            criteria.addAssociation('productConfiguratorAccessoriess');
            return criteria;
        },

        nwgncyIsLoading() {
            return this.isLoading || this.productConfigurator == null;
        },

        uploadTag() {
            return `nwgncy-product-detail--${this.productConfigurator.productConfiguratorForms.id}`;
        },
    },
    watch: {
        prodId() {
            this.createdComponent();
        },
    },
    methods: {
        createdComponent() {
            if (this.prodId) {
                this.loadEntityData();
                return;
            }
            this.isLoading = true;
            const criteria = new Criteria(1, 25);
            this.productConfiguratorRepository
                .search(criteria)
                .then((result) => {
                    if (result.total !== 0) {
                        this.$router.push({
                            name: 'nwgncy.product.configurator.detail',
                            params: {id: result[0].id}
                        });
                        this.isLoading = false;
                        return;
                    }
                });

            Shopware.State.commit('context/resetLanguageToDefault');
            this.productConfigurator = this.productConfiguratorRepository.create();

            this.isLoading = false;
        },

        loadEntityData() {
            this.isLoading = true;

            this.productConfiguratorRepository.get(this.prodId, Shopware.Context.api, this.productConfiguratorCriteria)
                .then((result) => {

                    this.productConfigurator = result;
                    var productConfiguratorCoating = this.productConfiguratorCoatingRepository.create(Shopware.Context.api);
                    var productConfiguratorDimension = this.productConfiguratorDimensionRepository.create(Shopware.Context.api);
                    var productConfiguratorAccessories = this.productConfiguratorAccessoriesRepository.create(Shopware.Context.api);

                    if (this.productConfigurator.productConfiguratorCoatings.length === 0) {
                        this.productConfigurator.productConfiguratorCoatings.add(productConfiguratorCoating);
                    }
                    if (this.productConfigurator.productConfiguratorDimensions.length === 0) {
                        this.productConfigurator.productConfiguratorDimensions.add(productConfiguratorDimension);
                    }
                    if (this.productConfigurator.productConfiguratorAccessoriess.length === 0) {
                        this.productConfigurator.productConfiguratorAccessoriess.add(productConfiguratorAccessories);
                    }
                    this.isLoading = false;
                });
        },

        onAddButton(buttonId = null) {
            var productConfiguratorFormsa = this.productConfiguratorFormsRepository.create(Shopware.Context.api);
            this.productConfigurator.productConfiguratorForms.add(productConfiguratorFormsa);
        },

        onAddMaterial(buttonId = null) {
            var productConfiguratorMaterial = this.productConfiguratorMaterialRepository.create(Shopware.Context.api);
            this.productConfigurator.productConfiguratorMaterials.add(productConfiguratorMaterial);
        },

        onAddClosure(buttonId = null) {
            var productConfiguratorLock = this.productConfiguratorLockRepository.create(Shopware.Context.api);
            this.productConfigurator.productConfiguratorLocks.add(productConfiguratorLock);
        },


        onUnlinkLogo(e, productConfiguratorDimensions) {
            if (productConfiguratorDimensions) {
                productConfiguratorDimensions.formMediaId = null;
            }
        },

        onUnlinkLogoTwoDesignType(e, designType) {
            if (designType) {
                designType.materialMediaId = null;
            }
        },

        onUnlinkLogoDimensions(e, dimensions) {
            if (dimensions[0]) {
                dimensions[0].dimensionMediaId = null;
            }
        },

        onUnlinkLogoLock(e, lock) {
            if (lock) {
                lock.lockMediaId = null;
            }
        },

        onUnlinkLogoAccessoriess(e, accessoriess) {
            if (accessoriess[0]) {
                accessoriess[0].accessoriesMediaId = null;
            }
        },

        previewSource(productConfiguratorForm) {
            if (productConfiguratorForm && productConfiguratorForm.formMediaId) {
                return productConfiguratorForm.formMediaId;
            }
            return null
        },

        previewSourceTwoDesignType(designType) {
            if (designType && designType.materialMediaId) {
                return designType.materialMediaId;
            }
            return null
        },

        previewSourceDimensions(dimensions) {
            if (dimensions[0] && dimensions[0].dimensionMediaId) {
                return dimensions[0].dimensionMediaId;
            }
            return null
        },

        previewSourceLock(lock) {
            if (lock && lock.lockMediaId) {
                return lock.lockMediaId;
            }
            return null
        },

        previewSourceAccessoriess(accessoriess) {
            if (accessoriess[0] && accessoriess[0].accessoriesMediaId) {
                return accessoriess[0].accessoriesMediaId;
            }
            return null
        },

        onImageUpload({targetId}, productConfiguratorForm) {
            productConfiguratorForm.formMediaId = targetId;
        },

        onImageUploadTwoDesignType({targetId}, designType) {
            designType.materialMediaId = targetId;
        },

        onImageUploadDimensions({targetId}, dimensions) {
            dimensions[0].dimensionMediaId = targetId;
        },

        onImageUploadLock({targetId}, lock) {
            lock.lockMediaId = targetId;
        },

        onImageUploadAccessoriess({targetId}, accessoriess) {
            accessoriess[0].accessoriesMediaId = targetId;
        },

        onMediaSelectionChange(mediaEntity, productConfiguratorForm) {
            if (productConfiguratorForm) {
                if (mediaEntity[0].id) {
                    productConfiguratorForm.formMediaId = mediaEntity[0].id;
                }
            }
        },

        onMediaSelectionChangeTwoDesignType(mediaEntity, designType) {
            if (designType) {
                if (mediaEntity[0].id) {
                    designType.materialMediaId = mediaEntity[0].id;
                }
            }
        },

        onMediaSelectionChangeDimensions(mediaEntity, dimensions) {
            if (dimensions) {
                if (mediaEntity[0].id) {
                    dimensions[0].dimensionMediaId = mediaEntity[0].id;
                }
            }
        },

        onMediaSelectionChangeLock(mediaEntity, lock) {
            if (lock) {
                if (mediaEntity[0].id) {
                    lock.lockMediaId = mediaEntity[0].id;
                }
            }
        },

        onMediaSelectionChangeAccessoriess(mediaEntity, accessoriess) {
            if (accessoriess) {
                if (mediaEntity[0].id) {
                    accessoriess[0].accessoriesMediaId = mediaEntity[0].id;
                }
            }
        },

        removeConfiguratorForms(e, productConfiguratorForm, index) {

            // this.productConfigurator.productConfiguratorForms.remove(productConfiguratorForm.id)
            // this.$delete(this.element.config.bubbles.value, index);
            // this.$delete(this.element.data, index);

        },

        onOpenMediaModal() {
            this.showMediaModal = true;
        },

        saveFinish() {
            this.processSuccess = false;
        },
        onClickSave() {
            this.isLoading = true;

            this.productConfiguratorRepository
                .save(this.productConfigurator, Shopware.Context.api)
                .then(() => {
                    this.isSaveSuccessful = true;
                    this.isLoading = false;
                    if (this.prodId === null) {
                        this.$router.push({
                            name: 'nwgncy.product.configurator.detail',
                            params: {id: this.productConfigurator.id}
                        });
                        return;
                    }

                    this.loadEntityData();
                }).catch((e) => {
                this.isLoading = false;
            });
        },
    }
};
