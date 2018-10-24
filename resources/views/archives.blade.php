@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Archives | Page {{ $pg }}</div>
                                   <!-- Display Validation Errors -->

                <div class="card-body">
                  <label for="message" class="col-sm-3 control-label">Archived Messages</label>
                  <tbody>
                    @for ($i = 10*$pg; $i < 10+10*$pg; $i++)
                      @if( ! empty($messages[count($messages)-$i-1]->message) )
                      <tr>
                        <td class="table-text">
                          <div>"{{ $messages[count($messages)-$i-1]->message }}" Posted by <a href="mailto:{{ $messages[count($messages)-$i-1]->user->email }}" title="{{ $messages[count($messages)-$i-1]->user->email }}">{{ $messages[count($messages)-$i-1]->user->name }}</a></div>
                        </td>
                        <td></td>
                      </tr>
                      @endif
                    @endfor
                  <tbody>
                    <hr />
                    @if ( count($messages) > 10*$pg+10)
                    <a href="/archive/{{ $pg+1 }}">Go even further back!</a> &middot; 
                    @endif
                    <a href="/home">Return to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
