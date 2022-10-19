@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <h3>Chat with {{$chat_user->name}}</h3>
                    </tr>

                    <br>
                        <livewire:chat-screen />
                    <br>
                    <form action="{{route('chat.store', ['send_id' => Auth()->user()->id, 'recei_id' => $chat_user->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="" name="messege" placeholder="Type messege" required>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </table>
            </div>
        </div>
    </div>
@endsection
