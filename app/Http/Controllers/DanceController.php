<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class Validate Request
use App\Http\Requests\DanceRequest;

// Import DB Dance
use App\Models\Dance;

use Auth;

class DanceController extends Controller
{
    //READ
    public function index()
    {
        $dances = Dance::with('user')->orderBy('id', 'desc')->paginate(6);
        return view('pages.dance', compact('dances'));
    }

    //URL Create
    public function create()
    {
        return view('pages.create_dance');
    }

    // Create
    public function store(DanceRequest $request)
    {
        $data = $request->all();
        
        if ($request->has('img')) {
            $img     = $request->file('img');
            $name_img= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('dances'), $name_img);
    
            $data['img'] = $name_img;
        }
       
        // $request->user()->dances()->create($data);
        if (Auth::check()) 
            $data['user_id'] = Auth::user()->id;
         else  $data['user_id'] = 1;

        Dance::create($data);

        return redirect('/suku')->with('msg', 'Data berhasil ditambahkan ');
    }

    // SINGLE READ 
    public function show($title)
    {
        $dance = Dance::where('title', $title)->first();

        return view('pages.single_dance', compact('dance'));
    }

    //EDIT
    public function edit($id)
    {
        $dance = Dance::findOrFail($id);

        return view('pages.edit_dance', compact('dance'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'min:3', 'max:255'],
            'img'         => ['mimes:png,jpg,jpeg'],
            'description' => ['required', 'string']
        ]);

        if ($request->has('img')) {
            $img     = $request->file('img');
            $name_img= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('dances'), $name_img);
    
            $data['img'] = $name_img;
        }

        Dance::findOrFail($id)->update($data);

        return redirect('/suku')->with('msg', 'Data berhasil diperbarui ');
    }

    // Delete
    public function destroy($id)
    {
        Dance::destroy($id);

        return redirect('/suku')->with('msg', 'Data berhasil dihapus');
        
    }

    // About
    public function about()
    {
        return view('pages.about');
    }
}
