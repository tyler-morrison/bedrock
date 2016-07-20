<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in app/etc/config/defaults/general.php
 */

return [
  '*' => [
    'environmentVariables' => [

    ],
    'enableCsrfProtection' => true,
    'cpTrigger' => getenv('CRAFT_CP') ?: 'admin',
    'omitScriptNameInUrls' => true,
    'errorTemplatePrefix' => "_errors/",
    'convertFilenamesToAscii' => true,
  ],
  'development' => [
    'devMode' => true,
  ],
  'staging' => [

  ],
  'production' => [
    'sendPoweredByHeader' => false,
    'useWriteFileLock' => true,
    'allowAutoUpdates' => 'minor-only',
    'maxInvalidLogins' => 2,
  ]
];
