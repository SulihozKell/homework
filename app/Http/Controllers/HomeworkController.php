<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeworkRequest;
use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::orderBy("name")->get();
        return view("homeworks.index", [ "homeworks" => $homeworks ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("homeworks.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeworkRequest $request)
    {
        $data = $request->only(["name", "url", "feedback", "points"]);
        $homework = new Homework();
        $homework->fill($data);
        $homework->save();
        return redirect()->route("homeworks.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        return view("homeworks.show", ["homework" => $homework]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statue  $statue
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        return view('homeworks.edit', ['homework' => $homework]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeworkRequest $request, Homework $homework)
    {
        $data = $request->only(["name", "url", "feedback", "points"]);
        $homework->fill($data);
        $homework->save();
        return redirect()->route('homeworks.show', $homework->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Homework::destroy($id);
        return redirect()->route("homeworks.index");
    }
}
