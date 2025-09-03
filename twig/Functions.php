<?php namespace ProFixS\Valiants\Twig;

use Cache;
use ProFixS\Core\Twig\Functions as CoreFunctions;
use ProFixS\Pages\Classes\PagesHelper;
use ProFixS\Valiants\Models\Valiant;

class Functions
{
    /**
     * getValiant
     */
    public static function getValiant(int $id)
    {
        return Valiant::find($id);
    }

    /**
     * personLink
     */
    public static function valiantLink($data, $template = 'valiant')
    {
    	$routePageId = Cache::remember('profixs.tagsmanager::valiantPageUrl', 5, function () use ($template) {
    		$routePage = CoreFunctions::getPageByTemplate($template);
            return $routePage ? $routePage->id : null;
        });

        if (!$routePageId) {
        	return;
        }

    	$slug = ($data instanceof Valiant)
    		? $data->slug
    		: $data;

        return PagesHelper::url($routePageId, ['slug' => $slug]);
    }
}
