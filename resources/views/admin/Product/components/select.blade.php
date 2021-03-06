
<div class="">
    <div class="select_body d-flex justify-content-between align-items-center">
        <select name= {{ $name }} id="select{{ $name }}" class="form-control {{ $class }}" multiple>
            @foreach ($collection as $key=>$item)
                <option {{ $key==0 ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <button class="btn btn-info" data-toggle="modal" data-target="#{{ $name }}Modal"  type="button" title="Add new {{ $name }}">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <span class="text-danger {{ $name }}"></span>
</div> 
    
<div class="modal fade" id="{{ $name }}Modal"  tabindex="-1" aria-labelledby="{{ $name }}ModalLebel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="{{ $name }}ModalLebel">{{ str_replace('_',' ',str_replace('_id','',$name)) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <forms action="{{ $action }}" data-target_select ="#select{{ $name }}" class="component_form" method="POST" enctype="multipart/form-data">
                <div class="component_preloader"></div>
                <div class="modal-body">
                    @csrf
                    @foreach ($fields as $item)
                        @php
                            $item = (object) $item
                        @endphp
                        <div class="form-group">
                        <label for="">{{ $item->name }}</label>
                        <div class="">
                            @if ($item->type == 'text' || $item->type == 'file' || $item->type == 'email')
                                <input type="{{ $item->type }}" name="{{ $item->name }}" class="form-control" id="input-21" placeholder="{{ $item->name }}" />
                            @endif
                            @if ($item->type == 'textarea')
                                <textarea name="{{ $item->name }}" class="form-control"  cols="30" rows="5" placeholder="{{ $item->name }}"></textarea>
                            @endif
                            @if ($item->type == 'select')
                                <div class="d-flex select_ontime justify-content-between align-items-center">
                                    <select name="{{ $item->name }}"
                                        data-this_field_will_control="{{ isset($item->this_field_will_control) ? $item->this_field_will_control : ''}}"
                                        data-this_field_control_route="{{ isset($item->this_field_control_route) ? $item->this_field_control_route : '' }}"
                                        class="form-control {{ isset($item->class) ? $item->class : '' }}">
                                        <option value="">{{ $item->option_route ? 'press reload btn' : ''}} </option>
                                    </select>
                                    @if ($item->option_route)
                                        <button type="button" class="btn btn-info load_options" data-url="{{ $item->option_route }}"><i class="fa fa-recycle"></i></button>
                                    @endif
                                </div>
                            @endif
                            <span class="text-danger {{ $item->name }}" style="font-size: 15px;"></span>
                        </div>
                    </div>
                    @endforeach 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="component_form_submit btn btn-primary" >Submit</button>
                </div>
            </forms>
        </div> 
    </div>
</div>