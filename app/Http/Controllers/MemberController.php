<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class MemberController extends Controller
{

    /*会員一覧画面表示
    *
    *
    */
    public function index(){
        $members = Member::all();
        return view('member.list', compact('members'));
    }

    /*会員登録画面表示
     * 
    */
    public function create(){
        return view('member.entry');
    }

    /*会員登録
    *
    *
    */
    public function store(Request $request){
        $members = Member::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'email' => $request->email
        ]);

        return back();
    }

    /*会員個別表示
     */
//     public function show($id)
// {
//     $members = Member::find($id);
//     //dd($member);
//     //dd($members->id);
//     return view('member.show', compact('members'));
//     //return view('member.show', compact('member', 'members'));
// }

    /*会員編集
     */
    // public function edit(Member $member)
    // {
    //     return view('member.edit', compact('member'));
    // }
    /*会員編集
     */
    public function edit($id)
    {
        $member = Member::find($id);
        //dd($members->id);
        
        return view('member.edit', compact('member'));

        //return view('member.show', compact('member', 'members'));
    }

    /*会員情報更新*/
    public function update(Request $request, $id){
        
        $member = Member::find($id);
        //dd($member);
        $member->update([
            'name' => $request->name,
            'tel' => $request->tel,
            'email' => $request->email
        ]);
        //dd($member);
        $members = Member::all(); // メンバーの一覧を再取得する

        return view('member.list', compact('members'));
        //return view('member.list');
        //return back();

    }

    /*会員情報削除
    *
    *
    */
    // public function destroy($id){
    //     $member->delete();
    //     return redirect()->route('member.index');
    // }

    // 会員情報削除
    public function destroy($id){
    $member = Member::find($id);
    $member->delete();
    return redirect()->route('member.index');
}


}