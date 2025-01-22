<?php

namespace App\Http\Controllers;

use App\Models\Qytetet;
use Illuminate\Http\Request;

class QytetetController extends Controller
{
    // QytetetController.php
    public function index()
    {
        $qytetet = Qytetet::all();

        return view('qytetet.qytetet', ['qytetet' => $qytetet]);
    }

    public function create()
    {
        return view('qytetet.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:qytetet',
        ]);

        Qytetet::create([
            'name' => $validated['name'],
        ]);

        return redirect()->route('qytetet.index')
            ->with('success', 'Qyteti u shtua me sukses.');
    }

    public function show($id)
    {
        $qytetet = Qytetet::findOrFail($id);

        return view('qytetet.detaje', ['qytetet' => $qytetet]);
    }

    public function edit($id)
    {
        $qytet = Qytetet::findOrFail($id);

        return view('qytetet.edit', ['qytet' => $qytet]);
    }

    public function update(Request $request, $id)
    {
        $qytet = Qytetet::findOrFail($id);
        $qytet->name = $request->input('name');
        $qytet->save();

        return redirect()->route('qytetet.index')
            ->with('success', 'Qyteti u përditësua me sukses.');
    }

    public function destroy($id)
    {

        $qytet = Qytetet::findOrFail($id);
        $qytet->delete();

        return redirect()->route('qytetet.index')
            ->with('success', 'Qytet deleted successfully.');
    }

    public function delete($id)
    {
        $qytetet = Qytetet::findOrfail($id);
        $qytetet->delete();

        return $qytetet;
    }
}
