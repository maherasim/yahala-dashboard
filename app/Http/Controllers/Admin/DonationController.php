<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use App\Models\MongoDonation;
use App\Models\MongoOrganization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Models\Organization;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $donations = MongoDonation::with('organization')->orderBy("updated_at", "DESC")->get();
        $organizations = MongoOrganization::where("status", true)->get();
        return view("content.donations.index", compact("donations", "organizations"));
    }
    // public function index()
    // {
    //     $donations = Donation::orderBy("updated_at", "DESC")->get();
    //     $organizations = Organization::where("status", 1)->get();
    //     return view("content.donations.index", compact("donations", "organizations"));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::where("status", 1)->get();
        return view("content.donations.create", compact("organizations"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonationRequest $request)
    {
        $validated = $request->validated();

        $validated['tags'] = array_map(function ($item) {
            return $item->value;
        }, json_decode($validated['tags']));

        $validated['start_date'] .= ' 00:00:00';
        $validated['end_date'] .= ' 23:59:59'; 

        $donation = Donation::create($validated);

        return back()->with("success", "Donation successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation = Donation::find($id);
        return view("content.donations.show", compact("donation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = Donation::find($id);
        $organizations = Organization::where("status", 1)->get();
        return view("content.donations.include.edit_form", compact("donation", "organizations"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonationRequest $request, $id)
    {
        $validated = $request->validated();

        $validated['tags'] = array_map(function ($item) {
            return $item->value;
        }, json_decode($validated['tags']));

        $validated['start_date'] .= ' 00:00:00';
        $validated['end_date'] .= ' 23:59:59'; 

        $donation = Donation::find($id);
        $donation->fill($validated);
        $donation->save();

        return back()->with("success", "Donation successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = Donation::find($id);
        $donation->delete();

        return back()->with("success", "Donation successfully deleted.");
    }
    public function add_donation(Request $request) {
        $donation                   = new MongoDonation();
        $donation->organization_id  = $request->input('organization_id');
        $donation->title            = $request->input('title');
        $donation->paypal           = $request->has('paypal');
        $donation->gpay             = $request->has('gpay');
        $donation->payment_office   = $request->has('payment_office');
        $donation->others           = $request->has('others');
        $donation->type             = $request->input('donation_type');
        $donation->status           = true;
        if($request->input('donation_type') === 'Limited Donation') {
            $donation->amount           = $request->input('amount');
            $donation->currency         = $request->input('currency');
        } 
        
        if($request->input('donation_type') === 'Unlimited Donation') {
            
            $donation->start_date = $request->input('start_date');
            $donation->expired_date = $request->input('expired_date');
        }
        
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $imagePath = $file->storeAs('donations/banner', $originalFileName, 'public'); 
                $donation->image = $imagePath;
                
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        } else {
            return back()->with('error', 'No file was uploaded');
        }
        
        if($donation->save()) {
            return redirect()->back()->with('success', 'Your Donation has been created');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy_donation($id) {
        $donation = MongoDonation::findOrFail($id);
        $donation->delete();
    
        return redirect()->route('donations.index')->with('success', 'Donation deleted successfully');
    }

    public function edit_donation(Request $request, $id) {
        $donation = MongoDonation::findOrFail($id);
        $donation->organization_id  = $request->input('organization_id');
        $donation->title            = $request->input('title');
        $donation->paypal           = $request->has('paypal');
        $donation->gpay             = $request->has('gpay');
        $donation->payment_office   = $request->has('payment_office');
        $donation->others           = $request->has('others');
        $donation->type             = $request->input('donation_type');
        $donation->status           = true;

        if($request->input('donation_type') === 'Limited Donation') {
            $donation->amount           = $request->input('amount');
            $donation->currency         = $request->input('currency');
        } 
        
        if($request->input('donation_type') === 'Unlimited Donation') {
            $donation->start_date = $request->input('start_date');
            $donation->expired_date = $request->input('expired_date');
        }

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $imagePath = $file->storeAs('donations/banner', $originalFileName, 'public'); 
                $donation->image = $imagePath;
                
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        }

        if($donation->save()) {
            return redirect()->back()->with('success', 'Your Donation has been created');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
