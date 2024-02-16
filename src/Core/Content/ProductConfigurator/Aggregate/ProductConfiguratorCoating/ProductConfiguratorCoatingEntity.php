<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorCoating;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorEntity;

class ProductConfiguratorCoatingEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var bool|null
     */
    protected $withoutCoating;

    /**
     * @var bool|null
     */
    protected $powderCoating;

    /**
     * @var bool|null
     */
    protected $wetPainting;

    /**
     * @var string
     */
    protected $prodConfId;

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

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getWithoutCoating(): ?bool
    {
        return $this->withoutCoating;
    }

    public function setWithoutCoating(?bool $withoutCoating): void
    {
        $this->withoutCoating = $withoutCoating;
    }

    public function getPowderCoating(): ?bool
    {
        return $this->powderCoating;
    }

    public function setPowderCoating(?bool $powderCoating): void
    {
        $this->powderCoating = $powderCoating;
    }

    public function getWetPainting(): ?bool
    {
        return $this->wetPainting;
    }

    public function setWetPainting(?bool $wetPainting): void
    {
        $this->wetPainting = $wetPainting;
    }

    public function getProdConfId(): string
    {
        return $this->prodConfId;
    }

    public function setProdConfId(string $prodConfId): void
    {
        $this->prodConfId = $prodConfId;
    }

    public function getProdConf(): ?ProductConfiguratorEntity
    {
        return $this->prodConf;
    }

    public function setProdConf(?ProductConfiguratorEntity $prodConf): void
    {
        $this->prodConf = $prodConf;
    }

    public function getCreatedAt(): \DateTimeInterface
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
}