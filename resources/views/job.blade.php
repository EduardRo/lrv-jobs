<x-layout>
    <x-slot:heading>Jobs</x-slot>
<div class="inline-block bg-black bg-opacity-200 rounded-md mx-10 px-13 py-10 text-sm font-semibold text-gray-200 mr-2 mb-2">This is a particular job
{{$job[0]['id']}}

{{$job[0]['title']}}

{{$job[0]['salary']}}
<div>
</x-layout>