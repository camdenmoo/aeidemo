<x-template>

    <x-sidebar />

    <section id="releases" class="page-section">

        <div class="page-header">
            <h1>Releases</h1>
            <div class="clear"></div>
            <p>List of all our releases.</p>
        </div>


        <x-release-list-card :releases="$releases" />

    </section>



</x-template>