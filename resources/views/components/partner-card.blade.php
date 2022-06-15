@props(['partner'])
<div class="partner-card">
    <div class="image">
        @if(empty($partner->image))
            <img src="{{asset('/images/no-image.png')}}" alt="">  
        @else
            <img src="{{asset('/images/partners/'.$partner->image)}}" alt=""> 
        @endif
    </div>
    <div class="info">
        <h3>{{$partner->name}}</h3>
        <p>Distributes music via 
            @foreach($partner->available_distribution_types($partner) as $distribution_type)
               <a href="/distribution-types">{{$distribution_type->name}}</a>
            @endforeach
        </p>
        <p>{{$partner->count_distributions($partner)}} song releases distributed by this partner.</p>
    </div>
</div>      