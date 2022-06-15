<x-template>

    <x-sidebar />

    <section id="songs" class="page-section">

        <div class="page-header">
            <h1>Songs</h1>
            <div class="clear"></div>   
            <p>Here's a list of all the songs we are working with:</p>
        </div>

        <div class="song-list-card">
            <div class="data-table">
                <div class="header">
                    <div class="col">Song title</div>
                    <div class="col">Artist</div>
                    <div class="col">Duration</div>
                    <div class="col">Genre</div>
                    <div class="col"></div>
                </div>
                @foreach($songs as $song)
                    <div class="row">
                        <div class="col">
                            {{$song->name}}
                        </div>
                        <div class="col">
                            <a href="/artists/{{$song->artist->hex}}">{{$song->artist->name}}</a> 
                        </div>
                        <div class="col">
                            {{$song->duration}}
                        </div>
                        <div class="col">
                            {{$song->genre->name}}
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="/releases"><button class="sm">View releases</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        

    </section>

</x-template>