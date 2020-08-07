<?PHP

namespace ConfrariaWeb\Template\Repositories;

use ConfrariaWeb\Template\Models\Template;
use ConfrariaWeb\Template\Contracts\TemplateContract;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class TemplateRepository implements TemplateContract
{
    use RepositoryTrait;

    function __construct(Template $template)
    {
        $this->obj = $template;
    }
}
