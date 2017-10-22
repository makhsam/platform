<section class="wrapper-md">
            <div class="bg-white-only  bg-auto no-border-xs">



                {{--
                {!! $layout->showFilterDashboard() !!}
--}}
                {{--
                <div class="panel-body row">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="w-xs">{{trans('dashboard::common.Manage')}}</th>
                                @foreach($fields as $key => $name)
                                    @if(is_array($name))
                                        <th>{{$name['name']}}</th>
                                    @else
                                        <th>{{$name}}</th>
                                    @endif
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $datum)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{route('dashboard.posts.type.edit',[
                                    'type' => $type->slug,
                                    'slug' => $datum->id])
                                    }}"><i class="fa fa-bars"></i></a>
                                    </td>
                                    @foreach($fields as $key => $name)
                                        <td>
                                            @if(is_array($name))
                                                {!! $name['action']($datum) !!}
                                            @else
                                                {{ $datum->getContent($key) }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8">
                                <small class="text-muted inline m-t-sm m-b-sm">{{trans('dashboard::common.show')}} {{$data->total()}}
                                    -{{$data->perPage()}} {{trans('dashboard::common.of')}} {!! $data->count() !!} {{trans('dashboard::common.elements')}}</small>
                            </div>
                            <div class="col-sm-4 text-right text-center-xs">
                                {!! $data->appends('search')->links('dashboard::partials.pagination') !!}
                            </div>
                        </div>
                    </footer>
                </div>
                --}}
            </div>
        </section>
