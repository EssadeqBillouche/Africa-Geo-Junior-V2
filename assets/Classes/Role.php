<?php
spl_autoload_register(function ($class) {
    require $class . '.php';
});
class role{
    private $roleID;
    private $roleName;

    public function getRoleID()
    {
        return $this->roleID;
    }

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


    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }
}

?>