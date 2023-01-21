<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accueil()
    {
        return view('accueil.index');
    }

    public function actualites()
    {
        // $news = News::latest()->get();
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        if (request('search')) {
            $search = News::where('libelle', 'like', '%' . request('search') . '%')->get();
            if (!isset($search)) {
                $message = "Aucune activité trouvée !";
            } else {
                $message = "";
            }
            return view('actualites.index', compact('data', 'search', 'message'));
        } else {
            $news = News::latest()->paginate(10);
            return view('actualites.index', compact('news', 'data'));
        }

    }

    public function apropos()
    {
        return view('apropos.index');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function services()
    {
        return view('services.index');
    }
    public function mission1()
    {
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        return view('services.missions.mission1', compact('data'));
    }
    public function mission2()
    {
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        return view('services.missions.mission2', compact('data'));
    }
    public function mission3()
    {
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        return view('services.missions.mission3', compact('data'));
    }
    public function mission4()
    {
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        return view('services.missions.mission4', compact('data'));
    }
    public function mission5()
    {
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        return view('services.missions.mission5', compact('data'));
    }
    public function mission6()
    {
        $data = News::select('*')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        return view('services.missions.mission6', compact('data'));
    }
}