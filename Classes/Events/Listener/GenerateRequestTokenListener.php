<?php

declare(strict_types = 1);

/*
 * This file is part of the OAuth2 Client extension for TYPO3
 * - (c) 2021 waldhacker UG (haftungsbeschränkt)
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Waldhacker\Oauth2Client\Events\Listener;

use TYPO3\CMS\Core\Authentication\Event\BeforeRequestTokenProcessedEvent;

class GenerateRequestTokenListener
{

    public function __invoke(BeforeRequestTokenProcessedEvent $event): void
    {
	    $serverRequest = $event->getRequest();
	    // check time of request within 5 sec 
	    // then:
	
	    $requestToken = RequestToken::create('core/user-auth/be');
	    // event - setToken

    }
}
