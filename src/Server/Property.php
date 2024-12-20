<?php

/*
 * This file is part of the EasyDeploy project.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EasyCorp\Bundle\EasyDeployBundle\Server;

/**
 * It defines the names of the reserved server properties to avoid using "magic
 * strings" in the application. It's common to define PHP constants
 * in uppercase, but these are in snake_case because of how properties are used.
 * Properties can be included in commands using a special syntax
 * (e.g. {{ property-name }}). Using uppercase would create ugly commands
 * (e.g. 'cd {{ BIN_DIR }}' instead of 'cd {{ bind_dir }}').
 */
final class Property
{
    public const bin_dir = 'bin_dir';
    public const config_dir = 'config_dir';
    public const console_bin = 'console_bin';
    public const cache_dir = 'cache_dir';
    public const deploy_dir = 'deploy_dir';
    public const log_dir = 'log_dir';
    public const project_dir = 'project_dir';
    public const src_dir = 'src_dir';
    public const templates_dir = 'templates_dir';
    public const use_ssh_agent_forwarding = 'use_ssh_agent_forwarding';
    public const web_dir = 'web_dir';
}
