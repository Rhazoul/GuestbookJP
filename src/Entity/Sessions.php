<?php

namespace App\Entity;

use App\Repository\SessionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsRepository::class)]
class Sessions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $sess_id = null;

    #[ORM\Column(length: 255)]
    private ?string $sess_data = null;

    #[ORM\Column]
    private ?int $sess_lifetime = null;

    #[ORM\Column]
    private ?int $sess_time = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSessId(): ?string
    {
        return $this->sess_id;
    }

    public function setSessId(string $sess_id): self
    {
        $this->sess_id = $sess_id;

        return $this;
    }

    public function getSessData(): ?string
    {
        return $this->sess_data;
    }

    public function setSessData(string $sess_data): self
    {
        $this->sess_data = $sess_data;

        return $this;
    }

    public function getSessLifetime(): ?int
    {
        return $this->sess_lifetime;
    }

    public function setSessLifetime(int $sess_lifetime): self
    {
        $this->sess_lifetime = $sess_lifetime;

        return $this;
    }

    public function getSessTime(): ?int
    {
        return $this->sess_time;
    }

    public function setSessTime(int $sess_time): self
    {
        $this->sess_time = $sess_time;

        return $this;
    }
}
