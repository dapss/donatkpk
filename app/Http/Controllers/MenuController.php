<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donut;
use App\Models\Glaze;
use App\Models\Topping;

class MenuController extends Controller
{
    public function index()
    {
        $donuts = Donut::all();
        $glazes = Glaze::all();
        $toppings = Topping::all();
        return view('menu', compact('donuts', 'glazes', 'toppings'));
    }

    public function create()
{
    return view('create'); // Return a view with a form for creating a new donut, glaze, or topping.
}

public function store(Request $request)
{
    // Validate incoming data
    $validatedData = $request->validate([
        'type' => 'required|string|in:donut,glaze,topping',
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validate image file
        'status' => 'required|numeric|max:1',
        'is_bestseller' => 'nullable|numeric|max:1',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $fileName = $request->file('image')->store('images', 'public');
        $validatedData['image'] = $fileName;
    }

    // Insert into the corresponding table based on type
    switch ($validatedData['type']) {
        case 'donut':
            Donut::create([
                'id_donut' => uniqid('D'),
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'image' => $validatedData['image'],
                'status' => $validatedData['status'],
                'is_bestseller' => $validatedData['is_bestseller'] ?? false,
            ]);
            break;
        case 'glaze':
            Glaze::create([
                'id_glaze' => uniqid('G'),
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'image' => $validatedData['image'],
                'status' => $validatedData['status'],
            ]);
            break;
        case 'topping':
            Topping::create([
                'id_topping' => uniqid('T'),
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'image' => $validatedData['image'],
                'status' => $validatedData['status'],
            ]);
            break;
        default:
            return redirect()->back()->withErrors(['type' => 'Invalid type specified']);
    }

    return redirect()->route('menu')->with('success', ucfirst($validatedData['type']) . ' added successfully!');
}

    public function edit($id)
    {
        // Use 'id_donut' to find the donut record
        $item = Donut::where('id_donut', $id)->firstOrFail();
        return view('edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // Use 'id_donut' to find the donut record
        $item = Donut::where('id_donut', $id)->firstOrFail();
    
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
            'status' => 'required|numeric|max:1',
            'is_bestseller' => 'required|numeric|max:1',
        ]);
    
        // Handle image upload if present
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $fileName;
        } else {
            // If no new image is uploaded, keep the existing image
            $validatedData['image'] = $item->image;
        }
    
        // Update the record
        $item->update($validatedData);
    
        return redirect()->route('menu')->with('success', 'Donut updated successfully!');
    }


    public function destroy($id_donut)
    {
        // Use id_donut to find the item
        $item = Donut::where('id_donut', $id_donut)->firstOrFail();
        $item->delete();

        return redirect()->route('menu')->with('success', 'Item deleted successfully!');
    }

    // Edit glaze
    public function editGlaze($id)
    {
        $glaze = Glaze::where('id_glaze', $id)->firstOrFail();
        return view('edit2', compact('glaze'));
    }

    // Update glaze
    public function updateGlaze(Request $request, $id)
    {
        $glaze = Glaze::where('id_glaze', $id)->firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
            'status' => 'required|numeric|max:1',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $fileName;
        }

        $glaze->update($validatedData);

        return redirect()->route('menu')->with('success', 'Glaze updated successfully!');
    }

    // Delete glaze
    public function destroyGlaze($id)
    {
        $glaze = Glaze::where('id_glaze', $id)->firstOrFail();
        $glaze->delete();

        return redirect()->route('menu')->with('success', 'Glaze deleted successfully!');
    }

    // Edit topping
    public function editTopping($id)
    {
        $topping = Topping::where('id_topping', $id)->firstOrFail();
        return view('edit3', compact('topping'));
    }

    // Update topping
    public function updateTopping(Request $request, $id)
    {
        $topping = Topping::where('id_topping', $id)->firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
            'status' => 'required|numeric|max:1',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $fileName;
        }

        $topping->update($validatedData);

        return redirect()->route('menu')->with('success', 'Topping updated successfully!');
    }

    // Delete topping
    public function destroyTopping($id)
    {
        $topping = Topping::where('id_topping', $id)->firstOrFail();
        $topping->delete();

        return redirect()->route('menu')->with('success', 'Topping deleted successfully!');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    // Search logic
    $donuts = Donut::where('name', 'LIKE', "%$query%")
        ->orWhere('description', 'LIKE', "%$query%")
        ->get();

    $glazes = Glaze::where('name', 'LIKE', "%$query%")
        ->orWhere('description', 'LIKE', "%$query%")
        ->get();

    $toppings = Topping::where('name', 'LIKE', "%$query%")
        ->orWhere('description', 'LIKE', "%$query%")
        ->get();

    // Return to the same view with results
    return view('menu', [
        'donuts' => $donuts,
        'glazes' => $glazes,
        'toppings' => $toppings,
        'search' => $query
    ]);
}

}