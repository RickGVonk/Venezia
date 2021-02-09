<?php

namespace App\Entity;

use App\Repository\BestellingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BestellingRepository::class)
 */
class Bestelling
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $klant;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefoon;

    /**
     * @ORM\Column(type="date")
     */
    private $afhaaldatum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlant(): ?string
    {
        return $this->klant;
    }

    public function setKlant(string $klant): self
    {
        $this->klant = $klant;

        return $this;
    }

    public function getTelefoon(): ?int
    {
        return $this->telefoon;
    }

    public function setTelefoon(int $telefoon): self
    {
        $this->telefoon = $telefoon;

        return $this;
    }

    public function getAfhaaldatum(): ?\DateTimeInterface
    {
        return $this->afhaaldatum;
    }

    public function setAfhaaldatum(\DateTimeInterface $afhaaldatum): self
    {
        $this->afhaaldatum = $afhaaldatum;

        return $this;
    }
}
