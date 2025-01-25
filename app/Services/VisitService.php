<?php

namespace App\Services;

use App\Models\Visit;

class VisitService
{
    public function getAll()
    {
        return Visit::get();
    }

    public function getPaginated(){
        // Query visits with pagination, optionally filtering by search term
        return Visit::paginate(9); // Adjust the number of items per page as needed
    }

    public function get($id,Array $relations=[])
    {
        return Visit::findOrFail($id);
        if(!empty($relations)){
            foreach($relations as $relation){
                if (!is_string($relation)) {
                    throw new InvalidArgumentException('All elements in relations must be strings.');
                }
            }
            $e = implode(", ", $relations) ;
            return Visit::with($e)->findOrFail($id);
        }else{
            return Visit::findOrFail($id);
        }

    }

    public function create(array $data)
    {
        // Créer l'visit et associer l'utilisateur connecté
        $visit = new Visit();
        $visit->visitor_name = $data['visitor_name'];
        $visit->visitor_email = $data['visitor_email'];
        $visit->host_name = $data['host_name'];
        $visit->save();
        return $visit ;
    }

    public function update($id, array $data)
    {
        $visit = $this->get($id);
        $visit->update($data);
        return $visit;
    }

    public function delete($id)
    {
        $visit = $this->get($id);
        $visit->delete();
    }

}
