@extends('layout.call_page')
@section('content')

<div class="center" id="live-page">
    <h5>Department:{{$queue->service->name}}</h5>    
    <div v-if="token?.id">
        <h1 style="color: #000">Your Token: {{$queue->letter}} {{$queue->number}}</h1>
        <!-- <p>Please proceed to counter: @{{token.counter?.name}}</p> -->
        <!-- <h3>@{{getStatus()}}</h3> -->
        <h2>Current Token: @{{lastToken.token_letter}} @{{lastToken.token_number}}</h2>
        <h2>Average Time: @{{averageTime}}</h2>
        <!-- <div v-for="t in called_tokens">
            <div class="flex">
                <h3>@{{t.token_letter}} @{{t.token_number}}</h3>
                <h4>@{{t.served_time}}</h4>
            </div>
        </div> -->
    </div>
    <div v-else>
        <h3>ERROR</h3>
    </div>
</div>
@endsection
@section('b-js')
<script>
    window.JLToken = {
        get_token_for_call_url: "{{ asset($file) }}",
        get_initial_tokens: "{{ route('get-tokens-for-display') }}",
        date_for_display: "{{$date}}",
        voice_type: "{{$settings->language->display}}",
        voice_content_one: "{{$settings->language->token_translation}}",
        voice_content_two: "{{$settings->language->please_proceed_to_translation}}",
        date_for_display: "{{$date}}",
        audioEl: document.getElementById('called_sound'),
        token_reference: "{{$queue->id}}"
    }
</script>
@endsection