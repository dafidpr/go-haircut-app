@extends('admin.layouts.app')
@section('content')

        <h3 class="page-title">{{ $title }}</h3>
        <div class="card shadow">
            <div class="card-body">

                <ul class="nav nav-tabs nav-justified" id="settingTab" role="tablist">
                    @foreach($groups as $group)
                        <li class="nav-item">
                            <a class="nav-link {{ $group->groups == 'General' ? 'active' : '' }}" id="{{ strtolower($group->groups) }}-tab" data-toggle="tab" href="#{{ strtolower($group->groups) }}" role="tab" aria-controls="{{ strtolower($group->groups) }}" aria-selected="true">{{ $group->groups }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="settingTabContent">
                    @foreach($groups as $group)
                        <div class="tab-pane {{ $group->groups == 'General' ? 'active' : '' }}" id="{{ strtolower($group->groups) }}" role="tabpanel" aria-labelledby="{{ strtolower($group->groups) }}-tab">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped mg-b-0">
                                    <thead>
                                        <tr>
                                            <th>Options</th>
                                            <th>Value</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(getSettingGroup($group->groups) as $option)
                                    
                                            <tr>
                                                <th width="200">{{ $option->options }}</th>
                                                <td>{{ $option->value }}</td>
                                                <td width="120" class="text-center">
                                                   <a href="{{ url('administrator/settings').'/'.$option->id.'/edit' }}" class="btn btn-primary"><i class="fe fe-edit"></i> Edit</a>
                                                </td>
                                            </tr>
                                          
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

@endsection