@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => env('SITE_URL') ])
            {{env('SITE_TITLE')}}
        @endcomponent
    @endslot
    {{ __('Hi ')}},  <br>
	{{ __('Subject: ')}}{{__($subject)}}<br>
    {{ __('Msg:  ')}}{{__($msg)}}<br>
    

    @slot('footer')  
        @component('mail::footer') 
        	{{__('Thanks')}},<br>   
        	{{env('SITE_TITLE')}}
        @endcomponent
    @endslot
@endcomponent


