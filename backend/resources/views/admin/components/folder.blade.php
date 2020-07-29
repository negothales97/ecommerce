<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-info btn-edit-folder" data-id="{{$folder->id}}">
                    <i class="fas fa-pen"></i>
                </a>
                <a href="{{route('admin.folder.delete', ['folder' => $folder])}}" class="btn btn-danger btn-delete">
                    <i class="fas fa-trash"></i>
                </a>
            </div>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="info-box card-{{$folder->id}} folder"
            onclick="window.location.href='{{route('admin.content.show', ['folder' => $folder])}}'">
            <span class="info-box-icon bg-info"><i class="far fa-folder"></i></span>
            <div class="info-box-content">
                <span class="info-box-text" style="white-space: normal;">{{$folder->name}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <div class="row input-folder-{{$folder->id}} display-none">
            <div class="col-12">
                <div class="form-group">
                    <form action="{{route('admin.folder.update', ['folder'=> $folder])}}" method="post">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" value="{{$folder->name}}">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>