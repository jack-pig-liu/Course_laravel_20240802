
<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 

@include('components.socialButtons')

Email： <input type="text" name="email" placeholder="Email" > 
密碼： <input type="password" name="password" placeholder="密碼" > 
暱稱： <input type="text" name="nickname" placeholder="暱稱" > 

@endsection 




