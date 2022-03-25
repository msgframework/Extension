<?php

namespace Msgframework\Lib\Extension;

use Msgframework\Lib\Registry\Registry;

interface ExtensionInterface
{
    public function getName() : string;
    public function getTitle() : string;
    public function getParams() : Registry;
    public function getId() : int;
    public function isProtected() : bool;
    public function getStatus() : bool;
}