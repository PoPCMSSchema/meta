<?php

declare(strict_types=1);

namespace PoPSchema\Meta;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\Engine\Component::class,
            \PoPSchema\SchemaCommons\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'pop-schema/migrate-meta',
        ];
    }
}
