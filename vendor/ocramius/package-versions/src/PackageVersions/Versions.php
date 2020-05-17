<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'api-platform/api-pack' => 'v1.2.2@ca7ca22f30bcfcdb2493ec9e8b7b5dba1271608a',
  'api-platform/core' => 'v2.5.5@fa9d8cac13a9a232eff738c6818499b07304ba21',
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.13.0@308728eae8d90412d850c155d40b1cfbede549da',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.0.8@b0e0deb6e700438401ede433a15a6372d2285202',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.1@4111f6853aea6f28b2b1dcfdde83d12dd3d5e6e3',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'lexik/jwt-authentication-bundle' => 'v2.6.5@448551fc08c6cff37aad9d8f27f6b9615cd28966',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.0.1@9683e6d30d000ef998919261329d825de7c53499',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'symfony/asset' => 'v4.4.8@fc8eff5841b549fbd66f89e1fd7cfb6a823ee512',
  'symfony/cache' => 'v4.4.8@ba0aa1738d04df338c0fabdbecf9cf5fddcdb63f',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v4.4.8@8ba41fe053683e1e6e3f6fa21f07ea5c4dd9e4c0',
  'symfony/console' => 'v4.4.8@10bb3ee3c97308869d53b3e3d03f6ac23ff985f7',
  'symfony/debug' => 'v4.4.8@346636d2cae417992ecfd761979b2ab98b339a45',
  'symfony/dependency-injection' => 'v4.4.8@9d0c2807962f7f12264ab459f48fb541dbd386bd',
  'symfony/doctrine-bridge' => 'v4.4.8@642cb1000331b8dc5568587f60aeb299070f9a55',
  'symfony/dotenv' => 'v4.4.8@a78e698cfb8aca8ef6814639eb5ffc17180a4326',
  'symfony/error-handler' => 'v4.4.8@7e9828fc98aa1cf27b422fe478a84f5b0abb7358',
  'symfony/event-dispatcher' => 'v4.4.8@abc8e3618bfdb55e44c8c6a00abd333f831bbfed',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.8@38010d8d1eb425b74f25b87c366c4d97e4b06a89',
  'symfony/filesystem' => 'v4.4.8@a3ebf3bfd8a98a147c010a568add5a8aa4edea0f',
  'symfony/finder' => 'v4.4.8@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.6.3@89999fdaad52cab14637709f2d2ce25835a051e6',
  'symfony/framework-bundle' => 'v4.4.8@fdacdf191a71aef94e05b64319868f4d06fe509c',
  'symfony/http-foundation' => 'v4.4.8@ec5bd254c223786f5fa2bb49a1e705c1b8e7cee2',
  'symfony/http-kernel' => 'v4.4.8@1799a6c01f0db5851f399151abdb5d6393fec277',
  'symfony/inflector' => 'v4.4.8@53cfa47fe9142f39b5605df67bada3893dd4f46c',
  'symfony/maker-bundle' => 'v1.18.0@b38c75be880b152ab55cef6cd52bf882d2b6518e',
  'symfony/mime' => 'v4.4.8@7a583ffb6c7dd5aabb5db920817a3cc39261c517',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/process' => 'v4.4.8@4b6a9a4013baa65d409153cbb5a895bf093dc7f4',
  'symfony/property-access' => 'v4.4.8@f6a51bd76a3a5c36c57221a4f491b9cf02663672',
  'symfony/property-info' => 'v4.4.8@ab5bb41dee66b4f7b4e0f615772b07d8f466e218',
  'symfony/routing' => 'v4.4.8@67b4e1f99c050cbc310b8f3d0dbdc4b0212c052c',
  'symfony/security-bundle' => 'v4.4.8@dd1641ab03f2dd62e7aa0de8efd80cee20d585ff',
  'symfony/security-core' => 'v4.4.8@fc84e9481e5bd9d80f70c0d8151601211377a5dc',
  'symfony/security-csrf' => 'v4.4.8@286a71ff176e1b0dd071f0e73dcec0970a56634b',
  'symfony/security-guard' => 'v4.4.8@d2ba618ed2a52f37dd74fb2c52a14388beddd5fc',
  'symfony/security-http' => 'v4.4.8@055a4f4fe58ab19515fa573919bf7ebd114f4aa7',
  'symfony/serializer' => 'v4.4.8@067b6a064ffc53b48d3854c7b408b1ea26017a50',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v4.4.8@d64035d0d6b3dbeed3a6839e3833779aaecf3513',
  'symfony/twig-bundle' => 'v4.4.8@79046e5189c5f4da923f395ccc11db930953c990',
  'symfony/validator' => 'v4.4.8@1780dff34d756f924ed7bb4f1cd94a7f9685eb69',
  'symfony/var-dumper' => 'v4.4.8@c587e04ce5d1aa62d534a038f574d9a709e814cf',
  'symfony/var-exporter' => 'v4.4.8@6e95bdca4a4604da6c148729972d4b627a034b13',
  'symfony/web-link' => 'v4.4.8@9ec692b342855335f3f4e77753ad71f85c6038f8',
  'symfony/web-server-bundle' => 'v4.4.8@a7fc347f104cf763c7bae568902223e5f918af9e',
  'symfony/yaml' => 'v4.4.8@b385dce1c0e9f839b384af90188638819433e252',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'paragonie/random_compat' => '2.*@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
  'symfony/polyfill-ctype' => '*@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
  'symfony/polyfill-iconv' => '*@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
  'symfony/polyfill-php71' => '*@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
  'symfony/polyfill-php70' => '*@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
  'symfony/polyfill-php56' => '*@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
  '__root__' => 'dev-dev@64c3475e143d50719c763bfd7101ffb5e15c1cc5',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
