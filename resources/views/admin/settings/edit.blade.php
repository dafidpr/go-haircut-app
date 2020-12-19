@extends('admin.layouts.app')
@section('content')

        <h3 class="page-title">{{ $title }}</h3>
        <div class="card shadow">
            <div class="card-body">

                <form method="post" action="{{ url('administrator/settings/edit'. $setting->id) }}" id="formSubmit" class="form-horizontal" enctype="multipart/form-data">
                    @method('patch')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="groups" class="control-label">Group *</label>
                            <select class="select2 form-control" id="groups" name="groups">
                                @foreach ($groups as $item)
                                    @if ($item->groups == $setting->groups)
                                        <option value="{{ $item->groups }}" selected> {{ $item->groups }}</option>
                                        @else
                                        <option value="{{ $item->groups }}">{{ $item->groups }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="options" class="control-label">Options *</label>
                            <input class="form-control " required="required" name="options" type="text" value="{{ $setting->options }}" id="options">
                            
                            <small><i>This is key for indetify value of setting</i></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="value" class="control-label">Value *</label>
                        @if ($setting->groups == 'Image')
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="pic" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                            <small><i>Gambar saat ini {{ $setting->value }}</i></small>
                            @else
                            <input class="form-control" required="required" name="value" type="text" value="{{ $setting->value }}" id="value">
                        @endif
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary"><i class="fe fe-send"></i> Update</button>
                </form>
            </div>
        </div>

@endsection