<?php

namespace App\Entity;

use App\Repository\PatrimonioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatrimonioRepository::class)
 */
class Patrimonio
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
    private $nome;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $data_aquisicao;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valor_aquisicao;

    // public function __toString(): string
    // {
    //     return (string) $this->nome.' - VAI';
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDataAquisicao(): ?\DateTimeInterface
    {
        return $this->data_aquisicao;
    }

    public function setDataAquisicao(?\DateTimeInterface $data_aquisicao): self
    {
        $this->data_aquisicao = $data_aquisicao;

        return $this;
    }

    public function getValorAquisicao(): ?float
    {
        return $this->valor_aquisicao;
    }

    public function setValorAquisicao(?float $valor_aquisicao): self
    {
        $this->valor_aquisicao = $valor_aquisicao;

        return $this;
    }
}
