@extends('layouts.main')

@section('content')

    <table id="datatable-responsive"  class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Email</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody> 
      </tbody>
    </table>
    <br/><br/>
    <div class="form-group">
      <div class="col-sm-offset-4 col-md-offset-4  col-lg-offset-4  col-sm-8 col-md-8 col-lg-8">
        <a href="/pdf" class="btn btn-lg pull-right btn-primary">Download Comments</a> 
      </div>
    </div>
@stop