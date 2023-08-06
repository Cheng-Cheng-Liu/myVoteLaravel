<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Topic;
use App\Models\Option;

class VoteController extends Controller
{
    // 後台投票增刪修查
    function addVotepage()
    {
        $user_id = Auth::id();
        $need = ['user_id' => $user_id];
        return view('back.addVotepage', $need);
    }


    
    function store(Request $req)
    {
        $topic = new Topic;
        $imgName = $req->file('img')->getClientOriginalName();
        $topic->img = $imgName;
        $req->file('img')->storeAs('public', $imgName);


        $topic->user_id = Auth::id();;
        $topic->subject = $req->input('subject');
        $topic->start_time = $req->input('start_time');
        $topic->stop_time = $req->input('stop_time');
        $topic->q_type = $req->input('q_type');
        $topic->total = 0;
        $topic->save();
        $sub = $req->input('subject');
        $subject_id = Topic::select('id')->where('subject', $sub)->get()->toArray();
        $sub_id_number = $subject_id[0]['id'];

        $options = $req->input('opt');


        foreach ($options as $opt) {
            $option = new Option;
            $option->topic_id = $sub_id_number;
            $option->opt = $opt;

            $option->save();
        }
    }

    function editVotePage(Request $req, $id)
    {
        $aTopic = Topic::find($id);

        return view('back.editVotepage', ['id' => $id,'aTopic'=>$aTopic]);
    }
    public function editVote(Request $req)
{
    
    $topic = Topic::find($req->input('id'));
    
    
    if ($topic) {
        
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
            $imgName = $req->file('img')->getClientOriginalName();
            $topic->img = $imgName;
            $req->file('img')->storeAs('public', $imgName);
        }
        
        
        $topic->user_id = Auth::id();;
        $topic->subject = $req->input('subject');
        $topic->start_time = $req->input('start_time');
        $topic->stop_time = $req->input('stop_time');
        $topic->q_type = $req->input('q_type');

       
        $topic->save();

        echo "here";
        
    }

    
}



// 前台投票查詢與投票
    function on(Request $req)
    {
        $today = date("Y-m-d H:i:s");

        $topic = Topic::where('start_time', '<', $today)->where('stop_time', '>', $today)->get();

        return view("on", ["topics" => $topic]);
    }

    function votepage(Request $request, $id)
    {
        $user_id = Auth::id();
        return view("back.votepage", ['id' => $id]);
    }

    function vote()
    {
    }
    function listVotes(Request $req)
    {


        $topic = Topic::all();

        return view("back.listVotes", ["topics" => $topic]);
    }
}
