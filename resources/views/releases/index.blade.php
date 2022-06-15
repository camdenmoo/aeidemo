<x-template>

    <x-sidebar />

    <section id="releases" class="page-section">

        <div class="page-header">
            <h1>Releases</h1>
            <div class="clear"></div>
            <p>List of all our releases.</p>
        </div>


        <div class="release-list-card">
            <div class="data-table">
                <div class="header">
                    <div class="col">Song title</div>
                    <div class="col">Artist</div>
                    <div class="col">Distributions</div>
                    <div class="col">Partners</div>
                    <div class="col">Start release</div>
                    <div class="col">End release</div>
                </div>
                @foreach($releases as $release)
                    <div class="row">
                        <div class="col">
                            {{$release->song->name}}
                        </div>
                        <div class="col">
                            {{$release->artist->name}}
                        </div>
                        <div class="col">
                            @foreach($release->available_distributions($release) as $distribution_type)
                                <p>{{$distribution_type->name}}</p>
                            @endforeach
                        </div>
                        <div class="col">
                            @foreach($release->valid_partners($release) as $valid_partner)
                                <p>{{$valid_partner->name}}</p>
                            @endforeach
                        </div>
                        <div class="col">
                            @unless(empty($release->start_date))
                            {{date('d M Y', strtotime($release->start_date))}}
                        @else
                            {{'Not set'}}
                        @endunless
                        </div>
                        <div class="col">
                            @unless(empty($release->end_date))
                                {{date('d M Y', strtotime($release->end_date))}}
                            @else
                                @if(empty($release->start_date))
                                    {{'Not set'}}
                                @else
                                    {{'Ongoing'}}
                                @endif
                            @endunless
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>



</x-template>