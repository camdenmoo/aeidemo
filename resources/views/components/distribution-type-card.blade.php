@props(['distribution_type'])
<div class="partner-card">
    <div class="image">
        @if(empty($distribution_type->image))
            <img src="{{asset('/images/no-image.png')}}" alt="">  
        @else
            <img src="{{asset('/images/distribution-types/'.$distribution_type->image)}}" alt=""> 
        @endif
    </div>
    <div class="info">
        <h3>{{$distribution_type->name}}</h3>
        <p>This method is used by <a href="/partners">{{$distribution_type->get_partners($distribution_type)}}</a></p>
        <p>{{$distribution_type->count_distributions($distribution_type)}} song releases use this distribution method.</p>
    </div>
</div>      