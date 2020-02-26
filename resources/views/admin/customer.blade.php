<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')

<style>

  #box1{
    width:100%;
    height:100%;
    background:white;
    border-radius: 5px;
  }
  #box2{
    width:230px;
    height:230px;
    background:#ef2626;
    border-radius: 8px;
  }

</style>
<!-- Your custom  HTML goes here -->
<body style="background-color: white;">
  <div id="box1">
    <style type="text/css">
      .container {
        border: 1px solid #000;
        width: 50%;
      }
      .margin {
        margin: 30px 30px 30px 30px;
        border: 1px solid #000;
      }
    </style>
    <h2>Tabel Customer</h2>
    <hr size="5px">
    <div>
      <div>
        <a href="{{asset('admin/add_customer')}}" class="btn btn-warning">Add Customer</a>      
      </div>
      </div>
      <br><br>        
      <table class="table" class="container" method="get">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td></td>
            <td>
              <a href="{{asset('admin/core_team_edit/'.Crypt::encrypt($row->id))}}"  class="btn btn-success btn-sm"> Edit</a>  
              <a href="{{asset('admin/core_team_delete/'.Crypt::encrypt($row->id))}}"  class="btn btn-dangerous" onclick="return confirm('Are you Sure ?') ">Hapus</a>
            </td>
          </tr>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </tbody>
      </table>
    </div>

  </body>


{{-- <!-- ADD A PAGINATION -->
  <p>{!! urldecode(str_replace("/?","?",$result->appends(Request::all())->render())) !!}</p> --}}
  @endsection