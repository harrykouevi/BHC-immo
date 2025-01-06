<?php
namespace App\Livewire;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentCreate extends Component
{
    public ?User $user = null;
    public string $comment = '';
    public int $postId;

    protected array $rules = [
        'comment' => 'required|string',
    ];

    public function mount(int $postId)
    {
        $this->postId = $postId;
    }

    public function submit()
    {
        $this->validate();

        // Create a new comment
        Comment::create([
            'body' => $this->comment,
            'user_id' => Auth::id(),
            'post_id' => $this->postId,
        ]);

        // Reset comment input
        $this->comment = '';

        // Emit event to update comments list
        $this->emit('commentCreated', $newComment->id);
    }

    public function render()
    {
        return view('livewire.comment-create');
    }
}
