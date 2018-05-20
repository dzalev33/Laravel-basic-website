@extends('layouts.app')

    @section('content')
            <h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur, atque dolore doloremque eos impedit inventore ipsa iure iusto maxime, nihil, nisi nostrum odit optio provident quisquam rem. Consequatur, unde?</p>

    @endsection

@section('sidebar')
    @parent
<p>This is appended to the sidebar</p>

    @endsection