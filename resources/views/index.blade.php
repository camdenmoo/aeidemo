<x-template>

    <x-sidebar />

    <section id="command-line" class="page-section">

        <div class="page-header">
            <h1>Database</h1>
            <div class="clear"></div>
            <p>Select the distribution partner and date from the form to see what releases are available:</p>
            <p>Alternatively, <a href="/command-line">click here</a> to find the same information through the command line tool.</p>
        </div>


        <form method="POST" action="/form/results">
            @csrf
            <label for="partner">Distribution Partner:</label>
            <select name="partner">
                <option disabled selected>Select a disribution partner...</option>
                @foreach($partners as $partner)
                    <option value="{{$partner->id}}">{{$partner->name}}</option>
                @endforeach
            </select>

            <input type="date" name="date">

            <button type="submit">View available releases</button>
                        
        </form>
    </section>
</x-template>

