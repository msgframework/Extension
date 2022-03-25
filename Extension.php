<?php

namespace Msgframework\Lib\Extension;

use Msgframework\Lib\Registry\Registry;
use Msgframework\Lib\Extension\Exception\ExtensionPropertyException;

class Extension implements ExtensionInterface
{
    private string $title;
    private string $name;
    private int $id;
    protected bool $status;
    protected bool $protected;
    private Registry $params;

    /**
     * @param int $id
     * @param string $name
     * @param string $title
     * @param bool $status
     * @param Registry $params
     * @param bool $protected
     */
    public function __construct(int $id, string $name, string $title, bool $status, Registry $params, bool $protected = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;
        $this->params = $params;
        $this->status = $status;
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getParams(): Registry
    {
        return $this->params;
    }

    public function isProtected(): bool
    {
        return $this->protected;
    }

    public function getStatus(): bool
    {
        return ($this->protected) ? true : $this->status;
    }
}