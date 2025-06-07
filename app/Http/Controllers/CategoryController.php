<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            {
                // Validate the request
                $validated = $request->validate([
                    'name' => 'required',
                    'type' => 'required',
                    'is_active' => 'required',
                ]);

                // Create a new Post model object, mass-assign its attributes with
                // the validated data and store it to the database
                $category = Category::create($validated);

                // Redirect to the blog index page
                return redirect()->route('categories.index');
            }
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        {
            $validated = $request->validate([
                'name' => 'required',
                'type' => 'required',
                'is_active' => 'required',
            ]);

            // Use `update` to mass (re)assign updated attributes
            $category->update($validated);

            // Redirect to the blog show page
            return redirect()->route('categories.show', $category)
                ->with('success', 'Category successfully updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Delete the post from the database
        $category->delete();

        // Redirect to the blog show page
        return redirect()->route('categories.index')
            ->with('success', 'Category successfully deleted');
    }
}
