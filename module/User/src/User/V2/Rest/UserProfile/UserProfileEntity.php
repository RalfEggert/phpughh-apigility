<?php
namespace User\V2\Rest\UserProfile;

/**
 * Class UserProfileEntity
 *
 * @package User\V2\Rest\UserProfile\Entity
 */
class UserProfileEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var array
     */
    protected $contacts;

    /**
     * @var array
     */
    protected $websites;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param array $contacts
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param array $websites
     */
    public function setWebsites(array $websites)
    {
        $this->websites = $websites;
    }

    /**
     * @return array
     */
    public function getWebsites()
    {
        return $this->websites;
    }
}
