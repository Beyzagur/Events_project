@extends('main')

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="table-responsive table--no-card mb-30">
                    <table class="table table-borderless table-striped table-earning">
                        @foreach($events as $event)
                            <tr>
                                <td scope="row"><img src="{{asset('/uploads/events/').'/'.$event->photo}}" alt="{{$event->name}}" width="100px" height="100px"/></td>
                                <td>{{$event->category}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->time}}</td>
                                <td>{{$event->city}}</td>
                                <td>{{$event->place}}</td>
                                <td>{{$event->price}}</td>

                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
