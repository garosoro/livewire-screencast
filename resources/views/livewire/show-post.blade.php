<div>
    <h2>
        Post:
    </h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key="{{ $post->id }}">
                    <td>{{ $post->title }}</td>
                    <td>{{ str($post->content)->words(8) }}</td>
                    <td>
                        <button type="button" wire:click="delete({{ $post->id }})"
                            wire:confirm="Estas segura?">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>