@extends('layouts.vertical', ['title' => 'Post List', 'sub_title' => 'Post', 'mode' => $mode ?? '', 'demo' => $demo ??
''])

@section('content')
<div class="flex flex-auto flex-col">
    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
        @foreach ($post as $item)
        <div class="card">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <h5 class="card-title">{{ $item->kategori->nama_kategori}}</h5>
                    @if($item->sub_category_id)
                    <ul class="list-unstyled">
                        <li>{{ $item->subCategory->nama_sub_kategori }}</li>
                    </ul>
                    @endif
                    <div class="bg-success text-xs text-white rounded-md py-1 px-1.5 font-medium" role="alert">
                        <span>{{ $item->status}}</span>
                    </div>

                    <div>
                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                            data-fc-placement="left-start" type="button">
                            <i class="mgc_more_1_fill text-xl"></i>
                        </button>

                        <div
                            class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                href="javascript:void(0)">
                                <i class="mgc_add_circle_line"></i> Detail
                            </a>
                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                href="{{ route('list.edit', $item->id) }}">
                                <i class="mgc_edit_line"></i> Edit
                            </a>
                            <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>
                            
                            <form action="{{ route('list.destroy', $item->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5">
                                    <i class="mgc_delete_line"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex flex-col">
                <div class="py-3 px-6">
                    <h5 class="my-2">
                        <a href="#" class="text-slate-900 dark:text-slate-200">{{$item->title}}</a>
                    </h5>
                    @php
                    $words = explode(' ', strip_tags($item->content));
                    if (count($words) > 3) {
                    $truncated = implode(' ', array_slice($words, 0, 6)) . '...';
                    } else {
                    $truncated = strip_tags($item->content);
                    }
                    @endphp
                    <p class="text-gray-500 text-sm mb-9">{!! $truncated !!}</p>
                </div>

                <div class="border-t p-5 border-gray-300 dark:border-gray-700">
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div class="flex items-center justify-between gap-8">
                            <div class="text-sm">
                                <i class="mgc_calendar_line text-lg me-2"></i>
                                <span class="align-text-bottom">
                                    {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD MMMM, YYYY') }}
                                </span>
                            </div>

                            <a href="{{ route('bytitle', $item->slug) }}" class="text-sm" target="_blank">
                                <i class="mgc_eye_line text-lg me-2"></i>
                                <span class="align-text-bottom">{{ $item->view}}</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
