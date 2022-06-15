<x-template>

    <x-sidebar />

    <section id="command-line" class="page-section">

        <div class="page-header">
            <h1>Results</h1>
            <div class="clear"></div>
            <p>Listing releases available on <b><u>{{$search_partner->name}}</u></b> from <b><u>{{date('d M Y', strtotime($search_date))}}</u></b>.</p>
            <p><a href="/">Click here</a> to perform another search.</p>
        </div>


        

        <x-release-list-card :releases="$releases" />
    </section>
</x-template>

