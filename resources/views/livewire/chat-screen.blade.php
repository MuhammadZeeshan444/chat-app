<div class="div bg-info border-dark w-auto h-auto">
    <div class="row">

        <table class="">
            <tbody>
                @if($sender_messeges != null)
                    @foreach ($sender_messeges as $sm)
                        <tr>
                            <td class="float-right"><span>{{Auth()->user()->name}}:</span> {{$sm->messege}}</td>
                        </tr>
                    @endforeach
                @else
                    <p>No conversation</p>
                @endif
                <br>
                <br>
                @if($receiver_messeges)
                    @foreach ($receiver_messeges as $rm)
                    <tr>
                        <td class="float-right"><span>{{$receiver_user->name}}:</span> {{$rm->messege}}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>

</div>
