<?php

namespace App\Services;

use App\Models\Comment;
use App\Models\Post;

class CommentService
{
    public function getAllComments()
    {
        return Comment::all();
    }

    // public function getFindedComments(String $search){
    //     // Query Comments with pagination, optionally filtering by search term
    //     return Comment::where('title', 'like', '%' . $search . '%')
    //     ->paginate(10); // Adjust the number of items per page as needed
    // }

    public function getComment($id)
    {
        return Comment::findOrFail($id);
    }

    public function createComment(array $data)
    {
        return Comment::create($data);
    }

    public function updateComment($id, array $data)
    {
        $Comment = $this->getComment($id);
        $Comment->update($data);
        return $Comment;
    }

    public function deleteComment($id)
    {
        $Comment = $this->getComment($id);
        $Comment->delete();
    }

    public function getFromPost(Post $post)
    {
        return Comment::where('post_id', $post->id)->get();
    }

}
