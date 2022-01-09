<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=NoteRepository::class)
 */
class Note
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 0,
     *      max = 20,
     *      minMessage = "La Résultat de l'évaluation doit être supérieure ou égale à 0",
     *      maxMessage = "La Résultat de l'évaluation doit être inférieure ou égale à 20"
     * )
     */
    private $resultat;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champ matière est obligatoire")
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity=Eleve::class, inversedBy="notes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $eleve;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResultat(): ?float
    {
        return $this->resultat;
    }

    public function setResultat(float $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(string $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getEleve(): ?Eleve
    {
        return $this->eleve;
    }

    public function setEleve(?Eleve $eleve): self
    {
        $this->eleve = $eleve;

        return $this;
    }










}
