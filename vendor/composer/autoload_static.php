<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15eb7e3e42428e4d462b4a3f857acf5a
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Grpc\\Gcp\\' => 9,
            'Grpc\\' => 5,
            'Google\\Type\\' => 12,
            'Google\\Rpc\\' => 11,
            'Google\\Protobuf\\' => 16,
            'Google\\LongRunning\\' => 19,
            'Google\\Jison\\' => 13,
            'Google\\Iam\\' => 11,
            'Google\\Cloud\\Vision\\' => 20,
            'Google\\Cloud\\Core\\' => 18,
            'Google\\Cloud\\' => 13,
            'Google\\Auth\\' => 12,
            'Google\\Api\\' => 11,
            'Google\\ApiCore\\' => 15,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\Google\\Cloud\\Vision\\' => 32,
            'GPBMetadata\\Google\\' => 19,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Grpc\\Gcp\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/grpc-gcp/src',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Type\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/Type',
        ),
        'Google\\Rpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/Rpc',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/php/src/Google/Protobuf',
        ),
        'Google\\LongRunning\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/LongRunning',
        ),
        'Google\\Jison\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/Jison',
        ),
        'Google\\Iam\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/Iam',
        ),
        'Google\\Cloud\\Vision\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/cloud-vision/src',
        ),
        'Google\\Cloud\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/cloud-core/src',
        ),
        'Google\\Cloud\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/Cloud',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'Google\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/Api',
        ),
        'Google\\ApiCore\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src/ApiCore',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/php/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Cloud\\Vision\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/cloud-vision/metadata',
        ),
        'GPBMetadata\\Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/metadata',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/google/grpc-gcp/src/generated',
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rize\\UriTemplate' => 
            array (
                0 => __DIR__ . '/..' . '/rize/uri-template/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15eb7e3e42428e4d462b4a3f857acf5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15eb7e3e42428e4d462b4a3f857acf5a::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit15eb7e3e42428e4d462b4a3f857acf5a::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit15eb7e3e42428e4d462b4a3f857acf5a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
