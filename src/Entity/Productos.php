<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductosRepository::class)]
class Productos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private ?string $nombre_producto = null;
    private ?int $precio = null;
    private ?int $no_unidades = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre_producto(): ?string
    {
        return $this->nombre_producto;
    }

    public function getNo_unidades(): ?string
    {
        return $this->no_unidades;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }
}
