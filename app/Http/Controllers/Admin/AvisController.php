<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Services\AvisService;
use Illuminate\Http\Request;
use Illuminate\Http\Avis;
use App\Models\Review;

class AvisController extends Controller
{
    protected $avisService;
    //
    public function __construct(AvisService $avisService)
    {

        $this->avisService = $avisService;
    }


    
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

   //public function avisReponse($post)
   //{

   //    // Show form to edit an existing post
   //    return view('admin.avis.create', ['avisId' => $post]);
   //}
    public function updateColumn($id){
        $avis = Review::find($id);
        //print("<h1>".$avis."</h1>");
        if($avis->approuve == "oui"){
            $avis->approuve = "non";
        }else{
            $avis->approuve = "oui";
        }
        
        $avis->update();
        return view('admin.avis.index');
    }
    public function avisReponse($post){
        
        return view('admin.avis.create',['avisId' => $post]);
    }

}
