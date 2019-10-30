<?php


class EvaluationTrash extends AbstractEvaluation {

    private $evaluation_delete_time ='';

    /**
     * EvaluationTrash constructor.
     * @param string $evaluation_delete_time
     */
    public function __construct($evaluation_delete_time)
    {
        $this->evaluation_delete_time = $evaluation_delete_time;
    }

    /**
     * @return string
     */
    public function getEvaluationDeleteTime()
    {
        return $this->evaluation_delete_time;
    }

    /**
     * @param string $evaluation_delete_time
     */
    public function setEvaluationDeleteTime($evaluation_delete_time)
    {
        $this->evaluation_delete_time = $evaluation_delete_time;
    }




}