<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Resources\TodoResource;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 데이터 목록 가져오기 
    public function index()
    {
        // select * from todos; 쿼리문과 동일합니다.
        // todos 테이블에 있는 모든 데이터를 덩어리로 가져옵니다.
        $allTodos = Todo::all();

        //물론 아래와 같은 식으로 쿼리를 할 수도 있어요
        // $allTodos = Todo::select('id', 'title', 'content')->get();

        $filteredTodos = TodoResource::collection($allTodos);
        
        return $filteredTodos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 새 데이터를 만드는 화면을 반환
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 새 데이터를 추가
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 특정 데이터를 가져오기
    public function show($id)
    {
        //
        $fetchedTodo = Todo::find($id);
        $filteredTodo = new TodoResource($fetchedTodo);
        return $filteredTodo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 기존 데이터를 수정하는 화면을 반환
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 기존 데이터를 수정해서  -> 수정된 데이터를 반호나
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 기존 데이터를 삭제한다.
    public function destroy($id)
    {
        //
    }
}
