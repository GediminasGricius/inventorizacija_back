<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Item::with('user')->get();
        /*
        foreach ($items as $item){
            if ($item->user != null){

            }
        }
        */
        return $items;
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
        $item=new Item();
        $item->no=$request->no;
        $item->name=$request->name;
        $item->location=$request->location;
        $item->user_id=$request->user_id;
        $item->save();
        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {

        $item->no=$request->no;
        $item->name=$request->name;
        $item->location=$request->location;
        $item->user_id=$request->user_id;
        $item->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
       $item->delete();
       return true;
    }
}
