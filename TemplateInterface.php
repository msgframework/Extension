<?php

namespace Msgframework\Lib\Extension;

interface TemplateInterface extends ExtensionAwareInterface
{
    /**
     * Returns the path to the root directory of the Template.
     *
     * @return string
     *
     * @since 1.0.1
     */
    public function getDir(): string;

    /**
     * Return array of paths to layout of Extension
     *
     * @param string $extension_name
     * @param string $extension_type
     * @param string $layout
     * @return array
     *
     * @since 1.0.1
     */
    public function getViewDir(string $extension_name, string $extension_type, string $layout): array;
}