<?php

namespace Msgframework\Lib\Extension;

use Msgframework\Lib\Registry\Registry;

/**
 * Trait which helps implementing `Msgframework\Lib\Extension\ExtensionInterface` in another type Extension class.
 *
 */
trait ExtensionAwareTrait
{
    protected string $title;
    protected string $name;
    protected string $type = 'unknown';
    protected bool $status;
    protected bool $protected;
    protected Registry $params;

    /**
     * Set the Extension name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the Extension name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the Extension type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the Extension title
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the Extension title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get the Extension parameters object
     *
     * @return Registry
     */
    public function getParams(): Registry
    {
        return $this->params;
    }

    /**
     * Set the Extension parameters object
     *
     * @param Registry $params
     *
     * @return $this
     */
    public function setParams(Registry $params): self
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get Extension protected status
     *
     * @return bool
     */
    public function isProtected(): bool
    {
        return $this->protected;
    }

    /**
     * Set Extension enable status
     *
     * @param bool $status
     * @return ExtensionAwareTrait
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get Extension enable status
     *
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->isProtected() ? true : $this->status;
    }
}