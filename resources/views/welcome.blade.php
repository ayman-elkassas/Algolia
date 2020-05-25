@extends('layouts.app')

@section('content')
    <div class="container">

        <ais-index
            app-id="9UDWIDWIPT"
            api-key="b74485d25a02461e9d9e43eaf75fb715"
            index-name="people">

            <ais-search-box></ais-search-box>
            <ais-results>

                <template scope="{result}">
                    @{{ result.first_name }}
                </template>

            </ais-results>

        </ais-index>

    </div>
@endsection

