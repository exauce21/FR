<?php


class CreationDemand
{
    private $company_name;
    private $company_logo;
    private $company_address;
    private $user_email;
    private $user_first_name;
    private $user_last_name;
    private $user_phone_number;
    private $demand_created_date;
    private $demand_open;

    /**
     * CreationDemand constructor.
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
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * @param mixed $user_email
     */
    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }

    /**
     * @return mixed
     */
    public function getUserFirstName()
    {
        return $this->user_first_name;
    }

    /**
     * @param mixed $user_first_name
     */
    public function setUserFirstName($user_first_name)
    {
        $this->user_first_name = $user_first_name;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->user_last_name;
    }

    /**
     * @param mixed $user_last_name
     */
    public function setUserLastName($user_last_name)
    {
        $this->user_last_name = $user_last_name;
    }

    /**
     * @return mixed
     */
    public function getUserPhoneNumber()
    {
        return $this->user_phone_number;
    }

    /**
     * @param mixed $user_phone_number
     */
    public function setUserPhoneNumber($user_phone_number)
    {
        $this->user_phone_number = $user_phone_number;
    }

    /**
     * @return mixed
     */
    public function getDemandCreatedDate()
    {
        return $this->demand_created_date;
    }

    /**
     * @param mixed $demand_created_date
     */
    public function setDemandCreatedDate($demand_created_date)
    {
        $this->demand_created_date = $demand_created_date;
    }

    /**
     * @return mixed
     */
    public function getDemandOpen()
    {
        return $this->demand_open;
    }

    /**
     * @param mixed $demand_open
     */
    public function setDemandOpen($demand_open)
    {
        $this->demand_open = $demand_open;
    }


}