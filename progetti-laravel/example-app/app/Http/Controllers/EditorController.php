<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class EditorController extends Controller
{
    public function index()
    {
        $editors = Editor::all();
        return view('editors.index', compact('editors'));
    }
    
    public function create()
    {
        return view('editors.create');
    }
    
    public function store(Request $request)
    {
        $editor = Editor::create($request->all());
        return redirect()->route('editors.show', $editor->id);
    }
    
    public function show($id)
    {
        $editor = Editor::findOrFail($id);
        return view('editors.show', compact('editor'));
    }
    
    public function edit($id)
    {
        $editor = Editor::findOrFail($id);
        return view('editors.edit', compact('editor'));
    }
    
    public function update(Request $request, $id)
    {
        $editor = Editor::findOrFail($id);
        $editor->update($request->all());
        return redirect()->route('editors.show', $editor->id);
    }
    
    public function destroy($id)
    {
        $editor = Editor::findOrFail($id);
        $editor->delete();
        return redirect()->route('editors.index');
    }
}
