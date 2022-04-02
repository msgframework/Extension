<?php

namespace Msgframework\Lib\Extension;

use Msgframework\Lib\Registry\Registry;

interface ExtensionAwareInterface
{
    public function getName(): string;

    public function getTitle(): string;

    public function getParams(): Registry;

    public function isProtected(): bool;

    public function getStatus(): bool;
}