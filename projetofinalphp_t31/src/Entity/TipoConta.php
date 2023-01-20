<?php

namespace App\Entity;

use App\Repository\TipoContaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoContaRepository::class)]
class TipoConta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 2, nullable: true)]
    private ?string $contaCorrente = "CC";

    #[ORM\Column(length: 2, nullable: true)]
    private ?string $contaPoupanca = "CP";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContaCorrente(): ?string
    {
        return $this->contaCorrente;
    }

    public function setContaCorrente(?string $contaCorrente): self
    {
        $this->contaCorrente = $contaCorrente;

        return $this;
    }

    public function getContaPoupanca(): ?string
    {
        return $this->contaPoupanca;
    }

    public function setContaPoupanca(?string $contaPoupanca): self
    {
        $this->contaPoupanca = $contaPoupanca;

        return $this;
    }
}
