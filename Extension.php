<?php

namespace Msgframework\Lib\Extension;

use Msgframework\Lib\Registry\Registry;
use Msgframework\Lib\Extension\Exception\ExtensionPropertyException;

class Extension implements ExtensionAwareInterface
{
    use ExtensionAwareTrait;

    /**
     * @param string $name
     * @param string $title
     * @param bool $status
     * @param Registry $params
     * @param bool $protected
     */
    public function __construct(string $name, string $title, Registry $params, bool $status, bool $protected = false)
    {
        $this->setName($name);
        $this->setTitle($title);
        $this->setParams($params);
        $this->setStatus($status);
        $this->protected = $protected;
    }

    /**
     * @throws ExtensionPropertyException
     */
    public function __get($name)
    {
        $method = "get" . ucfirst($name);

        if(!isset($this->$name)) {
            throw new ExtensionPropertyException(sprintf('Property %s can not be read from this Extension', $name));
        }

        if(!\is_callable(array($this, $method))) {
            throw new ExtensionPropertyException(sprintf('Method %s can\'t be call from this Extension', $method));
        }

        return $this->$method();
    }
}