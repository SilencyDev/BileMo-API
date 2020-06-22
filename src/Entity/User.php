<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ApiResource(
 *  cacheHeaders={"max_age"=0, "shared_max_age"=3600, "vary"={"Authorization", "Accept-Language"}},
 *  normalizationContext={"groups"={"user:read"}},
 *  denormalizationContext={"groups"={"user:write"}},
 *  itemOperations={
 *      "get"={{"security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')"}},
 *      "put"={
 *          "controller"="App\Controller\Api\UserPutController",
 *          "security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')",
 *      },
 *      "delete"={}, 
 *  },
 *  collectionOperations={
 *      "get"={
 *          "security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')"
 *      },
 *      "post"={
 *          "controller"="App\Controller\Api\UserCreateController",
 *          "security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')",
 *      },
 *  *    "api_clients_users_get_subresource"={
 *          "normalization_context"={
 *               "groups"={"api_clients_users_get_subresource"}
 *          }
 *      }
 *  }    
 * )
 * @UniqueEntity("email")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")'
     * @Groups({"user:read", "api_clients_users_get_subresource"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"user:read", "user:write", "api_clients_users_get_subresource"})
     * @Assert\Length(
     *     min = 3,
     *     max = 50
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email
     * @Groups({"user:read", "user:write", "api_clients_users_get_subresource"})
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     * @Groups({"user:read", "api_clients_users_get_subresource"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"user:read", "api_clients_users_get_subresource"})
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"user:read"})
     */
    private $client;

    public function __construct()
    {
        $this->createdAt = new \DateTime("now");
        $this->updatedAt = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
