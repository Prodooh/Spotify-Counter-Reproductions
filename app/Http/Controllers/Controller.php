<?php

namespace App\Http\Controllers;

use App\Models\Reproduction;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param Request $request
     * @param Reproduction $reproduction
     * @return RedirectResponse
     */
    public function update(Request $request, Reproduction $reproduction): RedirectResponse
    {
        try{
            $reproduction->update($request->only('reproductions'));
        }catch (\Exception $e){
            return redirect('home')->with('status', 'Error: ' . $e);
        }
        return redirect('home')->with('status', 'Reproducciones actualizadas con éxito');
    }

    public function track(Reproduction $reproduction){
        $reproductions = $reproduction->reproductions;
        return view('track')->with('reproductions', $reproductions);

    }
}
