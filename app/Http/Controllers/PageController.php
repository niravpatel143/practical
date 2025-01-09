<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::with('children')->get();
        return response()->json($pages);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'parent_id' => 'nullable|exists:pages,id',
            'slug' => 'required|string',
            'title' => 'required|string',
            'content' => 'nullable|string',
        ]);

        $page = Page::create($validated);
        return response()->json($page, 201);
    }

    public function show($id)
    {
        $page = Page::with('children')->findOrFail($id);
        return response()->json($page);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'parent_id' => 'nullable|exists:pages,id',
            'slug' => 'required|string',
            'title' => 'required|string',
            'content' => 'nullable|string',
        ]);

        $page = Page::findOrFail($id);
        $page->update($validated);
        return response()->json($page);
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return response()->noContent();
    }
    public function showPage($slug)
    {
        $page = Page::where('slug',$slug)->with('children')->first();
        return response()->json($page);
    }
}
