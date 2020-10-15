<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function createEvent(Request $request)
    {
        $filePhotoUrl=$request->file('photo');
        $category=$request->get('category');
        $name=$request->get('name');
        $date= $request->get('date');
        $time=$request->get('time');
        $city=$request->get('city');
        $place=$request->get('place');
        $price=$request->get('price');
        $user=User::find(1);

        if(isset($filePhotoUrl)){
            $eventPhotoName=uniqid('event_').$filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('event_photos'),$eventPhotoName);
        }

        Event::create([
            'photo'=>$eventPhotoName,
            'category' => $category,
            'name' => $name,
            'date' => $date,
            'time' => $time,
            'city' => $city,
            'place' => $place,
            'price' => $price,
            'is_approve'=>false,
            'created_by'=>$user->id,
            'updated_by'=>$user->id,
        ]);

        return back();
    }

    public function createEventView()
    {
        return view('events.create');
    }

    public function indexViewEvent()
    {
       $events = DB::table('events')
            ->join('users','events.created_by','=','users.id')
            ->select('events.*','users.name as userName','users.surname as userSurname') //burdan hem kullanıcı adını hem de ürün adını almayı yapınız
            ->get();

        return view('events.index', compact('events'));
    }

    public function updateEvent(Request $request,$id){

        Event::where('id',$id)->update([
            'category'=>$request->get('category'),
            'name'=>$request->get('name'),
            'date'=>$request->get('date'),
            'time'=>$request->get('time'),
            'city'=>$request->get('city'),
            'place'=>$request->get('place'),
            'price'=>$request->get('price'),
            'updated_at'=>Carbon::now()
        ]);

        return 'Başarıyla güncellendi';

    }

    public function updateViewEvent($id)
    {
        $event=Event::where('id',$id)->get();
        $event=$event->first();

        return view('events.update',compact('event'));
    }

    public function deleteEvent($id)
    {
        // DB::table('users')->where('id','=',$id)->delete(); // Hard delete ile veriyi kalıcı siler. TAVSİYE EDİLMEZ!
        DB::table('events')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now()
        ]);
        return 'Başarıyla Silindi';
    }

    public function indexFestival(){

        $events = DB::table('events')->where('category','=','Festival')->get();

        return view('show_events', compact('events'));
    }

    public function indexKonferans(){

        $events = DB::table('events')->where('category','=','Konferans')->get();

        return view('show_events', compact('events'));
    }

    public function indexKonser(){

        $events = DB::table('events')->where('category','=','Konser')->get();

        return view('show_events', compact('events'));
    }

    public function indexMüze(){

        $events = DB::table('events')->where('category','=','Müze')->get();

        return view('show_events', compact('events'));
    }

    public function indexSahne(){

        $events = DB::table('events')->where('category','=','Sahne')->get();

        return view('show_events', compact('events'));
    }

    public function indexSergi(){

        $events = DB::table('events')->where('category','=','Sergi')->get();

        return view('show_events', compact('events'));
    }

    public function indexWebinar(){

        $events = DB::table('events')->where('category','=','Webinar')->get();

        return view('show_events', compact('events'));
    }

    public function indexEvent(){

        $events = Event::all();

        return view('show_events', compact('events'));
    }


}
