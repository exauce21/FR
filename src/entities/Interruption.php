<?php


class Interruption
{
    private $interruption_responsable ='';
    private $interruption_date ='';
    private $interruption_solution ='';
    private $interruption_cause ='';
    private $site ='';

    /**
     * Interruption constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getInterruptionResponsable()
    {
        return $this->interruption_responsable;
    }

    /**
     * @param string $interruption_responsable
     */
    public function setInterruptionResponsable($interruption_responsable)
    {
        $this->interruption_responsable = $interruption_responsable;
    }

    /**
     * @return string
     */
    public function getInterruptionDate()
    {
        return $this->interruption_date;
    }

    /**
     * @param string $interruption_date
     */
    public function setInterruptionDate($interruption_date)
    {
        $this->interruption_date = $interruption_date;
    }

    /**
     * @return string
     */
    public function getInterruptionSolution()
    {
        return $this->interruption_solution;
    }

    /**
     * @param string $interruption_solution
     */
    public function setInterruptionSolution($interruption_solution)
    {
        $this->interruption_solution = $interruption_solution;
    }

    /**
     * @return string
     */
    public function getInterruptionCause()
    {
        return $this->interruption_cause;
    }

    /**
     * @param string $interruption_cause
     */
    public function setInterruptionCause($interruption_cause)
    {
        $this->interruption_cause = $interruption_cause;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }


}