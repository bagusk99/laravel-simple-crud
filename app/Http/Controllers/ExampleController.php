<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'example' => Example::all()
        ];

        return view('components.pages.example.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'url' => route('example.store')
        ];

        return view('components.pages.example.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:8'],
            'description' => ['nullable', 'max:100']
        ]);

        Example::create($validated);

        return redirect()->route('example.index')->with(['message' => 'Data saved']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Example $example)
    {
        $data = [
            'url' => route('example.update', $example),
            'example' => $example
        ];

        return view('components.pages.example.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Example $example)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:8'],
            'description' => ['nullable', 'max:100']
        ]);

        $example->update($validated);

        return redirect()->route('example.index')->with(['message' => 'Data saved']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Example $example)
    {
        $example->delete();

        return redirect()->back()->with(['message' => 'Data deleted']);
    }
}
