<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\Aggregate\ProductConfiguratorFormTranslation\ProductConfiguratorFormTranslationCollection;
use Shopware\Core\Content\Media\MediaEntity;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorEntity;

class ProductConfiguratorFormEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $tooltip;

    /**
     * @var float|null
     */
    protected $height;

    /**
     * @var float|null
     */
    protected $width;

    /**
     * @var float|null
     */
    protected $depth;

    /**
     * @var string
     */
    protected $prodConfId;

    /**
     * @var string|null
     */
    protected $formMediaId;

    /**
     * @var ProductConfiguratorFormTranslationCollection
     */
    protected $translations;

    /**
     * @var MediaEntity|null
     */
    protected $formMediaImage;

    /**
     * @var ProductConfiguratorEntity|null
     */
    protected $prodConf;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface|null
     */
    protected $updatedAt;

    /**
     * @var array|null
     */
    protected $translated;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): void
    {
        $this->tooltip = $tooltip;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): void
    {
        $this->height = $height;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): void
    {
        $this->width = $width;
    }

    public function getDepth(): ?float
    {
        return $this->depth;
    }

    public function setDepth(?float $depth): void
    {
        $this->depth = $depth;
    }

    public function getProdConfId(): string
    {
        return $this->prodConfId;
    }

    public function setProdConfId(string $prodConfId): void
    {
        $this->prodConfId = $prodConfId;
    }

    public function getFormMediaId(): ?string
    {
        return $this->formMediaId;
    }

    public function setFormMediaId(?string $formMediaId): void
    {
        $this->formMediaId = $formMediaId;
    }

    public function getTranslations(): ProductConfiguratorFormTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductConfiguratorFormTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getFormMediaImage(): ?MediaEntity
    {
        return $this->formMediaImage;
    }

    public function setFormMediaImage(?MediaEntity $formMediaImage): void
    {
        $this->formMediaImage = $formMediaImage;
    }

    public function getProdConf(): ?ProductConfiguratorEntity
    {
        return $this->prodConf;
    }

    public function setProdConf(?ProductConfiguratorEntity $prodConf): void
    {
        $this->prodConf = $prodConf;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getTranslated(): array
    {
        return $this->translated;
    }

    public function setTranslated(?array $translated): void
    {
        $this->translated = $translated;
    }
}