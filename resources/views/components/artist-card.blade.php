@props(['artist'])
<div class="artist-card">

    <div class="image">
        <img src="{{asset('/images/artists/'.$artist->image)}}" alt="">
    </div>

    <div class="info">
        <div class="artist-details">
            <h3>{{$artist->name}}</h3>
            <p>Songs: {{$artist->song_count}} | Releases: {{$artist->release_count}}
            </p>
            <button class="sm toggle-artist-song-list" rel="{{$artist->hex}}">Songs & Releases</button>
        </div>

        <div id="artist-song-list-{{$artist->hex}}" class="artist-song-list" style="display: none;">
            @foreach($artist->songs as $song)
                <div class="asl-card">
                    <h3>Song title: {{$song->name}}</h3>

                    @foreach($song->releases as $release)
                    
                        <div class="list-row">
                            <div class="left-col">
                                <p>Release from</p>
                            </div>
                            <div class="right-col">
                                <p>
                                    @unless(empty($release->start_date))
                                        {{date('d F Y', strtotime($release->start_date))}}
                                    @else
                                        {{'No release date set.'}}
                                    @endunless
                                </p>
                            </div>
                        </div>
                        
                        <div class="list-row">
                            <div class="left-col">
                                <p>Release until</p>
                            </div>
                            <div class="right-col">
                                <p>
                                    @unless(empty($release->end_date))
                                        {{date('d F Y', strtotime($release->end_date))}}
                                    @else
                                        {{'Ongoing'}}
                                    @endunless
                                </p>
                            </div>
                        </div>

                        <div class="list-row">
                            <div class="left-col">
                                <p>Distribution</p>
                            </div>
                            <div class="right-col">
                                @foreach($release->available_distributions($release) as $distribution_type)
                                    <p>{{$distribution_type->name}}</p>
                                @endforeach
                            </div>
                        </div>

                        <div class="list-row partners">
                            <div class="left-col">
                                <p>Partners for distribution</p>
                            </div>
                            <div class="right-col">
                                
                                @foreach($release->valid_partners($release) as $valid_partner)
                                    <p>{{$valid_partner->name}} ({{strtolower($valid_partner->get_distribution_type_names($valid_partner))}})</p>
                                @endforeach

                            </div>
                        </div>

                    @endforeach
                    <div class="list-row-spacer"></div>
                </div>
            @endforeach
        </div>


        

    </div>

</div>