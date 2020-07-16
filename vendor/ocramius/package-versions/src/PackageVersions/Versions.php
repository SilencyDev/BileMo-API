<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

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
  'api-platform/core' => 'v2.5.6@d84282fd29cc16a4fac9be67fdd76ca247b94123',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.2@6902fafacb43333d9dc3d949c0a06048a31549ac',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'lcobucci/jwt' => '3.3.2@56f10808089e38623345e28af2f2d5e4eb579455',
  'lexik/jwt-authentication-bundle' => 'v2.7.0@1a110dbb8649e3029140a29f02f812d168008e8e',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.0.1@9683e6d30d000ef998919261329d825de7c53499',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'symfony/asset' => 'v5.1.0@2f07b5993f1607c1c489bac3e15a000c33668b4b',
  'symfony/cache' => 'v5.1.0@653b1d1cefffedb67ed1932db59c0bb344adf088',
  'symfony/cache-contracts' => 'v2.1.2@87c92f62c494626598e9148208aaa6d1716b8e3c',
  'symfony/config' => 'v5.1.0@b8623ef3d99fe62a34baf7a111b576216965f880',
  'symfony/console' => 'v5.1.0@00bed125812716d09b163f0727ef33bb49bf3448',
  'symfony/dependency-injection' => 'v5.1.0@6a6791e9584273b32eeb01790da4c7446d87a621',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/doctrine-bridge' => 'v5.1.0@e88cfe6333eca0afe08965b14598be60f9fc3d53',
  'symfony/dotenv' => 'v5.1.0@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.0@7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896',
  'symfony/event-dispatcher' => 'v5.1.0@cc0d059e2e997e79ca34125a52f3e33de4424ac7',
  'symfony/event-dispatcher-contracts' => 'v2.1.2@405952c4e90941a17e52ef7489a2bd94870bb290',
  'symfony/expression-language' => 'v5.1.0@f8344b92f6a19138df4dae4edbabe8e5fda11c7e',
  'symfony/filesystem' => 'v5.1.0@6e4320f06d5f2cce0d96530162491f4465179157',
  'symfony/finder' => 'v5.1.0@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/flex' => 'v1.7.1@a53056880aae0ce034ac6c38906e162ee5cfd2df',
  'symfony/form' => 'v5.1.0@4d492698887bcf88569ae978362b6ca2c9a7df4a',
  'symfony/framework-bundle' => 'v5.1.0@db39e29cf3a99692390e6d18fdc57d42e9e5a3c9',
  'symfony/http-foundation' => 'v5.1.0@e0d853bddc2b2cfb0d67b0b4496c03fffe1d37fa',
  'symfony/http-kernel' => 'v5.1.0@75ff5327a7d6ede3ccc2fac3ebca9ed776b3e85c',
  'symfony/inflector' => 'v5.1.0@fddb4262dd136b34db993a2a3488713df91e4856',
  'symfony/intl' => 'v5.1.0@b21d69ebb33adfcb7e6d8b0a0a8799db7090705b',
  'symfony/maker-bundle' => 'v1.19.0@bea8c3c959e48a2c952cc7c4f4f32964be8b8874',
  'symfony/options-resolver' => 'v5.1.0@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/polyfill-intl-grapheme' => 'v1.17.0@e094b0770f7833fdf257e6ba4775be4e258230b2',
  'symfony/polyfill-intl-icu' => 'v1.17.0@4ef3923e4a86e1b6ef72d42be59dbf7d33a685e3',
  'symfony/polyfill-intl-normalizer' => 'v1.17.0@1357b1d168eb7f68ad6a134838e46b0b159444a9',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/process' => 'v5.1.0@7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1',
  'symfony/property-access' => 'v5.1.0@776bf85b9ed5a9ba99496d5e5457a50de63cd997',
  'symfony/property-info' => 'v5.1.0@b644923132bdd92c2664f0c7955f77a9a2b8e919',
  'symfony/routing' => 'v5.1.0@95cf30145b26c758d6d832aa2d0de3128978d556',
  'symfony/security' => '2.0.6@7f2e3570c00c06f45f9d960986f6096515f8b3f2',
  'symfony/security-bundle' => 'v5.1.0@410ce6220f458a3ac1347a3bb98383629223b8ce',
  'symfony/security-core' => 'v5.1.0@7414e45f720dd81879bd9a74f152ec92e91d36b6',
  'symfony/security-csrf' => 'v5.1.0@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.0@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.0@6a785d9a0deeb401d7ae540fd0492aca4e6b894e',
  'symfony/serializer' => 'v5.1.0@f3ea48ec7fea41397dea61f74ff86dba1d29560a',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v5.1.2@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.0@90c2a5103f07feb19069379f3abdcdbacc7753a9',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/twig-bridge' => 'v5.1.0@04f57638e591b23d06f72dca2f123605dbbe3a75',
  'symfony/twig-bundle' => 'v5.1.0@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/validator' => 'v5.1.0@7a012b935dffe51d37ce001f62fbc6cb307d96df',
  'symfony/var-dumper' => 'v5.1.0@46a942903059b0b05e601f00eb64179e05578c0f',
  'symfony/var-exporter' => 'v5.1.0@76cf21551652b14d80abf13243159fbdf4bbef22',
  'symfony/web-link' => 'v5.1.0@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/web-server-bundle' => 'v4.4.9@d617765de8a65d4d42f1b2843c7df36645936216',
  'symfony/yaml' => 'v5.1.0@ea342353a3ef4f453809acc4ebc55382231d4d23',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'doctrine/data-fixtures' => '1.4.3@7ebac50901eb4516816ac39100dba1759d843943',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'paragonie/random_compat' => '2.*@0485351244a9162429cd1d9b53eefd420952c59f',
  'symfony/polyfill-ctype' => '*@0485351244a9162429cd1d9b53eefd420952c59f',
  'symfony/polyfill-iconv' => '*@0485351244a9162429cd1d9b53eefd420952c59f',
  'symfony/polyfill-php71' => '*@0485351244a9162429cd1d9b53eefd420952c59f',
  'symfony/polyfill-php70' => '*@0485351244a9162429cd1d9b53eefd420952c59f',
  'symfony/polyfill-php56' => '*@0485351244a9162429cd1d9b53eefd420952c59f',
  '__root__' => 'dev-dev@0485351244a9162429cd1d9b53eefd420952c59f',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
