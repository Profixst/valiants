<?php namespace ProFixS\Valiants\Models;

use Model;
use ProFixS\Valiants\Models\valiant;
use Illuminate\Support\Facades\DB;

class Group extends Model
{
	use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = [
        '@ProFixS.MultiLanguage.Behaviors.MultiLanguageModel',
        '@ProFixS.MultiSite.Behaviors.MultiSiteModel',
    ];

    public $rules = [
        'name' => 'required'
    ];

    public $table = 'profixs_valiants_groups';
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'valiants' => [ 
            'ProFixS\Valiants\Models\Valiant', 
            'table' => 'profixs_group_valiant',
            'pivot' => ['order_number', 'priority']
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * beforeCreate
     */
    public function beforeCreate()
    {
        $this->sort_order = self::withoutGlobalScopes()->max('sort_order') + 1;
    }
}
