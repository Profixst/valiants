<?php namespace ProFixS\Valiants\Components;

use Event;
use Cms\Classes\ComponentBase;
use ProFixS\MultiLanguage\Classes\LocaleSwitcher;
use ProFixS\Valiants\Models\Valiant;

class Solder extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'profixs.valiants::lang.component.solder.name',
            'description' => 'profixs.valiants::lang.component.solder.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $valiant = Valiant::isPublished()->where('slug', $this->param('slug'))->first();
        if (!$valiant){
            $this->setStatusCode('404');
            return $this->controller->run('404');
        }
        $this->page['valiant'] = $valiant;

        $this->setMultilanguageLinks();
        $this->page->hash = $valiant->hash;
    }

    protected function setMultilanguageLinks()
    {
        Event::listen('profixs.multilanguage::component.ml.links', function (&$links) {
            $localeSwitcher = new LocaleSwitcher($this->page['valiant']);
            $links = $localeSwitcher->getLinks();
        });
    }
}
