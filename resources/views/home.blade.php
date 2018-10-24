@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add A Message!</div>
                                   <!-- Display Validation Errors -->

        <!-- New Message Form -->
        <form action="/message" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Message Name -->
            <div style="margin-top: 20px;"  class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Message</label>
                <div class="col-sm-6">
                  <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

                  <!-- Add Message Button -->
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Message
                      </button>
                    </div>
                  </div>
                </form>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
