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
                    <div class="bg-success text-xs text-white rounded-md py-1 px-1.5 font-medium" role="alert">
                        <span>{{ $item->status}}</span>
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
                        <div class="flex items-center justify-between gap-2">
                            <a href="#" class="text-sm">
                                <i class="mgc_calendar_line text-lg me-2"></i>
                                <span class="align-text-bottom">
                                    {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD MMMM, YYYY') }}</span>
                            </a>

                            <a href="#" class="text-sm">
                                <i class="mgc_align_justify_line text-lg me-2"></i>
                                <span class="align-text-bottom">56</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-6">
        <button type="button" class="btn bg-transparent border-gray-300 dark:border-gray-700">
            <i class="mgc_loading_4_line me-2 animate-spin"></i>
            <span>Load More</span>
        </button>
    </div>

</div>
@endsection
