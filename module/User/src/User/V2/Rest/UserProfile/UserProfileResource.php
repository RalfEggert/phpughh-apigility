<?php
namespace User\V2\Rest\UserProfile;

use User\V2\Rest\UserProfile\Table\UserTable;
use User\V2\Rest\UserProfile\Table\WebsiteTable;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

/**
 * Class UserProfileResource
 *
 * @package User\V2\Rest\UserProfile\Resource
 */
class UserProfileResource extends AbstractResourceListener
{
    /**
     * @var UserTable
     */
    protected $userTable;

    /**
     * @var WebsiteTable
     */
    protected $websiteTable;

    /**
     * @param \User\V2\Rest\UserProfile\Table\UserTable $userTable
     */
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
    }

    /**
     * @return \User\V2\Rest\UserProfile\Table\UserTable
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * @param \User\V2\Rest\UserProfile\Table\WebsiteTable $websiteTable
     */
    public function setWebsiteTable($websiteTable)
    {
        $this->websiteTable = $websiteTable;
    }

    /**
     * @return \User\V2\Rest\UserProfile\Table\WebsiteTable
     */
    public function getWebsiteTable()
    {
        return $this->websiteTable;
    }

    /**
     * @param array $user
     *
     * @return array
     */
    protected function addContactsAndWebsites(array $user)
    {
        $id = $user['id'];

        $user['contacts'] = $this->getUserTable()->fetchContactsById($id);
        $user['websites'] = $this->getWebsiteTable()->fetchWebsitesById($id);

        return $user;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        return new ApiProblem(405, 'The POST method has not been defined');
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     *
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     *
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        $user = $this->getUserTable()->fetchUserById($id);

        if (!$user) {
            return new ApiProblem(404, 'User profile for id ' . $id . ' not found');
        }

        return $this->addContactsAndWebsites($user);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     *
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        $users = $this->getUserTable()->fetchUsers($params);

        if (!$users) {
            return new ApiProblem(404, 'No user profiles found');
        }

        foreach ($users as $key => $user) {
            $users[$key] = $this->addContactsAndWebsites($user);
        }

        return $users;
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     *
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
