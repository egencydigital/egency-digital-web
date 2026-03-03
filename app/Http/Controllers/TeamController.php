<?php

namespace App\Http\Controllers;

use App\Models\TeamModel;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function createTeam(Request $request, $userId = null){
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required|string',
            'socialLinks' => 'nullable|array',
            'socialLinks.*' => 'nullable|url',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
        ]);
        if($request->hasFile('picture')){
            $path = $request->file('picture')->store('team', 'public');
            $validated['picture'] = $path;
        }

        if($userId){
            $team = TeamModel::findOrFail($userId);
            $team->update($validated);
            $message = 'Team member updated successfully!';
        }else{
            $team = TeamModel::create($validated);
            $message = 'Team member added successfully!';
        }

         if($request->ajax()){
            return response()->json([
                'success' => true,
                'message' => $message,
                'team' => $team
            ]);
        }

        // return redirect()->back()->with('success', $message);
        return redirect('/teams')->with('success', $message);
    }

    public function ShowMember(Request $request){
         $team = TeamModel::all();
        return view('backend.teamMembers.teams', compact('team'));
    }

    public function deleteMember(Request $request, $id){
        $team = TeamModel::findOrFail($id);
        $team->delete();

        return response()->json([
            'success' => true,
            'message' => 'Team member deleted successfully!',
        ]);
    }

    public function addMemberPage($id = null){
        $member = null;
        if($id){
            $member = TeamModel::findOrFail($id);
        }
        return view('backend.teamMember', compact('member'));
    }




}
