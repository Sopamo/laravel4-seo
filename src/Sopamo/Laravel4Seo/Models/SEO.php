<?php namespace Sopamo\Laravel4Seo\Models;

use DB;
use Eloquent;

class SEO extends Eloquent {
    protected $table = 'seo';

    /**
     * Updates this model from user input
     * 
     * @param array $input
     */
    public function saveUserInput($input) {
        $this->title = $input['title'];
        $this->description = $input['description'];
        $this->save();
    }

    /**
     * @return mixed
     */
    public static function getNextFreeGroupId() {
        $current_max = DB::table('seo')->max('group_id');
        return $current_max + 1;
    }

    /**
     * Returns for how many languages we have seo information
     * 
     * @param int $group_id
     */
    public static function getEnteredLanguageCount($group_id) {
        return SEO::where('group_id',$group_id)->where('title','!=','')->where('description','!=','')->count();
    }
}