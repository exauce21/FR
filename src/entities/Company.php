<?php


class Company
{
    private $company_name;
    private $company_logo;
    private $company_address;
    private $company_status;
    private $company_user_email;
    private $company_subadministrator_manager;
    private $company_created_date;

    /**
     * Company constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }

    /**
     * @return mixed
     */
    public function getCompanyLogo()
    {
        return $this->company_logo;
    }

    /**
     * @param mixed $company_logo
     */
    public function setCompanyLogo($company_logo)
    {
        $this->company_logo = $company_logo;
    }

    /**
     * @return mixed
     */
    public function getCompanyAddress()
    {
        return $this->company_address;
    }

    /**
     * @param mixed $company_address
     */
    public function setCompanyAddress($company_address)
    {
        $this->company_address = $company_address;
    }

    /**
     * @return mixed
     */
    public function getCompanyStatus()
    {
        return $this->company_status;
    }

    /**
     * @param mixed $company_status
     */
    public function setCompanyStatus($company_status)
    {
        $this->company_status = $company_status;
    }

    /**
     * @return mixed
     */
    public function getCompanyUserEmail()
    {
        return $this->company_user_email;
    }

    /**
     * @param mixed $company_user_email
     */
    public function setCompanyUserEmail($company_user_email)
    {
        $this->company_user_email = $company_user_email;
    }

    /**
     * @return mixed
     */
    public function getCompanySubadministratorManager()
    {
        return $this->company_subadministrator_manager;
    }

    /**
     * @param mixed $company_subadministrator_manager
     */
    public function setCompanySubadministratorManager($company_subadministrator_manager)
    {
        $this->company_subadministrator_manager = $company_subadministrator_manager;
    }

    /**
     * @return mixed
     */
    public function getCompanyCreatedDate()
    {
        return $this->company_created_date;
    }

    /**
     * @param mixed $company_created_date
     */
    public function setCompanyCreatedDate($company_created_date)
    {
        $this->company_created_date = $company_created_date;
    }


}