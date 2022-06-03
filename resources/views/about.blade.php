<x-navbar>
    @slot('page', "about")
</x-navbar>

<x-app-layouts>

    @slot('title', "About Me")

    @slot('content')
        <img src="" alt="">
    @endslot

</x-app-layouts>