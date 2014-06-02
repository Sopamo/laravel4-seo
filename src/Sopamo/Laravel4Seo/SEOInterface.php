<?php namespace Sopamo\Laravel4Seo;

use Sopamo\Laravel4Seo\Models\SEO;

interface SEOInterface {
    /**
     * Get the SEO Model for a specific language
     * 
     * @param String $lc The language in which we want the SEO information
     * @return SEO
     */
    public function getSeoForLanguage($lc);
}