<x-template>

    <x-sidebar />

    <section id="database" class="page-section">

        <div class="page-header">
            <h1>Search - Command Line</h1>
            <div class="clear"></div>
            <p>Select the distribution partner and date from the form to see what releases are available:</p>
            <p>Alternatively, <a href="/">click here</a> to search releases using a form.</p>

            <p style="margin-top:20px;">The format for you text search should be "partner_name date".</p>
            <p>For example "iTunes 1st Jun 2021"</p>
        </div>

      

        <form method="POST" action="/command-line/results">
            @csrf
            <label for="search_terms">Text input search:</label>
            <input type="text" name="search_terms" style="width:100%;">

            <button type="submit">View available releases</button>
                        
        </form>

    </section>

</x-template>

