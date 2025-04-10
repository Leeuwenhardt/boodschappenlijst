<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::with('category')->get(); //with zorgt voor relaties tussen modellen vooraf te laden
        return view('items.index', compact('items')); // compact maakt array met naam items en word doorgegeven
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        // Valideert de inkomende gegevens
        $validated = $request->validated();

        // Mass assignment en stelt de 'name' en 'description' waarden in op het gevalideerde gegevens
        Item::create($validated);

        return redirect()->route('items.index');
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
    public function edit(Item $item) {
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item) {
    
        // Valideert de inkomende gegevens
        $validated = $request->validated();

        // Mass assignment stelt de 'name' en 'description' waarden in op het gevalideerde gegevens
        $item->update($validated);

        // Stuurt de gebruiker naar de lijst van items
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
