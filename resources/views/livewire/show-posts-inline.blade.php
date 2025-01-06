<div>
    <input type="text" wire:model="search" placeholder="Search articles..." />

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('blogs.show', $post->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('admin.articles.edit', $post->id) }}" class="btn btn-warning">Modifier</a>

                        @livewire('button-component',['articleId' => $post->id]) <!-- Include your Livewire component -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    {{ $posts->links('custom-pagination') }}
</div>
