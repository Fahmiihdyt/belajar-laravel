<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);

        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'member_code' => 'required|string|max:255|unique:members,member_code,' . $id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        $member->update($request->all());

        return redirect('/members')
            ->with('success', 'Data member berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        $member->delete();

        return redirect('/members')
            ->with('success', 'Data member berhasil dihapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'member_code' => 'required|string|max:255|unique:members,member_code',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        Member::create($request->all());

        return redirect('/members')
            ->with('success', 'Data member berhasil ditambahkan.');
    }
}