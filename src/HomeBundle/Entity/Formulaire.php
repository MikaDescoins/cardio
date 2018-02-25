<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaire
 *
 * @ORM\Table(name="formulaire")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\FormulaireRepository")
 */
class Formulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="HomeBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="inr", type="string", length=255)
     */
    private $inr;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="string", length=255)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="string", length=255)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="pam", type="string", length=255)
     */
    private $pam;

    /**
     * @var string
     *
     * @ORM\Column(name="pasyst", type="string", length=255)
     */
    private $pasyst;

    /**
     * @var string
     *
     * @ORM\Column(name="padiast", type="string", length=255)
     */
    private $padiast;

    /**
     * @var string
     *
     * @ORM\Column(name="trouble_vision", type="string", length=255)
     */
    private $troubleVision;

    /**
     * @var string
     *
     * @ORM\Column(name="sang_urines", type="string", length=255)
     */
    private $sangUrines;

    /**
     * @var string
     *
     * @ORM\Column(name="sang_selles", type="string", length=255)
     */
    private $sangSelles;

    /**
     * @var string
     *
     * @ORM\Column(name="selles_noires", type="string", length=255)
     */
    private $sellesNoires;

    /**
     * @var string
     *
     * @ORM\Column(name="essoufflement", type="string", length=255)
     */
    private $essoufflement;

    /**
     * @var string
     *
     * @ORM\Column(name="drv_ln_rouge", type="string", length=255)
     */
    private $drvLnRouge;

    /**
     * @var string
     *
     * @ORM\Column(name="drv_ln_douloureux", type="string", length=255)
     */
    private $drvLnDouloureux;

    /**
     * @var string
     *
     * @ORM\Column(name="drv_ln_ecoulement", type="string", length=255)
     */
    private $drvLnEcoulement;

    /**
     * @var string
     *
     * @ORM\Column(name="vad_flow", type="string", length=255)
     */
    private $vadFlow;

    /**
     * @var string
     *
     * @ORM\Column(name="vad_power", type="string", length=255)
     */
    private $vadPower;

    /**
     * @var string
     *
     * @ORM\Column(name="vad_alarmes_recentes", type="string", length=255)
     */
    private $vadAlarmesRecentes;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_accepted", type="string", length=255)
     */
    private $gpuAccepted;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \HomeBundle\Entity\User $user
     *
     * @return FormationPlanningInscription
     */
    public function setUser(\HomeBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \HomeBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set inr
     *
     * @param string $inr
     *
     * @return Formulaire
     */
    public function setInr($inr)
    {
        $this->inr = $inr;

        return $this;
    }

    /**
     * Get inr
     *
     * @return string
     */
    public function getInr()
    {
        return $this->inr;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     *
     * @return Formulaire
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return Formulaire
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set pam
     *
     * @param string $pam
     *
     * @return Formulaire
     */
    public function setPam($pam)
    {
        $this->pam = $pam;

        return $this;
    }

    /**
     * Get pam
     *
     * @return string
     */
    public function getPam()
    {
        return $this->pam;
    }

    /**
     * Set pasyst
     *
     * @param string $pasyst
     *
     * @return Formulaire
     */
    public function setPasyst($pasyst)
    {
        $this->pasyst = $pasyst;

        return $this;
    }

    /**
     * Get pasyst
     *
     * @return string
     */
    public function getPasyst()
    {
        return $this->pasyst;
    }

    /**
     * Set padiast
     *
     * @param string $padiast
     *
     * @return Formulaire
     */
    public function setPadiast($padiast)
    {
        $this->padiast = $padiast;

        return $this;
    }

    /**
     * Get padiast
     *
     * @return string
     */
    public function getPadiast()
    {
        return $this->padiast;
    }

    /**
     * Set troubleVision
     *
     * @param string $troubleVision
     *
     * @return Formulaire
     */
    public function setTroubleVision($troubleVision)
    {
        $this->troubleVision = $troubleVision;

        return $this;
    }

    /**
     * Get troubleVision
     *
     * @return string
     */
    public function getTroubleVision()
    {
        return $this->troubleVision;
    }

    /**
     * Set sangUrines
     *
     * @param string $sangUrines
     *
     * @return Formulaire
     */
    public function setSangUrines($sangUrines)
    {
        $this->sangUrines = $sangUrines;

        return $this;
    }

    /**
     * Get sangUrines
     *
     * @return string
     */
    public function getSangUrines()
    {
        return $this->sangUrines;
    }

    /**
     * Set sangSelles
     *
     * @param string $sangSelles
     *
     * @return Formulaire
     */
    public function setSangSelles($sangSelles)
    {
        $this->sangSelles = $sangSelles;

        return $this;
    }

    /**
     * Get sangSelles
     *
     * @return string
     */
    public function getSangSelles()
    {
        return $this->sangSelles;
    }

    /**
     * Set sellesNoires
     *
     * @param string $sellesNoires
     *
     * @return Formulaire
     */
    public function setSellesNoires($sellesNoires)
    {
        $this->sellesNoires = $sellesNoires;

        return $this;
    }

    /**
     * Get sellesNoires
     *
     * @return string
     */
    public function getSellesNoires()
    {
        return $this->sellesNoires;
    }

    /**
     * Set essoufflement
     *
     * @param string $essoufflement
     *
     * @return Formulaire
     */
    public function setEssoufflement($essoufflement)
    {
        $this->essoufflement = $essoufflement;

        return $this;
    }

    /**
     * Get essoufflement
     *
     * @return string
     */
    public function getEssoufflement()
    {
        return $this->essoufflement;
    }

    /**
     * Set drvLnRouge
     *
     * @param string $drvLnRouge
     *
     * @return Formulaire
     */
    public function setDrvLnRouge($drvLnRouge)
    {
        $this->drvLnRouge = $drvLnRouge;

        return $this;
    }

    /**
     * Get drvLnRouge
     *
     * @return string
     */
    public function getDrvLnRouge()
    {
        return $this->drvLnRouge;
    }

    /**
     * Set drvLnDouloureux
     *
     * @param string $drvLnDouloureux
     *
     * @return Formulaire
     */
    public function setDrvLnDouloureux($drvLnDouloureux)
    {
        $this->drvLnDouloureux = $drvLnDouloureux;

        return $this;
    }

    /**
     * Get drvLnDouloureux
     *
     * @return string
     */
    public function getDrvLnDouloureux()
    {
        return $this->drvLnDouloureux;
    }

    /**
     * Set drvLnEcoulement
     *
     * @param string $drvLnEcoulement
     *
     * @return Formulaire
     */
    public function setDrvLnEcoulement($drvLnEcoulement)
    {
        $this->drvLnEcoulement = $drvLnEcoulement;

        return $this;
    }

    /**
     * Get drvLnEcoulement
     *
     * @return string
     */
    public function getDrvLnEcoulement()
    {
        return $this->drvLnEcoulement;
    }

    /**
     * Set vadFlow
     *
     * @param string $vadFlow
     *
     * @return Formulaire
     */
    public function setVadFlow($vadFlow)
    {
        $this->vadFlow = $vadFlow;

        return $this;
    }

    /**
     * Get vadFlow
     *
     * @return string
     */
    public function getVadFlow()
    {
        return $this->vadFlow;
    }

    /**
     * Set vadPower
     *
     * @param string $vadPower
     *
     * @return Formulaire
     */
    public function setVadPower($vadPower)
    {
        $this->vadPower = $vadPower;

        return $this;
    }

    /**
     * Get vadPower
     *
     * @return string
     */
    public function getVadPower()
    {
        return $this->vadPower;
    }

    /**
     * Set vadAlarmesRecentes
     *
     * @param string $vadAlarmesRecentes
     *
     * @return Formulaire
     */
    public function setVadAlarmesRecentes($vadAlarmesRecentes)
    {
        $this->vadAlarmesRecentes = $vadAlarmesRecentes;

        return $this;
    }

    /**
     * Get vadAlarmesRecentes
     *
     * @return string
     */
    public function getVadAlarmesRecentes()
    {
        return $this->vadAlarmesRecentes;
    }

    /**
     * Set gpuAccepted
     *
     * @param string $gpuAccepted
     *
     * @return Formulaire
     */
    public function setGpuAccepted($gpuAccepted)
    {
        $this->gpuAccepted = $gpuAccepted;

        return $this;
    }

    /**
     * Get gpuAccepted
     *
     * @return string
     */
    public function getGpuAccepted()
    {
        return $this->gpuAccepted;
    }
}

