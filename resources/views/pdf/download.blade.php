<!-- <link href=" https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/cerulean/bootstrap.min.css " rel="stylesheet"> -->
        
<!-- Bootstrap Theme -->
<link href="./resources/css/timelinePdf.css" rel="stylesheet" text="text/css" >

@foreach($events as $event)
<div class="card border-primary mb-3" style="max-width: 100rem;">
    <div class="card-header">
        {{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_date))->format('j F Y') }}
        @if(!is_null($event->event_end_date))- {{ \Carbon\Carbon::createFromTimestamp(strtotime($event->event_end_date))->format('j F Y') }}
        @endif
    </div>
    <div class="card-body">
        <h4 class="card-title"><a class="read-more" href="{{ $event->link }}">{{ $event->name }}</a></h4>    
        <span class="badge bg-secondary">{{ $event->category->name }}</span>
        <p class="card-text">{{ $event->description }}</p>
    </div>
</div>
@endforeach