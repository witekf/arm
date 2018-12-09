<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\ServiceKind;



class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.services', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_kinds = ServiceKind::all();
        return view('services.addservice', ['service_kinds'=>$service_kinds]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'key'=>'required'
        ]);
    
        Service::create([
        //w ktorym miejscu w bazie z ktorego pola formularza
            'name'=>$request->get('name'),
            'key'=>$request->get('key'),
            'service_kind_id'=>$request->get('service-kind')
        ]);
    return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $service_kinds = ServiceKind::all();
        return view('services.editservice', ['service'=>$service, 'service_kinds'=>$service_kinds]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'key'=>'required'
            
        ]);

        $service = Service::find($id);

        //z lewej to co w bazie i podstawiamy to co z prawej czyli co w formularzu
        $service->name = $request->get('name');
        $service->key = $request->get('key');
        $service->service_kind_id = $request->get('service-kind');
         

        $service->save();
        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/services'); 
    }
}
