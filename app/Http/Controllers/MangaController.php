<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Manga;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => [
                'required',
                'min:4'
            ],
            'description' => [
                'required',
                'min:55',
                'max: 255'
            ],
            'image' => [
                'required',
                'mimes:jpg,jpeg,bmp,png',
                'image',
                'max:2048'
            ]
        ]);

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);
        $slug = Str::slug($data['name'], '-');

        $manga = Manga::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $imageName,
            'slug' => $slug,
            'link' => 'teste',
            'rank' => 0,
            'id_category' => 1
        ]);

        return redirect()
            ->back()
            ->with('success', 'Manga criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $manga = Manga::where('slug', $slug)->first();
        $comments = Comment::where('id_manga', $manga->id)->get();
        return view('logged.manga.show', compact('manga', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
        //
    }
}
