<div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title">รายการสินค้า</h3>
                    </div>
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
<thead>
<tr>
    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ContainerID: activate to sort column descending">Container ID.</th>
    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Detail: activate to sort column ascending">รายละเอียด</th>
    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">สถานะ</th>
    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="AddDate: activate to sort column ascending">วันที่เพิ่ม</th>
    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
</tr>
</thead>
<tbody>
    @foreach ($products as $item)
    @foreach ($orders as $order)
<tr class="odd">
<td class="dtr-control sorting_1" tabindex="0">{{$order->container_no}}</td>
<td>{{$item->prod_name}}</td>
<td>{{$item->prod_status}}</td>
<td>{{$item->created_at}}</td>
<td>A</td>
</tr>
</tbody>
</table></div></div><div class="row">
</div>
@endforeach
@endforeach
</div>
        </div>
    </div>
</div>