<?php

/*
 * This file is part of the EasyDeploy project.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EasyCorp\Bundle\EasyDeployBundle\Requirement;

use EasyCorp\Bundle\EasyDeployBundle\Task\Task;
use Exception;

class AllowsLoginViaSsh extends AbstractRequirement
{
    public function getMessage(): string
    {
        return '<ok>[OK]</> The server allows to login via SSH from the local machine';
    }

    /**
     * @throws Exception
     */
    public function getChecker(): Task
    {
        $shellCommand = sprintf('echo %s', random_int(0, mt_getrandmax()));

        return new Task($this->getServers(), $shellCommand);
    }
}
