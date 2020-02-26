<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    <div class='panel-heading'>Add Type Laundry</div>
    <div class='panel-body'>
      <form method='post' action='{{asset('admin/save_type_laundry')}}' enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class='form-group'>
          <label>Nama</label>
          <input type='text' name='label1' class='form-control'/>
        </div>
        <div class='form-group'>
          <label>Harga</label>
          <input type="number" name="harga" class="form-control">
        </div>
         
        <!-- etc .... -->
        
      </form>
    </div>
    <div class='panel-footer'>
      <input type='submit' class='btn btn-primary' value='Save changes'/>
    </div>
  </div>
@endsection