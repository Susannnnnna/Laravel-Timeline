@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <section id="news" class="white-bg padding-top-bottom">
        <div class="container bootstrap snippets bootdey">
            <div class="col text-end">
                <a class="btn btn-outline-primary" href="{{route('generate_pdf')}}">Export PDF</a>
            </div>
            
            <div class="container">
                <div class="main-timeline">

                    <!-- start experience section-->
                    @foreach($events as $event)
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">{{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_date))->format('j M') }}</span>
                                <span class="year">{{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_date))->format('Y') }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title"><a class="read-more" href="{{ $event->link }}">{{ $event->name }}</a></h5>
                            @if(!is_null($event->event_end_date))
                                <p class="text-secondary">till {{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_end_date))->format('j F Y') }}</p>
                            @endif
                            <span class="badge bg-secondary">{{ $event->category->name }}</span>
                            <p class="description">
                                {{ $event->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <!-- end experience section-->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection