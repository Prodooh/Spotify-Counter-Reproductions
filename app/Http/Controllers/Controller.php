<?php

namespace App\Http\Controllers;

use App\Models\Reproduction;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Redirector;
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


    public function updatePlaylist(Request $request)
    {
        $reproduction = Reproduction::find(2);
        try{
            $reproduction->update($request->only('reproductions'));
        }catch (\Exception $e){
            return redirect()->back()->with('status', 'Error: ' . $e);
        }
        return redirect()->back()->with('status', 'Reproducciones actualizadas con éxito');
    }

    /**
     * @param Reproduction $reproduction
     * @return Application|Factory|View
     */
    public function track(Reproduction $reproduction): View|Factory|Application
    {
        $reproductions = $reproduction->reproductions;
        return view('track')->with('reproductions', $reproductions);

    }

    /**
     * @return Application|Factory|View
     */
    public function playlist(): View|Factory|Application
    {
        $reproductions = Reproduction::find(2)->reproductions;
        return view('playlist')->with('reproductions', $reproductions);

    }
}
