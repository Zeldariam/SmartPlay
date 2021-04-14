<?php

namespace App\Entity;

use App\Repository\JouetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JouetRepository::class)
 */
class Jouet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_jouet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $des_jouet;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte_stock_jouet;

    /**
     * @ORM\Column(type="float")
     */
    private $PU_jouet;

    /**
     * @ORM\ManyToMany(targetEntity=Fournisseur::class)
     */
    private $code_four_jouet;

    public function __construct()
    {
        $this->code_four_jouet = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeJouet(): ?int
    {
        return $this->code_jouet;
    }

    public function setCodeJouet(int $code_jouet): self
    {
        $this->code_jouet = $code_jouet;

        return $this;
    }

    public function getDesJouet(): ?string
    {
        return $this->des_jouet;
    }

    public function setDesJouet(string $des_jouet): self
    {
        $this->des_jouet = $des_jouet;

        return $this;
    }

    public function getQteStockJouet(): ?int
    {
        return $this->qte_stock_jouet;
    }

    public function setQteStockJouet(int $qte_stock_jouet): self
    {
        $this->qte_stock_jouet = $qte_stock_jouet;

        return $this;
    }

    public function getPUJouet(): ?float
    {
        return $this->PU_jouet;
    }

    public function setPUJouet(float $PU_jouet): self
    {
        $this->PU_jouet = $PU_jouet;

        return $this;
    }

    /**
     * @return Collection|Fournisseur[]
     */
    public function getCodeFourJouet(): Collection
    {
        return $this->code_four_jouet;
    }

    public function addCodeFourJouet(Fournisseur $codeFourJouet): self
    {
        if (!$this->code_four_jouet->contains($codeFourJouet)) {
            $this->code_four_jouet[] = $codeFourJouet;
        }

        return $this;
    }

    public function removeCodeFourJouet(Fournisseur $codeFourJouet): self
    {
        $this->code_four_jouet->removeElement($codeFourJouet);

        return $this;
    }
}