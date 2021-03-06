<?php

namespace AndreasGlaser\DoctrineRql\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 *
 * @package AndreasGlaser\DoctrineRql\Entity
 * @author  Andreas Glaser
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    public $name;

    /**
     * @ORM\OneToMany(targetEntity="ProductPhoto", mappedBy="product")
     */
    public $photos;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }
}
