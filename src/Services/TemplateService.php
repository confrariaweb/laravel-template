<?php

namespace ConfrariaWeb\Template\Services;

use ConfrariaWeb\Template\Contracts\TemplateContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class TemplateService
{
    use ServiceTrait;

    public function __construct(TemplateContract $template)
    {
        $this->obj = $template;
    }

}
