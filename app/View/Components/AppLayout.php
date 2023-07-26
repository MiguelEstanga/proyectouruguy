<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Periodo;
use App\Models\Lapso;
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public function render(): View
    {
        $periodo = Periodo::latest('created_at')->first();
        if($periodo ?? false){
             $lapsos = $periodo->lapso->where('activar' , '=' , true)->count();
         }else{
            $lapsos = 'no ha iniciado';
         }

       
        return view('layouts.app' ,
            [ 
                'periodo' => $periodo,
                'lapso' => $lapsos
             ] );
    }
}
