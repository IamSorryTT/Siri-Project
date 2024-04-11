<div>
    <div class="modal fade" id="modal" wire:ignore.self>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ข้อมูลประเทศ</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <div class="form-group">
                            <label for="country_name">ชื่อประเทศ :</label>
                            <input 
                                type="text"
                                class="form-control @error('country_name') is-invalid @enderror"
                                placeholder="ชื่อประเทศ" 
                                wire:model="country_name"/>
                                @error('country_name')
                                <div id="country_name_validation" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                            <div class="form-group">
                            <label for="country_status">สถานะ</label>
                            <select
                                type="text"
                                class="form-control"
                                wire:model="country_status">
                                <option value="1">ใช้งาน</option>
                                <option value="0">ไม่ใช้งาน</option>
                            </select>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="country_desc">รายละเอียด :</label>
                            <textarea
                                class="form-control @error('country_desc') is-invalid @enderror"
                                wire:model="country_desc">
                            </textarea>
                            @error('country_desc')
                            <div id="country_desc_validation" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                    </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" wire:click="save">บันทึก</button>
            </div>
        </div>
    </div>
    </div>
</div>

