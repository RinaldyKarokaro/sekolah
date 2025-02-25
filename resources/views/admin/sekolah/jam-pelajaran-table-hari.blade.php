<div class="card">
    <div class="card-header card-header-rose card-header-text">
      <div class="card-text">
        <h4 class="card-title">{{ $hari }}</h4>
      </div>
    </div>
    <div class="card-body ">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>Les</th>
              <th>Jadwal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="{{$hari}}">
            @foreach($data as $key => $obj)
                <tr>
                     <td>{{$obj->jam_ke}}</td>
                     <td>{{ substr($obj->jam_mulai, 0, 5) }} - {{ substr($obj->jam_selesai, 0, 5) }}</td>
                     <td>
                        <button data-id="{{$obj->id}}" type="button" class="btn btn-delete btn-mini btn-danger shadow-sm delete" data-toggle="modal" data-target="#confirmDeleteModal">
                            <i class="fa fa-trash"></i>
                        </button>
                     </td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>