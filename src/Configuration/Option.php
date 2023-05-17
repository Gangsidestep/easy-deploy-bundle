<?php

/*
 * This file is part of the EasyDeploy project.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EasyCorp\Bundle\EasyDeployBundle\Configuration;

/**
 * It defines the names of the configuration options for all deployers to avoid
 * using "magic strings" in the application. It's common to define PHP constants
 * in uppercase, but these are in lowercase because of how deployers are config.
 * Configuration uses autocompletion based on methods named like the options
 * (e.g. ->binDir() configures the $bindDir option). Using uppercase would
 * create ugly method names (e.g. ->BIN_DIR()).
 */
final class Option
{
    public const binDir = 'binDir';
    public const cacheDir = 'cacheDir';
    public const composerInstallFlags = 'composerInstallFlags';
    public const composerOptimizeFlags = 'composerOptimizeFlags';
    public const configDir = 'configDir';
    public const consoleBinaryPath = 'consoleBinaryPath';
    public const context = 'context';
    public const controllersToRemove = 'controllersToRemove';
    public const deployDir = 'deployDir';
    public const dumpAsseticAssets = 'dumpAsseticAssets';
    public const installWebAssets = 'installWebAssets';
    public const keepReleases = 'keepReleases';
    public const logDir = 'logDir';
    public const permissionMethod = 'permissionMethod';
    public const permissionMode = 'permissionMode';
    public const permissionUser = 'permissionUser';
    public const permissionGroup = 'permissionGroup';
    public const remotePhpBinaryPath = 'remotePhpBinaryPath';
    public const remoteComposerBinaryPath = 'remoteComposerBinaryPath';
    public const repositoryBranch = 'repositoryBranch';
    public const repositoryUrl = 'repositoryUrl';
    public const resetOpCacheFor = 'resetOpCacheFor';
    public const servers = 'servers';
    public const sharedFiles = 'sharedFiles';
    public const sharedDirs = 'sharedDirs';
    public const srcDir = 'srcDir';
    public const symfonyEnvironment = 'symfonyEnvironment';
    public const templatesDir = 'templatesDir';
    public const updateRemoteComposerBinary = 'updateRemoteComposerBinary';
    public const useSshAgentForwarding = 'useSshAgentForwarding';
    public const warmupCache = 'warmupCache';
    public const webDir = 'webDir';
    public const writableDirs = 'writableDirs';
}
