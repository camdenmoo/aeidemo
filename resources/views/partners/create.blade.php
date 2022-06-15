<x-template>

    <x-sidebar />

    <section id="partners" class="page-section">

        <div class="page-header">
            <h1>Add a new partner</h1>
            <a href="/partners">
                <button>Back</button>
            </a>
            <div class="clear"></div>
            <p>Fill out the form below to add a new partner.</p>
        </div>

        <div class="form-card">
            <form method="POST" action="/partners">
                @csrf

                <label for="name">
                    Name:
                </label>
                @error('name')
                    <p class="form-error">{{$message}}</p>
                @enderror
                <input type="text" name="name" placeholder="Partner name" value="{{old('company')}}" autofocus>
                

                <label for="distribution-types">
                    Distribution types:
                </label>
                
                @foreach($distribution_types as $distribution_type)
                    <input type="radio" name="distribution_types" value="{{$distribution_type->id}}"> {{$distribution_type->name}}<br>
                @endforeach

                @php
                    $all_distribution_types = [];
                    foreach($distribution_types as $distribution_type){
                        $all_distribution_types[] = $distribution_type->id;
                    }
                    $all_distribution_types = implode('|', $all_distribution_types);
                    
                @endphp

                <input type="radio" name="distribution_types" value="{{$all_distribution_types}}" checked> All of the above
                
                <button type="submit">Add partner</button>
            
            </form>
            
        </div>

    </section>



</x-template>