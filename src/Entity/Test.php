<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Orm\Route;
use Symfony\Cmf\Component\Routing\RouteReferrersInterface;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test implements RouteReferrersInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name;

    #[ORM\ManyToMany(targetEntity: Route::class, cascade: ['persist', 'remove'])]
    private ArrayCollection $routes;

    public function __construct()
    {
        $this->routes = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRoutes(): ArrayCollection
    {
        return $this->routes;
    }

    public function setRoutes(ArrayCollection $routes): void
    {
        $this->routes = $routes;
    }

    public function addRoute($route): void
    {
        $this->routes[] = $route;
    }

    public function removeRoute($route): void
    {
        $this->routes->removeElement($route);
    }

}
