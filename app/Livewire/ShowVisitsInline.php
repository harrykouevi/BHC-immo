<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Services\VisitService;
// use App\Services\NotificationService;
use Illuminate\Support\Facades\Validator; // Importing Validator
// use App\Services\ReminderDetails ;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisitReminderMail;
use App\Mail\VisitConfirmationMail ;
use App\Mail\VisitDoneMail;

class ShowVisitsInline extends Component
{
    use WithPagination , WithoutUrlPagination; // Include the WithPagination trait

    public $search = ''; // Property for search functionality
    public $modalVisible = false; // Property to control modal visibility
    public ?int $visitId = Null;
    public $selectedVisitor = Null ;
    public bool $aboutToSetVisitToDone  = false;
    public bool $aboutToConfirmVisit = false;
    public bool $aboutToSendReminder = false;

    //inputs
    public $preferredDate = Null;
    public $scheduledTime = Null;
    public $comments = Null;

    //
    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $collection ;

    public function mount()
    {
        $this->collection =  collect([
            (object) ['id' => 1, 'visitor_name' => "Produit très satisfaisant!", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 2, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 3, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 4, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 5, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 6, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 7, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 8, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 9, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 10, 'visitor_name' => "Moyennement satisfait.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
            (object) ['id' => 11, 'visitor_name' => "Je ne recommande pas ce produit.", 'visitor_email' => 'harry.kouevi@gmail.com','host_name' => "harry" , "visit_date" => "2025-12-16" , "scheduled_time" => Null , "remind_count" => 0 , "state" => "pending"],
        ]);
    }

    // public function updatingSearch()
    // {
    //     $this->resetPage(); // Reset pagination when search query changes
    // }

    private function openModal()
    {
        $this->modalVisible = true; // Change property value to show modal
    }

    private function resetPage()
    {
        $this->visitId = Null;
        $this->selectedVisitor = Null;
        $this->aboutToConfirmVisit= false ;
        $this->aboutToSetVisitToDone= false ;
        $this->aboutToSendReminder= false ;
        $this->preferredDate = Null;
        $this->scheduledTime = Null;
        $this->comments  = Null; // Change property value to show modal
    }

    private function getTheSelectedVisitor(int $id ){
        $this->visitId = $id ;
        return   $this->collection->firstWhere('id', $id);
    }

    public function toRemind(int $id ){
        $this->selectedVisitor = $this->getTheSelectedVisitor($id ) ;
        $this->aboutToSendReminder = true ;
        $this->openModal() ;
    }

    public function toConfirm(int $id ){
        $this->selectedVisitor = $this->getTheSelectedVisitor($id ) ;
        $this->aboutToConfirmVisit= true ;
        $this->preferredDate = $this->selectedVisitor->visit_date;
        $this->scheduledTime = $this->selectedVisitor->scheduled_time;
        $this->openModal() ;
    }

    public function setVisitToDone(int $id ){
        $this->selectedVisitor = $this->getTheSelectedVisitor($id ) ;
        $this->aboutToSetVisitToDone= true ;
        $this->openModal() ;
    }

    public function closeModal()
    {
        $this->modalVisible = false; // Change property value to show modal
        //inputs

        $this->resetPage();
    }

    // Optionally, you can add methods to handle page changes
    public function gotoPage($page)
    {
        $this->setPage($page);
    }

    public function confirm() {

        try {
            // Validate input for post creation or update
            $validatedData = Validator::make(
                [
                    'preferred_date' => $this->preferredDate,
                    'scheduled_time' => $this->scheduledTime,
                ],
                [
                    'preferred_date' => 'required|date',
                    'scheduled_time' => 'nullable|date_format:H:i',
                ],
                ['required' => 'The :attribute field is required']
            )->validate();

            // $this->visitsService = new VisitService();
            // // Update existing annonce
            // $this->visitsService->update($this->visitId, [
            //     'preferred_date' => $this->preferredDate,
            //     'scheduled_time' => $this->scheduledTime,
            // ]);

            $visitId = $this->visitId;
            $newVisitDate = $this->preferredDate ;
            $time = $this->scheduledTime ;

            $this->collection->map(function ($item) use ($newVisitDate , $visitId ,  $time) {
                if ($item->id == $visitId) { // Check for the specific item to update
                    $item->visit_date = $newVisitDate; // Update visit_date
                    $item->scheduled_time =  $time;
                }
                return $item; // Return the modified item
            });


            $visitor = $this->getTheSelectedVisitor($visitId );
            // dd($visitor) ;


            $this->successMessage = 'demande de visite mis à jour avec succès.';

            // Envoyer l'email
            Mail::to('harry.kouevi@gmail.com')->send(new VisitConfirmationMail($visitor->visitor_name, $visitor->visit_date , $visitor->scheduled_time));

            // (new NotificationService())->sendScheduleConfimationMessage( 'harry.kouevi@gmail.com' , new ReminderDetails($visitor->visitor_name, $this->preferredDate , $this->scheduledTime) );
            // Reset fields after saving
            $this->closeModal();

        }catch (Exception $e) {
            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }

    }


    public function remind() {


        try {
            // Validate input for post creation or update
            $validatedData = Validator::make(
                [
                    'comments' => $this->comments,
                ],
                [
                    'comments' => 'nullable|text',
                ]
            )->validate();

            // $this->visitsService = new VisitService();
            // // Update existing annonce
            // $this->visitsService->update($this->visitId, [
            //     'remind_count' => $this->selectedVisitor->remind_count ++,
            // ]);

            $visitId = $this->visitId;

            $this->collection->map(function ($item) use ( $visitId ) {
                if ($item->id == $visitId) { // Check for the specific item to update
                    $item->remind_count ++ ;
                }
                return $item; // Return the modified item
            });

            $visitor = $this->getTheSelectedVisitor($visitId );

            $this->successMessage = 'rappel envoyé avec succès.';

            // Envoyer l'email
            Mail::to('harry.kouevi@gmail.com')->send(new VisitReminderMail($visitor->visitor_name, $visitor->visit_date , $visitor->scheduled_time));

            // (new NotificationService())->sendRemindMessage( 'harry.kouevi@gmail.com' , new ReminderDetails($visitor->visitor_name, $visitor->visit_date , $visitor->scheduled_time) );
            // Reset fields after saving
            $this->closeModal();

        }catch (Exception $e) {
            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }

    }

    public function visitDone() {

        try {
            // Validate input for post creation or update
            $validatedData = Validator::make(
                [
                    'comments' => $this->comments,
                ],
                [
                    'comments' => 'nullable|text',
                ]
            )->validate();

            // $this->visitsService = new VisitService();
            // // Update existing annonce
            // $this->visitsService->update($this->visitId, [
            //     'comments' => $this->comments,
            // ]);
            $visitId = $this->visitId;
            $comment = $this->comments ;
            $this->collection->map(function ($item) use ( $visitId ,$comment) {
                if ($item->id == $visitId) { // Check for the specific item to update
                    $item->comments =  $comment ;
                    $item->state =  'done';
                }
                return $item; // Return the modified item
            });

            $visitor = $this->getTheSelectedVisitor($visitId );

            $this->successMessage = 'rappel envoyé avec succès.';

            // Envoyer l'email
            Mail::to('harry.kouevi@gmail.com')->send(new VisitDoneMail($visitor->visitor_name, $visitor->visit_date , $visitor->scheduled_time));
            // (new NotificationService())->sendGreatMessage( 'harry.kouevi@gmail.com' , new ReminderDetails($visitor->visitor_name, $visitor->visit_date , $visitor->scheduled_time) );
            // Reset fields after saving
            $this->closeModal();

        }catch (Exception $e) {
            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }

    }

    public function render()
    {
        $posts = $this->collection->paginate(3);
        return view('livewire.show-visits-inline', [
            'visits' => $posts,
        ]);
    }

}
