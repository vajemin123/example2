<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $result = Activity::all();
        $data = ['items' => $result
    ];
        return view('activity.index', $data);
    }
    public function create($name)
    {
        $actually = new Activity();
        $actually->name = $name;
        $actually->save();
    }
    public function delete($id)
    {
        $actually = Activity::find($id);
        $actually->delete();
        return redirect('/กิจกรรม');
    }
}
