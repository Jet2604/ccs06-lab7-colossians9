<h1>{{ $book_version }}</h1>
<h2>{{ $book_name }}</h2>
<h3>Chapter {{ $chapter_number  }}</h3>

<pre>
@include('colossians.chapter' . $chapter_number  )    
</pre>