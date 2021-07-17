<?php

/**
 * Define a function to produce the config generator.
 *
 * Using iterator to array we can turn this into a generated version of the previous config.
 * The benefit here is that due to how the source/upstream organizes icons by context type.
 * But we want to output all the icons into sets based only on style type.
 *
 * @return Generator
 */
function build_generation_config(): Generator {
    $svgNormalization = static function (string $tempFilepath, array $iconSet) {
        /** @var string $svgContent */
        $svgContent = file_get_contents($tempFilepath);
        // replace <svg width="48" height="48" viewBox="0 0 48 48" fill="none" with <svg fill="currentColor" stroke="none" viewBox="0 0 24 24" that are expected by blade-icons package
        $svgContent = str_replace('<svg width="48" height="48" viewBox="0 0 48 48" fill="none"', '<svg fill="currentColor" stroke="none" viewBox="0 0 48 48" ', $svgContent);
        file_put_contents($tempFilepath, $svgContent);
    };

    static $upstreamTypeSets = [
        'blood',
        'body',
        'devices',
        'diagnostics',
        'medications',
        'network',
        'objects',
        'people',
        'places',
        'shapes',
        'specialties',
        'symbols',
        'typography',
        'vehicles',
    ];
    foreach ($upstreamTypeSets as $upstreamTypeSet) {
        yield [
            'source' => __DIR__.sprintf('/../dist/svg/filled/%s', $upstreamTypeSet),
            'destination' => __DIR__.'/../resources/svg/filled',
            'after' => $svgNormalization,
            'safe' => true,
        ];
        yield [
            'source' => __DIR__.sprintf('/../dist/svg/negative/%s', $upstreamTypeSet),
            'destination' => __DIR__.'/../resources/svg/negative',
            'after' => $svgNormalization,
            'safe' => true,
        ];
        yield [
            'source' => __DIR__.sprintf('/../dist/svg/outline/%s', $upstreamTypeSet),
            'destination' => __DIR__.'/../resources/svg/outline',
            'after' => $svgNormalization,
            'safe' => true,
        ];
    }
}

return iterator_to_array(build_generation_config());