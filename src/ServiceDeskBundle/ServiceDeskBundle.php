<?php
/*
 * This file is part of the kleijnweb/swagger-bundle-example package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace KleijnWeb\Examples\SwaggerBundle\ServiceDeskBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author John Kleijn <john@kleijnweb.nl>
 */
class ServiceDeskBundle extends Bundle
{
    /**
     * @return ExtensionInterface
     */
    public function getContainerExtension()
    {
        return $this->extension = false;
    }
}
