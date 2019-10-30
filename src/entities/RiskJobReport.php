<?php


class RiskJobReport
{
    private $risk_job_creation_date ='';
    #TODO prevenir mahamdi d'ajouter unique
    private $risk_job_name ='';
    private $risk_job_number ='';

    /**
     * RiskJobReport constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getRiskJobCreationDate()
    {
        return $this->risk_job_creation_date;
    }

    /**
     * @param string $risk_job_creation_date
     */
    public function setRiskJobCreationDate($risk_job_creation_date)
    {
        $this->risk_job_creation_date = $risk_job_creation_date;
    }

    /**
     * @return string
     */
    public function getRiskJobName()
    {
        return $this->risk_job_name;
    }

    /**
     * @param string $risk_job_name
     */
    public function setRiskJobName($risk_job_name)
    {
        $this->risk_job_name = $risk_job_name;
    }

    /**
     * @return string
     */
    public function getRiskJobNumber()
    {
        return $this->risk_job_number;
    }

    /**
     * @param string $risk_job_number
     */
    public function setRiskJobNumber($risk_job_number)
    {
        $this->risk_job_number = $risk_job_number;
    }


}