<?php

namespace App\Http\Controllers;

use App\History;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $history = History::all();

        return view('history.index', compact('history'));
    }

    public function create()
    {

        $history = new History();
        $client = User::where('type', 'consumer')
            ->where('status', 'active')
            ->get();
        $employee = User::where('type', 'employee')
            ->where('status', 'active')
            ->get();

        return view('history.create', compact('client', 'history', 'employee'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'client_users_id' => 'required',
            'employee_users_id' => 'required',
            'comments' => 'required',
            'date' => 'required',
            'starting_time' => 'required',
            'end_time' => 'required',
            'duration' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::route('history.create')->withErrors($validator)->withInput();
        }

        $history = new History();
        $history->client_users_id = $request->client_users_id;
        $history->employee_users_id = $request->employee_users_id;
        $history->comments = $request->comments;
        $history->date = $request->date;
        $history->starting_time = $request->starting_time;
        $history->end_time = $request->end_time;
        $history->duration = $request->duration;
        $history->status = $request->status;
        $history->save();

        return Redirect::route('history.index')->with('msg', 'History Created Successfully');

    }

    public function show($id)
    {

        $history = History::find($id);
        return view('history.show', compact('history'));

    }

    public function edit($id)
    {

        $client = User::where('type', 'consumer')->get();
        $employee = User::where('type', 'employee')->get();

        $history = History::find($id);

        return view('history.edit', compact('history', 'client', 'employee'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'client_users_id' => 'required',
            'employee_users_id' => 'required',
            'comments' => 'required',
            'date' => 'required',
            'starting_time' => 'required',
            'end_time' => 'required',
            'duration' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::route('history.edit')->withErrors($validator)->withInput();
        }

        $history = History::find($id);
        $history->client_users_id = $request->client_users_id;
        $history->employee_users_id = $request->employee_users_id;
        $history->comments = $request->comments;
        $history->date = $request->date;
        $history->starting_time = $request->starting_time;
        $history->end_time = $request->end_time;
        $history->duration = $request->duration;
        $history->status = $request->status;
        $history->save();

        return Redirect::route('history.index')->with('msg', 'History Updated Successfully');

    }


    public function delete($id)
    {

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $history = History::where('id', $id)->first();

        try {
            if (count($history) > 0) {
                if ($history->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'History Deleted Successfully.';
                } else {
                    $response['message'] = 'Unable to remove History';
                }
            } else {
                $response['message'] = 'History data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);

    }


    public function filter(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if ($validator->fails()) {

            return Redirect::route('history.index')->withErrors($validator)->withInput();
        }

        $start = date("Y-m-d", strtotime($request->input('start_date')));
        $end = date("Y-m-d", strtotime($request->input('end_date')));

        $history = History::whereBetween('date', [$start, $end])->get()->sortBy('date');

        return view('history.index', compact('history'));


    }

    public function active($id, $active)
    {

        $data = $active;

        $history = History::find($id);
        $history->status = $data;
        $history->save();

        return Redirect::route('history.index')->with('msg', 'History Status Updated Successfully');
    }

    public function inactive($id, $inactive)
    {

        $data = $inactive;
        $history = History::find($id);
        $history->status = $data;
        $history->save();

        return Redirect::route('history.index')->with('msg', 'History Status Updated Successfully');
    }

}
