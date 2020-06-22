<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

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
 *  }
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
     * @Groups({"product:read", "product:write"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write"})
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Assert\NotBlank
     * @Groups({"product:read", "product:write"})
     */
    private $price;

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
}
