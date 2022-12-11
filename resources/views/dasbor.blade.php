@extends('layout.mainlyout')
@section('title', 'Dashboard')

@section('content')
<style>
.card{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 6rem;
    height: 6.3rem;
    width: 14rem;
    background-image: linear-gradient(to bottom right, #fb2929, #961a94);
}
.card1{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 6rem;
    height: 6.3rem;
    width: 14rem;
    background-image: linear-gradient(to bottom right, #b829fb, #961a94);
    border-radius: 5px;
}
.card2{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 6rem;
    height: 6.3rem;
    width: 14rem;
    background-image: linear-gradient(to bottom right, #2c29fb, #9f1ec3);
    border-radius: 5px;
}
.user{
    color: white;
    font-size: 1rem;
    margin: 0.5rem;
}
.jblh{
    color: white;
    font-size: 1rem;
    margin: 0.5rem;
}
</style>
<div class="d-lg-flex p">
    <div class="card">
        <p class="user">makan</p>
        <p class="jblh">21</p>
    </div>

    <div class="card1">
        <p class="user">siapa</p>
        <p class="jblh">2</p>
    </div>

    <div class="card2">
        <p class="user">kau</p>
        <p class="jblh">Admin</p>
    </div>
</div>


</div>
@endsection