<?php

namespace Tablegifts\Http\Controllers;

use Tablegifts\User;
use Tablegifts\Models\Event;
use Tablegifts\Models\Item;
use Tablegifts\Models\Invite;

use Tablegifts\Http\Controllers\Controller;
use Request;

class TableGiftsController extends Controller
{

  public function addEvent(Request $request){

     Event::create($request::all());

     $events = Event::all();

     return view('list_event')->with('events', $events);
  }

  public function showEvent($event_id){

      $event = Event::find($event_id);
      $invites = Invite::where('event_id',$event_id)->get();
      $items  = Item::where('event_id',$event_id)->get();
      return view('event_detail')->with('event', $event)->with('invites', $invites)->with('items', $items);
  }


  public function addInvite(Request $request, $event_id){

     $invite = new Invite();
     $invite->name = $request::input('name');
     $invite->email = $request::input('email');
     $invite->event_id = $event_id;
     $invite->save();

     $invites = Invite::where('event_id',$event_id)->get();
     $items  = Item::where('event_id',$event_id)->get();
     $event = Event::find($event_id);

     return view('event_detail')->with('event', $event)->with('invites', $invites)->with('items', $items);
  }


  public function addItem(Request $request, $event_id){

    $item = new Item();
    $item->name = $request::input('name');
    $item->amount = $request::input('amount');
    $item->event_id = $event_id;
    $item->save();

    $invites = Invite::where('event_id',$event_id)->get();
    $items  = Item::where('event_id',$event_id)->get();
    $event = Event::find($event_id);

    return view('event_detail')->with('event', $event)->with('invites', $invites)->with('items', $items);
  }


}
