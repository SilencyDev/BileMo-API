<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ApiResource(
 *  cacheHeaders={"max_age"=0, "shared_max_age"=3600, "vary"={"Authorization", "Accept-Language"}},
 *  normalizationContext={"groups"={"product:read"}},
 *  denormalizationContext={"groups"={"product:write"}},
 *  itemOperations={
 *      "get"={{"security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')"}},
 *      "put"={{"security"="is_granted('ROLE_ADMIN')"}},
 *      "delete"={{"security"="is_granted('ROLE_ADMIN')"}},
 *  },
 *  collectionOperations={
 *      "get"={{"security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')"}},
 *      "post"={{"security"="is_granted('ROLE_ADMIN')"}},
 *  },
 *  subresourceOperations={
 *      "api_clients_products_get_subresource"={
 *          "normalization_context"={
 *               "groups"={"api_clients_products_get_subresource"}
 *          },
 *          "security"="is_granted('ROLE_ADMIN')",
 *      }
 *  }   
 * )
 * @ApiFilter(
 *  SearchFilter::class, properties={"price": "exact", "brand":"exact"}
 * )
 * @UniqueEntity("name")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"product:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write", "api_clients_products_get_subresource"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write", "api_clients_products_get_subresource"})
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write", "api_clients_products_get_subresource"})
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write", "api_clients_products_get_subresource"})
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Client", mappedBy="products")
     * @Groups({"admin:read", "admin:write"})
     */
    private $clients;

    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getclients(): Collection
    {
        return $this->clients;
    }

    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients[] = $client;
            $client->addProduct($this);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if ($this->clients->contains($client)) {
            $this->clients->removeElement($client);
            $client->removeProduct($this);
        }

        return $this;
    }
}
