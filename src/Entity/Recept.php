<?php

namespace App\Entity;

use App\Repository\ReceptRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReceptRepository::class)
 */
class Recept
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
    private $naam;

    /**
     * @ORM\Column(type="float")
     */
    private $prijs_per_liter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bereidingswijze;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getPrijsPerLiter(): ?float
    {
        return $this->prijs_per_liter;
    }

    public function setPrijsPerLiter(float $prijs_per_liter): self
    {
        $this->prijs_per_liter = $prijs_per_liter;

        return $this;
    }

    public function getBereidingswijze(): ?string
    {
        return $this->bereidingswijze;
    }

    public function setBereidingswijze(string $bereidingswijze): self
    {
        $this->bereidingswijze = $bereidingswijze;

        return $this;
    }
}
