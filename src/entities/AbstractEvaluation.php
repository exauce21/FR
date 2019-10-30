<?php


class AbstractEvaluation
{
    # TODO prevenir mahamadi ajour de evaluation number pour identifiaction
    private $evaluation_number ='';
    private $evaluation_name ='';
    private $evaluation_date ='';
    private $evaluation_type ='';
    private $evaluation_validation_status ='';
    # id_user_validating
    private $evaluation_model_id ='';
    private $site_id ='';

    private $risk_job_report ='';

    /**
     * AbstractEvaluation constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function getEvaluationNumber()
    {
        return $this->evaluation_number;
    }

    /**
     * @param string $evaluation_number
     */
    public function setEvaluationNumber($evaluation_number)
    {
        $this->evaluation_number = $evaluation_number;
    }

    /**
     * @return string
     */
    public function getEvaluationName()
    {
        return $this->evaluation_name;
    }

    /**
     * @param string $evaluation_name
     */
    public function setEvaluationName($evaluation_name)
    {
        $this->evaluation_name = $evaluation_name;
    }

    /**
     * @return string
     */
    public function getEvaluationDate()
    {
        return $this->evaluation_date;
    }

    /**
     * @param string $evaluation_date
     */
    public function setEvaluationDate($evaluation_date)
    {
        $this->evaluation_date = $evaluation_date;
    }

    /**
     * @return string
     */
    public function getEvaluationType()
    {
        return $this->evaluation_type;
    }

    /**
     * @param string $evaluation_type
     */
    public function setEvaluationType($evaluation_type)
    {
        $this->evaluation_type = $evaluation_type;
    }

    /**
     * @return string
     */
    public function getEvaluationValidationStatus()
    {
        return $this->evaluation_validation_status;
    }

    /**
     * @param string $evaluation_validation_status
     */
    public function setEvaluationValidationStatus($evaluation_validation_status)
    {
        $this->evaluation_validation_status = $evaluation_validation_status;
    }

    /**
     * @return string
     */
    public function getEvaluationModelId()
    {
        return $this->evaluation_model_id;
    }

    /**
     * @param string $evaluation_model_id
     */
    public function setEvaluationModelId($evaluation_model_id)
    {
        $this->evaluation_model_id = $evaluation_model_id;
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->site_id;
    }

    /**
     * @param string $site_id
     */
    public function setSiteId($site_id)
    {
        $this->site_id = $site_id;
    }

    /**
     * @return string
     */
    public function getRiskJobReport()
    {
        return $this->risk_job_report;
    }

    /**
     * @param string $risk_job_report
     */
    public function setRiskJobReport($risk_job_report)
    {
        $this->risk_job_report = $risk_job_report;
    }


}