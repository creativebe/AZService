@extends('layouts.app')

@section('content')
<div class="main-content">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $key => $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->email }}</td>
				<td style="width: 150px;">
					<button class="btn btn-primary btn-flat edit" value="{{ $user->id }}">Edit</button>
					<button class="btn btn-danger btn-flat delete" value="{{ $user->id }}">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

<!-- Modals -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-teal">
                    <form method="POST" >
                        
                        {{ csrf_field() }}

                        <div class="box box-body">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama lengkap" value="{{ old('name') }}" required autofocus>
                                
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary flat" type="submit">Save</button>
                                <button class="btn btn-danger flat" id="resetBtn">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Modals-->

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		var url = "/manage-users";

		$('.edit').click(function(){
			var id = $(this).val();
			$.get(url + '/' + id,function (data){
				$("#name").val(data.name);
				$("#username").val(data.username);
				$("#email").val(data.email);

				$("#myModal").modal("show");
			})
			
		})
	});
</script>
@endsection