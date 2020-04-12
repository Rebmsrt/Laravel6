<?php

namespace App\Http\Controllers;

use App\Razdel;
use Illuminate\Http\Request;

class RazdelController extends Controller
{

    public function index()
    {
        $data=auth()->user()->razdels;
        return (view('home', ['data' => $data]));

    }

    public function store(Request $request)
    {
        auth()->user()->razdels()->create($request->all());
        return redirect('home');

    }

    public function destroy(Razdel $razdel)
    {
        $razdel->delete();
        return redirect('home');
    }

    public function edit(Razdel $razdel)
    {
        return (view('razdel.edit_razdel', ['data' => $razdel]));
    }

    public function update(Request $request, Razdel $razdel)
    {
        $razdel->update($request->all());
        return redirect('home');
    }

    public function uploadPhoto(Razdel $razdel, Request $request)
    {
        $filename = uniqid() . '.' . $file->extension();
        $razdel
            ->create(
                array_merge(
                    [
                        'path' => url('/public/storage/' . $filename),
                        'album_id' =>$album->id,
                        'owner_id' =>auth()->user()->id,
                    ],
                    $request->all()
                )
            );
        return redirect($album->id.'/photo');
    }




}

