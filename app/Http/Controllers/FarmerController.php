<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\farmers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class FarmerController extends Controller
{
    public function farmerForm()
    {
        $products = farmers::all();
        foreach ($products as $product) {
            $carbonDate = Carbon::parse($product->created_at);
            $product->formatted_created_at = $carbonDate->format('j F Y');
            $product->short_description = Str::limit($product->product_description, 10);
            $product->short_desc = Str::limit($product->product_description, 50);
        }

        return view('auth.farmerform', compact('products'));
    }
    public function submitForm(Request $request){
        try{
            $request->validate([
            'fullname' => 'required',
            'telephone' => 'required|numeric|digits:10',
            'district' => 'required',
            'category' => 'required',
            'product_name' => 'required',
            'image' => 'required|image|mimes:pdf,jpeg,JPG,png,jpg,gif,svg|max:2048', // Adjust as needed
            'product_description' => 'required',
            'quantity' => 'required|numeric',
            'quantity_unit' => 'required',
        ]); 
        $input =$request->all();
              // Handle image file upload
              if ($image = $request->file('image')) {
                $destinationPath = 'images/' . now()->format('YmdHis');
                $productImage = $image->getClientOriginalName();
                $image->storeAs($destinationPath, $productImage, 'public');
            
                $input['image'] = "$destinationPath/$productImage";
            }
        farmers::create($input);
        return back();
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
    }
   
    public function showUpdateForm($id){
        $product = farmers::find($id);
        return view('auth.updatefarmerform', compact('product'));
    }

    public function updateProduct(Request $request, $id){
        try{
        $validatedData = $request->validate([
            'fullname' => 'required',
            'telephone' => 'required|numeric|digits:10',
            'district' => 'required',
            'category' => 'required',
            'product_name' => 'required',
            'image' => 'required|image|mimes:pdf,jpeg,png,jpg,gif,svg|max:2048', // Adjust as needed
            'product_description' => 'required',
            'quantity' => 'required|numeric',
            'quantity_unit' => 'required',
        ]);
    $product = farmers::find($id);
    if (!$product) {
        return redirect()->back()->withInput()->withErrors(['error' => 'Product not found.']);
    }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $ext = $imagePath->getClientOriginalExtension();
            $imagename = time() . '.' . $ext;
            $imagePath->move('storage/images', $imagename);
            $product->image = $imagename;
        }

        $product->save($validatedData);
        return redirect()->route('farmerform');

    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }

    }

    public function destroyProduct($id)
     {
    $product = farmers::find($id);
    $product->delete();
    return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    public function filterCategory(Request $request)
{
    $category = $request->input('category');

    if ($category && $category != 'all') {
        // Filter by category if a specific category is selected
        $products = farmers::where('category', $category)->get();
    } else {
        // Retrieve all products if 'All Categories' is selected
        $products = farmers::all();
    }

    return view('pages.home', compact('products'));
}


public function searchFilter(Request $request)
{

    $searchQuery = $request->input('search');

    if ($searchQuery) {
        // Perform search if a search query is provided
        $products = farmers::where('product_name', 'like', '%' . $searchQuery . '%')
            ->orWhere('category', 'like', '%' . $searchQuery . '%')
            ->orWhere('product_description', 'like', '%' . $searchQuery . '%')
            ->get();
    } else {
        // Retrieve all products if no search query is provided
        $products = farmers::all();
    }

    return view('pages.home', compact('products'));
}

public function getFacilitator()
{
    $products = farmers::all();
    foreach ($products as $product) {
        $carbonDate = Carbon::parse($product->created_at);
        $product->formatted_created_at = $carbonDate->format('j F Y');
        $product->short_description = Str::limit($product->product_description, 10);
        $product->short_desc = Str::limit($product->product_description, 50);
    }

    return view('user.facilitator', compact('products'));
}

public function showContactDetails($id)
{
    $product = farmers::findOrFail($id);

    $carbonDate = Carbon::parse($product->created_at);
    $product->formatted_created_at = $carbonDate->format('j F Y');
    $product->short_description = Str::limit($product->product_description, 10);
    $product->short_desc = Str::limit($product->product_description, 50);

    return view('user.facilitator', compact('product'));
}
}
