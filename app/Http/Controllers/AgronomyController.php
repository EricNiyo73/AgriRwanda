<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agronomies;
use App\Models\farmers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class AgronomyController extends Controller
{
    public function AgronomyForm()
    {
         $agronomy = agronomies::all();
        foreach ($agronomy as $agro) {
            $carbonDate = Carbon::parse($agro->created_at);
            $agro->formatted_created_at = $carbonDate->format('j F Y');
            $agro->short_description = Str::limit($agro->additional_info, 10);
            $agro->short_desc = Str::limit($agro->additional_info, 50);
        }

        return view('auth.agronomyform', compact('agronomy'));
    }

        public function submitAgriForm(Request $request){
        try{
          $request->validate([
            'district' => 'required',
            'category' => 'required',
            'plant_name' => 'required',
            'video' => 'required|mimes:mp4,pdf,avi,mov,wmv,flv|max:407225098', // Adjust as needed
            'additional_info' => 'required',
            'in_charge' => 'required',
        ]);

        $input = $request->all();

        // Handle video file upload
        if ($video = $request->file('video')) {
            $destinationPath = 'videos/' . now()->format('YmdHis');
            $plantVideo = $video->getClientOriginalName();
            $video->storeAs($destinationPath, $plantVideo, 'public');

            $input['video'] = "$destinationPath/$plantVideo";
        }
        agronomies::create($input);
        return back();
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
    }


public function searchFilterAgro(Request $request)
{

    $searchQuery = $request->input('search');

    if ($searchQuery) {
        // Perform search if a search query is provided
        $products = agronomies::where('district', 'like', '%' . $searchQuery . '%')
            ->orWhere('category', 'like', '%' . $searchQuery . '%')
            ->orWhere('plant_name', 'like', '%' . $searchQuery . '%')
            ->orWhere('additional_info', 'like', '%' . $searchQuery . '%')
            ->get();
    } else {
        // Retrieve all products if no search query is provided
        $products = agronomies::all();
    }

    return view('pages.home', compact('agronomy'));
}

public function filteringAll(Request $request)
    {
        // Get input parameters for filtering
        $category = $request->input('category');
        $search = $request->input('search');

        // Query products table
        $products = farmers::when($category, function ($query) use ($category) {
            return $query->where('category', $category);
        })
        ->when($search, function ($query) use ($search) {
            return $query->where('product_description', 'like', '%' . $search . '%');
        })
        ->get();

        // Query agronomies table
        $agronomies = agronomies::when($category, function ($query) use ($category) {
            return $query->where('category', $category);
        })
        ->when($search, function ($query) use ($search) {
            return $query->where('additional_info', 'like', '%' . $search . '%');
        })
        ->get();

        // Return the filtered results to the view
        return view('pages.home', compact('products', 'agronomies'));
    }
}
