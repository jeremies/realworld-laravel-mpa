@forelse ($articles as $article)
    @include('_article')
@empty
    <p class="p-4">No articles yet.</p>
@endforelse

{{ $articles->links() }}
