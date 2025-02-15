@if(session('message'))
    <div  class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
            <ul>
                @foreach($errors->all() as $error)
                    <li><i class="fas fa-check-circle flex-shrink-0 text-green-700 my-1"></i> {{ session('message') }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="justify-center items-center ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300 alert-hidden">

            <i class="fas fa-xmark"></i>
        </button>
    </div>
@endif


<script>
    var alert_del = document.querySelectorAll('.alert-hidden');
    alert_del.forEach((x) =>
        x.addEventListener('click', function () {
            x.parentElement.classList.add('hidden');
        })
    );
</script>
