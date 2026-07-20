<?php return array(
    'root' => array(
        'name' => 'wedevs/wp-user-frontend',
        'pretty_version' => 'v4.3.9',
        'version' => '4.3.9.0',
        'reference' => '0c43f7df09413f0daca71ac560ebee54b6f41dfd',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '5b390889ecbb17bfa69ed5a030fa2e6075a19ba0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(
                0 => '2.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'wedevs/wp-user-frontend' => array(
            'pretty_version' => 'v4.3.9',
            'version' => '4.3.9.0',
            'reference' => '0c43f7df09413f0daca71ac560ebee54b6f41dfd',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wedevs/wp-utils' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'e5d072e9ed80b8af8fcd3cb0ca7a8a749568fa5f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wedevs/wp-utils',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
