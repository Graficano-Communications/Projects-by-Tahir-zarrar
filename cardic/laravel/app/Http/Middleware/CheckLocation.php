<?php

// CheckLocation.php

namespace App\Http\Middleware;

use Stevebauman\Location\Facades\Location;
use Closure;

class CheckLocation
{
  public function handle($request, Closure $next)
{
    try {
        $ip = $request->ip();
        
        $position = Location::get($ip);
        
        //dd($position);

       

        
        if ($position->countryCode === 'null' && !$request->is('contact-us')) {
            
            return redirect()->route('comingsoon');
        }
    } catch (\Exception $e) {
       
        //dd($e->getMessage());
    }

    // Let the request proceed normally
    return $next($request);
}


}
