<?php

namespace OpenAdmin\Admin\Form\Field;

class Url extends Text
{
    protected $rules = 'nullable|url';

    public function render()
    {
        $this->prepend('<i class="icon-internet-explorer fa-fw"></i>')
            ->defaultAttribute('type', 'url');

        return parent::render();
    }
}
