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
                    <div class="col">Distributions</div>
                    <div class="col">Partners</div>
                    <div class="col"></div>
                </div>
                @foreach($songs as $song)
                    <div class="row">
                        <div class="col">
                            {{$song->name}}
                        </div>
                        <div class="col">
                            {{$song->artist->name}}
                        </div>
                        <div class="col">
                            @foreach($song->releases as $release)
                                @foreach($release->available_distributions($release) as $distribution_type)
                                    <p>{{$distribution_type->name}}</p>
                                @endforeach
                            @endforeach
                        </div>
                        <div class="col">
                            @foreach($song->releases as $release)
                                @foreach($release->valid_partners($release) as $valid_partner)
                                    <p>{{$valid_partner->name}}</p>
                                @endforeach
                            @endforeach
                        </div>
                        <div class="col" style="text-align: right;">
                            <button class="sm">View releases</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        

    </section>

</x-template>