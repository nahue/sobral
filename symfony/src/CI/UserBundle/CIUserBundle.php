<?php

namespace CI\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CIUserBundle extends Bundle
{
   public function getParent() {
       return "FOSUserBundle";
   } 
}
