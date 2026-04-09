<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class SeatController extends Controller
{
    private $database;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(storage_path('app/firebase.json'))
            ->withDatabaseUri('https://smart-seating-management-default-rtdb.firebaseio.com');

        $this->database = $factory->createDatabase();
    }

    //  Ambil data dari Firebase
    public function index()
    {
        $seats = $this->database->getReference('seats')->getValue();

        return view('seats.index', compact('seats'));
    }

    //  Toggle kursi di Firebase
    public function toggle($id)
    {
        $seat = $this->database->getReference('seats/'.$id)->getValue();

        $newStatus = $seat['status'] === 'available' ? 'occupied' : 'available';

        $this->database->getReference('seats/'.$id)->update([
            'status' => $newStatus
        ]);

        return redirect()->back();
    }

    public function dashboard()
    {
        $seats = $this->database->getReference('seats')->getValue();

        return view('dashboard', compact('seats'));
    }

    public function update(Request $request)
    {
        $this->database->getReference('seats/' . $request->seat_id)
            ->update([
                'status' => 'occupied',
                'name' => $request->name,
                'orders' => $request->orders,
            ]);

        return back();
    }

    public function clear($id)
    {
        $this->database->getReference('seats/' . $id)
            ->update([
                'status' => 'available',
                'name' => null,
                'orders' => null,
            ]);

        // kalau request dari AJAX
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back();
    }
}