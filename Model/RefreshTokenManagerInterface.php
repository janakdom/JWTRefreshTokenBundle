<?php

/*
 * This file is part of the GesdinetJWTRefreshTokenBundle package.
 *
 * (c) Gesdinet <http://www.gesdinet.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gesdinet\JWTRefreshTokenBundle\Model;

/**
 * All changes to UserRefreshTokens should happen through this interface.
 */
interface RefreshTokenManagerInterface
{
    /**
     * Creates an empty user instance.
     *
     * @return RefreshTokenInterface
     */
    public function create();

    /**
     * @param string $refreshToken
     *
     * @return RefreshTokenInterface
     */
    public function get($refreshToken);

    /**
     * @param string $username
     *
     * @return RefreshTokenInterface
     */
    public function getLastFromUser($username);

    /**
     * @param RefreshTokenInterface $refreshToken
     */
    public function save(RefreshTokenInterface $refreshToken);

    /**
     * @param RefreshTokenInterface $refreshToken
     */
    public function delete(RefreshTokenInterface $refreshToken);

    /**
     */
    public function revokeAllInvalid();

    /**
     * Returns the user's fully qualified class name.
     *
     * @return string
     */
    public function getClass();
}
