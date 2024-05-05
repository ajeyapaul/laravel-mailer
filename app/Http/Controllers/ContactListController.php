<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactListRequest;
use App\Http\Requests\UpdateContactListRequest;
use App\Models\ContactList;

class ContactListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contcat-lists.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactList $contactList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactList $contactList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactListRequest $request, ContactList $contactList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactList $contactList)
    {
        //
    }
}
