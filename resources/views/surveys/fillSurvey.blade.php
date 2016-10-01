@foreach($grouped as $group)
    <p>{{$group->first()->survey_id}}
    @foreach($group as $g)
        <p>{{$g->pertanyaan}}
    @endforeach
@endforeach