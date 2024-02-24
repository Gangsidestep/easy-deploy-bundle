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

class CommandExists extends AbstractRequirement
{
    public function __construct(array $servers, private readonly string $commandName)
    {
        parent::__construct($servers);
    }

    public function getMessage(): string
    {
        return sprintf('<ok>[OK]</> <command>%s</> command exists', $this->commandName);
    }

    public function getChecker(): Task
    {
        // todo check for other routes and/or use Key not value
        if($this->commandName=="/usr/bin/composer")
        {
            $shellCommand = sprintf('%s %s', 'which', $this->commandName);
        }
        else
        {
            $shellCommand = sprintf('%s %s', $this->isWindows() ? 'where' : 'which', $this->commandName);
        }

        return new Task($this->getServers(), $shellCommand);
    }

    private function isWindows(): bool
    {
        return '\\' === DIRECTORY_SEPARATOR;
    }
}
