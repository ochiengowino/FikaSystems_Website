<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    public function index2()
    {
        return view('index2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about-us');
    }

    public function missionVision()
    {
        return view('pages.mission-vision');
    }

    public function enterpriseSolutions()
    {
        return view('pages.enterprise-solutions.enterprise-solutions');
    }

    public function printingImaging()
    {
        return view('pages.enterprise-solutions.printing-imaging');
    }

    public function documentManagement()
    {
        return view('pages.enterprise-solutions.document-management');
    }

    public function powerPDFstandard()
    {
        return view('pages.enterprise-solutions.power-pdf-standard');
    }

    public function powerPDFadvancedEnt()
    {
        return view('pages.enterprise-solutions.power-pdf-advanced-ent');
    }

    public function paperport()
    {
        return view('pages.enterprise-solutions.paperport');
    }

    public function powerPDFadvanced()
    {
        return view('pages.enterprise-solutions.power-pdf-advanced');
    }

    public function communicationServer()
    {
        return view('pages.enterprise-solutions.communication-server');
    }
    
    public function powerPDFmobile()
    {
        return view('pages.enterprise-solutions.power-pdf-mobile');
    }

    public function ecopy()
    {
        return view('pages.enterprise-solutions.ecopy');
    }

    public function eflow()
    {
        return view('pages.enterprise-solutions.eflow');
    }

    public function controlSuite()
    {
        return view('pages.enterprise-solutions.control-suite');
    }

    public function autoStore()
    {
        return view('pages.enterprise-solutions.auto-store');
    }

    public function printix()
    {
        return view('pages.enterprise-solutions.printix');
    }

    public function businessConnect()
    {
        return view('pages.enterprise-solutions.business-connect');
    }

    public function kofaxCapture()
    {
        return view('pages.enterprise-solutions.kofax-capture');
    }

    public function kofaxCopitrak()
    {
        return view('pages.enterprise-solutions.kofax-copitrak');
    }

    public function equitrac()
    {
        return view('pages.enterprise-solutions.equitrac');
    }

    public function express()
    {
        return view('pages.enterprise-solutions.express');
    }

    public function omnipage()
    {
        return view('pages.enterprise-solutions.omnipage');
    }

    public function outputManager()
    {
        return view('pages.enterprise-solutions.output-manager');
    }

    public function safecom()
    {
        return view('pages.enterprise-solutions.safecom');
    }

    public function psicapture()
    {
        return view('pages.enterprise-solutions.psicapture');
    }


 


    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

    public function softwareApps()
    {
        return view('pages.software-applications');
    }

    public function industries()
    {
        return view('pages.industries');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
