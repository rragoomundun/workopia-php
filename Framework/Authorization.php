<?php

namespace Framework;

use Framework\Session;

class Authorization
{
  /**
   * Check if current logged in user owns a resource
   * 
   * @param int $resourceId
   * @return bool
   */
  public static function isOwner($resourceId)
  {
    $sessionUser = Session::get('user');

    if ($sessionUser !== NULL && isset($sessionUser['id'])) {
      $sessionUserId = (int)$sessionUser['id'];
      return $sessionUserId === $resourceId;
    }

    return false;
  }
}
