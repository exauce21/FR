<?php


class SubAdministrator extends AbstractUser {

    private $admin_manager;

    /**
     * SubAdministrator constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getAdminManager()
    {
        return $this->admin_manager;
    }



}