<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use App\Services\CommentService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Comments extends Component
{
    public Post $post;
    public Collection $comments;

    protected $listeners = [
        'commentCreated' => 'commentCreated',
        'commentDeleted' => 'commentDeleted',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->comments = $this->getComments();
    }

    public function render()
    {
        return view('livewire.comments', ['comments' => $this->comments]);
    }

    public function commentCreated(int $id)
    {
        $comment = (new CommentService())->getComment($id);
        if (!$comment->parent_id) {
            $this->comments->prepend($comment);
        }
    }

    private function getComments()
    {
        return (new CommentService())->getFromPost($this->post);
    }
}
