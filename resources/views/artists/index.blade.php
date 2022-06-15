<x-template>

    <x-sidebar />

    <section id="artists" class="page-section">

        <div class="page-header">
            <h1>All Artists</h1>
            <div class="clear"></div>
            <p>Here you can view each artists' songs, release dates, distributions and partners.</p>
            
        </div>

        @foreach($artists as $artist)
            <x-artist-card :artist="$artist" />
        @endforeach

    </section>



</x-template>