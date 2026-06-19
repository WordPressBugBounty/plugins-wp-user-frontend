<?php return array(
    'root' => array(
        'name' => 'wedevs/wp-user-frontend',
        'pretty_version' => 'v4.3.8',
        'version' => '4.3.8.0',
        'reference' => '594b8620974539714905c27c2a0c511951c82a72',
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
            'pretty_version' => 'v4.3.8',
            'version' => '4.3.8.0',
            'reference' => '594b8620974539714905c27c2a0c511951c82a72',
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
