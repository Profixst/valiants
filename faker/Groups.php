<?php namespace ProFixS\Valiants\Faker;

use ProFixS\Core\Console\Interfaces\ContentGenerationInterface;
use ProFixS\Core\Classes\AbstractContentGeneration;
use ProFixS\Valiants\Models\Group;

class Groups extends AbstractContentGeneration implements ContentGenerationInterface
{
    public static $sort = 9;

    /**
     * create
     */
    protected function create(): Group
    {
        $group = new Group();

        $group->name = $this->getUniqueWordForModelField(Group::make());

        $group->save();

        return $group;
    }
}