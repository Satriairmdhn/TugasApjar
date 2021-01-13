<!-- Modal -->
<div wire:ignore.self class="modal fade" id="setRole" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Faculty Member Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 offset-md-0">
                    </div>
                </div>
              
                <div class="table-responsive users-table">
                    <table class="table table-striped table-sm data-table">
                        <thead class="thead">
                            <tr>
                                 <th class="text-left" width="30%">Your Data</th>
                                 <th width="70%">Insert Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text"  id="exampleFormControlInput1" wire:model="first_name" class="form-control bg-light text-dark" > </td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td><input type="text"  id="exampleFormControlInput2" wire:model="nip" class="form-control bg-light text-dark" > </td>
                            </tr>
                            <tr>
                                <td>CODE</td>
                                <td><input type="text"  id="exampleFormControlInput3" wire:model="code" class="form-control bg-light text-dark" > </td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td><input type="text"  id="exampleFormControlInput4" wire:model="phone" class="form-control bg-light text-dark" > </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text"  id="exampleFormControlInput5" wire:model="email" class="form-control bg-light text-dark" > </td>
                            </tr>
                            <tr>
                                <td>Alamat </td>
                                <td><input type="text"  id="exampleFormControlInput7" wire:model="homebase" class="form-control bg-light text-dark" > </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                 <button type="submit" class= "btn btn-xs btn-success"> Save </button>
            </div>
       </div>
    </div>
</div>
