<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <section id="news" class="white-bg padding-top-bottom">
        <div class="container bootstrap snippets bootdey">
            
            <div class="timeline">
                @foreach($events as $event)
                    <div class="row">
                        <div class="col-sm-6 news-item">
                            <div class="news-content">
                                <div class="date">
                                    {{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_date))->format('j M Y') }}
                                </div>
                                <h2 class="news-title">{{ $event->name }}</h2>
                                <div class="news-media">
                                    @if(!is_null($event->image_path))
                                    @else
                                        <a class="colorbox cboxElement" href="#">
                                            <img class="img-responsive" src="{{ asset('storage/' . $event->image_path) }}" alt="ilustaration">
                                        </a>
                                    @endif
                                </div>
                                <p>{{ $event->description }}</p>
                                <a class="read-more" href="{{ $event->link }}">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 news-item right">
                            <div class="news-content">
                                <div class="date">
                                    {{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_date))->format('j M Y') }}
                                </div>
                                <h2 class="news-title">{{ $event->name }}</h2>
                                <div class="news-media gallery">
                                    @if(!is_null($event->image_path))
                                    @else
                                    <a class="colorbox cboxElement" href="#">
                                        <img class="img-responsive" src="{{ asset('storage/' . $event->image_path) }}" alt="ilustaration_right">
                                    </a>
                                    <a class="colorbox cboxElement" href="#"></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>