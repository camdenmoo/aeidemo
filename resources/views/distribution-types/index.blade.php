<x-template>

    <x-sidebar />

    <section id="partners" class="page-section">

        <div class="page-header">
            <h1>Distribution Types</h1>
            <div class="clear"></div>
            <p>List of our methods of distribution.</p>
            <p>You can also see how many song releases have been distributed by each method.</p>
        </div>

        @foreach($distribution_types as $distribution_type)
            <x-distribution-type-card :distribution_type="$distribution_type" />
        @endforeach

    </section>

</x-template>