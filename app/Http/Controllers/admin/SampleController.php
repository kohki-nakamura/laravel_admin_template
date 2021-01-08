<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples = Sample::paginate(10);
        return view ('admin.samples.index', ['samples' => $samples]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.samples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sample = new Sample;
        $sample->fill($request->except('_token'));

        if ($request->hasFile('header_image') && $request->file('header_image')->isValid([])) {
            // ファイル名をユニークにして public/uploads/sample 配下に保存
            $path = $request->header_image->store('public/uploads/sample');
            $sample->header_image = basename($path);
        }

        $this->validate($request, Sample::$rules);
        $sample->save();
        return redirect('admin/samples/'.$sample->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sample = Sample::find($id);
        return view("admin.samples.show", [
            "sample" => $sample
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sample = Sample::find($id);
        return view('admin.samples.edit', ['sample' => $sample]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sample = Sample::find($id);
        $this->validate($request, Sample::$rules);

        if ($request->hasFile('header_image') && $request->file('header_image')->isValid([])) {
            $sample->fill($request->except('_token', '_method'));
            // ファイル名をユニークにして public/uploads/sample 配下に保存
            $path = $request->header_image->store('public/uploads/sample');
            $sample->header_image = basename($path);
        } else {
            // header_imageがない場合はfillableから除外
            $sample->fill($request->except('_token', '_method', 'header_image'));
        }

        $sample->save();
        return redirect('admin/samples/'.$sample->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sample = Sample::find($id);
        $sample->delete();
        return redirect('admin/samples');
    }
}
