<div>
    @include('livewire.apjar.user.admin.modal.faculty-edit-modal')
    <div class="row">
        <div class="col-md-3 offset-md-0">
            <input wire:model="search" type="text" class="form-control my-1" placeholder="Search name here"> 
        </div>
    </div>
    <div class="table-responsive users-table">
        <table class="table table-striped table-sm data-table">
            <thead class="thead">
                <tr>

                    <th width="5%">No</th>
                    <th width="20%">Username</th>
                    <th width="35%">Identity</th>
                    <th width="20%">NIP</th>

                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody id="users-table">
                @php($counter = 0)
               @forelse ($users as $user)
                    @if($user->faculty != null)
                        <tr>
                            <td> {{++$counter}} </td>
                            <td>{{$user->name}}</td>

                            <td>
                                 {{$user->faculty->front_title}}{{$user->faculty->first_name}} {{$user->faculty->last_name}} {{$user->faculty->rear_title}}
                            </td>

                            <td>
                                 {{$user->faculty->nip}}
                            </td>
                           

                            <td class="text-right">
                                <button wire:click="update({{$user->faculty->id}}, {{$user->id}})" data-toggle="modal" data-target="#setRole" class="btn btn-xs btn-success"><i class="fa fa-user fa-user-plus" style ="color:black" aria-hidden="true"></i> Update Data</button>
                                <button wire:click="delete({{$user->faculty->id}}, {{$user->id}})" class="btn btn-xs btn-danger"><i class="fa fa-user fa-user-minus" style ="color:black" aria-hidden="true"></i> Delete</button>
                            </td>
                        </tr>
                    @endif
               @empty
                    No Data
               @endforelse
            </tbody>
        </table>
        <div class="text-right">
                <button wire:click="create()" class="btn btn-xs btn-primary"><i class="fa fa-user fa-user-plus" style ="color:black" aria-hidden="true"></i> Create A New Faculty Data</button>
        </div>
    </div>
    {{$users->links()}}
</div>