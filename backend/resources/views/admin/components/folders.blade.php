<div id="box-folder-{{$folder->id}}" class="sub-folders">
    @foreach($folder->folders as $folder)

    <div class="form-group">
        <div class="checkbox">
            <label class="sub-folder">
                <input type="checkbox" name="folder" class="checkbox-folder" value="{{$folder->id}}"
                    @if(in_array($folder->id,$foldersId)) checked @endif>
                {{$folder->name}}
            </label>
        </div>
    </div>
    @if(count($folder->folders) > 0)
    @component('admin.components.folders',['folder' => $folder, 'foldersId' => $foldersId])
    @endcomponent
    @endif
    @endforeach

</div>