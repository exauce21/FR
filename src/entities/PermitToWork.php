<?php


class PermitToWork
{
    private $permit_creation_date ='';
    private $permit_validity ='';
    private $permit_status ='';
    private $company_name ='';
    private $permit_number ='';
    private $request_site ='';
    private $request_from ='';
    private $request_to ='';
    private $request_validity ='';
    private $request_by ='';
    private $request_executed_by ='';
    private $request_description ='';
    private $request_number_of_worker ='';
    private $request_supervised_by ='';
    private $preparation_prepare_by ='';
    private $preparation_prepare_by_function ='';
    private $preparation_by_date ='';
    private $preparation_discussed_with ='';
    private $preparation_supervised_by ='';
    private $preparation_supervised_by_company ='';
    private $preparation_supervised_by_date ='';
    private $preparation_site_survey ='';
    private $site ='';

    /**
     * PermitToWork constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getPermitCreationDate()
    {
        return $this->permit_creation_date;
    }

    /**
     * @param string $permit_creation_date
     */
    public function setPermitCreationDate($permit_creation_date)
    {
        $this->permit_creation_date = $permit_creation_date;
    }

    /**
     * @return string
     */
    public function getPermitValidity()
    {
        return $this->permit_validity;
    }

    /**
     * @param string $permit_validity
     */
    public function setPermitValidity($permit_validity)
    {
        $this->permit_validity = $permit_validity;
    }

    /**
     * @return string
     */
    public function getPermitStatus()
    {
        return $this->permit_status;
    }

    /**
     * @param string $permit_status
     */
    public function setPermitStatus($permit_status)
    {
        $this->permit_status = $permit_status;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param string $company_name
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }

    /**
     * @return string
     */
    public function getPermitNumber()
    {
        return $this->permit_number;
    }

    /**
     * @param string $permit_number
     */
    public function setPermitNumber($permit_number)
    {
        $this->permit_number = $permit_number;
    }

    /**
     * @return string
     */
    public function getRequestSite()
    {
        return $this->request_site;
    }

    /**
     * @param string $request_site
     */
    public function setRequestSite($request_site)
    {
        $this->request_site = $request_site;
    }

    /**
     * @return string
     */
    public function getRequestFrom()
    {
        return $this->request_from;
    }

    /**
     * @param string $request_from
     */
    public function setRequestFrom($request_from)
    {
        $this->request_from = $request_from;
    }

    /**
     * @return string
     */
    public function getRequestTo()
    {
        return $this->request_to;
    }

    /**
     * @param string $request_to
     */
    public function setRequestTo($request_to)
    {
        $this->request_to = $request_to;
    }

    /**
     * @return string
     */
    public function getRequestValidity()
    {
        return $this->request_validity;
    }

    /**
     * @param string $request_validity
     */
    public function setRequestValidity($request_validity)
    {
        $this->request_validity = $request_validity;
    }

    /**
     * @return string
     */
    public function getRequestBy()
    {
        return $this->request_by;
    }

    /**
     * @param string $request_by
     */
    public function setRequestBy($request_by)
    {
        $this->request_by = $request_by;
    }

    /**
     * @return string
     */
    public function getRequestExecutedBy()
    {
        return $this->request_executed_by;
    }

    /**
     * @param string $request_executed_by
     */
    public function setRequestExecutedBy($request_executed_by)
    {
        $this->request_executed_by = $request_executed_by;
    }

    /**
     * @return string
     */
    public function getRequestDescription()
    {
        return $this->request_description;
    }

    /**
     * @param string $request_description
     */
    public function setRequestDescription($request_description)
    {
        $this->request_description = $request_description;
    }

    /**
     * @return string
     */
    public function getRequestNumberOfWorker()
    {
        return $this->request_number_of_worker;
    }

    /**
     * @param string $request_number_of_worker
     */
    public function setRequestNumberOfWorker($request_number_of_worker)
    {
        $this->request_number_of_worker = $request_number_of_worker;
    }

    /**
     * @return string
     */
    public function getRequestSupervisedBy()
    {
        return $this->request_supervised_by;
    }

    /**
     * @param string $request_supervised_by
     */
    public function setRequestSupervisedBy($request_supervised_by)
    {
        $this->request_supervised_by = $request_supervised_by;
    }

    /**
     * @return string
     */
    public function getPreparationPrepareBy()
    {
        return $this->preparation_prepare_by;
    }

    /**
     * @param string $preparation_prepare_by
     */
    public function setPreparationPrepareBy($preparation_prepare_by)
    {
        $this->preparation_prepare_by = $preparation_prepare_by;
    }

    /**
     * @return string
     */
    public function getPreparationPrepareByFunction()
    {
        return $this->preparation_prepare_by_function;
    }

    /**
     * @param string $preparation_prepare_by_function
     */
    public function setPreparationPrepareByFunction($preparation_prepare_by_function)
    {
        $this->preparation_prepare_by_function = $preparation_prepare_by_function;
    }

    /**
     * @return string
     */
    public function getPreparationByDate()
    {
        return $this->preparation_by_date;
    }

    /**
     * @param string $preparation_by_date
     */
    public function setPreparationByDate($preparation_by_date)
    {
        $this->preparation_by_date = $preparation_by_date;
    }

    /**
     * @return string
     */
    public function getPreparationDiscussedWith()
    {
        return $this->preparation_discussed_with;
    }

    /**
     * @param string $preparation_discussed_with
     */
    public function setPreparationDiscussedWith($preparation_discussed_with)
    {
        $this->preparation_discussed_with = $preparation_discussed_with;
    }

    /**
     * @return string
     */
    public function getPreparationSupervisedBy()
    {
        return $this->preparation_supervised_by;
    }

    /**
     * @param string $preparation_supervised_by
     */
    public function setPreparationSupervisedBy($preparation_supervised_by)
    {
        $this->preparation_supervised_by = $preparation_supervised_by;
    }

    /**
     * @return string
     */
    public function getPreparationSupervisedByCompany()
    {
        return $this->preparation_supervised_by_company;
    }

    /**
     * @param string $preparation_supervised_by_company
     */
    public function setPreparationSupervisedByCompany($preparation_supervised_by_company)
    {
        $this->preparation_supervised_by_company = $preparation_supervised_by_company;
    }

    /**
     * @return string
     */
    public function getPreparationSupervisedByDate()
    {
        return $this->preparation_supervised_by_date;
    }

    /**
     * @param string $preparation_supervised_by_date
     */
    public function setPreparationSupervisedByDate($preparation_supervised_by_date)
    {
        $this->preparation_supervised_by_date = $preparation_supervised_by_date;
    }

    /**
     * @return string
     */
    public function getPreparationSiteSurvey()
    {
        return $this->preparation_site_survey;
    }

    /**
     * @param string $preparation_site_survey
     */
    public function setPreparationSiteSurvey($preparation_site_survey)
    {
        $this->preparation_site_survey = $preparation_site_survey;
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