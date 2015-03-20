<?php namespace Sopamo\Laravel4Seo;

use Sopamo\Laravel4Seo\Models\SEO;

trait SEOTrait {
    public function getSeoForLanguage($lc) {
        
        return SEO::where("group_id",$this->seo_id)->where("language",$lc)->first();
    }
}