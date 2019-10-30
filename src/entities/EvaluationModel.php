<?php


class EvaluationModel
{
    # TODO prevenir mahamadi ajout de evaluation_model_number
    private $evaluation_model_number ='';
    private $evaluation_model_name ='';
    private $evaluation_model_status ='';

    /**
     * EvaluationModel constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getEvaluationModelNumber()
    {
        return $this->evaluation_model_number;
    }

    /**
     * @param string $evaluation_model_number
     */
    public function setEvaluationModelNumber($evaluation_model_number)
    {
        $this->evaluation_model_number = $evaluation_model_number;
    }

    /**
     * @return string
     */
    public function getEvaluationModelName()
    {
        return $this->evaluation_model_name;
    }

    /**
     * @param string $evaluation_model_name
     */
    public function setEvaluationModelName($evaluation_model_name)
    {
        $this->evaluation_model_name = $evaluation_model_name;
    }

    /**
     * @return string
     */
    public function getEvaluationModelStatus()
    {
        return $this->evaluation_model_status;
    }

    /**
     * @param string $evaluation_model_status
     */
    public function setEvaluationModelStatus($evaluation_model_status)
    {
        $this->evaluation_model_status = $evaluation_model_status;
    }


}