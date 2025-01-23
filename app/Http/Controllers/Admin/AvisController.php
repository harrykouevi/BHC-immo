<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvisController extends Controller
{

    
    public function index()
    {
       
         //$posts = $this->ArticleService->getAll();
        return view('admin.avis.index');
    }
    
    public function show($id)
    {
        // Display a single post using the service
        return view('admin.avis.index', ['post' => $this->AvisService->get($id)]);
    }

    public function edit($post)
    {

        // Show form to edit an existing post
        return view('admin.avis.create', ['avisId' => $post]);
    }

}
