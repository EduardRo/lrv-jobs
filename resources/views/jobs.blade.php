<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <div class="dark:to-black`  bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <h2 class="dark:text-white text-center">Jobs</h2>
    <div class="px-6 py-4">
    <h3 class="text-center bg-blue-300 py-5 my-5">{{$pagetitle}}</h3>
       <?php foreach($jobs as $job): ?>
       <div class="inline-block bg-black bg-opacity-200 rounded-md  px-13 py-10 text-sm font-semibold text-gray-700 mr-2 mb-2">
       <a href="/jobs/{{$job['id']}}">  
        <h4 class="dark:text-white text-center px-4 py-4">Aplica la urmatorul job: </h4>
        <span>
            <p class ="dark:text-grey bg-transparent text-center px-4 py-4">{{$job['id']}} </p>
            <p class ="dark:text-blue-200 text-center px-4 py-4">{{$job['title']}}</p> 
        <span>
            <p class ="dark:text-blue-400 text-center px-4 py-4">{{$job['salary']}}</p>
       </div>
       </a>
       <?php endforeach; ?>
    
    </div>

    </div>
</x-layout>


