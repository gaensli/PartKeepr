<?php
namespace PartKeepr\AuthBundle\Exceptions;

use PartKeepr\CoreBundle\Exceptions\TranslatableException;

/**
 * Is thrown when the user has given wrong credentials.
 */
class UserPreferenceNotFoundException extends TranslatableException
{
    public function getMessageKey()
    {
        return "The requested user preference was not found";
    }
}
