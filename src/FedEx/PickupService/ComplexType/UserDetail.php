<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UserDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $UserId
 * @property string $Password
 * @property string $UniqueUserId

 */
class UserDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UserDetail';

    /**
     * Set UserId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->values['UserId'] = $userId;
        return $this;
    }

    /**
     * Set Password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->values['Password'] = $password;
        return $this;
    }

    /**
     * Set UniqueUserId
     *
     * @param string $uniqueUserId
     * @return $this
     */
    public function setUniqueUserId($uniqueUserId)
    {
        $this->values['UniqueUserId'] = $uniqueUserId;
        return $this;
    }
}
