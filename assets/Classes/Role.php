<?php
require "dbConn.php";
class role{
    private $roleID;
    private $roleName;

    /**
     * @return mixed
     */
    public function getRoleID()
    {
        return $this->roleID;
    }

    /**
     * @return mixed
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param mixed $roleID
     */
    public function setRoleID($roleID)
    {
        $this->roleID = $roleID;
    }

    /**
     * @param mixed $roleName
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }
}

?>