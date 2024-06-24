<div>
    <h2>New Post</h2>
    {{-- <div x-data="{ count: 0 }">
        <span x-text="count"></span>
        <button type="button" x-on:click="count++">+</button>
    </div> --}}
    <div x-text="$wire.title"></div>
    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>
        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            <small>
                Characters:<span x-text="$wire.content.length"></span>
            </small>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>
        <button type="submit">Save</button>
    </form>
</div>
