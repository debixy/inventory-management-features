<ul class="list-group">
    @foreach($activities as $activity)
        <li class="list-group-item">
            {{ $activity->description }}
            <span class="text-muted">- {{ $activity->created_at->diffForHumans() }}</span>
        </li>
    @endforeach
</ul>