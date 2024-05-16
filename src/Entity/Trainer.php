<?php

namespace App\Entity;

use App\Repository\TrainerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainerRepository::class)]
class Trainer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    /**
     * @var Collection<int, Athlete>
     */
    #[ORM\OneToMany(targetEntity: Athlete::class, mappedBy: 'trainer')]
    private Collection $athletes;

    public function __construct()
    {
        $this->athletes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return Collection<int, Athlete>
     */
    public function getAthletes(): Collection
    {
        return $this->athletes;
    }

    public function addAthlete(Athlete $athlete): static
    {
        if (!$this->athletes->contains($athlete)) {
            $this->athletes->add($athlete);
            $athlete->setIdTrainer($this);
        }

        return $this;
    }

    public function removeAthlete(Athlete $athlete): static
    {
        if ($this->athletes->removeElement($athlete)) {
            // set the owning side to null (unless already changed)
            if ($athlete->getIdTrainer() === $this) {
                $athlete->setIdTrainer(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name . ' ' . $this->surname;
    }
}
