
<div class="mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
<div class="card-header">
<h3 class="card-title">รายชื่อประเทศ</h3>
    <div class="card-tools">
        <div class="input-group-append">
            @livewire('country.country-form')
            <button 
                type="button" 
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#modal"
                wire:click="$dispatch('btnCreateCountry')">
                <i class="fas fa-plus"></i> เพิ่มข้อมูล
            </button>
        </div>
    </div>
</div>
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dt-buttons btn-group flex-wrap">              
            </div>
        </div>
        <div class="col-sm-12 col-md-6"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="country_name: activate to sort column ascending">ประเทศ</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="country_desc: activate to sort column ascending">รายละเอียด</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="country_status: activate to sort column ascending">สถานะ</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                    </thead>
                <tbody>
                    @foreach ($countries as $item)
                    <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0">{{$item->id}}</td>
                        <td>{{$item->country_name}}</td>
                        <td>{{$item->country_desc}}</td>
                        <td class="text-center">
                            @if ($item->country_status)
                                <span class="badge badge-success">ใช้งาน</span>
                            @else 
                                <span class="badge badge-danger">ไม่ใช้งาน</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" 
                            class="btn btn-sm btn-warning"
                            data-toggle="modal"
                            data-target="#modal"
                            wire:click="$dispatch('editCountry',{id:{{ $item->id }}})">
                            <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
            </div>
        </div>
    
    </div>
</div>
</div>
</div>

        </div>
    </div>
</div>