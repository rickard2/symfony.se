<?php

namespace Bloghoven\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Bloghoven\BlogBundle\DependencyInjection\Compiler\TaggedProviderPass;

class BloghovenBlogBundle extends Bundle
{
  public function build(ContainerBuilder $container)
  {
    parent::build($container);

    $container->addCompilerPass(new TaggedProviderPass());
  }
}
