<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::where('user_id', Auth::id())->get();

        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'is_active' => 'required|boolean',
        ]);

        $validated['user_id'] = Auth::id();

        Category::create($validated);

        return redirect()->route('categories.index')->with('success', 'Category aangemaakt!');
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'is_active' => 'required|boolean',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Category bijgewerkt!');
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category verwijderd!');
    }
}
