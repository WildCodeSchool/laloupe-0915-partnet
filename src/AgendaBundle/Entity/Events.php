<?php

namespace AgendaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
/**
 * Events
 */
class Events
{

    protected $type = 'Evènement';

    public function getType(){
        return $this->type;
    }



    public function isDateValid(ExecutionContextInterface $context)
    {
        if ($this->end->getTimestamp() <= $this->start->getTimestamp()) {
            $context->buildViolation('La date de fin ne peut être avant la date de début d\'évènement')
                ->atPath('end')
                ->addViolation();
        }
    }

    // GENERATED CODE //

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var integer
     */
    private $idUser;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Events
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Events
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Events
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Events
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Events
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
    /**
     * @var string
     */
    private $backgroundColor;


    /**
     * Set backgroundColor
     *
     * @param string $backgroundColor
     *
     * @return Events
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get backgroundColor
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    /**
     * @var boolean
     */
    private $fil_actu;


    /**
     * Set filActu
     *
     * @param boolean $filActu
     *
     * @return Events
     */
    public function setFilActu($filActu)
    {
        $this->fil_actu = $filActu;

        return $this;
    }

    /**
     * Get filActu
     *
     * @return boolean
     */
    public function getFilActu()
    {
        return $this->fil_actu;
    }

    /**
     * @var \DateTime
     */
    private $dateAjout;


    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Events
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }
    /**
     * @var string
     */
    private $resume;


    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Events
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    public function __construct(){
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
