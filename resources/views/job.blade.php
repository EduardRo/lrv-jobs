<x-layout>
    <x-slot:heading>Jobs</x-slot>
<div class="inline-block bg-black 
    bg-opacity-200 rounded-md mx-10 
    px-13 py-10 text-sm font-semibold
    text-gray-200 mr-2 mb-2">
    This is a particular job:
    <?php print_r($myjob); ?>
    <div class="text-center">
    <span class="inline-block bg-black bg-opacity-200 rounded-md mx-10 px-3 py-5 text-sm font-bold text-gray-500 mr-2 mb-2">
    Job title:    {{$myjob['title']}}</span>
        <br />
    salary: {{$myjob['salary']}}
    </div>
<div>
</x-layout>