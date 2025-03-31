<?php namespace ProFixS\Valiants\Models;

use ProFixS\Core\Classes\BackendPreview;
use ProFixS\Pages\Models\SystemFile;
use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use Str;

/**
 * valiant Model
 */
class Valiant extends Model
{
    use Validation;
    use Sluggable;
    use \October\Rain\Database\Traits\Sortable;

    public $implement = [
        '@ProFixS.MultiLanguage.Behaviors.MultiLanguageModel',
        '@ProFixS.MultiSite.Behaviors.MultiSiteModel',
        '@ProFixS.Pages.Behaviors.RelationFinderModel'
    ];

    public $jsonable = ['links', 'bio_timeline', 'fields'];

    public $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'slug' => 'required|unique:profixs_valiants_people'
    ];

    protected $slugs = ['slug' => ['first_name', 'last_name']];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'profixs_valiants_people';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $relationFinder = [
        'nameFrom' => 'last_name',
        'descriptionFrom' => 'first_name'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'groups' => [
            'ProFixS\Valiants\Models\Group',
            'table' => 'profixs_group_valiant',
            'pivot' => ['order_number', 'priority']
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['avatar' => [SystemFile::class]];
    public $attachMany = [];

    /**
     * @return string valiant full name
     */
    public function fullName()
    {
        return $fullName = "{$this->last_name} {$this->first_name} {$this->middle_name}";
    }
    
    /**
     * beforeValidate
     */
    public function beforeValidate()
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($this->first_name.' '.$this->last_name);
        } else {
            $this->slug = Str::slug($this->slug);
        }
    }

    /**
     * beforeCreate
     */
    public function beforeCreate()
    {
        $this->sort_order = self::withoutGlobalScopes()->max('sort_order') + 1;
    }

    /**
     * scopeFilterGroups
     */
    public function scopeFilterGroups($query, $groups, $dirty = false)
    {
        $query = $query->whereHas('groups', function($q) use ($groups) {
            return $q->whereIn('group_id', $groups);
        });

        if ($dirty) {
            $query = $query->orWhereDoesntHave('groups');
        }

        return $query;
    }

    /**
     * scopeIsPublished
     */
    public function scopeIsPublished($query)
    {
        if (BackendPreview::isValidPreview()) {
            return $query;
        }
        
        return $query
            ->whereNotNull('published')
            ->where('published', true);
    }
}
