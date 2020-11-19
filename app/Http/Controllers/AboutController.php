<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about=About::all()->first();
if(!$about){
    return view('admin.about.create');
}
        return view('admin.about.index')->with('about',$about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $about=About::all()->first();
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'about' => 'required',
            'mission' => 'required',
            'background' => 'required',
            'vision' => 'required'

        ]);
        if($request->has('photo'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $validatedData['name'].".".$extension);
                $url = Storage::url($validatedData['name'].".".$extension);

            }catch(Exception $ex){

            }

        }

        $about = new About;
        $about->name = $request->name;
        $about->about = $request->about;
        $about->mission = $request->mission;
        $about->vision = $request->vision;
        $about->value = $request->value;
        $about->goal = $request->goal;
        $about->background = $request->background;
        $about->photo =$url;
        $about->save();
        return redirect()->back()->with(['success'=>'Company Profile Created','jobs'=>$about]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //

        return view('admin.about.show')->with('about',$about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //

        return view('admin.about.edit')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //

        $about = About::findOrFail($about->id);

        $this->validate($request, [
            'name' => 'required',
            'about' => 'required'

        ]);

        $input = $request->all();

        $about->fill($input)->save();

        return redirect()->route('about.index')->with('success','Company Profile Update Successfuly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
