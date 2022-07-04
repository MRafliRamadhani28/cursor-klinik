@extends('layouts.app', ['page' => __('User Management'), 'pageSlug' => 'users'])

@section('content')
<div class="d-flex">
    <div class="container">
      <div class="card card-tasks">
        <div class="card-header">
          <div class="row">
            <div class="col-8">
              <h4 class="card-title">Data users</h4>
            </div>
            <div class="col-4 text-right">
              <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Add User</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                  <th>Privilage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $index => $user)
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-black">
                          <form action="" class="d-flex flex-column w-100 align-items-center" >
                            {{-- <a href="#" class="dropdown-item">{{ __('Edit') }}</a>
                            <a href="{{ route('user.destroy', '$user->id') }}" class="dropdown-item">{{ __('Delete') }}</a> --}}
                            <div class="btn btn-sm btn-primary text-center w-50">Edit</div>
                            <div class="btn btn-sm btn-primary text-center w-50">Delete</div>
                          </form>
                        </div>
                      </div>
                    </td>
                    <td>
                      <button class="btn btn-sm btn-sm-primary" type="button" onclick="showBar(event)">Privilage</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
    <div class="container hide-priv bar">
      <div class="card card-tasks">
        <div class="card-header ">
          <h6 class="title d-inline">Tasks(5)</h6>
          <p class="card-category d-inline">today</p>
          <div class="dropdown">
              <a href="#" class="tim-icons icon-check-2 ceklis" onclick="hideBar(event)"></a>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                @foreach ($fiturs as $index => $fitur)
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" id="checkBox{{ $index+1 }}" @checked(true)>
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">{{ $fitur->name }}</p>
                  </td>
                    @foreach ($fitur_dtl as $dtl)
                    <td>
                      <div class="form-check w-100 mt-4">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" id="checkBox{{ $index+1 }}" @checked(true)>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                        <p class="title-">{{ $dtl->name }}</p>
                      </div>
                    </td>
                    @endforeach
                  {{-- <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                        <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td> --}}
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection
@push('js')
    <script>   
      function hideBar(e){
        e.preventDefault();
        var sidebar=document.querySelector(".bar");
        sidebar.classList.remove("show-priv");
        sidebar.classList.add("hide-priv");

        
      }
      function showBar(e){
        e.preventDefault();
        var sidebar=document.querySelector(".bar");
        sidebar.classList.remove("hide-priv");
        sidebar.classList.add("show-priv");
      }

      for (let i = 0; i < $fitur.length; i++) {
        const element = $fitur[i];
        
      }
        var $checkBox1 = document.getElementById('checkBox1');
        var $checkBox2 = document.getElementById('checkBox2');
        var $checkBox3 = document.getElementById('checkBox3');
        var $checkBox4 = document.getElementById('checkBox4');
        var $checkBox5 = document.getElementById('checkBox5');
        var $checkBox6 = document.getElementById('checkBox6');
        
        var $dashboard      = document.getElementById('dashboard');
        var $icons          = document.getElementById('icons');
        var $maps           = document.getElementById('maps');
        var $notifications  = document.getElementById('notifications');
        var $tables         = document.getElementById('tables');
        var $typos          = document.getElementById('typos');
        
        $checkBox1.addEventListener('click', checked)
        $checkBox2.addEventListener('click', checked)
        $checkBox3.addEventListener('click', checked)
        $checkBox4.addEventListener('click', checked)
        $checkBox5.addEventListener('click', checked)
        $checkBox6.addEventListener('click', checked)

        function checked() {
        if ($checkBox1.checked == true) {
          $dashboard.style.display = 'block';
        } else {
          $dashboard.style.display = 'none';
        }

        if ($checkBox2.checked == true) {
          $icons.style.display = 'block';
        } else {
          $icons.style.display = 'none';
        }

        if ($checkBox3.checked == true) {
          $maps.style.display = 'block';
        } else {
          $maps.style.display = 'none';
        }

        if ($checkBox4.checked == true) {
          $notifications.style.display = 'block';
        } else {
          $notifications.style.display = 'none';
        }

        if ($checkBox5.checked == true) {
          $tables.style.display = 'block';
        } else {
          $tables.style.display = 'none';
        }

        if ($checkBox6.checked == true) {
          $typos.style.display = 'block';
        } else {
          $typos.style.display = 'none';
        }
      }
    </script>
@endpush