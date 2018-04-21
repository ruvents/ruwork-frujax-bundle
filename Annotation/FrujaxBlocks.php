<?php

declare(strict_types=1);

namespace Ruwork\FrujaxBundle\Annotation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation;

/**
 * @Annotation
 */
final class FrujaxBlocks extends ConfigurationAnnotation
{
    private $blocks = [];

    public function getBlocks(): array
    {
        return $this->blocks;
    }

    public function setBlocks(array $blocks): void
    {
        $this->blocks = $blocks;
    }

    public function setValue(array $value): void
    {
        $this->setBlocks($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getAliasName()
    {
        return 'frujax_blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function allowArray()
    {
        return false;
    }
}