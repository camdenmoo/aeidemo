<x-template>

    <x-sidebar />

    <section id="artists" class="page-section">

        <div class="page-header">
            <h1>View Artist</h1>
            <div class="clear"></div>
            <p>Here you can view the songs, release dates, distributions and partners for this artist.</p>
            
        </div>

        <x-artist-card :artist="$artist" />

    </section>



</x-template>