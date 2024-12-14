<?php

namespace App\Http\Controllers;

use App\Models\Range;
use Illuminate\Http\Request;
class RangeController extends Controller
{
    public function index()
    {

        $ranges = Range::all();

        return view('ranges.index', compact('ranges'));
    }

    public function show($id)
    {
        $range = Range::find($id);

        return view('ranges.show', compact('range'));
    }

    public function create()
    {
        return view('ranges.create');
    }

    public function store(Request $request)
    {
        $range = Range::create($request->all());

        return redirect()->route('ranges.index');
    }

    public function edit($id)
    {
        $range = Range::find($id);

        return view('ranges.edit', compact('range'));
    }

    public function update(Request $request, $id)
    {
        $range = Range::find($id);
        $range->update($request->all());

        return redirect()->route('ranges.index');
    }

    public function destroy($id)
    {
        $range = Range::find($id);
        $range->delete();

        return redirect()->route('ranges.index');
    }
}
