<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * See also https://getcomposer.org/doc/07-runtime.md#installed-versions
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => '56f1dfc6d51b6f432a8ed71b34b42a6dd2bc7223',
    'name' => 'administrator/uitest_reporter',
  ),
  'versions' => 
  array (
    'administrator/uitest_reporter' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => '56f1dfc6d51b6f432a8ed71b34b42a6dd2bc7223',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => 'v1.2.7',
      'version' => '1.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f25c8aab83e0c3e976fd7d19875f198ccf2f7535',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => 'v1.5.4',
      'version' => '1.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '47cdc76ceb95cc591d9c79a36dc3794975b5d136',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6c1e4eef75f310ea1b3e30945e9f06e652128b8a',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => 'v2.5.3',
      'version' => '2.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '10f1f19651343f87573129ca970aef1a47a6f29e',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => 'v2.5.12',
      'version' => '2.5.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '7b9e911f9d8b30d43b96853dab26898c710d8f44',
    ),
    'doctrine/doctrine-bundle' => 
    array (
      'pretty_version' => '1.6.4',
      'version' => '1.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd40b0a7fb16658cda9def9786992b8df8a49be7',
    ),
    'doctrine/doctrine-cache-bundle' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '18c600a9b82f6454d2e81ca4957cdd56a1cf3504',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '90b2128806bfde671b6952ab8bea493942c1fdae',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.0.5',
      'version' => '1.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e884e78f9f0eb1329e445619e04456e64d8051d',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '83893c552fd2045dd78aef794c31e694c37c0b8c',
    ),
    'doctrine/orm' => 
    array (
      'pretty_version' => 'v2.4.8',
      'version' => '2.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '5aedac1e5c5caaeac14798822c70325dc242d467',
    ),
    'incenteev/composer-parameter-handler' => 
    array (
      'pretty_version' => 'v2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd7ce7f06136109e81d1cb9d57066c4d4a99cf1cc',
    ),
    'jdorn/sql-formatter' => 
    array (
      'pretty_version' => 'v1.2.17',
      'version' => '1.2.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '64990d96e0959dff8e059dfcdc1af130728d92bc',
    ),
    'jms/metadata' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5854ab1aa643623dc64adde718a8eec32b957a8',
    ),
    'jms/parser-lib' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c509473bc1b4866415627af0e1c6cc8ac97fa51d',
    ),
    'jms/serializer' => 
    array (
      'pretty_version' => '1.14.1',
      'version' => '1.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba908d278fff27ec01fb4349f372634ffcd697c0',
    ),
    'jms/serializer-bundle' => 
    array (
      'pretty_version' => '2.4.4',
      'version' => '2.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '92ee808c64c1c180775a0e57d00e3be0674668fb',
    ),
    'kriswallsmith/assetic' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e911c437dbdf006a8f62c2f59b15b2d69a5e0aa1',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e044bc4b34e91743943479f1be7a1d5eb93add0',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v1.4.2',
      'version' => '1.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '965cdeb01fdcab7653253aa81d40441d261f1e66',
    ),
    'phpcollection/phpcollection' => 
    array (
      'pretty_version' => '0.5.0',
      'version' => '0.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2bcff45c0da7c27991bbc1f90f47c4b7fb434a6',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'sensio/distribution-bundle' => 
    array (
      'pretty_version' => 'v4.0.38',
      'version' => '4.0.38.0',
      'aliases' => 
      array (
      ),
      'reference' => '95469374e703f01b8e760023ac4f2f64da6a1dd9',
    ),
    'sensio/framework-extra-bundle' => 
    array (
      'pretty_version' => 'v3.0.26',
      'version' => '3.0.26.0',
      'aliases' => 
      array (
      ),
      'reference' => '6d6cbe971554f0a2cc84965850481eb04a2a0059',
    ),
    'sensio/generator-bundle' => 
    array (
      'pretty_version' => 'v2.5.3',
      'version' => '2.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e50108c2133ee5c9c484555faed50c17a61221d3',
    ),
    'sensiolabs/security-checker' => 
    array (
      'pretty_version' => 'v3.0.7',
      'version' => '3.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '59a6a299e2f5612dc8692d40e84373703a5df1b5',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v5.4.8',
      'version' => '5.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a06dc570a0367850280eefd3f1dc2da45aef517',
    ),
    'symfony/asset' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/assetic-bundle' => 
    array (
      'pretty_version' => 'v2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0241b135ff64c6031048c6425cd833a8300da46b',
    ),
    'symfony/browser-kit' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/class-loader' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/css-selector' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/debug' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/debug-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/dependency-injection' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/doctrine-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/dom-crawler' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/event-dispatcher' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/finder' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/form' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/framework-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/http-kernel' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/intl' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/locale' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/monolog-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/monolog-bundle' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6f96c7dbb6b2ef70b307a1a6f897153cbca3da47',
    ),
    'symfony/options-resolver' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/phpunit-bridge' => 
    array (
      'pretty_version' => 'v2.8.21',
      'version' => '2.8.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '34bfa4fe0439440323aab0982a77246b6b6dfd83',
    ),
    'symfony/polyfill-apcu' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5d4474f447403c3348e37b70acc2b95475b7befa',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e79d363049d1c2128f133a2667e4f4190904f7f4',
    ),
    'symfony/process' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/property-access' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/proxy-manager-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/security' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/security-acl' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/security-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/security-core' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/security-csrf' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/security-http' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/serializer' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/swiftmailer-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/swiftmailer-bundle' => 
    array (
      'pretty_version' => 'v2.6.2',
      'version' => '2.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'deabc81120c2086571f7c4484ab785c5e1b84f75',
    ),
    'symfony/symfony' => 
    array (
      'pretty_version' => 'v2.7.29',
      'version' => '2.7.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '102f930e70f0975da1ba93b10be44c09c6ae0993',
    ),
    'symfony/templating' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/twig-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/twig-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/validator' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/web-profiler-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'symfony/yaml' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.7.29',
      ),
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v1.34.3',
      'version' => '1.34.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '451c6f4197e113e24c1c85bc3fc8c2d77adeff2e',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }

        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @deprecated Use getAllRawData() instead which returns all datasets for all autoloaders present in the process. getRawData only returns the first dataset loaded, which may not be what you expect.
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>}
     */
    public static function getRawData()
    {
        @trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

        return self::$installed;
    }

    /**
     * Returns the raw data of all installed.php which are currently loaded for custom implementations
     *
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>}>
     */
    public static function getAllRawData()
    {
        return self::getInstalled();
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>}>
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
