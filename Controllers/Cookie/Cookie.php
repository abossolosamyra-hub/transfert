<?php
namespace Controllers\Cookie;

/**
 * Create a cookie that stores the user id for 1 day.
 *
 * @param int|string $userId
 * @return bool True on success, false on failure
 */
function setUserIdCookie($userId): bool
{
    if (empty($userId)) {
        return false;
    }

    $value = (string) $userId;
    $expiry = time() + 24 * 60 * 60; // 1 day

    // Secure flag when using HTTPS
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

    // Use options array (PHP 7.3+)
    return setcookie(
        'user_id',
        $value,
        [
            'expires'  => $expiry,
            'path'     => '/',
            'secure'   => $secure,
            'httponly' => true,
            'samesite' => 'Lax'
        ]
    );
}