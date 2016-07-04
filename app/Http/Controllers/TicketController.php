<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Ticket;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Session;
use Redirect;
use Hash;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = Input::get('ticket');

        $ticket = [];
        $ticket['user_id'] = Auth::user()->id;
        $ticket['title'] = empty($params['title']) ?  '' : $params['title'];
        $ticket['yys'] = empty($params['isp_id']) ? '': $params['isp_id'];
        $ticket['system'] = empty($params['operation_system_id']) ?  '' : $params['operation_system_id'];
        $ticket['content'] = empty($params['new_content']) ? '' : $params['new_content'];
        $ticket['pid'] = 0;

        Ticket::createTicket($ticket);

        return Redirect('/admin/tickets');
    }

    public function ticketList()
    {
        $user = Auth::user();

        $list1 = Ticket::where('status','init');
        if ($user->admin != 1) $list1->where('user_id',$user->id); 
        $list1 = $list1->where('pid',0)->get();

        $list2 = Ticket::where('status','!=','init');
        if ($user->admin != 1) $list2->where('user_id',$user->id); 
        $list2 = $list2->where('pid',0)->get();

        return view('autocopy.admin.tickets',compact('list1','list2'));
    }

    public function detial($ticketId)
    {
        $user = Auth::user();

        $ticket = Ticket::find($ticketId);
        if (empty($ticket) || $ticket->pid != 0) return $this->errorPage("服务单不存在");

        if ($user->admin !=1 && $user->id != $ticket->user_id)  return $this->errorPage("服务单不存在");

        $ticketList = Ticket::Where('pid',$ticketId)->get();

        return view('autocopy.admin.tickets.66959388',compact('ticket','ticketList','user'));
    }

    public function addContent($ticketId)
    {
        $user = Auth::user();

        $ticket = Ticket::find($ticketId);
        if (empty($ticket) || $ticket->pid != 0) return $this->errorPage("服务单不存在");

        if ($user->admin !=1 && $user->id != $ticket->user_id)  return $this->errorPage("服务单不存在");

        $content = Input::get('ticket_content')['content'];    
        if (empty($content))   return $this->errorPage("请填写服务单内容");


        $iticket = [];
        $iticket['user_id'] = $user->id;
        $iticket['content'] = $content;
        $iticket['pid'] = $ticketId;
        $iticket['is_mm'] = $user->id == $ticket->user_id ? 0 : 1;


        Ticket::createTicket($iticket);
        $ticket->updateTime();

        return Redirect('/admin/tickets');
    }
}
