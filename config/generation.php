<?php
$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    /** @var string $svgContent */
    $svgContent = file_get_contents($tempFilepath);
    // replace <svg width="48" height="48" viewBox="0 0 48 48" fill="none" with <svg fill="currentColor" stroke="none" viewBox="0 0 24 24" that are expected by blade-icons package
    $svgContent = str_replace('<svg width="48" height="48" viewBox="0 0 48 48" fill="none"', '<svg fill="currentColor" stroke="none" viewBox="0 0 48 48" ', $svgContent);
    file_put_contents($tempFilepath, $svgContent);
};

return [
    // blood icons
    [
        'source' => __DIR__.'/../dist/svg/filled/blood',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/blood',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/blood',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // body icons
    [
        'source' => __DIR__.'/../dist/svg/filled/body',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/body',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/body',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // devices icons
    [
        'source' => __DIR__.'/../dist/svg/filled/devices',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/devices',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/devices',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // diagnostics icons
    [
        'source' => __DIR__.'/../dist/svg/filled/diagnostics',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/diagnostics',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/diagnostics',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // medications icons
    [
        'source' => __DIR__.'/../dist/svg/filled/medications',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/medications',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/medications',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // network icons
    [
        'source' => __DIR__.'/../dist/svg/filled/network',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/network',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/network',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // objects icons
    [
        'source' => __DIR__.'/../dist/svg/filled/objects',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/objects',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/objects',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // people icons
    [
        'source' => __DIR__.'/../dist/svg/filled/people',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/people',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/people',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // places icons
    [
        'source' => __DIR__.'/../dist/svg/filled/places',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/places',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/places',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // shapes icons
    [
        'source' => __DIR__.'/../dist/svg/filled/shapes',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/shapes',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/shapes',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // specialties icons
    [
        'source' => __DIR__.'/../dist/svg/filled/specialties',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/specialties',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/specialties',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // symbols icons
    [
        'source' => __DIR__.'/../dist/svg/filled/symbols',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/symbols',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/symbols',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // typography icons
    [
        'source' => __DIR__.'/../dist/svg/filled/typography',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/typography',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/typography',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    // vehicles icons
    [
        'source' => __DIR__.'/../dist/svg/filled/vehicles',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'f-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/negative/vehicles',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'n-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/outline/vehicles',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'after' => $svgNormalization,
        'safe' => true,
    ],
];
