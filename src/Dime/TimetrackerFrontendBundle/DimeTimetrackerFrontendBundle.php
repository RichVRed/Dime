<?php

namespace Dime\TimetrackerFrontendBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DimeTimetrackerFrontendBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
