<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = [
            [
                'author' => 'John Doe',
                'message' => 'This is my first chirp!',
                'timestamp' => now()->subMinutes(5),
            ],
            [
                'author' => 'Jane Smith',
                'message' => 'Loving this new platform!',
                'timestamp' => now()->subMinutes(10),
            ],
            [
                'author' => 'Alice Johnson',
                'message' => 'Just joined Chirper, excited to share my thoughts!',
                'timestamp' => now()->subMinutes(15),
            ],
        ];

        return view('home', ['chirps' => $chirps]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
