<?php namespace Sopamo\Laravel4Seo;

use App;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Routing\Controller;
use Input;
use Lang;
use Redirect;
use Session;
use Sopamo\Laravel4Seo\Models\SEO;

class SEOController extends Controller {
    
    public function update($id) {
        
        // Fetch the SEO model and update it
        try {
            /** @var SEO $seo */
            $seo = SEO::findOrFail($id);    
            $seo->saveUserInput(Input::all());
        } catch(ModelNotFoundException $e) {
            App::abort(404,$e->getMessage());
        }

        // Inform the user about success
        Session::flash("info",Lang::get('laravel4-seo::seo.seosaved'));
        
        // Redirect back
        return Redirect::back();
    }
}