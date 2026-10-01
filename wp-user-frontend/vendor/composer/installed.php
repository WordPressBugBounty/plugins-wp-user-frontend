<?php return array(
    'root' => array(
        'name' => 'wedevs/wp-user-frontend',
        'pretty_version' => 'v4.3.13',
        'version' => '4.3.13.0',
        'reference' => '1f7ae25de555b47752cf7fec531bf180afb75e9c',
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
            'pretty_version' => 'v4.3.13',
            'version' => '4.3.13.0',
            'reference' => '1f7ae25de555b47752cf7fec531bf180afb75e9c',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wedevs/wp-utils' => array(
            'pretty_version' => 'v1.1',
            'version' => '1.1.0.0',
            'reference' => 'ac0e390ddb7a26a963161ca50e554f88bc460998',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wedevs/wp-utils',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
