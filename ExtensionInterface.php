<?php

namespace Msgframework\Lib\Extension;

interface ExtensionInterface
{
    public function getName() : string;
    public function getTitle() : string;
    public function getId() : int;
    public function getStatus() : bool;
}