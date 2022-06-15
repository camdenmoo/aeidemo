<x-template>

    <x-sidebar />

    <section id="partners" class="page-section">

        <div class="page-header">
            <h1>Partners</h1>
            <a href="/partners/create">
                <button>Add new partner</button>
            </a>
            <div class="clear"></div>
            <p>List of distribution partners we currently work with and their available methods of music distribution.</p>
            <p>You can also see how many song releases have been distributed by each partner.</p>
        </div>

        @foreach($partners as $partner)
            <x-partner-card :partner="$partner" />
        @endforeach

    </section>

</x-template>