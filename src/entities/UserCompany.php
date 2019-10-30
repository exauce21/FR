<?php


class UserCompany
{
    private $user_hire_date;
    private $user_superior;
    private $user;
    private $company_manager;
    private $is_admin;

    /**
     * UserCompany constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUserHireDate()
    {
        return $this->user_hire_date;
    }

    /**
     * @param mixed $user_hire_date
     */
    public function setUserHireDate($user_hire_date)
    {
        $this->user_hire_date = $user_hire_date;
    }

    /**
     * @return mixed
     */
    public function getUserSuperior()
    {
        return $this->user_superior;
    }

    /**
     * @param mixed $user_superior
     */
    public function setUserSuperior($user_superior)
    {
        $this->user_superior = $user_superior;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCompanyManager()
    {
        return $this->company_manager;
    }

    /**
     * @param mixed $company_manager
     */
    public function setCompanyManager($company_manager)
    {
        $this->company_manager = $company_manager;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * @param mixed $is_admin
     */
    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;
    }


}