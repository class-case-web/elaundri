<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your html goes here -->
<div class='panel panel-default'>
  <div class='panel-heading'>Add Form</div>
  <div class='panel-body' class="col-md-6">
    <form method='post' action='{{CRUDBooster::mainpath('add-save')}}'>
      <div class='form-group'>
      @foreach($data as $row)
        <label>Nama Customer</label>
        <select class="form-control" id="cars">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
        @endforeach
      </div>
      <div class="form-group" class="\">
      <label>Amount</label>
      <input type="number" name="amount" class="form-control"/>
      </div>
      <div class="form-group">
      <label>Qty</label>
      <input type="number" name="qty" class="form-control"> 
      </div>
      <div class="form-group">
      <label>Start</label>
      <input type="date" name="start" class="form-control">
      </div>
      <div class="form-group">
        <label>End</label>
        <input type="date" name="end" class="form-control">
      </div>

      <!-- etc .... -->

    </form>
  </div>
  <div class='panel-footer'>
    <input type='submit' class='btn btn-primary' value='Save changes'/>
  </div>
</div>
@endsection