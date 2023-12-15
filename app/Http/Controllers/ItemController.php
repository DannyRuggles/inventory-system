<?php
namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Display a listing of the items
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Show the form for creating a new item
    public function create()
    {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    // Store a newly created item in storage
    public function store(Request $request)
    {
        // Add validation rules
        // Handle file upload for 'picture'
        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    // Show the form for editing the specified item
    public function edit(Item $item)
    {
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    // Update the specified item in storage
    public function update(Request $request, Item $item)
    {
        // Add validation rules
        // Handle file upload for 'picture'
        $item->update($request->all());
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    // Remove the specified item from storage
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}

