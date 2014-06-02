<?php namespace Sopamo\Laravel4Seo;

use App;
use Lang;
use Sopamo\Laravel4Seo\Models\SEO;
use View;

class SEOOutput {
    
    /** @var SEOInterface */
    private static $seoProvider = null;

    /**
     * Display the SEO meta tags
     * 
     * @return \Illuminate\View\View|string
     */
    public static function display() {
        if(!self::exists()) return '';
        $seoModel = self::getSeoModel();
        if(!$seoModel) return '';
        return View::make("laravel4-seo::header",['seo'=>$seoModel]);
    }

    /**
     * Checks if a seo model was set
     * 
     * @return bool
     */
    public static function exists() {
        return self::$seoProvider != null;
    }

    /**
     * Set a model which implements the SEOInterface
     * 
     * @param SEOInterface $seoProvider
     */
    public static function set(SEOInterface $seoProvider) {
        self::$seoProvider = $seoProvider;
    }

    /**
     * Get the SEO Model which holds the actual seo information
     * 
     * @return SEO
     */
    private static function getSeoModel() {
        $lc = Lang::getLocale();
        return self::$seoProvider->getSeoForLanguage($lc);
    }
}