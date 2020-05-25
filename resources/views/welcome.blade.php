@extends('layouts.app')

@section('content')
    <div class="container">

{{--        config for search--}}
        <ais-index
            app-id="9UDWIDWIPT"
            api-key="b74485d25a02461e9d9e43eaf75fb715"
            index-name="people">

{{--            search engine input--}}

            <ais-search-box
            placeholder="Search..."
            submit-title="Search"
            reset-title="string"
            :autofocus="boolean"
            :show-loading-indicator="boolean"
            :class-names="object"
            ></ais-search-box>

            {{--            result can preview from scope result and fetch as following--}}
            <ais-results class="row">
                    <template scope="{result}" >

                        <div class="col-12 col-md-4 mb-4">
                            <div class="card">
                                <img :src="result.photo" class="card-img-top" alt="Card img cap">
                                <div class="card-body">
                                    <h5 class="card-title">@{{ result.first_name }} @{{ result.last_name }}</h5>
                                    <p class="card-text">
                                        <strong>@{{ result.title }}</strong>
                                        <em>@{{ result.email }}</em>
                                        <address>
                                        <strong>@{{ result.company }}</strong>
                                        @{{ result.address }}<br>
                                        @{{ result.address_2 }} <br>
                                        @{{ result.city }}, @{{ result.state }} @{{ result.zip_code }}<br>
                                        <abbr title="phone">P:</abbr> @{{ result.phone }}
                                        </address>
                                    </p>
                                    <a :href="result.id" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>

                    </template>


            </ais-results>

            <ais-powered-by></ais-powered-by>

        </ais-index>

    </div>
@endsection

