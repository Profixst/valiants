<?php namespace ProFixS\Valiants\Faker;

use ProFixS\Valiants\Models\Valiant;
use ProFixS\Valiants\Models\Group;
use ProFixS\Core\Console\Interfaces\ContentGenerationInterface;
use ProFixS\Core\Classes\AbstractContentGeneration;
use ProFixS\Core\Classes\ImageFaker;
use October\Rain\Database\Model;

class Valiants extends AbstractContentGeneration implements ContentGenerationInterface
{
    public static $sort = 10;

    /**
     * create
     */
    protected function create(): Valiant
    {
        $valiant = new Valiant();

        $valiant->last_name = $this->factory->lastName();
        $valiant->first_name = $this->factory->firstName();
        $valiant->middle_name = $this->factory->middleName();
        $valiant->position = $this->factory->jobTitle();
        $valiant->bio = '<p>' . $this->factory->realText(450) . '</p>';
        $valiant->groups = $this->getRandomModel(Group::make());

        $this->attachLink($valiant);
        $this->attachAvatar($valiant);
        $this->attachRandomTag($valiant);

        $valiant->save();

        return $valiant;
    }

    /**
     * attachAvatar
     */
    protected function attachAvatar(Model $model)
    {
        $image = new ImageFaker();

        if (file_exists($fake_image = $image->image())) {
            $model->avatar = $fake_image;
        }
    }

    /**
     * attachLink
     */
    protected function attachLink(Model $model)
    {
        $model->links = [[
                'title' => $this->factory->company(),
                'url' => $this->factory->url(),
                'description' => $this->factory->words(3, TRUE)
            ]];
    }
}