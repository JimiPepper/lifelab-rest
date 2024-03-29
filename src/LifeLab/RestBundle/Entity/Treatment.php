<?php

namespace LifeLab\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Treatment
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Treatment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency", type="string")
     */
    private $frequency;

    /**
     * @var integer
     *
     * @ORM\Column(name="units", type="integer")
     */
    private $units;

    /**
     * @ORM\ManyToOne(targetEntity="Medicine")
     * @ORM\JoinColumn(name="medicine_id", referencedColumnName="id", nullable=false)
     */
    private $medicine;

    /**
     * @ORM\ManyToOne(targetEntity="Prescription")
     * @ORM\JoinColumn(name="prescription_id", referencedColumnName="id", nullable=true)
     */
    private $prescription;
    
    /**
     * @ORM\ManyToOne(targetEntity="MedicalFile")
     * @ORM\JoinColumn(name="medical_file_id", referencedColumnName="id", nullable=false)
     */
    private $medicalFile;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Treatment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set frequency
     *
     * @param string $frequency
     * @return Treatment
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return string 
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set units
     *
     * @param integer $units
     * @return Treatment
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return integer 
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set medicine
     *
     * @param \LifeLab\RestBundle\Entity\Medicine $medicine
     * @return Treatment
     */
    public function setMedicine(\LifeLab\RestBundle\Entity\Medicine $medicine = null)
    {
        $this->medicine = $medicine;

        return $this;
    }

    /**
     * Get medicine
     *
     * @return \LifeLab\RestBundle\Entity\Medicine 
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * Set prescription
     *
     * @param \LifeLab\RestBundle\Entity\Prescription $prescription
     * @return Treatment
     */
    public function setPrescription(\LifeLab\RestBundle\Entity\Prescription $prescription = null)
    {
        $this->prescription = $prescription;

        return $this;
    }

    /**
     * Get prescription
     *
     * @return \LifeLab\RestBundle\Entity\Prescription 
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Set medicalFile
     *
     * @param \LifeLab\RestBundle\Entity\MedicalFile $medicalFile
     * @return Treatment
     */
    public function setMedicalFile(\LifeLab\RestBundle\Entity\MedicalFile $medicalFile)
    {
        $this->medicalFile = $medicalFile;

        return $this;
    }

    /**
     * Get medicalFile
     *
     * @return \LifeLab\RestBundle\Entity\MedicalFile 
     */
    public function getMedicalFile()
    {
        return $this->medicalFile;
    }
}
