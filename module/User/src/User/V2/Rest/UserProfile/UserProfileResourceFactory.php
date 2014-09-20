<?php
namespace User\V2\Rest\UserProfile;

/**
 * Class UserProfileResourceFactory
 *
 * @package User\V2\Rest\UserProfile\Resource
 */
class UserProfileResourceFactory
{
    /**
     * @param $services
     *
     * @return UserProfileResource
     */
    public function __invoke($services)
    {
        $userTable = $services->get(
            'User\\V2\\Rest\\UserProfile\\Table\\UserTable'
        );
        $websiteTable = $services->get(
            'User\\V2\\Rest\\UserProfile\\Table\\WebsiteTable'
        );

        $resource = new UserProfileResource();
        $resource->setUserTable($userTable);
        $resource->setWebsiteTable($websiteTable);

        return $resource;
    }
}
