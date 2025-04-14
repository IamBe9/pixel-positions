@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-600">{{$job->employer->name}}</a>

        <h3 class="font-bold text-lg mt-3 group-hover:text-blue-400 transition-colors duration-1000">{{$job->title}}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach
    </div>
</x-panel>
