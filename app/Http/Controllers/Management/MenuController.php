<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\View\View
    {
        return view('management.menu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\View\View
    {
        return view('management.createmenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validateRequest($request);

        $imageName = $this->handleImageUpload($request);

        // Save information to Menus table
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->image = $imageName;
        $menu->description = $request->description;
        $menu->category_id = $request->category_id;
        $menu->save();

        $request->session()->flash('status', __(':name is saved successfully', ['name' => $request->name]));

        return redirect()->route('management.menu.index');
    }

    /**
     * Validate the request.
     */
    private function validateRequest(Request $request): void
    {
        $request->validate([
            'name' => 'required|unique:menus|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
        ]);
    }

    /**
     * Handle the image upload.
     */
    private function handleImageUpload(Request $request): string
    {
        if ($request->hasFile('image')) {
            $imageName = date('mdYHis') . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('menu_images'), $imageName);
            return $imageName;
        }
        return 'noimage.png';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {
        //
    }
}
