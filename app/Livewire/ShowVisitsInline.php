<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Services\VisitService;

class ShowVisitsInline extends Component
{
    use WithPagination , WithoutUrlPagination; // Include the WithPagination trait

    public $search = ''; // Property for search functionality
    public $modalVisible = false; // Property to control modal visibility
    public ?int $visitId = null;
    public bool $aboutToSetVisitToDone  = false;
    public bool $aboutToConfirmVisit = false;

    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search query changes
    }

    private function openModal()
    {
        $this->modalVisible = true; // Change property value to show modal
    }

    public function toRemind(int $id ){
        $this->visitId = $id ;
        $this->openModal() ;
    }

    public function toConfirm(int $id ){
        $this->visitId = $id ;
        $this->aboutToSetVisitToDone= true ;
        $this->openModal() ;
    }

    public function setVisitToDone(int $id ){
        $this->visitId = $id ;
        $this->aboutToConfirmVisit= true ;
        $this->openModal() ;
    }

    public function closeModal()
    {
        $this->visitId = Null;
        $this->aboutToConfirmVisit= false ;
        $this->aboutToSetVisitToDone= false ;
        $this->modalVisible = false; // Change property value to show modal
    }

    // Optionally, you can add methods to handle page changes
    public function gotoPage($page)
    {
        $this->setPage($page);
    }

    public function render()
    {

        // $posts = (new VisitService())->getPaginated() ;

        $collection =  collect([
            (object) ['id' => 1, 'visitor_name' => "Produit très satisfaisant!", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 3, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 4, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 5, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
            (object) ['id' => 3, 'visitor_name' => "Je ne recommande pas ce produit.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16"],
        ]);

        $posts = $collection->paginate(3);

        return view('livewire.show-visits-inline', [
            'visits' => $posts,
        ]);
    }

}
