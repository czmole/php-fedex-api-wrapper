<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Two part authentication string used for the sender's identity
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Key
 * @property string $Password

 */
class WebAuthenticationCredential extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'WebAuthenticationCredential';

    /**
     * Identifying part of authentication credential. This value is provided by FedEx after registration
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->values['Key'] = $key;
        return $this;
    }

    /**
     * Secret part of authentication key. This value is provided by FedEx after registration.
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->values['Password'] = $password;
        return $this;
    }
}
